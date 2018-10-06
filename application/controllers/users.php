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

    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Register a users item';

        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('mobile', 'mobile', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('users/create');
            $this->load->view('templates/footer');

        }
        else
        {   
            $user = $this->users_model->set_users();
            if ($user) {
                $this->session->set_flashdata('flash_success', 'Your account has been created. You are now signed in.');
                $this->session->set_userdata([
                    'username' => $user->username,
                    'logged_in' => true,
            ]);
        }

            redirect('post/index');
        }
    }

    public function login()
    {   
        $data['title'] = 'Log In';

        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('users/login');
            $this->load->view('templates/footer');

        }

        else{
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user_id = $this->users_model->login_user($username, $password);
        if (!$user_id) {
            $this->session->set_flashdata('flash_danger', 'Invalid username or password');
            return redirect('users/login');
        }
        $this->session->set_userdata([
            'username' => $username,
            'logged_in' => true,
        ]);
        $this->session->set_flashdata('flash_success', 'You are now logged in');
        redirect('post/index');
    }
    }
}