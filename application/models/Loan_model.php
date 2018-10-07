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
    
    public function set_loan()
    {
        $this->load->helper('url');

        $status = 1;
        $start_time = '2018-10-6';
        $end_time = '2018-10-30';

        $data = array(

        'post' => $this->input->post('post'),
        'bid' => $this->input->post('bid'),
        'status' => $status,
        'start_time' => $start_time,
        'end_time' => $end_time,
        );

        return $this->db->insert('loan', $data);
    }
}
