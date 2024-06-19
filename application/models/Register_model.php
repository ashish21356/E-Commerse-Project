
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {

    public function register($POST){
//print_r($POST);

$data['user_id']=mt_rand(1110,9999);
$data['username']=$POST['name'];
$data['email']=$POST['email'];
//$data['password']=$POST['password'];
$data['password']=password_hash($POST['password'], PASSWORD_BCRYPT);       

$data['added_on']=date('Y-m-d H:i:s');
$data['added_on']=1;
$data['status']=1;
$data['ip']=$_SERVER['REMOTE_ADDR'];

$q=$this->db->insert('ec_users',$data);
if($q){
    return true;
}else{
    return false;
    }
}
}