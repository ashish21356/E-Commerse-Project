<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_ctr extends CI_Controller {
    public function __construct() {
        parent::__construct();
if($this->session->userdata('user_id')){

}else{
    $this->session->set_userdata('user_id',mt_rand(11111,99999));
}

        $this->load->model('Home_model');
    }
    public function index() {
        $data['products']=$this->Home_model->Get_Products();
        $data['bannner']=$this->Home_model->Get_Banners();
        $data['catage']=$this->Home_model->Get_Catages();
        $data['catageroy_nav']=$this->Home_model->Get_Catageroy_nav();
        //print_r( $data['Get_Catageroy_nav']);die;
        //print_r($data['products']);die;
       $this->load->view('front/index',$data);
    }

public function product_details($slug) { 
    //print_r($slug);die;
$data['arr']= $this->Home_model->Get_Product_detail($slug);   
//print_r($data['arr']); die;
$this->load->view('front/product_details',$data);
}
    

   
}