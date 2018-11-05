<?php
class Loan_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_loan($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('loan');
            return $query->result_array();
        }

        $query = $this->db->get_where('loan', array('loan_id' => $id));
        return $query->row_array();
    }
    
    public function get_my_loan($user_id = FALSE)
    {
        if ($user_id === FALSE)
        {
            return NULL;
        }

        $sql = "SELECT p.* FROM loan l,post p WHERE l.bidder = ".$user_id."AND l.post = p.post_id";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function set_loan($post_id = NULL , $user_id = NULL)
    {
        $this->load->helper('url');
        $end_time = '2018-10-30';

        $data = array(

        'post' => $post_id,
        'bidder' => $user_id,
        'end_time' => $end_time,
        );

        return $this->db->insert('loan', $data);
    }
}
