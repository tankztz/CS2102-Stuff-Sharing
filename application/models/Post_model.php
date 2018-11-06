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

        $sql = "SELECT p.* FROM post p, item i WHERE p.item = i.item_id AND  i.owner = ".$user_id." AND p.availability = TRUE";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_poster($post_id = FALSE)
    {
        if ($post_id === FALSE)
        {
            return NULL;
        }

        $sql = "SELECT u.* FROM post p, item i, users u WHERE p.post_id = ".$post_id." AND p.item = i.item_id AND i.owner = u.user_id";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function toggle_availability($post_id = FALSE)
    {

        $this->db->where(['post_id' => $post_id]);
        $post = $this->db->get('post')->row(0);
        $availability = !($post->availability);
        $data = array(
        'availability' => $availability
        );
        $this->db->where(['post_id' => $post_id]);
        $this->db->update('post', $data);
    }
    
    public function set_post()
    {
        $this->load->helper('url');

        $delivery = FALSE;
        $start_time = NULL;
        $end_time = NULL;
        $availability = TRUE;
        
        $data = array(
        'title' => $this->input->post('title'),
        'item' => $this->input->post('item'),
        'description' => $this->input->post('description'),
        'delivery' => $delivery,
        'start_time' => $start_time,
        'end_time' => $end_time,
        'availability' => $availability,
        );

        return $this->db->insert('post', $data);
    }
}