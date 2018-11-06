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
        $this->load->model('loan_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['users'] = $this->users_model->get_users();
        $data['title'] = 'ALL USER';
    
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

    public function myposts()
    {
        //TODO: handle datatype, display different kind of items on current user page
        
        $user_id = $this->session->userdata('user_id');
        
        $data['mypost'] = $this->post_model->get_my_post($user_id);
        
        if (empty($data['mypost']))
        {
            //TODO: general message page
        }

        $data['title'] = "My post";
    
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_header', $data);
        $this->load->view('post/button');
        $this->load->view('post/myindex', $data);
        $this->load->view('templates/sidebar_footer_users');
        $this->load->view('templates/footer');
    }

    public function mydata($datatype = NULL)
    {
        $user_id = $this->session->userdata('user_id');
        
        $data[$datatype] = $this->users_model->get_my_related($user_id, $datatype);
        
        if (empty($data[$datatype]))
        {
            //TODO: general message page
        }

        $data['title'] = "My ".$datatype;
    
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_header', $data);
        if ($datatype == "item")
        {
            $this->load->view('item/button');
            $this->load->view('item/index', $data);
        }
        else if ($datatype == "bid")
        {
            //$this->load->view('bid/button');
            $this->load->view('bid/index', $data);
        }
        else if ($datatype == "post")
        {
            $this->load->view('post/button');
            $this->load->view('post/index', $data);
        }
        else if ($datatype == "loan")
        {
            //$this->load->view('loan/button');
            $this->load->view('loan/index', $data);
        }
        else if ($datatype == "comment")
        {
            //$this->load->view('loan/button');
            $this->load->view('comment/index', $data);
        }
        else
        {
            show_404();
        }
        $this->load->view('templates/sidebar_footer_users');
        $this->load->view('templates/footer');
    }


    public function myloan()
    {
        //TODO: handle datatype, display different kind of items on current user page
        $user_id = $this->session->userdata('user_id');
        
        $data['myloan'] = $this->loan_model->get_my_loan($user_id);
        
        if (empty($data['myloan']))
        {
            //TODO: general message page
        }

        $data['title'] = "My loan";
    
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_header', $data);
        $this->load->view('loan/myindex', $data);
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