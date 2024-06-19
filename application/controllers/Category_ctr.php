<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_ctr extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Category_model');
        //$this->load->library('form_validation');
    }
public function index() { 
    $this->form_validation->set_rules('cate_name','Category Name','required|trim');
    $this->form_validation->set_rules('status','Status','required|trim');

    if (empty($_FILES['Cat_image']['name'])) {
        $this->form_validation->set_rules('Cat_image', 'Category Image', 'required|trim');
    }

    if( $this->form_validation->run())
    {
        $post = $this->input->post();






        $post= $this->input->post();
        //print_r($post);
        //die;
       
         $config['upload_path']   = './uploads';
         $config['allowed_types'] =  '*';
   
     $this->load->library('upload', $config);
     $this->upload->do_upload('Cat_image');
     $data = $this->upload->data();
  
     $post['Cat_image']= $data['raw_name'].$data['file_ext'];

        $check=$this->Category_model->Add_category($post);
if($check){
    $this->session->set_flashdata('successmag','Data Inserted Sucessfully!');
    redirect('Category_ctr');
}
    }else{
        $data['catogeries'] = $this->Category_model->Get_all_category();
        $this->load->view('category',$data); 
    }
}

public function get_sub_cate() {
$cate_id =$this->input->post('cate_id');
echo $this->Category_model->get_sub_cate($cate_id);
}
}