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
	public function delFaqs($faqs){
		$where_array = array('faqs_no'=>$faqs);
		$this->admin->del_faqs($where_array);
		redirect('admin/adminfaq');
	}	
}