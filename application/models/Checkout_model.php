
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout_model extends CI_Model {
  

    public function Get_userid()  {
        if(!empty($this->session->userdata('login_id'))){
            return $this->session->userdata('login_id');
        }else{
            return $this->session->userdata('user_id');
        }
    }
    
    
    public function Get_cart_order_placed_specific($data) {
        // Ensure $data is structured correctly
        if (!is_array($data) ||!isset($data['cart_ids']) ||!is_array($data['cart_ids'])) {
            return []; // Return an empty array if $data is not structured correctly
        }
    
        $status = 'on the way'; // Define the status you're interested in
        $results = []; // Initialize an array to hold the results
    
        // Iterate through each cart ID in $data['cart_ids']
        foreach ($data['cart_ids'] as $cart_id) {
            $query = $this->db->where([
                'cart_id' => $cart_id,
                'user_id' => $this->Get_userid(), // Assuming Get_userid() returns the current user's ID
                'status' => $status
            ])->get('ec_cart');
    
            // If a matching record is found, add it to the results array
            if ($query->num_rows() > 0) {
                $results[] = $query->result();
                
            }
        }
    //print_r($results);die;
        return $results; // Return the array of matching records
    }
    
    
    public function Get_cart_total_order_placed_specific($data) {
        if (!is_array($data) ||!isset($data['cart_ids']) ||!is_array($data['cart_ids'])) {
            return []; // Return an empty array if $data is not structured correctly
        }
    
        $status = 'on the way'; // Define the status you're interested in
        $results = [];
        $total_price = 0;
        $status = 'on the way';

        foreach ($data['cart_ids'] as $cart_id) {
        $q = $this->db->select('SUM(pro_price * pro_qty) as total_price')->where(['cart_id' => $cart_id,'user_id' => $this->Get_userid(),'status'=> $status])->get('ec_cart');
      
        // If a matching record is found, add it to the results array
        if ($q->num_rows() > 0) {
            $results = $q->result();
            foreach ($results as $row) {
                $results[] = $row; // Add each row to the results array without nesting
                $total_price += $row->total_price; // Add the total price to the sum
            }
             
    //print_r($total_price);die;
    //return $total_price; // Return the array of matching records
//}
             if ( $total_price >499) {
              
            return array('subtotal'=>$total_price,'grandtotal'=>$total_price,'delivery'=>0);
             }
            if ($total_price == 0) {
                return array('subtotal'=>0,'grandtotal'=>0,'delivery'=> 0);
            }else{
            return array('subtotal'=>$total_price,'grandtotal'=>$total_price+40,'delivery'=>40);
        }
    }
}}
    
public function Get_cart_order_placed() {  
    $status = 'on the way';
    $result = [];
    $this->db->select('*');
   // $this->db->FROM('ec_cart');
   //$q= $this->db->where(['user_id' => $this->Get_userid(),'status'=> $status])->get('ec_cart');
   $q = $this->db->where(['user_id' => $this->Get_userid()], null, FALSE)
   ->or_where(['status' => $status])
   ->or_where(['status' => 'Delivered'])
   ->get('ec_cart');
   
       if ($q->num_rows() > 0) {
            $result = $q->result();
}if ($result){
    //print_r($result);die;
    return $result;
}else
//echo "ggg";die;
return false;
}

    public function Get_cart_total_order_placed() {
        // Perform the database query
        $status = 'on the way';
        $q = $this->db->select('(pro_price * pro_qty) as multiply')
                      ->where(['user_id' => $this->Get_userid(), 'status' =>  $status ])
                      ->get('ec_cart');
        
        if ($q->num_rows() > 0) {
            $result = $q->result();
            
           // $products = [];
            
            foreach ($result as $row) {
                $subtotal = $row->multiply;
                
                // Determine the delivery amount for this product
                $delivery_amount = ($subtotal < 499) ? 40 : 0;
                
                // Calculate the grand total for this product
                $grandtotal = $subtotal + $delivery_amount;
                
                // Add the product details to the array
                $products[] = (object) [
                    'subtotal' => $subtotal,
                    'grandtotal' => $grandtotal,
                    'delivery' => $delivery_amount
                ];
                
            }
            //print_r($products);die;
            return $products;
        } else {
            return false;  
        }
    }
    
    

    public function insert_customer_address($Customer_address,$Customer_product,$payment) { 

        $cartIds = [];
       foreach ($Customer_product as $item) {
       // Append the cart_id to the $cartIds array
       $cartIds[] = $item['cart_id'];
       }
        $status = 'on the way';
        $paymentmode=$payment['payment_mode'];
        $updated_on= date('Y-m-d H:i:s');
        $user_id=$this->Get_userid();
        $this->db->insert('ec_address',$Customer_address);
        $order_id = mt_rand(00000,999999);
        if($order_id){  
            foreach ($Customer_product as $product) {
    $this->db->set(['updated_on' =>  $updated_on, 'order_id' => $order_id,'payment_mode'=> $paymentmode,'status'=>$status]);
    $this->db->where([
        'user_id' => $user_id,
        'pro_id' => $product['pro_id'],
        'pro_qty' => $product['pro_qty'],
        'cart_id' => $product['cart_id']
    ]);
    $q=$this->db->update('ec_cart');
   
}
if($q) {
    return $cartIds; 
    
}else{
    return false;
}
       
}
    }}
    