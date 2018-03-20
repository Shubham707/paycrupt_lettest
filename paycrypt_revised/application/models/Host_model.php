<?php 
/**
* product hosting
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Host_model extends CI_Model 
{
	public function __construct() 
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('parser');
    }
    public function hosting()
    {
        //$get=strtolower($coinlabel);
    	$sql="select * from credencial";
    	return $query=$this->db->query($sql)->result();
    }
      public function hostingid($coinlabel)
    {
        $get=strtolower($coinlabel);
        $sql="select * from credencial where coin_name='$get'";
        return $query=$this->db->query($sql)->result();
    }

	

}

