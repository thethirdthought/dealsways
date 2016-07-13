<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

require_once('Public_Controller.php');

class Content extends Public_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {

        $this->load->model('category_model');
        $this->load->model('user_model');
        $this->load->model('location_model');
        $data['categories'] = $this->category_model->getHomeCategories();
//        $data['allcategories'] = $this->category_model->categorylist();
        $cat = $this->category_model->categorylist();

        $data['allcategories'] = $this->getCategoryArray($cat);
//        echo "<pre>";print_r($data);die();
        $city = $this->location_model->get_all_cities();
//        echo '<pre>';print_r($city);exit;
        $c = array();
        foreach ($city as $val) {

            $c[] = $val['name'];
        }
        $data['city'] = $c;
//        echo "<pre>";print_r($data);die();
        $data['page_title'] = "Home";
        $data['page'] = "home";
        $this->load->view('customer/page', $data);
    }

    function getCategoryArray($arr) {
        $cat_arr = array();
        $data_arr = array();
//        echo '<pre>';
//                print_r($arr);exit;
        foreach ($arr as $val) {
            if ($val['int_parent_id'] == 0) {
                $data_arr[$val['int_category_id']][] = $val;
            } else {
                $data_arr[$val['int_parent_id']][]=$val;
            }
        }
        return $data_arr;
    }

    function getSearchResult() {

        if ($this->input->post('product') || $this->input->post('city')) {
            $sess_array['search_city'] = $this->input->post('city');
            $sess_array['search_product'] = $this->input->post('product');

            $this->session->set_userdata('search', $sess_array);
            $this->load->model('user_model');
            $this->load->model('category_model');
            $this->load->model('location_model');
            $total_seller = $this->user_model->getSellerSearchList();
            $city = $this->location_model->get_all_cities();
//        echo '<pre>';print_r($city);exit;
            $c = array();
            foreach ($city as $val) {

                $c[] = $val['name'];
            }
            $data['cities'] = $c;

            $data['search_data'] = array('total_seller' => count($total_seller), 'city' => $this->input->post('city'), "product" => $this->input->post('product'));
            $data['categories'] = $this->category_model->getHomeCategories();
//            echo "<pre>";print_r($data);die();
            $data['page_title'] = "Search";
            $data['page'] = "seller_search";
            $this->load->view('customer/page', $data);
        } else {
            redirect('content/index', 'refresh');
        }
    }

    function sellerSearch() {
        $this->load->model('user_model');
        $data = $this->user_model->getSellerSearchList();

        echo json_encode($data);
    }

}

?>