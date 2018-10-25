<?php
class users extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('logged_in')) {
            $this->session->set_flashdata('flash_danger', 'Please login to view this page');
            redirect('management/login');
        }


        $this->load->model('users_model');
        $this->load->model('item_model');
        $this->load->model('post_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['users'] = $this->users_model->get_users();
        $data['title'] = 'USER';
    
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_header', $data);
        $this->load->view('users/index', $data);
        $this->load->view('templates/sidebar_footer');
        $this->load->view('templates/footer');
    }

    public function view($id = NULL)
    {
        $data['users_item'] = $this->users_model->get_users($id);
    
        if (empty($data['users_item']))
        {
            show_404();
        }
    
        $data['title'] = $data['users_item']['username'];
    
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_header', $data);
        $this->load->view('users/view', $data);
        $this->load->view('templates/sidebar_footer_users');
        $this->load->view('templates/footer');
    }

    public function allposts()
    {
        //TODO: handle datatype, display different kind of items on current user page
        
        
        $data['post'] = $this->post_model->get_post();

        $data['title'] = 'All posts';
    
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_header', $data);
        $this->load->view('post/button');
        $this->load->view('post/index', $data);
        $this->load->view('templates/sidebar_footer_users');
        $this->load->view('templates/footer');
    }

    public function mydata($datatype = NULL)
    {
        //TODO: handle datatype, display different kind of items on current user page
        
        $user_id = $this->session->userdata('user_id');
        
        $data['item_item'] = $this->item_model->get_my_item($user_id);
        
        if (empty($data['item_item']))
        {
            //TODO: general message page
        }

        $data['title'] = "My item";
    
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_header', $data);
        $this->load->view('item/button');
        $this->load->view('item/view', $data);
        $this->load->view('templates/sidebar_footer_users');
        $this->load->view('templates/footer');
    }

    
    public function current()
    {   
        $username = $this->session->userdata('username');
        $user_id = $this->users_model->get_id($username);
        $this->view($user_id);
    }


    
}