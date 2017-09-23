<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class peternity extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	
		$this->load->model('peternity_model','Students');
	}
	
	public function index(){	
		$header_data['title'] = "Peternity";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu');
		$this->load->view('peternity/home');
		$this->load->view('include/footer');
		
	}	

	public function signup()
	{
		$header_data['title'] = "SIGN-UP";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu-signup');
		$this->load->view('peternity/sign-up');
		$this->load->view('include/footer');
		
	}
	public function petforadoption()
	{
		$header_data['title'] = "PETS FOR ADOPTION";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu-petcatalogue');
		$this->load->view('peternity/petforadoption');
		$this->load->view('include/footer');
		
	}
	public function rescuepet(){
		$header_data['title'] = "Rescued Pets";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu-petcatalogue');
		$this->load->view('peternity/rescuedpets');
		$this->load->view('include/footer');
		
	}
	
	
}
