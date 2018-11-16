<?php
class Comment_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_comment()
    {

        $sql = "SELECT p.*,u.username,u.user_id ,c.* FROM comment c,users u,loan l,post p WHERE p.post_id = l.post AND l.loan_id =c.loan AND c.user_name = u.user_id";
        $query = $this->db->query($sql);

        return $query->result_array();
    }
    
    public function set_comment($loan_id)
    {
        $this->load->helper('url');

        $data = array(

        'loan' => $loan_id,
        'user_name' => $this->session->userdata('user_id'),
        'rating' => $this->input->post('rating'),
        'content' => $this->input->post('content'),

        );

        return $this->db->insert('comment', $data);
    }

    public function delete_comment($id = FALSE)
    {
        if ($id === FALSE)
        {
            return NULL;
        }
        
        $sql = "DELETE FROM comment WHERE comment_id=".$id.";";
        $query = $this->db->query($sql);

        return $query; // boolean
    }
}