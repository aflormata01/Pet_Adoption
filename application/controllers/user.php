<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	public function __construct(){
		parent::__construct();
	
		$user =  $this->session->userdata('username');
		if( empty($user) )
			redirect('login','refresh');
		
		$this->load->model('peternity_model','Peter');
	}
	
	public function index(){	
		$user =  $this->session->userdata('username');
		$header_data['title'] = "Peternity";
		$this->load->view('include/header',$header_data);
		$data['user'] = $user;
		$this->load->view('include/menu_user',$data);
		$this->load->view('login-home');
		$this->load->view('include/footer');	
	}
	public function petcatalogue(){
		$header_data['title'] = "PET CATALOGUE";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu_user');
		$this->load->view('peternity_user/catalogue');
		$this->load->view('include/footer');
		
	}	
	public function rescuepet(){
		$result_array = $this->Peter->read_petrescued();
        $data['petrescue'] = $result_array;
		
		$header_data['title'] = "RESCUED PETS";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu_user');
		$this->load->view('peternity_user/rescuedpets',$data);
		$this->load->view('include/footer');
		
	}
	public function petforadoption(){
		$result_array = $this->Peter->read_petrescued();
        $data['petadopt'] = $result_array;
		
		$header_data['title'] = "PETS FOR ADOPTION";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu_user');
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
		$result_array = $this->Peter->read_stories();
        $data['user_stories'] = $result_array;
		
		$header_data['title'] = "STORIES";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu_user');
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
		$result_array = $this->Peter->read_discussion();
        $data['user_discussion'] = $result_array;
		
		$header_data['title'] = "DISCUSSIONS";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu_user');
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
		$result_array = $this->Peter->read_news();
        $data['news'] = $result_array;
		
		$header_data['title'] = "NEWS";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu_user');
		$this->load->view('peternity_user/news',$data);
		$this->load->view('include/footer');
		
	}
	public function upcomingevents(){
		$result_array = $this->Peter->read_events();
        $data['events'] = $result_array;
		
		$header_data['title'] = "UPCOMING EVENTS";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu_user');
		$this->load->view('peternity_user/events',$data);
		$this->load->view('include/footer');		
	}
	public function faqs(){
		$result_array = $this->Peter->read_faqs();
        $data['faqs'] = $result_array;
		
		$header_data['title'] = "USER HOME";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu_user');
		$this->load->view('peternity_user/faqs',$data);
		$this->load->view('include/footer');
		
	}
	public function profile($user){
		$result_array = $this->Peter->read_ownerinfo(array('username',$user));
			$data['profile'] = $result_array;
			$header_data['title'] = "USER HOME";
			$this->load->view('include/header',$header_data);
			$data['user'] = $user;
			$this->load->view('include/menu_user',$data);
			$this->load->view('peternity_user/userprofile',$data);
			$this->load->view('include/footer');
		
	}
	
	public function setting($user){
		$result_array = $this->Peter->read_ownerinfo(array('username',$user));
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
			$data['user'] = $user;
			$this->load->view('include/menu_user',$data);
			$this->load->view('peternity_user/settings');
			$this->load->view('include/footer');
		}

		else{
			$settings=array('fname'=>$_POST['fname'],'lname'=>$_POST['lname'],'username'=>$_POST['username'],'password'=>$_POST['password'],'sex'=>$_POST['sex'],'birthdate'=>$_POST['birthdate']);
            $this->Peter->create_ownerinfo($settings);
            redirect('user');
		}

	}
}