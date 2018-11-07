<?php
class management extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        $this->load->model('users_model');
        $this->load->helper('url_helper');
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
            $this->load->view('management/create');
            $this->load->view('templates/footer');

        }
        else
        {   
            $user_id = $this->users_model->set_users();
            if ($user_id != FALSE) {
                $this->session->set_flashdata('flash_success', 'Your account has been created. You are now signed in.');
                $this->session->set_userdata([
                    'username' => $user->username,
                    'user_id' => $user_id,
                    'logged_in' => TRUE,
                    'admin' => FALSE
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
            $this->load->view('management/login');
            $this->load->view('templates/footer');

        }
        else 
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $user_id = $this->users_model->login_user($username, $password);
            if (!$user_id) {
                $this->session->set_flashdata('flash_danger', 'Invalid username or password');
                return redirect('management/login');
            }

            $this->session->set_userdata([
                'username' => $username,
                'user_id' => $user_id,
                'logged_in' => TRUE,
                'admin' => $this->users_model->check_admin($user_id)
            ]);

            $this->session->set_flashdata('flash_success', 'You are now logged in');
            redirect('post/index');
        }
    }
        public function logout()
    {   
        $session_items = array('username', 'user_id', 'logged_in');
        $this->session->unset_userdata($session_items);
        redirect('management/login');
    }
    }