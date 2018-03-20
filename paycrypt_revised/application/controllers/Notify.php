<?php
//http://162.213.252.66:90/gourl/crypto_frame/notify

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include_once APPPATH.'third_party/jsonRPCClient.php';
include_once APPPATH.'third_party/Client.php';

class Notify extends CI_Controller 
{
	public function __construct() 
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Wallet_model');
        $this->load->model('Host_model');
        $this->load->database();
        $this->load->library('Rpc');
        $this->load->library('email');
        // if($this->session->userdata('is_logged_in'))
        // {
        //     redirect(base_url().'login');
        // }
    }
	
    public function getAddressValue($data)
    { 

        $host=$this->Host_model->hosting();
        $rpc_host = $host[0]->host_name;
        $rpc_port = $host[0]->host_port;
        $rpc_user = $host[0]->host_user;
        $rpc_pass = $host[0]->host_pass;
        $client= new Client($rpc_host, $rpc_port, $rpc_user, $rpc_pass);
        $listing=$client->test($data);
        //print_r($listing);

        if($listing==0)
        {
        	echo "Transection Successfully!";
        }
       elseif($listing==1)
        {
        	echo  "Transection Confirmation Waiting!!";
        }
        else
        {
        	echo "Please send";
        }
      
    }
}


