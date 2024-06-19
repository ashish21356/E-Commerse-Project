<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_ctr extends CI_Controller {
public function __construct() {
parent::__construct();
$this->load->model('Cart_model');
$this->load->model('Home_model');
if(!empty($this->session->userdata('login_id'))){

}else
{
redirect('Login_ctr');
}
}

public function index() {
  
    $data['cart']=$this->Cart_model->Get_cart();
     $data['total']=$this->Cart_model->Get_cart_total();
     //$data['catageroy_nav']=$this->Home_model->Get_Catageroy_nav();
     //print_r($data['cart']);
  //print_r($data['total']);die;
    $this->load->view('front/cart',$data);
}

public function remove_product($pro_id) {
    //print_r($pro_id);die;
    $check=$this->Cart_model->delete_product_from_cart($pro_id);
    if ($check) {

        $this->session->set_flashdata('sucessmsg','Product removed sucessfully..');
        redirect('Cart_ctr');
    }else{
        $this->session->set_flashdata('errmsg','Product not removed updated..');
        redirect('Cart_ctr');
    }
}


public function update_cart() {
$data=$this->input->post();
//print_r($data);die;
$check=$this->Cart_model->update_cart($data);
    if ($check) {

    $this->session->set_flashdata('sucessmsg','Cart updated sucessfully..');
    redirect('Cart_ctr');
}else{
    $this->session->set_flashdata('errmsg','Cart not updated..');
    redirect('Cart_ctr');
}

}

public function add_to_cart() {
    $post=$this->input->post();
    //print_r($post);die;
    
    $check=$this->Cart_model->add_product_to_cart($post);
    if ($check) {

    $this->session->set_flashdata('sucessmsg','Product added to cart sucessfully..');
    redirect('Cart_ctr');
}else{
    $this->session->set_flashdata('errmsg','Product already added to cart..');
    redirect('Cart_ctr');
}

}}