<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {
function slug ($string)    {
    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string)));
    return $slug;
}
public function Add_product($post)  {
//echo "model";
//print_r($post);die;
$post['added_on']=date('Y-m-d H:i:s');
 $post['slug']= $this->slug($post['pro_name']);
    $q=$this->db->insert('ec_product', $post);
    if($q){
        $this->session->unset_userdata('pro_id');
        return true;
    }else{
return false;
    }
} 

public function fetch_category($slug) {
$q=$this->db->select('cate_id')->where('slug', $slug)->get('ec_category');
if($q->num_rows() > 0){ 
     return $q->row()->cate_id;
}
}

public function product_update($pro_id) {
    $this->db->where(['status'=>1,'pro_id'=>$pro_id]);
    $q = $this->db->get('ec_product');
    if($q->num_rows() > 0){
        return $q->result();
    } else {
        return false;
    }
}

public function update_product_with_data($post){
      $post['updated_on']=date('Y-m-d H:i:s');
      $data['pro_id']= $post['pro_id'];
      $id= $data['pro_id'];

       $this->db->select('*');
       $this->db->FROM('ec_product');
       $this->db->WHERE('pro_id',$id);    
       $q=$this->db->update('ec_product', $post);
       if($q){  
        return true;
        }else{
       return false;
    }
} 


public function fetch_product($categ_id) {
    $this->db->where(['status'=>1]);
    $this->db->like(['sub_category'=> $categ_id]);
    $this->db->or_like(['category'=> $categ_id]);
   

    $q = $this->db->get('ec_product');

    if($q->num_rows() > 0){
        return $q->result();
    } else {
        return false;
    }
}

public function product_delete_by_id($id){
    $this->db->select('*');
       $this->db->FROM('ec_product');
       $this->db->WHERE('pro_id',$id);    
    return $this->db->delete('ec_product');
    }

public function Get_all_Products($limit,$offset){
    //print_r($a);echo "<pre>";echo 'model';
   // print_r($b);die;
    $q=$this->db->where('status','1')->order_by('id','desc')->limit($limit, $offset)->get('ec_product');
    if($q->num_rows()> 0){  
        return $q->result_array();
        }
        else{
            return false;
        }
    }

    // Function to get the total count of products
    public function Get_total_products_count() {
        $q=$this->db->select('id')->get('ec_product');
        //print_r($q);die;
if($q->num_rows() > 0){ 
     return $q->num_rows();
}
       
    }
}