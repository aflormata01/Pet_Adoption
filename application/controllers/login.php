<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('username','Username','required', array('required' => 'Invalid Username or Password.'));
        if($this->form_validation->run()==TRUE)
            $this->form_validation->set_rules('password','Password','callback_verifyLogin');
        if($this->form_validation->run()==FALSE){
            $this->load->view('login-home');
        }
        else {
            redirect(base_url('home'));
        }
	}
    
    public function verifyLogin($password) {
        $username = $this->input->post('username');
        
        $condition = array('username'=>$username, 'password'=>$password);
        $this->load->model('login_model','Login');
        $result_array = $this->Login->read($condition);
        
        if($result_array){
            foreach($result_array as $row){
                $this->session->set_userdata('username', $row['username']);
                /*$this->session->set_userdata('isAdmin', $row['isAdmin']);*/
                /*$sess_data=array(
                    'userID' => $row['userID'],
                    'isAdmin' => $row['isAdmin']
                );*/
                //$this->session->set_userdata('logged_in', $sess_data);
            }
            return true;
        }
        else{
            $this->form_validation->set_message('verifyLogin','Invalid Username or Password.');
            return false;
        }
    }
    
    public function logout(){
        session_destroy();
        redirect(base_url());
    }
}
