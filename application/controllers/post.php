<?php
class post extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('logged_in')) {
            $this->session->set_flashdata('flash_danger', 'Please login to view this page');
            redirect('users/create');
        }
        else{
            $this->load->model('post_model');
            $this->load->helper('url_helper');
        }
    }

    public function index()
    {
        $data['post'] = $this->post_model->get_post();
        $data['title'] = 'ITEM';
    
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_header', $data);
        $this->load->view('post/index', $data);
        $this->load->view('templates/sidebar_footer');
        $this->load->view('templates/footer');
    }

    public function view($id = NULL)
    {
        $data['post_post'] = $this->post_model->get_post($id);
    
        if (empty($data['post_post']))
        {
            show_404();
        }
    
        $data['title'] = $data['post_post']['title'];
    
        $this->load->view('templates/header', $data);
        $this->load->view('post/view', $data);
        $this->load->view('templates/footer');
    }

    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Register a post';

        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('item', 'item', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('post/create');
            $this->load->view('templates/footer');

        }
        else
        {
            $this->post_model->set_post();
            $data['title'] = 'SUCCESS';
            $this->load->view('post/create', $data);
        }
    }
}