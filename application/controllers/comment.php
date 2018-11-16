<?php
class comment extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('logged_in')) {
            $this->session->set_flashdata('flash_danger', 'Please login to view this page');
            redirect('users/create');
        }
        else{
            $this->load->model('comment_model');
            $this->load->model('users_model');
            $this->load->helper('url_helper');
        }
    }

    public function index()
    {
        $data['comment'] = $this->comment_model->get_comment();
        $data['title'] = 'ALL COMMENTS';
    
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_header', $data);
        $this->load->view('comment/index', $data);
        $this->load->view('templates/sidebar_footer');
        $this->load->view('templates/footer');
    }

    public function view($id = NULL)
    {
        $data['comment_comment'] = $this->comment_model->get_comment($id);
    
        if (empty($data['comment_comment']))
        {
            show_404();
        }
    
        $data['title'] = $data['comment_comment']['comment_id'];
    
        $this->load->view('templates/header', $data);
        $this->load->view('comment/view', $data);
        $this->load->view('templates/footer');
    }

    
    public function create($loan_id)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Register a comment';
        $data['id'] = $loan_id;

        $this->form_validation->set_rules('rating', 'rating', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('comment/create');
            $this->load->view('templates/footer');

        }
        else
        {
            $this->comment_model->set_comment($loan_id);
            redirect('users/current/comment');
        }
    }

    public function delete($id = NULL)
    {
        $this->comment_model->delete_comment($id);
        redirect('users/current/comment');
    }
}