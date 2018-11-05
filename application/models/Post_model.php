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

    public function get_my_post($user_id = FALSE)
    {
        if ($user_id === FALSE)
        {
            return NULL;
        }

        $sql = "SELECT p.* FROM post p, item i WHERE p.item = i.item_id AND  i.owner = ".$user_id." AND p.status = TRUE";
        $query = $this->db->query($sql);
        return $query->result_array();
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
        'delivery' => $delivery,
        'start_time' => $start_time,
        'end_time' => $end_time,
        'status' => $status,
        );

        return $this->db->insert('post', $data);
    }
}