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
		$header_data['title'] = "RESCUED PETS";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu-petcatalogue');
		$this->load->view('peternity/rescuedpets');
		$this->load->view('include/footer');
		
	}
	
	public function news(){
		$header_data['title'] = "NEWS";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu-petcatalogue');
		$this->load->view('peternity/news');
		$this->load->view('include/footer');
		
	}
	
	public function stories(){
		$header_data['title'] = "SUCCESS STORIES";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu-community');
		$this->load->view('peternity/stories');
		$this->load->view('include/footer');
		
	}
	
	public function discussion(){
		$header_data['title'] = "DISCUSSIONS";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu-community');
		$this->load->view('peternity/discussion');
		$this->load->view('include/footer');
		
	}
	
	public function adopt(){
		$header_data['title'] = "ADOPTION FORM";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu-petcatalogue');
		$this->load->view('peternity/adoptionform');
		$this->load->view('include/footer');
		
	}
	public function loghome(){
		$header_data['title'] = "USER HOME";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu-login');
		$this->load->view('peternity/login-home');
		$this->load->view('include/footer');
		
	}
	public function profile(){
		$header_data['title'] = "USER HOME";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu-login');
		$this->load->view('peternity/userprofile');
		$this->load->view('include/footer');
		
	}
}

