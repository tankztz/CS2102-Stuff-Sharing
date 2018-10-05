<?php
class Comment_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_comment($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('comment');
            return $query->result_array();
        }

        $query = $this->db->get_where('comment', array('comment_id' => $id));
        return $query->row_array();
    }
    
    public function set_comment()
    {
        $this->load->helper('url');



        $data = array(

        'loan' => $this->input->post('loan'),
        'user_name' => $this->input->post('user_name'),
        'rating' => $this->input->post('rating'),
        'content' => $this->input->post('content'),

        );

        return $this->db->insert('comment', $data);
    }
}