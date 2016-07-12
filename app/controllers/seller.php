<?php  (defined('BASEPATH')) OR exit('No direct script access allowed');

require_once('Seller_Controller.php');

class Seller extends Seller_Controller{
	
    function __construct()
    {
            parent::__construct();
    }
    
    function index(){
        
        $data['page_title']="Account";
        $data['page']="account_home";
        $this->load->view('seller/page',$data);
        
    }
    
	
}

?>