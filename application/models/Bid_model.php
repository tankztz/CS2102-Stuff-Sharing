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

    public function get_my_failedbid($id = FALSE)
    {

      $sql =   "SELECT ns.*, s.points AS successful_bidding_points
                FROM (SELECT b.bidder, b.points, p.* FROM bid b
                 INNER JOIN post p ON (b.post = p.post_id)
              LEFT JOIN loan l ON (b.bidder = l.bidder AND b.post = l.post)
                  WHERE loan_id IS NULL) AS ns
                INNER JOIN (SELECT b.bidder,b.points, b.post FROM bid b
                      INNER JOIN loan l ON (b.bidder = l.bidder AND b.post = l.post)) AS s
                     ON ns.post_id = s.post
                 WHERE ns.bidder = ".$id ; 

        $query = $this->db->query($sql);
        return $query->result_array();

    }


    public function get_my_currentbid($id = FALSE)
    {

        $query = $this->db->get_where('bid', array('bid_id' => $id));
        return $query->row_array();
    }

    public function get_bidunderpost($post_id = FALSE)
    {
        if ($post_id === FALSE)
        {
            return NULL;
        }


        $sql = "SELECT b.* , u.username FROM bid b, users u WHERE b.bidder = u.user_id AND b.post =".$post_id;
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_maxbid($post_id = FALSE)
    {
        if ($post_id === FALSE)
        {
            return NULL;
        }


        $sql = "SELECT MAX(b.points) AS max FROM bid b WHERE b.post =".$post_id;
        $query = $this->db->query($sql);
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
