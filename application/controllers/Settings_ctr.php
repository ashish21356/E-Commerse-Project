<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings_ctr extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Settings_mdl');
        $this->load->model('Home_model');
        if(!empty($this->session->userdata('login_id'))){

        }else
        {
  redirect('Login_ctr');
        }
    }

    public function about_view() {   
        $data['catageroy_nav']=$this->Home_model->Get_Catageroy_nav();
        $this->load->view('About',$data);
    }
public function pincode() { 
    $this->form_validation->set_rules('pincode','Pincode','required|trim');
    $this->form_validation->set_rules('status','Status','required|trim');
    $this->form_validation->set_rules('delivery_charge','Delivery Charge','required|trim');
    if( $this->form_validation->run())
    {
        $post = $this->input->post();
        $check=$this->Settings_mdl->Add_pincode($post);
if($check){
    $this->session->set_flashdata('successmag','Data Inserted Sucessfully!');
    redirect('Settings_ctr/pincode');
}
    }else{
        
        $this->load->view('pincode'); 
    }
}


public function banner() { 
    if(empty($_FILES['bann_image']['name'])){
        $this->form_validation->set_rules('bann_image','Banner Image','required|trim');
    }
    
     $this->form_validation->set_rules('status','Status','required|trim');
    if( $this->form_validation->run())
    {
        $post = $this->input->post();

        $config = array(
            'upload_path'   => './uploads',
            'allowed_types' => 'gif|jpg|png',
        );
        $this->load->library('upload', $config);
        $this->upload->do_upload('bann_image');
        $image = $this->upload->data();
        $post['bann_image']=$image['file_name'];     

//die;
        $check=$this->Settings_mdl->Add_banner($post);
if($check){
    $this->session->set_flashdata('successmag','Data Inserted Sucessfully!');
    redirect('Settings_ctr/banner');
}
    }else{
        
        $this->load->view('banner'); 
    }
}
}
