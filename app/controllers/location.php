<?php

class Location extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('user_model');
        $this->load->model('product_model');
        $this->load->model('location_model');
    }

    public function get_states() {
        $formdata = $this->input->post();
        $states = $this->location_model->getStatesByCountry($formdata['cunt_id']);
        $html = "";
        foreach ($states as $state) {
            $html .= "<option value='" . $state['id'] . "'>" . $state['name'] . "</option>";
        }
        $result['html']=$html;
        echo json_encode($result);
        exit();
    }
    public function get_city() {
        $formdata = $this->input->post();
        $cties = $this->location_model->getCityByState($formdata['state_id']);
        $html = "";
        foreach ($cties as $city) {
            $html .= "<option value='" . $city['id'] . "'>" . $city['name'] . "</option>";
        }
        $result['html']=$html;
        echo json_encode($result);
        exit();
    }

}
