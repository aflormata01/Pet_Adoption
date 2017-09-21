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

	
	
	
	
}
