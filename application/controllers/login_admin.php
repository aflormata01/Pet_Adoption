<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_admin extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('username','Username','required', array('required' => 'Invalid Username or Password.'));
        if($this->form_validation->run()==TRUE)
            $this->form_validation->set_rules('password','Password','callback_verifyLogin');
        if($this->form_validation->run()==FALSE){
			//$this->load->model('peternity_model','Peter');
			//$condition = array('date_rescued' => '2016');
			//$result_array = $this->Peter->read_petrescued($condition);
			//$data['petrescue'] = $result_array;
            $header_data['title'] = "ADMIN";

			$this->load->view('include/header',$header_data);
			$this->load->view('peternity/loginadmin');
        }
        else {
            redirect(base_url('admin'));
        }
	}
    
    public function verifyLogin($password) {
        $username = $this->input->post('username');
        
        $condition = array('username'=>$username, 'password'=>$password);
        $this->load->model('login_admin_model','Login');
        $result_array = $this->Login->read($condition);
        
        if($result_array){
            foreach($result_array as $row){
                $this->session->set_userdata('username', $row['username']);
            }
            return true;
        }
        else{
            $this->form_validation->set_message('verifyLogin','Invalid Username or Password.');
            return false;
        }
    }
}
