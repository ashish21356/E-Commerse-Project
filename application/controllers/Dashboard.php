<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if(!empty($this->session->userdata('login_id'))){

        }else
        {
  redirect('Login_ctr');
        }
    }
public function index() { 
$this->load->view('index');  

}


}