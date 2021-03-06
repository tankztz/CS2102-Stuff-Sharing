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
            $this->load->model('users_model');
            $this->load->model('bid_model');
            $this->load->model('loan_model');
            $this->load->model('post_model');
            $this->load->helper('url_helper');
        }
    }

    public function index()
    {
        $data['bid'] = $this->bid_model->get_bid();
        $data['title'] = 'ALL BIDS';
    
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_header', $data);
        $this->load->view('bid/index', $data);
        $this->load->view('templates/sidebar_footer');
        $this->load->view('templates/footer');
    }

    public function view($id = NULL)
    {
        $data['bid'] = $this->bid_model->get_bid($id);
    
        if (empty($data['bid']))
        {
            show_404();
        }
    
        $data['title'] = $data['bid_bid']['bid_id'];
    
        $this->load->view('templates/header', $data);
        $this->load->view('bid/view', $data);
        $this->load->view('templates/footer');
    }

    
    public function create($id = NULL)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Bidding';
        $data['id'] = $id;
        $this->form_validation->set_rules('points', 'points', 'callback_points_check');


        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('bid/create');
            $this->load->view('templates/footer');

        }
        else
        {
            $this->bid_model->set_bid($id);
            $this->users_model->update_points();
            $data['title'] = 'SUCCESS';
            $this->load->view('templates/header', $data);
            $this->load->view('bid/successful');
            $this->load->view('templates/footer');
        }
    }

    public function points_check($points)
    {       
            $current_point = $this->users_model->get_points();
            if($current_point == NULL)
            {
                return FALSE;
            }
            else if ($points == NULL){
                    $this->form_validation->set_message('points_check', 'Please enter your bid point!');
                    return FALSE;
            }
            else if ($points > $current_point)
            {
                    $this->form_validation->set_message('points_check', 'The bidding point entered must be less or equal than the points you have');
                    return FALSE;
            }
            else
            {
                    return TRUE;
            }
    }

    public function view_bidunderpost($id = NULL)
    {       
            $data['bid'] = $this->bid_model->get_bidunderpost($id);
            $data['title'] = 'bid available';
    
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_header', $data);
            $this->load->view('bid/index', $data);
            $this->load->view('templates/sidebar_footer');
            $this->load->view('templates/footer');
    }

    public function confirm_bidder($post_id = NULL , $user_id = NULL)
    {       
            $this->users_model->return_points($post_id,$user_id);
            $this->loan_model->set_loan($post_id,$user_id);
            $this->post_model->toggle_availability($post_id);

            $data['title'] = 'A new loan has been created!';
    
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_header', $data);
            $this->load->view('bid/button');
            $this->load->view('templates/sidebar_footer_users');
            $this->load->view('templates/footer');
    }

    public function myfailedbid()
    {
        //TODO: handle datatype, display different kind of items on current user page
        
        $user_id = $this->session->userdata('user_id');
        
        $data['myfailedbid'] = $this->bid_model->get_my_failedbid($user_id);
        
        if (empty($data['myfailedbid']))
        {
            //TODO: general message page
        }

        $data['title'] = "Bid failed";
    
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_header', $data);
        $this->load->view('bid/myfailedbid', $data);
        $this->load->view('templates/sidebar_footer_users');
        $this->load->view('templates/footer');
    }

    public function mycurrentbid()
    {
        //TODO: handle datatype, display different kind of items on current user page
        
        $user_id = $this->session->userdata('user_id');
        
        $data['mycurrentbid'] = $this->bid_model->get_my_currentbid($user_id);
        
        if (empty($data['mycurrentbid']))
        {
            //TODO: general message page
        }

        $data['title'] = "Bid failed";
    
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_header', $data);
        $this->load->view('bid/mycurrentbid', $data);
        $this->load->view('templates/sidebar_footer_users');
        $this->load->view('templates/footer');
    }


    }
