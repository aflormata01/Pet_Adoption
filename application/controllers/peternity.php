<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class peternity extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	
		$this->load->model('peternity_model','Peter');
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
		$rules = array(
                    array('field'=>'fname', 'label'=>'First Name', 'rules'=>'required'),
                    array('field'=>'lname', 'label'=>'Last Name', 'rules'=>'required'),
                    array('field'=>'email', 'label'=>'Email', 'rules'=>'required'),
					array('field'=>'username', 'label'=>'Username', 'rules'=>'required'),
					array('field'=>'password', 'label'=>'Password', 'rules'=>'required'),
					array('field'=>'sex', 'label'=>'Sex', 'rules'=>'required'),
					array('field'=>'birthdate', 'label'=>'Birthday', 'rules'=>'required')
                );
        $this->form_validation->set_rules($rules);
		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
		if($this->form_validation->run()==FALSE){
			$header_data['title'] = "SIGN-UP";
			$this->load->view('include/header',$header_data);
			$this->load->view('include/menu-signup');
			$this->load->view('peternity/sign-up');
			$this->load->view('include/footer');
		}
		else{
			$signupform=array('fname'=>$_POST['fname'],'lname'=>$_POST['lname'],'username'=>$_POST['username'],'password'=>$_POST['password'],'sex'=>$_POST['sex'],'birthdate'=>$_POST['birthdate']);
            $this->Peter->create_form($signupform);
            redirect('peternity/loghome');
		}
	}
	public function petforadoption(){
		$result_array = $this->Peter->read_petrescued();
        $data['petadopt'] = $result_array;
		
		$header_data['title'] = "PETS FOR ADOPTION";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu-petcatalogue');
		$this->load->view('peternity/petforadoption');
		$this->load->view('include/footer');
		
	}
	public function rescuepet(){
		$result_array = $this->Peter->read_petrescued();
        $data['petrescue'] = $result_array;
		
		$header_data['title'] = "RESCUED PETS";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu-petcatalogue');
		$this->load->view('peternity/rescuedpets',$data);
		$this->load->view('include/footer');
		
	}
	
	public function news(){
		$result_array = $this->Peter->read_news();
        $data['news'] = $result_array;
		
		$header_data['title'] = "NEWS";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu-petcatalogue');
		$this->load->view('peternity/news',$data);
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
		if($this->session->userdata('logged_in')){
            $session_data=$this->session->userdata('logged_in');
            $data['username']=$session_data['username'];
            if($session_data['isAflormata01']>0){
				$header_data['title'] = "USER HOME";
				$this->load->view('include/header',$header_data);
				$this->load->view('include/menu-login');
				$this->load->view('peternity/login-home');
				$this->load->view('include/footer');
			}
		}
		
	}
	public function profile(){
		$header_data['title'] = "USER HOME";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu-login');
		$this->load->view('peternity/userprofile');
		$this->load->view('include/footer');
		
	}
	public function faqs(){
		$header_data['title'] = "USER HOME";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu-faqs');
		$this->load->view('peternity/faqs');
		$this->load->view('include/footer');
		
	}
	
	public function addDiscussion(){
		
		$this->load->view('peternity/adddiscussion');
		
	}
	public function userdiscussion(){
		$header_data['title'] = "DISCUSSIONS";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu-login');
		$this->load->view('peternity/userdiscussion');
		$this->load->view('include/footer');
		
	}
}

