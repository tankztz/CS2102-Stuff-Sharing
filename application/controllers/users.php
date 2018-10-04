<?php
class users extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
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
        $this->load->view('users/view', $data);
        $this->load->view('templates/footer');
    }
}