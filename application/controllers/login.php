<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
	
	}
	
	public function index()
	{	
		$data = array();
		if( $_SERVER['REQUEST_METHOD']=='POST' )
		{
			//do some form validation
			$validate = array(
							array('field'=>'username','label'=>'Username','rules'=>'trim|required'),
							array('field'=>'password','label'=>'Password','rules'=>'trim|required'),
						);
			$this->form_validation->set_rules($validate);
			if ($this->form_validation->run()===FALSE){
				echo validation_errors();
			}else{
				// echo "Ok set the session";
				//check in the user table and match username and password
				$this->session->set_userdata('username', $_POST['username']);
				redirect('User');
			}
		}
		$header_data['title'] = "Peternity";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu');
		$this->load->view('home');
		$this->load->view('include/footer');
	}
	
}
