<?php
class item extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('logged_in')) {
            $this->session->set_flashdata('flash_danger', 'Please login to view this page');
            redirect('management/login');
        }
        else{
            $this->load->model('item_model');
            $this->load->helper('url_helper');
        }
    }

    public function index()
    {
        $data['item'] = $this->item_model->get_item();
        $data['title'] = 'ITEM';
    
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_header', $data);
        $this->load->view('item/index', $data);
        $this->load->view('templates/sidebar_footer');
        $this->load->view('templates/footer');
    }

    public function view($id = NULL)
    {
        $data['item_item'] = $this->item_model->get_item($id);
    
        if (empty($data['item_item']))
        {
            show_404();
        }
    
        $data['title'] = $data['item_item']['name'];
    
        $this->load->view('templates/header', $data);
        $this->load->view('item/view', $data);
        $this->load->view('templates/footer');
    }

    public function view_mine($user_id)
    {
        if (empty($data['item_item']))
        {
            redirect('users/login');
        }

        $data['item_item'] = $this->item_model->get_my_item($user_id);
        
        if (empty($data['item_item']))
        {
            //TODO: general message page
        }

        $data['title'] = $data['item_item']['name'];
    
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_header', $data);
        $this->load->view('item/view', $data);
        $this->load->view('templates/sidebar_footer_users');
        $this->load->view('templates/footer');
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Register a item';

        $this->form_validation->set_rules('itemname', 'itemname', 'required');
        $this->form_validation->set_rules('category', 'category', 'required');


        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('item/create');
            $this->load->view('templates/footer');

        }
        else
        {
            $this->item_model->set_item();
            $data['title'] = 'SUCCESS';
            $this->load->view('item/create', $data);
        }
    }
}