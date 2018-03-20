<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Product extends CI_Model{
        //get and return product rows
        public function getRows($id = ''){
            $this->db->select('planId,planType,payable_amount');
            $this->db->from('plans_tbl');
            if($id){
                $this->db->where('planId',$id);
                $query = $this->db->get();
                $result = $query->row_array();
            }else{
                $this->db->order_by('planId','asc');
                $query = $this->db->get();
                $result = $query->result_array();
            }
            return !empty($result)?$result:false;
        }
        //insert transaction data
        public function insertTransaction($data = array()){
            $insert = $this->db->insert('payments_plan',$data);
            return $insert?true:false;
        }
    }
?>