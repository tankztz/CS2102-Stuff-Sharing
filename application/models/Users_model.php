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
}