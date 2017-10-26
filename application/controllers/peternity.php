<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class peternity extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	
		$this->load->model('peternity_model','Peter');
	}
	
	public function index(){	

		$condition = array('availability'=>'Unadopted');
		$result_array = $this->Peter->read_petrescued($condition);
		$data['petrescue'] = $result_array;
		$header_data['title'] = "Peternity";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu');
		$this->load->view('home',$data);
		$this->load->view('include/footer');
		
	}
	public function petcatalogue(){
		$header_data['title'] = "PET CATALOGUE";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu');
		$this->load->view('peternity/catalogue');
		$this->load->view('include/footer');
		
	}	
	public function steps(){
		$condition = array('availability' => 'Unadopted');
		$result_array = $this->Peter->read_petrescued($condition);
        $data['petadopt'] = $result_array;
		$header_data['title'] = "ADOPT A PET!";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu');
		$this->load->view('peternity/formsteps',$data);
		$this->load->view('include/footer');
		
	}	

	public function adminview(){
		$header_data['title'] = "admin";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/admin');
		$this->load->view('peternity/adminpets');
		
		
	}
	
	public function adminnews(){
		$header_data['title'] = "admin";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/admin');
		$this->load->view('peternity/adminnews');
		
		
	}
	
	public function adminfaq(){
		$header_data['title'] = "admin";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/admin');
		$this->load->view('peternity/adminfaq');
		
		
	}

	public function info(){
		
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu');
		$this->load->view('peternity/petinfo',$data);
		$this->load->view('include/footer');
		
	}	
	public function rescuepet(){
		$result_array = $this->Peter->read_petrescued();
        $data['petrescue'] = $result_array;
		
		$header_data['title'] = "RESCUED PETS";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu');
		$this->load->view('peternity/rescuedpets',$data);
		$this->load->view('include/footer');
		
	}
	public function petforadoption(){
		$condition = array('availability' => 'Unadopted');
		$result_array = $this->Peter->read_petrescued($condition);
        $data['petadopt'] = $result_array;
		$header_data['title'] = "PETS FOR ADOPTION";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu');
		$this->load->view('peternity/petforadoption',$data);
		$this->load->view('include/footer');
		
	}
	public function stories(){
		$result_array = $this->Peter->read_stories();
        $data['stories'] = $result_array;
		
		$header_data['title'] = "SUCCESS STORIES";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu');
		$this->load->view('peternity/stories',$data);
		$this->load->view('include/footer');	
	}
	public function discussion(){
		$result_array = $this->Peter->read_discussion();
        $data['discussion'] = $result_array;
		
		$header_data['title'] = "DISCUSSIONS";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu');
		$this->load->view('peternity/discussion',$data);
		$this->load->view('include/footer');
		
	}
	public function news(){
		$result_array = $this->Peter->read_news();
        $data['news'] = $result_array;
		
		$header_data['title'] = "NEWS";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu');
		$this->load->view('peternity/news',$data);
		$this->load->view('include/footer');
		
	}
	public function upcomingevents(){
		$result_array = $this->Peter->read_events();
        $data['events'] = $result_array;
		
		$header_data['title'] = "UPCOMING EVENTS";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu');
		$this->load->view('peternity/events',$data);
		$this->load->view('include/footer');		
	}
	public function faqs(){
		$result_array = $this->Peter->read_faqs();
        $data['faqs'] = $result_array;
		
		$header_data['title'] = "USER HOME";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu');
		$this->load->view('peternity/faqs',$data);
		$this->load->view('include/footer');
		
	}
	public function signup(){

		$rules = array(
                    array('field'=>'uname', 'label'=>'username', 'rules'=>'required'),
					array('field'=>'pass', 'label'=>'password', 'rules'=>'required')
				);
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
		if($this->form_validation->run()==FALSE){
			$this->load->view('peternity/sign-up');
		}else{
			$signupform=array('username'=>$_POST['uname'],'password'=>$_POST['pass']);
            $this->Peter->create_owneraccount($signupform);
			$signupaccform=array('username'=>$_POST['uname'],'fname'=>$_POST['fname'],'lname'=>$_POST['lname']);
            $this->Peter->create_ownerinfo($signupaccform);
            redirect('user');
		}
	}
	
	public function register(){

				$rules = array(
                    array('field'=>'uname', 'label'=>'username', 'rules'=>'required'),
					array('field'=>'pass', 'label'=>'password', 'rules'=>'required')
				);
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
		if($this->form_validation->run()==FALSE){
			$header_data['title'] = "REGISTER";
			$this->load->view('include/header',$header_data);
			$this->load->view('include/menu');
			$this->load->view('peternity/register');
			$this->load->view('include/footer');
			
			
		}else{
			$signupform=array('username'=>$_POST['uname'],'password'=>$_POST['pass']);
            $this->Peter->create_owneraccount($signupform);
			$signupaccform=array('username'=>$_POST['uname'],'fname'=>$_POST['fname'],'lname'=>$_POST['lname']);
            $this->Peter->create_ownerinfo($signupaccform);
            redirect('user');
		}
		
		
	}
	public function category($categ){
		$categ = urlencode($categ);
		$cond = array('category'=>$categ);
		$result_array = $this->Peter->read_discussion($cond);
        $data['discussion'] = $result_array;
		$header_data['title'] = "DISCUSSIONS";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu');
		$this->load->view('peternity/discussion',$data);
		$this->load->view('include/footer');
		
	}
	
	
	/*public function loghome(){
		/*if($this->session->userdata('logged_in')){
            $session_data=$this->session->userdata('logged_in');
            $data['username']=$session_data['username'];
            if($session_data['aUser']>0){
				$header_data['title'] = "USER HOME";
				$this->load->view('include/header',$header_data);
				$this->load->view('include/menu');
				$this->load->view('login-home');
				$this->load->view('include/footer');
			}
		}
	}*/
}
