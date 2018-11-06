<?php
class loan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('logged_in')) {
            $this->session->set_flashdata('flash_danger', 'Please login to view this page');
            redirect('users/create');
        }
        else{
            $this->load->model('loan_model');
            $this->load->helper('url_helper');
        }
    }

    public function index()
    {
        $data['loan'] = $this->loan_model->get_loan();
        $data['title'] = 'ALL LOANS';
    
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_header', $data);
        $this->load->view('loan/index', $data);
        $this->load->view('templates/sidebar_footer');
        $this->load->view('templates/footer');
    }

    public function view($id = NULL)
    {
        $data['loan_loan'] = $this->loan_model->get_loan($id);
    
        if (empty($data['loan_loan']))
        {
            show_404();
        }
    
        $data['title'] = $data['loan_loan']['loan_id'];
    
        $this->load->view('templates/header', $data);
        $this->load->view('loan/view', $data);
        $this->load->view('templates/footer');
    }

    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Register a loan';

        $this->form_validation->set_rules('bid', 'bid', 'required');
        $this->form_validation->set_rules('post', 'post', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('loan/create');
            $this->load->view('templates/footer');

        }
        else
        {
            $this->loan_model->set_loan();
            $data['title'] = 'SUCCESS';
            $this->load->view('loan/create', $data);
        }
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
}