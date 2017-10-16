<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	public function __construct(){
		parent::__construct();
	
		$user =  $this->session->userdata('username');
		if( empty($user) )
			redirect('login','refresh');
		
		$this->load->model('peternity_model','Peter');
		$data['user'] = $user;
		$this->load->view('include/menu_user',$data);
	}
	
	public function index(){	
		$user =  $this->session->userdata('username');
		$header_data['title'] = "Peternity";
		$this->load->view('include/header',$header_data);
		$this->load->view('login-home');
		$this->load->view('include/footer');	
	}
	public function petcatalogue(){
		$user =  $this->session->userdata('username');
		$header_data['title'] = "PET CATALOGUE";
		$this->load->view('include/header',$header_data);
		$this->load->view('peternity_user/catalogue');
		$this->load->view('include/footer');
		
	}	
	public function rescuepet(){
		$user =  $this->session->userdata('username');
		$result_array = $this->Peter->read_petrescued();
        $data['petrescue'] = $result_array;
		
		$header_data['title'] = "RESCUED PETS";
		$this->load->view('include/header',$header_data);
		$this->load->view('peternity_user/rescuedpets',$data);
		$this->load->view('include/footer');
		
	}
	public function petforadoption(){
		$user =  $this->session->userdata('username');
		$result_array = $this->Peter->read_petrescued();
        $data['petadopt'] = $result_array;
		
		$header_data['title'] = "PETS FOR ADOPTION";
		$this->load->view('include/header',$header_data);
		$this->load->view('peternity_user/petforadoption');
		$this->load->view('include/footer');
		
	}
	public function adopt(){
		$rules = array(
                    array('field'=>'username', 'label'=>'Owner Name', 'rules'=>'required'),
                    array('field'=>'contactno', 'label'=>'Contact No.', 'rules'=>'required'),
                    array('field'=>'address', 'label'=>'Address', 'rules'=>'required'),
                );
        $this->form_validation->set_rules($rules);
		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
		if($this->form_validation->run()==FALSE){
			$header_data['title'] = "ADOPTION FORM";
			$this->load->view('peternity_user/adoptionform');
		}
		else{
			$adoption=array('username'=>$_POST['username'],'contactno'=>$_POST['contactno'],'address'=>$_POST['address']);
            $this->Peter->create_adopt($adoption);
            redirect('peternity_user/petcatalogue');
		}
	}
	public function userstories(){
		$user =  $this->session->userdata('username');
		$result_array = $this->Peter->read_stories();
        $data['user_stories'] = $result_array;
		
		$header_data['title'] = "STORIES";
		$this->load->view('include/header',$header_data);
		$this->load->view('peternity_user/userstories',$data);
		$this->load->view('include/footer');
	}
	public function addstories(){
		$rules = array(
                    array('field'=>'title', 'label'=>'Title', 'rules'=>'required'),
                    array('field'=>'body', 'label'=>'body', 'rules'=>'required')
				);
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
		if($this->form_validation->run()==FALSE){
			$this->load->view('peternity_user/addstories');
		}else{
			$addstory=array('title'=>$_POST['title'],'body'=>$_POST['body']);
            $this->Peter->create_stories($addstory);
            redirect('peternity_user/userstories');
		}
	}
	public function userdiscussion(){
		$user =  $this->session->userdata('username');
		$result_array = $this->Peter->read_discussion();
        $data['user_discussion'] = $result_array;
		
		$header_data['title'] = "DISCUSSIONS";
		$this->load->view('include/header',$header_data);
		$this->load->view('peternity_user/userdiscussion',$data);
		$this->load->view('include/footer');
		
	}
	public function addDiscussion(){
		$rules = array(
                    array('field'=>'title', 'label'=>'Title', 'rules'=>'required'),
                    array('field'=>'body', 'label'=>'body', 'rules'=>'required')
				);
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
		if($this->form_validation->run()==FALSE){
			$this->load->view('peternity_user/adddiscussion');
		}else{
			$addDiscuss=array('title'=>$_POST['title'],'body'=>$_POST['body']);
            $this->Peter->create_discussion($addDiscuss);
            redirect('user/userDiscussion');
		}
	}
	public function news(){
		$user =  $this->session->userdata('username');
		$result_array = $this->Peter->read_news();
        $data['news'] = $result_array;
		
		$header_data['title'] = "NEWS";
		$this->load->view('include/header',$header_data);
		$this->load->view('peternity_user/news',$data);
		$this->load->view('include/footer');
		
	}
	public function upcomingevents(){
		$user =  $this->session->userdata('username');
		$result_array = $this->Peter->read_events();
        $data['events'] = $result_array;
		
		$header_data['title'] = "UPCOMING EVENTS";
		$this->load->view('include/header',$header_data);
		$this->load->view('peternity_user/events',$data);
		$this->load->view('include/footer');		
	}
	public function faqs(){
		$user =  $this->session->userdata('username');
		$result_array = $this->Peter->read_faqs();
        $data['faqs'] = $result_array;
		
		$header_data['title'] = "USER HOME";
		$this->load->view('include/header',$header_data);
		$this->load->view('peternity_user/faqs',$data);
		$this->load->view('include/footer');
		
	}
	public function profile($user){
			$user =  $this->session->userdata('username');
			$condition = array('username' => $user);
			$result_array = $this->Peter->read_ownerinfo($condition);
			$data['profile'] = $result_array;
			$header_data['title'] = "USER HOME";
			$this->load->view('include/header',$header_data);
			$this->load->view('peternity_user/userprofile',$data);
			$this->load->view('include/footer');
		
	}
	
	public function setting($user){
		$user =  $this->session->userdata('username');
		$condition = array('username' => $user);
		$result_array = $this->Peter->read_ownerinfo($condition);
        foreach($result_array as $o){
			$info = array(
				'fname' => $o['fname'],
				'lname' => $o['lname'],
				'email' => $o['email'],
				'username' => $o['username'],
				'password' => $o['password'],
				'sex' => $o['sex'],
				'birthdate' => $o['birthdate']
				);
        }
		$data['d']=$info;
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

			$header_data['title'] = "ACCOUNT SETTINGS";
			$this->load->view('include/header',$header_data);		
			$this->load->view('peternity_user/settings',$data);
			$this->load->view('include/footer');
		}

		else{
			$settings=array('fname'=>$_POST['fname'],'lname'=>$_POST['lname'],'email'=>$_POST['email'],'username'=>$_POST['username'],'password'=>$_POST['password'],'sex'=>$_POST['sex'],'birthdate'=>$_POST['birthdate']);
            $this->Peter->update_ownerinfo($settings);
            redirect('user');
		}

	}
	
	public function changepass(){
		$header_data['title'] = "CHANGE PASSWORD";
			$this->load->view('include/header',$header_data);		
			$this->load->view('peternity_user/changepass');
			$this->load->view('include/footer');
		
        }
}