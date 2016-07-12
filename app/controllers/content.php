<?php  (defined('BASEPATH')) OR exit('No direct script access allowed');

require_once('Public_Controller.php');

class Content extends Public_Controller{
	
    function __construct()
    {
            parent::__construct();
    }
    
    function index(){
                
        $this->load->model('category_model');
        $this->load->model('user_model');
        $data['categories']=$this->category_model->getHomeCategories();
        $cat=$this->category_model->categorylist();
        
//        echo "<pre>";print_r($data);die();
        $city=$this->user_model->getCitylist();
        $c=array();
        foreach($city as $val){
            
             $c[]=$val['txt_city1'];
        }
        $data['city']=$c;
//        echo "<pre>";print_r($data);die();
        $data['page_title']="Home";
        $data['page']="home";
        $this->load->view('customer/page',$data);
        
    }
    
    
    function getSearchResult(){
        
        if($this->input->post('product') || $this->input->post('city')){
            $sess_array['search_city']= $this->input->post('city');
            $sess_array['search_product']=$this->input->post('product');
             
            $this->session->set_userdata('search', $sess_array);
            $this->load->model('user_model');        
            $this->load->model('category_model');        
            $total_seller=$this->user_model->getSellerSearchList();

            $data['search_data']=array('total_seller'=>count($total_seller),'city'=>$this->input->post('city'),"product"=>$this->input->post('product'));
            $data['categories']=$this->category_model->getHomeCategories();
//            echo "<pre>";print_r($data);die();
            $data['page_title']="Search";
            $data['page']="seller_search";
            $this->load->view('customer/page',$data);
        }else{
            redirect('content/index','refresh');
        }
    }
    
    function sellerSearch($offset){
        $this->load->model('user_model');        
        $data=$this->user_model->getSellerSearchList($offset);
        
        echo json_encode($data);
    }
    
	
}

?>