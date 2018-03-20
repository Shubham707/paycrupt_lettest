<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//include_once APPPATH.'third_party/jsonRPCClient.php';
include_once APPPATH.'third_party/Client.php';


class Payment extends CI_Controller 
{

	public function __construct() 
    {
        parent::__construct();
        $this->load->helper('form');
         $this->load->model('Account_model');
         $this->load->model('Coin_model');
         $this->load->model('Host_model');
        $this->load->database();
        $this->load->library('session','Rpc');
        $this->load->model('Product_model');
        /* if($this->session->userdata('user_id')=='')
        {
            redirect('user/login');
        }*/
    }
    public function index()
    {
        $host=$this->Host_model->hosting();
        $rpc_host = $host[0]->host_name;
        $rpc_port = $host[0]->host_port;
        $rpc_user = $host[0]->host_user;
        $rpc_pass = $host[0]->host_pass;

        $email=$this->session->userdata('userEmail');
        $id=$this->session->userdata('user_id');
        $boxid=$this->session->userdata('box_id');

        $security=$this->Account_model->security_key_listing($id,$boxid);
         $keyValue=$this->Account_model->paymentCoin();

         $client= new Client($rpc_host, $rpc_port, $rpc_user, $rpc_pass);
         if($client){
         $balance=$client->getBalance($email); 
         $newaddress=$client->getNewAddress($email);
         $address=$client->getAddress($email);
        }
         $data=array(
            'address'=>$address,
            'balance'=>$balance,
            'email'=> $email,
            'coin'=> 'Bitcoin',
            'newAddress'=>$newaddress,
            'allData'=>$keyValue,
            'security'=>$security,
        );
         $data['invoice']=$this->load->view('frontend/payment-invoice',$data,true);
	//print_r($data); die();
        $this->load->view('frontend/payment-data',$data);
    }

    public function payment_add()
    {
        $coin=$_REQUEST['multiCurrency'];
    }

    public function new_payment()
    {
        $email=$this->session->userdata('userEmail');
        $host=$this->Host_model->hosting();

        $rpc_host = $host[0]->host_name;
        $rpc_port = $host[0]->host_port;
        $rpc_user = $host[0]->host_user;
        $rpc_pass = $host[0]->host_pass;

        $client= new Client($rpc_host, $rpc_port, $rpc_user, $rpc_pass);
        if($client)
        {
         
         $balance=$client->getBalance($email); 
         $newaddress=$client->getNewAddress($email);
        }
         $coins=$this->Coin_model->listing();
         $id=$this->session->userdata('box_id');

         $data=array(
            'boxid'=> $id,
            'coins'=> $coins,
            'address'=>$newaddress,
            );
         $this->load->view('dashboard/example',$data);
    }
    public function secret_key()
    {
 
         $this->load->view('dashboard/create-new-payment-box');
   
    }
    public function unrecognised_received_payments()
    {
        $data['country']=$this->Product_model->country();
 
        $this->load->view('dashboard/unrecognised-received-payments',$data);

    }
    public function auto_payments_external_wallet()
    {
        $data['country']=$this->Product_model->country();
        $this->load->view('dashboard/auto-payments-to-your-wallet',$data);
    }
    public function payment_successfull()
    {
        $data['country']=$this->Product_model->country();
        $this->load->view('dashboard/payment-successfull',$data);
      
    }
    public function multi_pay_post()
    {
        $coins=$this->Coin_model->listing();
         $id=$this->session->userdata('box_id');

         $data=array(
            'boxid'=> $id,
            'coins'=> $coins,
            );
        $this->load->view('frontend/multi-payment-post',$data);
    }
    public function payment_go_url()
    {
        $host=$this->Host_model->hosting();
        $rpc_host = $host[0]->host_name;
        $rpc_port = $host[0]->host_port;
        $rpc_user = $host[0]->host_user;
        $rpc_pass = $host[0]->host_pass;
        
        $email=$this->session->userdata('email');
         $client= new Client($rpc_host, $rpc_port, $rpc_user, $rpc_pass);
         $data['balance']=$client->getBalance($email); 
         $data['newaddress']=$client->getNewAddress($email);
         $data['address']=$client->getAddress($email);
         $this->load->view('frontend/payment-wallet-data');
        
    }


}
