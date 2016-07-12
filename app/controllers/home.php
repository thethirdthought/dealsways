<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->library('session');
   $this->load->helper('url');
	   header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.		
		header('Pragma: no-cache'); // HTTP 1.0.
		header('Expires: 0'); // Proxies
 }

 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['txt_email'];
	   $data['page_title']='Home Page';
	   $data['page']='welcome_message';
     $this->load->view('templates/page', $data);
   }
   else
   {
     redirect('login', 'refresh');
   }
 }

 function logout()
 {
   $this->session->unset_userdata('logged_in');
   $this->session->sess_destroy();
   redirect('home', 'refresh');
 }

 function change_password(){
    $this->load->database();
    $this->load->helper('form');
    $this->load->library('form_validation');    
    $this->form_validation->set_rules('new_password', 'New Password', 'required');
    if($this->form_validation->run())
    { 
      $this->load->model('user');
      $level=$this->user->change_password();
    }
    else
    { 
      $data['page_title']='Change Password';
      $data['title']=' - User Management';
      $data['page']='change_password';
      $this->load->view('templates/page',$data);
    } 
 }

 function settings(){
    $this->load->database();
    $this->load->helper('form');
    $this->load->library('form_validation');    
    $this->load->model('user');
    $this->form_validation->set_rules('name', 'New Name', 'required');
    if($this->form_validation->run())
    { 
      
      $level=$this->user->settings();
    }
    else
    {
      $data['settings']=$this->user->getsettings(); 
      $data['page_title']='Settings';
      $data['title']=' - User Management';
      $data['page']='settings';
      $this->load->view('templates/page',$data);
    } 
 }

}

?>
