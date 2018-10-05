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
        $create_time = NULL;
        $points = 10;

        $data = array(
        'user_id' => $this->input->post('user_id'),
        'username' => $this->input->post('username'),
        'mobile' => $this->input->post('mobile'),
        'email' => $this->input->post('email'),
        'password' => $this->input->post('password'),
        'admin' => $admin,
        'create_time' => $create_time,
        'points' => $points,
        'address' => $this->input->post('address'),
        );

        return $this->db->insert('users', $data);
    }
}