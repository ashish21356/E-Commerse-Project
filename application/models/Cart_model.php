<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_model extends CI_Model {

public function Get_userid()  {
    if(!empty($this->session->userdata('login_id'))){
        return $this->session->userdata('login_id');
    }else{
        return $this->session->userdata('user_id');
    } 

}

public function Get_cart_total() {
    $q = $this->db->select('SUM(pro_price * pro_qty) as total_price')->where(['user_id' => $this->Get_userid(),'updated_on'=>null,'order_id'=>0])->get('ec_cart');
    //print_r($q->result());die;
    if ($q->num_rows() > 0) {
        //$total = $q->row()->total_price;
        $total = $q->row()->total_price;
        //print_r($total);die;
         if ( $total > 499) {
        return array('subtotal'=>$total,'grandtotal'=>$total,'delivery'=>0);
            
    }else{
        if ($total == 0) {
            return array('subtotal'=>0,'grandtotal'=>0,'delivery'=> 0);
        }else{
        return array('subtotal'=>$total,'grandtotal'=>$total+40,'delivery'=>40);
    }
}
}
else{
    return false;  
}
}

public function delete_product_from_cart($pro_id) { 
    $q=$this->db->where(['pro_id'=>$pro_id,'user_id'=>$this->Get_userid()])->delete('ec_cart',['pro_id'=>$pro_id]);
if($q> 0) {
return true;

} else {
return false;

}
}

public function update_cart($data) {
   // print_r($data);die;
   $count = count($data['update_pro_id']);
for ($i = 0; $i < $count; $i++) {
    $q=$this->db->where(['pro_id'=>$data['update_pro_id'][$i],'cart_id'=>$data['cart_id'][$i],'user_id'=>$this->Get_userid()])->update('ec_cart',['pro_qty'=>$data['update_qty'][$i]]);
}
if ($q) {  
    return true;
 }
else{
return false;
}
}
public function Get_cart() {  

    $exist = $this->db->where(['user_id'=>$this->Get_userid(),'updated_on'=>null,'order_id'=>0])->get('ec_cart');
    if($exist->num_rows()> 0){
      return $exist->result();
    }else{ 
        
            return FALSE;   
}
}
    public function add_product_to_cart($post){
        //echo "hiii";die;

        $exist = $this->db->where(['pro_id'=>$post['pro_id'],'updated_on'=>null,'user_id'=>$this->Get_userid()])->get('ec_cart');
        
        if($exist->num_rows()== false){
            //echo "higffgii";die;
            // $row = $exist->row(); // Get the first row of the result
            // $order_id = $row->order_id; // Access the order_id property of the row
            // if($order_id== 0){
              

          
            $order_placed_check = $this->db->where(['pro_id'=>$post['pro_id'],'	order_id'=>0,'user_id'=>$this->Get_userid()])->get('ec_cart');
            if($order_placed_check->num_rows()== 0){
                
        $q= $this->db->select('pro_name,selling_pricce,slug,pro_main_image')->where('pro_id',$post['pro_id'])->get('ec_product');
        if($q->num_rows()> 0){


           
            $prod = $q->row();
           
            $data['user_id']=$this->Get_userid();
            $data['cart_id']= mt_rand(1111,9999);
            $data['added_on']= date('Y-m-d');
            $data['pro_id']= $post['pro_id'];
            $data['pro_qty']= $post['pro_qty'];
            $data['pro_price']= $prod->selling_pricce;
            $data['slug']= $prod->slug;
            $data['pro_name']= $prod->pro_name;
            $data['pro_image']= $prod->pro_main_image;
            $q=$this->db->insert('ec_cart',$data);
            if($q){
                //echo "vvv";die;
            return true;
            
        }else{
           // echo "yyy";die;
            return false;


    }
}
}
}
}
}
