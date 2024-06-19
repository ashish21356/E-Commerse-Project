
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings_mdl extends CI_Model {

    public function Add_pincode($post){
   // $post['added_on'] = date('Y-m-d H:i:s');
    //$post['cate_id'] = mt_rand(1111,9999);
    
    $q=$this->db->insert('ec_pincode', $post);
    if($q){
        return true;
    }else{
return false;
    }

}


public function Add_banner($post){
    $post['added_on']= date('Y-m-d');
    $post['bann_id']= mt_rand(1111,9999);
     $q=$this->db->insert('ec_banner', $post);
     if($q){
         return true;
     }else{
 return false;
     }
 
 }

public function Get_all_category(){
 $q=$this->db->where(['status'=>1, 'parent_id'=>''])->get('ec_category');
 if($q->num_rows()){
    return $q->result();
}
}
}