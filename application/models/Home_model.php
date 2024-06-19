<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

    public function Get_Banners(){
$q=$this->db->where('status','1')->order_by('id','desc')->get('ec_banner');
if($q->num_rows()> 0){  
    return $q->result();
    }
    else{
        return false;
    }
}

public function Get_Catages(){
    $q=$this->db->where('status','1')->order_by('id','desc')->get('ec_category');
    if($q->num_rows()> 0){  
        return $q->result();
        }
        else{
            return false;
        }
    }

    public function Get_Products(){
        $q=$this->db->where('status','1')->order_by('id','desc')->get('ec_product');
        if($q->num_rows()> 0){  
            return $q->result();
            }
            else{
                return false;
            }
        }

        public function cat_name($cate_id){    
       // return $cate_id;
        $q=$this->db->where('cate_id',$cate_id)->get('ec_category');
        if($q->num_rows()> 0){  
            return $q->row()->cate_name;
            }
            else{
                return false;
            }
        }
        public function Get_Product_detail($slug){
            $q=$this->db->where(['slug'=>$slug ,'status'=>1])->get('ec_product');
            if($q->num_rows()> 0){  
                return $q->row();
                }
                else{
                    return false;
                }
        }


        public function Get_category_name($cate_id){
            $q=$this->db->where(['cate_id'=>$cate_id ,'status'=>1])->get('ec_category');
            if($q->num_rows()> 0){  
                return $q->row()->cate_name;
                }
                else{
                    return false;
                }        
        }

        public function Get_Catageroy_nav(){       
            $q=$this->db->where(['status'=>1, 'parent_id'=>''])->get('ec_category');
            if($q->num_rows()> 0){  
                return $q->result();
                }
                else{
                    return false;
                }
        }

        public function get_sub_categ($cate_id){       
            $q=$this->db->where(['status'=>1, 'parent_id'=>$cate_id])->get('ec_category');
            if($q->num_rows()> 0){  
                return true;
                }
                else{
                    return false;
                }
        }

        public function get_all_sub_categ($cate_id){       
            $q=$this->db->where(['status'=>1, 'parent_id'=>$cate_id])->get('ec_category');
            if($q->num_rows()> 0){  
                return $q->result();
                }
                else{
                    return false;
                }
        }
}