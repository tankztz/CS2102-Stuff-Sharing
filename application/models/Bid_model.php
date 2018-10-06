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
    
    public function set_bid()
    {
        $this->load->helper('url');

        $status = 1;
        $create_time = NULL;

        $data = array(

        'bidder' => $this->input->post('user_id'),
        'post' => $this->input->post('post_id'),
        'points' => $this->input->post('points'),
        'status' => $status,
        'create_time' => $create_time,
        );

        return $this->db->insert('bid', $data);
    }
}
