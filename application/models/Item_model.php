<?php
class Item_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_item($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('item');
            return $query->result_array();
        }

        $query = $this->db->get_where('item', array('item_id' => $id));
        return $query->row_array();
    }
    
    public function get_my_item($user_id = FALSE)
    {
        if ($user_id === FALSE)
        {
            return NULL;
        }

        $query = $this->db->get_where('item', array('owner' => $user_id));
        return $query->result_array();
    }
    
    public function set_item()
    {
        $this->load->helper('url');

        $status = 1;
        $photo = NULL;

        $data = array(

        'name' => $this->input->post('itemname'),
        'owner' => $this->session->userdata('user_id'),
        'category' => $this->input->post('category'),
        'description' => $this->input->post('description'),
        'photo' => $photo,
        );

        return $this->db->insert('item', $data);
    }

        
    public function delete_item($id = FALSE)
    {
        if ($id === FALSE)
        {
            return NULL;
        }
        
        $sql = "DELETE FROM item WHERE item_id=".$id.";";
        $query = $this->db->query($sql);

        return $query; // boolean
    }
}