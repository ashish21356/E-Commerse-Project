<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_ctr extends CI_Controller {
public function __construct() { 
    parent::__construct();
    if(!empty($this->session->userdata('login_id'))){
redirect('Checkout_ctr');
    }
    $this->load->model('Login_model');
}

public function index()   {
    $this->form_validation->set_rules( 'email', 'Email', 'required|trim|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]');

    if ($this->form_validation->run()) {
        $post= $this->input->post();
        $check=$this->Login_model->CHECK_USER($post);
        if ($check) {
             $this->session->set_flashdata('sucessmsg','You have login sucessfully..');
        redirect('Dashboard');
        } else {
        $this->session->set_flashdata('errsmsg','Please check the credientials and try again..');
        redirect('Dashboard');
        }
    } 
    else {    
        $this->load->view('front/login');
}
}
}