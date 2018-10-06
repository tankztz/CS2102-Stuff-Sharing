<?php
class Post_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_post($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('post');
            return $query->result_array();
        }

        $query = $this->db->get_where('post', array('post_id' => $id));
        return $query->row_array();
    }
    
    public function set_post()
    {
        $this->load->helper('url');

        $delivery = FALSE;
        $start_time = NULL;
        $end_time = NULL;
        $biding_period = NULL;
        $status = TRUE;
        
        $data = array(
        'title' => $this->input->post('title'),
        'item' => $this->input->post('item'),
        'description' => $this->input->post('description'),
        'minimum_bid' => $this->input->post('minimum_bid'),
        'delivery' => $delivery,
        'start_time' => $start_time,
        'end_time' => $end_time,
        'biding_period' => $biding_period,
        'status' => $status,
        );

        return $this->db->insert('post', $data);
    }
}