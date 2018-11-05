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
