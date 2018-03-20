<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//include_once APPPATH.'third_party/jsonRPCClient.php';
include_once APPPATH.'third_party/Client.php';

class Messagebox extends CI_Controller 
{
	public function __construct() 
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Wallet_model');
        $this->load->model('Host_model');
        $this->load->model('UserManagerModel');
        $this->load->database();
        $this->load->library('Rpc');
        $this->load->library('email');
        $this->load->library('googleAuth/GoogleAuthenticator');
        //  if($this->session->userdata('is_logged_in'))
        // {
        //      redirect(base_url().'login');
        // }
    }

     public function index()
    { 
        $id=$this->session->userdata('userEmail');
        
        $data['messagelist']=$this->UserManagerModel->getmessagebyuser($id);
        
        $this->load->view('dashboard/message-box',$data);
    }
}