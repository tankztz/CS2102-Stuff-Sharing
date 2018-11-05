<?php
class Users_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_users($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('users');
            return $query->result_array();
        }

        $query = $this->db->get_where('users', array('user_id' => $id));
        return $query->row_array();
    }
    
    public function set_users()
    {
        $this->load->helper('url');

        $admin = FALSE;
        $points = 10;

        $data = array(
        'username' => $this->input->post('username'),
        'mobile' => $this->input->post('mobile'),
        'email' => $this->input->post('email'),
        'password' => $this->input->post('password'),
        'admin' => $admin,
        'points' => $points,
        'address' => $this->input->post('address'),
        );

        $this->db->insert('users', $data);
        $this->db->where(['username' => $this->input->post('username')]);
        $user = $this->db->get('users')->row(0);
        return $user->user_id;
    }

    public function login_user($username, $password)
    {
        if (!$username && $password) {
            return false;
        }
        $this->db->where(['username' => $username]);
        $user = $this->db->get('users')->row(0);
        if (!$user) {
            return false;
        }
        
        $db_password = $user->password;
        if ($password == $db_password) {
            return $user->user_id;
        }
        return false;
    }

    public function get_id($username)
    {
        if (!$username) {
            return false;
        }
        $this->db->where(['username' => $username]);
        $user = $this->db->get('users')->row(0);
        return $user->user_id;
    }

    public function is_logged_in($id)
    {
        return ($id == $this->session->userdata('user_id'));
    }

    public function get_current_user_data($datatype)
    {
        if (!$datatype) {
            return false;
        }
        $this->db->where(['username' => $username]);
        $user = $this->db->get('users')->row(0);
        return $user->user_id;
    }

    public function get_points()
    {

        $this->db->where(['user_id' => $this->session->userdata('user_id')]);
        $user = $this->db->get('users')->row(0);
        return $user->points;

    }

    public function get_points_from_id($user_id)
    {

        $this->db->where(['user_id' => $user_id]);
        $user = $this->db->get('users')->row(0);
        return $user->points;

    }

    public function update_points()
    {

        $points_deducted = $this->input->post('points');
        $points = $this->get_points() - $points_deducted;
        $data = array(
        'points' => $points
        );

        $this->db->where(['user_id' => $this->session->userdata('user_id')]);
        $this->db->update('users', $data);

    }

    public function return_points($post_id, $user_id)
    {
        $sql = "SELECT * FROM bid b WHERE b.post = ".$post_id. "AND  b.bidder != ".$user_id;
        $query = $this->db->query($sql);
        
        foreach($query->result_array() as $bid){
            $points = $this->get_points_from_id($bid['bidder']) + $bid['points'];
            $data = array(
            'points' => $points
            );
            $this->db->where(['user_id' => $bid['bidder']]);
            $this->db->update('users', $data);

        }


    }
}