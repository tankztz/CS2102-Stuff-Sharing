<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{
    
    function __construct(){
        parent::__construct();
    }

    public function index(){
        // Load our view to be displayed
        // to the user
        $this->load->view('Login/log_in');
    }

    public function create(){
    	//$data[title] = 'Create user' ;

    	$this->form_validation->set_rules('account','Account','required');
    	$this->form_validation->set_rules('password','Password','required');
    	$this->form_validation->set_rules('email','Email','required');
    	$this->form_validation->set_rules('number','Number','required');

    	if($this->form_validation->run()=== FALSE){
    		$this->load->view('Login/log_in');
    		$this->load->view('templates/footer');
    	}
    	else{
    		$this->load->view('pages');
    	}
    }
}
?> 