<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_ctr extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Category_model');
        $this->load->model('Product_model');
        $this->load->model('Home_model');
        if(!empty($this->session->userdata('login_id'))){

        }else
        {
  redirect('Login_ctr');
        }
        //$this->load->library('form_validation');
    }
    public function Product_table_view(){
      $this->load->view('index');
    }
    
    public function testview(){
        $this->load->view('test');
      }
	public function product_update(){
        $pro_id = $this->input->get('pro_id');
        $data['unit'] = $this->Product_model->product_update($pro_id);
        $data['catogeries'] = $this->Category_model->Get_all_category();
        $this->load->view('Product_update',$data);
}
    public function Get_all_Product(){
        $page = $this->input->get('page')?: 1;
        $items_per_page = 5; 
        $offset = ($page - 1) * $items_per_page;
        $resultList = $this->Product_model->Get_all_Products($items_per_page, $offset);
        $data['data'] = $resultList; 
        $total_products = $this->Product_model->Get_total_products_count();
        $data['total'] = $total_products; 
        echo json_encode($data); 
    }
    

public function product_delete()
	{
		$response = array("status"=>1,"msg"=>"Product has been successfully deleted.");
          $id= $this->input->get('pro_id');
		  $lert['cargo'] = $this->Product_model->product_delete_by_id($id);
		if(!$lert['cargo'])
	 {
	  $response = array("status"=>0,"msg"=>"database error"); 
	 }	  
	 echo json_encode($response);
	}


public function index() { 
$this->form_validation->set_rules('pro_id','Product ID','required|trim');
$this->form_validation->set_rules('category','Category','required|trim');
$this->form_validation->set_rules('pro_name','Product Name','required|trim');
$this->form_validation->set_rules('brand','Brand','required|trim');
$this->form_validation->set_rules('featured','Featured','required|trim');
$this->form_validation->set_rules('highlights','Highlights','required|trim');
$this->form_validation->set_rules('discription','Discription','required|trim');
$this->form_validation->set_rules('stock','Stock','required|trim');
$this->form_validation->set_rules('mrp','MRP','required|trim');
$this->form_validation->set_rules('selling_pricce','Selling Pricce','required|trim');
$this->form_validation->set_rules('status','Status','required|trim');

if (empty($_FILES['pro_main_image']['name'])) {
    $this->form_validation->set_rules('pro_main_image', 'Product Image', 'required|trim');
}
if( $this->form_validation->run())
    {
        $post= $this->input->post();
        $config['upload_path']   = './uploads';
        $config['allowed_types'] =  '*';
  
    $this->load->library('upload', $config);
    $this->upload->do_upload('pro_main_image');
    $data = $this->upload->data();
    $post['pro_main_image']= $data['raw_name'].$data['file_ext'];
    $check=$this->Product_model->Add_product($post);
    if ($check) { $this->session->set_flashdata('successmag',' Product added sucessfully.'); 
    redirect('Product_ctr');
}else{
        $this->session->set_flashdata('Errmsg',' Failed to add the product.'); 
        redirect('Product_ctr');
}
}else{
    if($this->session->userdata('pro_id')!=''){
        $pro_id = $this->session->userdata('pro_id');
        }else{
            $pro_id = mt_rand(1111, 9999);
            $this->session->set_userdata('pro_id', $pro_id);
        } 
        $data['catogeries'] = $this->Category_model->Get_all_category();
        $data['pro_id'] = $pro_id;
        $this->load->view('product',$data); 
    }
}

public function update_product_data() {  
$this->form_validation->set_rules('pro_id','Product ID','trim');
$this->form_validation->set_rules('category','Category','trim');
$this->form_validation->set_rules('pro_name','Product Name','trim');
$this->form_validation->set_rules('brand','Brand','trim');
$this->form_validation->set_rules('featured','Featured','trim');
$this->form_validation->set_rules('highlights','Highlights','trim');
$this->form_validation->set_rules('discription','Discription','trim');
$this->form_validation->set_rules('stock','Stock','trim');
$this->form_validation->set_rules('mrp','MRP','trim');
$this->form_validation->set_rules('selling_pricce','Selling Pricce','trim');
$this->form_validation->set_rules('status','Status','trim');

if (empty($_FILES['pro_main_image']['name'])) {
    $this->form_validation->set_rules('pro_main_image', 'Product Image', 'trim');
}

if( $this->form_validation->run())
    {
        $post= $this->input->post();
        $config['upload_path']   = './uploads';
        $config['allowed_types'] =  '*';
    $this->load->library('upload', $config);
    $this->upload->do_upload('pro_main_image');
    $data = $this->upload->data();
    $post['pro_main_image']= $data['raw_name'].$data['file_ext'];
    $check=$this->Product_model->update_product_with_data($post);
    if ($check) { $this->session->set_flashdata('successmag',' Product updated sucessfully.'); 
    redirect('Product_ctr/Product_table_view');
}else{
    
        $this->session->set_flashdata('Errmsg',' Failed to update the product.'); 
        redirect('Product_ctr/Product_table_view');
}
}else{
    if($this->session->userdata('pro_id')!=''){
        $pro_id = $this->session->userdata('pro_id');
        }else{
            $pro_id = mt_rand(1111, 9999);
            $this->session->set_userdata('pro_id', $pro_id);
        }
        $data['catogeries'] = $this->Category_model->Get_all_category();
        $data['pro_id'] = $pro_id;
        $this->load->view('product',$data); 
    }
}


public function Product_by_category($slug,$slug2 =''){
if(!empty($slug) && !empty($slug2)){
    $slug=$slug2;
}else{
    $slug=$slug;
}
// $slug;die;
    $categ_id= $this->Product_model->fetch_category($slug);    
   // print_r($pro_id);echo "hghgh";die;
    $pro= $this->Product_model->fetch_product($categ_id);    
    echo"<pre>";
    print_r($pro);
}

}
