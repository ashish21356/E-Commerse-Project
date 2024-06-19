<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_ctr extends CI_Controller {

    public function __construct() {
        parent::__construct();  
        $this->load->model('Register_model');
        
    }  
public function index()   {
    $this->form_validation->set_rules('name','Full Name','required|trim');
    $this->form_validation->set_rules( 'email', 'Email', 'required|trim|valid_email|is_unique[ec_users.email]', ['is_unique' => 'This email already exists. Please try with another email ID.'] );
    $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]');


    if ($this->form_validation->run()) {
        $post= $this->input->post();
       // print_r($post);die;
        $check=$this->Register_model->register($post);
        if ($check) { 
            $this->session->set_flashdata('sucessmsg','User registered sucessfully..Please login'); 
            $this->load->view('front/login');
        }
    } 
    else {    
    $this->load->view('front/register');
}
}
}