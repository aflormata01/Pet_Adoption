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
		$condition = array('username' => $user);
		$header_data['title'] = "Peternity";
		$data['user'] = $user;
		$result_array = $this->Peter->read_stories();
		$result = $this->Peter->read_ownerinfo($condition);
        $data['user_stories'] = $result_array;
        $data['usern'] = $result;
		$likes = $this->Peter->read_stories_like($condition);
		$data['liked_stories'] = $likes;
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu_user',$data);
		$this->load->view('login-home',$data);
		$this->load->view('include/footer');	
	}
	public function petcatalogue(){
		$user =  $this->session->userdata('username');
		$header_data['title'] = "PET CATALOGUE";
		$data['user'] = $user;
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu_user',$data);
		$this->load->view('peternity_user/catalogue');
		$this->load->view('include/footer');
		
	}	
	public function info(){
		$user =  $this->session->userdata('username');
		$header_data['title'] = "PET INFO";
		$data['user'] = $user;
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu_user',$data);
		$this->load->view('peternity_user/petinfo');
		$this->load->view('include/footer');
		
	}	
	
	public function rescuepet(){
		$user =  $this->session->userdata('username');
		$result_array = $this->Peter->read_petrescued();
        $data['petrescue'] = $result_array;
		$data['user'] = $user;
		$header_data['title'] = "RESCUED PETS";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu_user',$data);
		$this->load->view('peternity_user/rescuedpets',$data);
		$this->load->view('include/footer');
		
	}
	public function petforadoption(){
		$user =  $this->session->userdata('username');
		$condition = array('availability' => 'Unadopted');
		$result_array = $this->Peter->read_petrescued($condition);
        $data['petadopt'] = $result_array;
		$data['user'] = $user;
		$header_data['title'] = "PETS FOR ADOPTION";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu_user',$data);
		$this->load->view('peternity_user/petforadoption',$data);
		$this->load->view('include/footer');
		
	}
	public function adopt($petID){
		$user =  $this->session->userdata('username');
		$rules = array(
                    array('field'=>'contactno', 'label'=>'Contact No.', 'rules'=>'required'),
                    array('field'=>'address', 'label'=>'Address', 'rules'=>'required'),
                );
        $this->form_validation->set_rules($rules);
		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
		if($this->form_validation->run()==FALSE){
			$header_data['title'] = "ADOPTION FORM";
			$data['petID']=$petID;
			$this->load->view('peternity_user/adoptionform',$data);
		}
		else{
			$adoption=array('petID'=>$petID,'username'=>$user,'contactno'=>$_POST['contactno'],'address'=>$_POST['address']);
            $this->Peter->create_adopt($adoption);
			$condition=array('petID'=>$petID);
			$record=$this->Peter->read_petrescued($condition);
			 foreach($record as $o){
            $date= $o['date_rescued'];
            $nickname = $o['pet_nickname'];
            $photo = $o['photo'];
			 }
			$adoption=array('petID'=>$petID,'date_rescued'=>$date,'pet_nickname'=>$nickname,'photo'=>$photo,'availability'=>'Scheduled');
			$this->Peter->update_petrescued($adoption);
            redirect('user/petcatalogue');
		}
	}
	public function userdiscussion(){
		$user =  $this->session->userdata('username');
		$result_array = $this->Peter->read_discussion();
        $data['user_discussion'] = $result_array;
		$data['user'] = $user;
		$header_data['title'] = "DISCUSSIONS";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu_user',$data);
		$this->load->view('peternity_user/userdiscussion',$data);
		$this->load->view('include/footer');
		
	}
	public function addDiscussion(){
		$user =  $this->session->userdata('username');
		$rules = array(
                    array('field'=>'title', 'label'=>'Title', 'rules'=>'required'),
                    array('field'=>'body', 'label'=>'body', 'rules'=>'required')
				);
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
		if($this->form_validation->run()==FALSE){
			$this->load->view('peternity_user/adddiscussion');
		}else{
			$addDiscuss=array('title'=>$_POST['title'],'body'=>$_POST['body'],'username'=>$user);
            $this->Peter->create_discussion($addDiscuss);
            redirect('user/userDiscussion');
		}
	}
	public function news(){
		$user =  $this->session->userdata('username');
		$result_array = $this->Peter->read_news();
        $data['news'] = $result_array;
		$data['user'] = $user;
		$header_data['title'] = "NEWS";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu_user',$data);
		$this->load->view('peternity_user/news',$data);
		$this->load->view('include/footer');
		
	}
	public function upcomingevents(){
		$user =  $this->session->userdata('username');
		$result_array = $this->Peter->read_events();
        $data['events'] = $result_array;
		$data['user'] = $user;
		$header_data['title'] = "UPCOMING EVENTS";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu_user',$data);
		$this->load->view('peternity_user/events',$data);
		$this->load->view('include/footer');		
	}
	public function faqs(){
		$user =  $this->session->userdata('username');
		$result_array = $this->Peter->read_faqs();
        $data['faqs'] = $result_array;
		$data['user'] = $user;
		$header_data['title'] = "USER HOME";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu_user',$data);
		$this->load->view('peternity_user/faqs',$data);
		$this->load->view('include/footer');
		
	}
	public function profile($user){
			$user =  $this->session->userdata('username');
			$condition = array('username' => $user);
			$result_array = $this->Peter->read_ownerinfo($condition);
			$data['profile'] = $result_array;
			$header_data['title'] = "USER HOME";
			$data['user'] = $user;
			$this->load->view('include/header',$header_data);
			$this->load->view('include/menu_user',$data);
			$this->load->view('peternity_user/userprofile',$data);
			$this->load->view('include/footer');
		
	}
	
	public function setting(){
		$user =  $this->session->userdata('username');
		$condition = array('username' => $user);
		$result_array = $this->Peter->read_ownerinfo($condition);
        foreach($result_array as $o){
			$info = array(
				'fname' => $o['fname'],
				'lname' => $o['lname'],
				'email' => $o['email'],
				'photo' => $o['photo'],
				'sex' => $o['sex'],
				'username' => $o['username'],
				'birthdate' => $o['birthdate']
				);
		}
		$data['d']=$info;
		$rules = array(
                    array('field'=>'fname', 'label'=>'First Name', 'rules'=>'required'),
                    array('field'=>'lname', 'label'=>'Last Name', 'rules'=>'required'),
                    array('field'=>'email', 'label'=>'Email', 'rules'=>'required'),
					array('field'=>'username', 'label'=>'Username', 'rules'=>'required'),
					array('field'=>'sex', 'label'=>'Sex', 'rules'=>'required'),
					array('field'=>'birthdate', 'label'=>'Birthday', 'rules'=>'required')
                );
        $this->form_validation->set_rules($rules);
		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
		if($this->form_validation->run()==FALSE){
			$user =  $this->session->userdata('username');
			$condition = array('username' => $user);
			$header_data['title'] = "ACCOUNT SETTINGS";
			$this->load->view('include/header',$header_data);
			$result_array = $this->Peter->read_ownerinfo($condition);
			$data['set'] = $result_array;
			$data['user'] = $user;
			$this->load->view('include/menu_user',$data);			
			$this->load->view('peternity_user/settings',$data);
			$this->load->view('include/footer');
		}

		else{
			$url = $this->do_upload($_POST['file']);
			$settings=array('fname'=>$_POST['fname'],'lname'=>$_POST['lname'],'email'=>$_POST['email'],'username'=>$_POST['username'],'sex'=>$_POST['sex'],'birthdate'=>$_POST['birthdate'],'photo'=>$url);
            $this->Peter->update_ownerinfo($settings);
            redirect('user');
		}

	}
	public function changepass(){
		$user =  $this->session->userdata('username');
		$condition = array('username' => $user);
		$array = $this->Peter->read_owneraccount($condition);
		foreach($array as $o){
					$password = $o['password'];
					$username = $o['username'];
					$date_signedup = $o['date_signedup'];		
		}
		$rules = array(
					array('field'=>'password', 'label'=>'Password', 'rules'=>'required|matches['.$password.']'),
					array('field'=>'confirm_password', 'label'=>'New Password', 'rules'=>'required'),
					array('field'=>'new_password', 'label'=>'Re-enter New Password', 'rules'=>'required|matches[confirm_password]')
		);
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
		if($this->form_validation->run()==FALSE){
			$user =  $this->session->userdata('username');
			$condition = array('username' => $user);
			$result_array = $this->Peter->read_owneraccount($condition);
			$data['d'] = $result_array;
			$header_data['title'] = "CHANGE PASSWORD";
			$this->load->view('include/header',$header_data);		
			$this->load->view('peternity_user/changepass',$data);
			$this->load->view('include/footer');
		}else{
			$user =  $this->session->userdata('username');
			$change=array('username'=>$user,'password'=>$_POST['new_password']);
            $this->Peter->update_owneraccount($change);
			redirect(user/setting);
		}
	}
	public function userstories(){
		$user =  $this->session->userdata('username');
		$header_data['title'] = "My Stories";
		$condition = array('username' => $user);
		$result_array = $this->Peter->read_stories($condition);
        $result = $this->Peter->read_ownerinfo($condition);
        $data['user_stories'] = $result_array;
        $data['usern'] = $result;
        $data['user'] = $user;
		$likes = $this->Peter->read_stories_like($condition);
		$data['liked_stories'] = $likes;
		$this->load->view('include/header',$header_data);
		$this->load->view('include/menu_user',$data);
		$this->load->view('login-home',$data);
		$this->load->view('include/footer');
	}
		public function profile_pic(){
			if($_SERVER['REQUEST_METHOD']=='POST')
						{
							
							$user =  $this->session->userdata('username');
							$condition = array('username' => $user);
							$result_array = $this->Peter->read_ownerinfo($condition);
							foreach($result_array as $o){
								$profilepic=array(
									'fname' => $o['fname'],
									'lname' => $o['lname'],
									'email' => $o['email'],
									'photo' => $url,
									'username' => $o['username'],
									'sex' => $o['sex'],
									'birthdate' => $o['birthdate']
									);
							}
							$this->Peter->update_ownerinfo($profilepic);
							redirect('user/setting');
			}
		}
		public function addstories(){
		$this->load->view('peternity_user/adduserstories');
		$user =  $this->session->userdata('username');
				if($_SERVER['REQUEST_METHOD']=='POST')
						{
							$url = $this->do_upload();
							$addstory=array(
								'title'=>$_POST['title'],
								'file_name'=>$url,
								'username'=>$user
								);
							$this->Peter->create_stories($addstory);
							redirect('user');
			}
		}
		public function do_upload()
		{
			$type = explode('.', $_FILES["file"]["name"]);
			$type = strtolower($type[count($type)-1]);
			$url = "./assets/uploads/".uniqid(rand()).'.'.$type;
			if(in_array($type, array("jpg", "jpeg", "gif", "png")))
				if(is_uploaded_file($_FILES["file"]["tmp_name"]))
					if(move_uploaded_file($_FILES["file"]["tmp_name"],$url))
						return $url;
			return "";
		}
		
		public function addstorylikes(){
			$user =  $this->session->userdata('username');
			if(isset($_POST['post'])&&isset($_POST['del'])){
				
				$like=array('story#'=>$_POST['post'],'username'=>$user);
				if($_POST['del']=='0')
					$this->Peter->del_stories_like($like);
				else{
					$this->Peter->create_stories_like($like);
				}
			}
			$condition = array('username' => $user);
			$data['user'] = $user;
			$result_array = $this->Peter->read_stories();
			$data['user_stories'] = $result_array;
			$likes = $this->Peter->read_stories_like($condition);
			$data['liked_stories'] = $likes;
			echo $this->load->view('user-stories',$data, TRUE);
		}
		
		
		public function discbody($disc){
			$user =  $this->session->userdata('username');
			$condition = array('discuss#' => $disc);
			$result_array = $this->Peter->read_discussion($condition);
			$result = $this->Peter->read_ownerinfo();
			$data['user_stories'] = $result_array;
			$data['discuss'] = $result_array;
			$data['pic'] = $result;
			$data['user'] = $user;
			$data['disc'] = $disc;
			$header_data['title'] = "DISCUSSION BODY";
			$this->load->view('include/header',$header_data);
			$this->load->view('include/menu_user',$data);			
			$this->load->view('peternity_user/discbody',$data);
			$this->load->view('include/footer');
			
		}
		public function addcomments($disc){
			$user =  $this->session->userdata('username');
					$rules = array(
					array('field'=>'comment', 'label'=>'comment', 'rules'=>'required'));
			$this->form_validation->set_rules($rules);
			$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
				
			if($this->form_validation->run()==FALSE){
				$condition = array('discuss#' => $disc);
				$comments = $this->Peter->read_disc_comments($condition);
				$data['comments'] = $comments;
				
				$data['disc'] = $disc;
				echo $this->load->view('peternity_user/comments',$data, TRUE);
			}
			else{
					$comment=array('comment'=>$_POST['comment'],'username'=>$user,'discuss#'=>$disc);
					$condition = array('discuss#' => $disc);
					$this->Peter->create_disc_comments($comment);
					$comments = $this->Peter->read_disc_comments($condition);
					$data['comments'] = $comments;
					$data['disc'] = $disc;
					echo $this->load->view('peternity_user/comments',$data, TRUE);
			}
		}
		public function delStories($story){
			$where_array = array('story#'=>$story);
			$this->Peter->del_stories($where_array);
			redirect('user');
		}
		public function delDiscussion($disc){
			$where_array = array('discuss#'=>$disc);
			$this->Peter->del_discussion($where_array);
			redirect('user/userdiscussion');
		}	
		public function delDisc_comments($disc){
			$where_array = array('discuss#'=>$disc);
			$this->Peter->del_disc_comments($where_array);
			redirect('user/userdiscussion');
		}		
		
		public function rateDiscuss(){
			$user =  $this->session->userdata('username');
			$condition = array('username' => $user);
			$rates = $this->Peter->read_rate($condition);
			if(isset($_POST['post'])&&isset($_POST['rate'])){
			foreach($rates as $r){
				if($r['discuss#']==$_POST['post'] && $r['username']==$user &&$r['rate']==$_POST['rate'])
					$check=1;
			}
			
				if($check>0){
				$rate=array('discuss#'=>$_POST['post'],'username'=>$user);
				$this->Peter->del_rate($rate);
				}
				else if($_POST['rate']=='1')
				{
					$rate=array('discuss#'=>$_POST['post'],'username'=>$user,'rate'=>'1');
					$this->Peter->update_rate($rate);
				}
				else if($_POST['rate']=='2')
				{
					$rate=array('discuss#'=>$_POST['post'],'username'=>$user,'rate'=>'0');
					$this->Peter->update_rate($rate);
				}
			
					

			
			}
			
			$data['user'] = $user;
			$result_array = $this->Peter->read_discussion();
			$data['user_discussion'] = $result_array;
			$data['ratedd'] = $rates;
			echo $this->load->view('peternity_user/discussion',$data, TRUE);
		}
}