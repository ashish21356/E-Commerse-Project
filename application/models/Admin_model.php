
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
    public function CHECK_USER($post){
        // Sanitize user input
        echo  $email = $post['email'];
         $pass = $post['password'];

            $q = $this->db->where(['status'=>1,'email' => $email])->get('ec_users');
        
            

            if ($q->num_rows() > 0) {
                $db_pass = $q->row()->password;
                $user_id = $q->row()->user_id;
                $username = $q->row()->username;
                //print_r($user_id);

                if(password_verify( $pass, $db_pass)) {
                    $this->session->set_userdata('login_id', $user_id);
                    $this->session->set_userdata('username', $username);
                    $this->db->where('user_id',$this->session->userdata('user_id'))->update('ec_cart',['user_id'=>$user_id]);
            return true;
                   
                } else {
                   
                    return false;
                }
            } else {
               
                return false;
            }
        }}