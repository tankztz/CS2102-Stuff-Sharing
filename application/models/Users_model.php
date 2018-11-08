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
            $sql = "SELECT u.*, AVG(rating) as avg_rating 
                FROM users u
                LEFT JOIN item i ON u.user_id  = i.owner
                LEFT JOIN post p ON i.item_id = p.item
                LEFT JOIN loan l ON p.post_id = l.post
                LEFT JOIN comment c ON l.loan_id = c.loan
                GROUP BY u.user_id, u.username, u.mobile, u.email, u.password, u.admin, u.points, u.address
                ORDER BY CASE WHEN AVG(rating) IS NULL THEN 0 ELSE 1 END DESC, avg_rating DESC;
                ";
            $query = $this->db->query($sql);
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

    public function get_username($id)
    {
        if (!$id) {
            return false;
        }
        $this->db->where(['user_id' => $id]);
        $user = $this->db->get('users')->row(0);
        return $user->username;
    }

    public function check_admin($id)
    {
        if (!$id) {
            return false;
        }
        $this->db->where(['user_id' => $id]);
        $user = $this->db->get('users')->row(0);
        return $user->admin;
    }

    public function is_logged_in($id)
    {
        return ($id == $this->session->userdata('user_id'));
    }

    public function get_my_related($user_id, $datatype)
    {
        if (!$this->is_logged_in($user_id)) 
        {
            redirect('management/login');
        }

        switch ($datatype) {
            case "post":
                $sql = "SELECT p.* FROM post p, item i WHERE p.item = i.item_id AND  i.owner = ".$user_id." AND p.availability = TRUE";
                $query = $this->db->query($sql);
                break;
            case "bid":
                $sql = "SELECT b.*  FROM bid b, post p WHERE b.post = p.post_id AND p.availability = TRUE AND b.bidder = ".$user_id;
                $query = $this->db->query($sql);
                break;
            case "item":
                $query = $this->db->get_where($datatype, array('owner' => $user_id));
                break;
            case "comment":

                $sql = "SELECT c.*,p.*,u.user_id,u.username FROM comment c,loan l,post p ,users u WHERE u.user_id = c.user_name  AND c.loan = l.loan_id AND l.post = p.post_id AND c.user_name = ".$user_id;
                $query = $this->db->query($sql);

                //$query = $this->db->get_where($datatype, array('user_name' => $user_id));
                break;
            case "loan":
                $query = $this->db->get_where($datatype, array('bidder' => $user_id));
                break;
            case "failed":
                $sql =  "SELECT ns.*, s.points AS successful_bidding_points
                        FROM (SELECT b.bidder, b.points, p.* FROM bid b
                        INNER JOIN post p ON (b.post = p.post_id)
                        LEFT JOIN loan l ON (b.bidder = l.bidder AND b.post = l.post)
                        WHERE loan_id IS NULL) AS ns
                        INNER JOIN (SELECT b.bidder,b.points, b.post FROM bid b
                        INNER JOIN loan l ON (b.bidder = l.bidder AND b.post = l.post)) AS s
                        ON ns.post_id = s.post
                        WHERE ns.bidder = ".$user_id ; 

                $query = $this->db->query($sql);
                break;

            default:
                show_404();
        }
        return $query->result_array();
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