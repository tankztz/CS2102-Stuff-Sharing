<?php
class bid extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('logged_in')) {
            $this->session->set_flashdata('flash_danger', 'Please login to view this page');
            redirect('users/create');
        }
        else{
            $this->load->model('bid_model');
            $this->load->helper('url_helper');
        }
    }

    public function index()
    {
        $data['bid'] = $this->bid_model->get_bid();
        $data['title'] = 'ITEM';
    
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_header', $data);
        $this->load->view('bid/index', $data);
        $this->load->view('templates/sidebar_footer');
        $this->load->view('templates/footer');
    }

    public function view($id = NULL)
    {
        $data['bid_bid'] = $this->bid_model->get_bid($id);
    
        if (empty($data['bid_bid']))
        {
            show_404();
        }
    
        $data['title'] = $data['bid_bid']['bid_id'];
    
        $this->load->view('templates/header', $data);
        $this->load->view('bid/view', $data);
        $this->load->view('templates/footer');
    }

    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Register a bid';

        $this->form_validation->set_rules('user_id', 'user_id', 'required');
        $this->form_validation->set_rules('post_id', 'post_id', 'required');


        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('bid/create');
            $this->load->view('templates/footer');

        }
        else
        {
            $this->bid_model->set_bid();
            $data['title'] = 'SUCCESS';
            $this->load->view('bid/create', $data);
        }
    }
}