<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class   Test_ctr extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Category_model');
        $this->load->model('Product_model');
        $this->load->model('Home_model');
        //$this->load->library('form_validation');
    }
   

    public function Get_all_Product(){
        //echo'hii';die;
        $page = $this->input->get('page')?: 1;
      
        $items_per_page = 3; // Set the number of items per page
        $offset = ($page - 1) * $items_per_page;
       // print_r($offset);die;
        $resultList = $this->Product_model->Get_all_Products( $items_per_page, $offset);
        $data['data'] = $resultList; // First assignment
        echo "<pre>";
        print_r( $data['data'] );die;
        // Get the total count of products
        $total_products = $this->Product_model->Get_total_products_count();
    //print_r( $total_products );die;
        $data['total'] = $total_products; // Second assignment
        echo json_encode($data); // This will now contain both 'data' and 'total'
    }
    








}
