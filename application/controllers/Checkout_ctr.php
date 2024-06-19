<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout_ctr extends CI_Controller {


    public function __construct() {
        parent::__construct();
        $this->load->model('Cart_model');
        $this->load->model('Checkout_model'); 
        $this->load->model('Home_model');        
      if(!empty($this->session->userdata('login_id'))){

      }else
      {
redirect('Login_ctr');
      }
        }

        public function order_place_detail() { 
$this->form_validation->set_rules('address[first_name]','First Name','required|trim');
$this->form_validation->set_rules('address[last_name]','Last Name','required|trim');
$this->form_validation->set_rules('address[state]','State','required|trim');
$this->form_validation->set_rules('address[town_city]','Town/City','required|trim');
$this->form_validation->set_rules('address[address_1]','Address','required|trim');
$this->form_validation->set_rules('address[address_2]','Near by Address','trim');
$this->form_validation->set_rules('address[zip_code]','Zip Code','required|trim');
$this->form_validation->set_rules('address[mobile_number]','Mobile Number','required|trim|min_length[10]|max_length[14]');
$this->form_validation->set_rules('address[email]','Email','required|trim|valid_email');
$this->form_validation->set_rules('address[Country_Region]','Country/Region','required|trim');
$this->form_validation->set_rules('address[order_note]','','trim');
$this->form_validation->set_rules('payment[payment_mode]','Payment Mode','required');


if($this->form_validation->run()) {
  $payment= $this->input->post('payment');
  $Customer_address= $this->input->post('address');
  $Customer_product= $this->input->post('products');
  //echo "hiidddddddd";die;
  //print_r($payment);die;
  $Check_cart_ids['cart_ids']=$this->Checkout_model->insert_customer_address($Customer_address, $Customer_product,$payment);
  //print_r($check['aa']);die;
if($Check_cart_ids){
  $data['cart']=$this->Checkout_model->Get_cart_order_placed_specific($Check_cart_ids);
  $data['total']=$this->Checkout_model->Get_cart_total_order_placed_specific($Check_cart_ids);
  //print_r( $data['total']);die;
$this->load->view('front/order_placed',$data);
}

        }else{
          $this->checkout_page();
        }
      }

      public function view_order_status(){

        $data['cart']=$this->Checkout_model->Get_cart_order_placed();
        //$data['total']=$this->Checkout_model->Get_cart_total_order_placed();
       //$mergedData['mdata'] = array_merge($data['cart'], $data['total']);
       //$a=array_combine($dataa, $data);
       //echo"<pre>";
        //print_r($mergedData['mdata'] );die;
        $this->load->view('front/view_order_status',$data);
      }
public function checkout_page() {
  $data['cart']=$this->Cart_model->Get_cart();
  $data['total']=$this->Cart_model->Get_cart_total();
  //echo "<pre>";
  //print_r($data['cart']);die;
  $this->load->view('front/checkout',$data);
}

public function index()   {
  //echo 'this is checvkout';
    $this->load->view('front/login');
}
}