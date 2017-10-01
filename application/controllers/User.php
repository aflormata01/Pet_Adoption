<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$user =  $this->session->userdata('username');
		
		if( empty($user) )
			redirect('Login','refresh');
		
		$this->load->model('peternity_model','Peter');
	}
	
	public function index(){
		$header_data['title'] = "USER HOME";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu_user');
		$this->load->view('login-home');
		$this->load->view('include/footer');
	}
	public function userpetcatalogue(){
		$header_data['title'] = "PET CATALOGUE";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu_user');
		$this->load->view('peternity_user/usercatalogue');
		$this->load->view('include/footer');
	}
	
	public function userpetforadoption(){
		$result_array = $this->Peter->read_petrescued();
        $data['petadopt'] = $result_array;
		
		$header_data['title'] = "PETS FOR ADOPTION";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu_user');
		$this->load->view('peternity_user/userpetforadoption');
		$this->load->view('include/footer');
		
	}
	public function userrescuepet(){
		$result_array = $this->Peter->read_petrescued();
        $data['petrescue'] = $result_array;
		
		$header_data['title'] = "RESCUED PETS";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu_user');
		$this->load->view('peternity_user/rescuedpets',$data);
		$this->load->view('include/footer');
		
	}
	public function adopt(){
		$rules = array(
                    array('field'=>'username', 'label'=>'Owner Name', 'rules'=>'required'),
                    array('field'=>'contactno', 'label'=>'Contact No.', 'rules'=>'required'),
                    array('field'=>'address', 'label'=>'Address', 'rules'=>'required'),
					array('field'=>'pet_height', 'label'=>'Pet Height', 'rules'=>'required'),
					array('field'=>'pet_weight', 'label'=>'Pet Weight', 'rules'=>'required')
                );
        $this->form_validation->set_rules($rules);
		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
		if($this->form_validation->run()==FALSE){
			$header_data['title'] = "ADOPTION FORM";
			$this->load->view('include/header',$header_data);
			$this->load->view('include/menu_user');
			$this->load->view('peternity_user/adoptionform');
			$this->load->view('include/footer');
		}
		else{
			$adoption=array('username'=>$_POST['username'],'contactno'=>$_POST['contactno'],'address'=>$_POST['address'],'pet_height'=>$_POST['pet_height'],'pet_weight'=>$_POST['pet_weight']);
            $this->Peter->create_adopt($adoption);
            redirect('peternity_user/userpetcatalogue');
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
            redirect('peternity_user/userDiscussion');
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
	public function faqs(){
		$header_data['title'] = "USER HOME";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu_user');
		$this->load->view('peternity_user/faqs');
		$this->load->view('include/footer');
		
	}
	public function profile(){
		$result_array = $this->Peter->read_ownerinfo();
        $data['profile'] = $result_array;
		
		$header_data['title'] = "USER HOME";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu_user');
		$this->load->view('peternity_user/userprofile',$data);
		$this->load->view('include/footer');	
	}
}