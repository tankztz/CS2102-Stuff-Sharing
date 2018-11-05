<?php
class Bid_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_bid($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('bid');
            return $query->result_array();
        }

        $query = $this->db->get_where('bid', array('bid_id' => $id));
        return $query->row_array();
    }
    
    public function set_bid($id = NULL)
    {
        $this->load->helper('url');

        $create_time = NULL;

        $data = array(

        'bidder' => $user_id = $this->session->userdata('user_id'),
        'post' => $id,
        'points' => $this->input->post('points'),
        'create_time' => $create_time,
        );

        return $this->db->insert('bid', $data);
    }
}
