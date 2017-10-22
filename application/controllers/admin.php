<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	
		$this->load->model('admin_model','admin');
	}	
	
	public function index(){
		$result_array = $this->admin->read_petrescued();
        $data['pet'] = $result_array;
		$header_data['title'] = "admin";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/admin',$data);
		$this->load->view('peternity/adminpets');
	}
	public function addPets(){
		$this->load->view('peternity/add_admin_pets');
				if($_SERVER['REQUEST_METHOD']=='POST')
						{
							$url = $this->do_upload();
							$addpets=array(
								'pet_nickname'=>$_POST['pet_nickname'],
								'date_rescued'=>$_POST['date_rescued'],
								'photo'=>$url,
								);
							$this->admin->create_petrescued($addpets);
							redirect('admin');
			}
	}
	public function delPets($pets){
		$where_array = array('petID'=>$pets);
		$this->admin->del_petrescued($where_array);
		redirect('admin');
	}	
	public function adminnews(){
		$result_array = $this->admin->read_news();
        $data['news'] = $result_array;
		$header_data['title'] = "admin";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/admin',$data);
		$this->load->view('peternity/adminnews');
	}
	public function addNews(){
		$this->load->view('peternity/add_admin_news');
				if($_SERVER['REQUEST_METHOD']=='POST')
						{
							$url = $this->do_upload();
							$addnews=array(
								'title'=>$_POST['title'],
								'body'=>$_POST['body'],
								'photo'=>$url,
								);
							$this->admin->create_news($addnews);
							redirect('admin/adminnews');
			}
	}
	public function delNews($news){
		$where_array = array('news#'=>$news);
		$this->admin->del_news($where_array);
		redirect('admin/adminNews');
	}	
	public function adminfaq(){
		$result_array = $this->admin->read_faqs();
        $data['faqs'] = $result_array;
		$header_data['title'] = "admin";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/admin',$data);
		$this->load->view('peternity/adminfaq');		
	}
	public function updateFaqs(){
		$result_array = $this->admin->read_faqs();
        foreach($result_array as $o){
			$info = array(
				'faqs_no' => $o['faqs_no'],
				'body' => $o['body']
				);
		}
		$data['faqs']=$info;
		$rules = array(
                    array('field'=>'body', 'label'=>'Body', 'rules'=>'required')
                );
        $this->form_validation->set_rules($rules);
		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
		if($this->form_validation->run()==FALSE){
			$this->load->view('peternity/update_admin_faqs',$data);
		}
		else{
			$updatefaqs=array('faqs_no'=>$_POST['faqs_no'],'body'=>$_POST['body']);
            $this->admin->update_faqs($updatefaqs);
            redirect('admin/adminfaq');
		}
	}
	public function addFaqs(){
		$rules = array(
                    array('field'=>'body', 'label'=>'body', 'rules'=>'required')
				);
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
		if($this->form_validation->run()==FALSE){
			$this->load->view('peternity/add_admin_faqs');
		}else{
			$addfaqs=array('body'=>$_POST['body']);
            $this->admin->create_faqs($addfaqs);
            redirect('admin/adminfaq');
		}
	}
	public function delFaqs($faqs){
		$where_array = array('faqs_no'=>$faqs);
		$this->admin->del_faqs($where_array);
		redirect('admin/adminfaq');
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
}