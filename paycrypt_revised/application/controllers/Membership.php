<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include_once APPPATH.'third_party/jsonRPCClient.php';
include_once APPPATH.'third_party/Client.php';



class Membership extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
       	$this->load->library('session','Rpc');
        $this->load->model('Account_model');
        $this->load->model('Host_model');
        $this->load->model('Coin_model');
        // if($this->session->userdata('is_logged_in'))
        // {
        //     redirect(base_url().'login');
        // }
	}
	

	public function pay_per_membership()
	{
	$host=$this->Host_model->hosting();
        $rpc_host = $host[0]->host_name;
        $rpc_port = $host[0]->host_port;
        $rpc_user = $host[0]->host_user;
        $rpc_pass = $host[0]->host_pass;
        
        $email=$this->session->userdata('email');
        $id=$this->session->userdata('user_id');
        $boxid=$this->session->userdata('box_id');

         $security=$this->Account_model->security_key_listing($id,$boxid);
         $keyValue=$this->Account_model->paymentCoin();

         $client= new Client($rpc_host, $rpc_port, $rpc_user, $rpc_pass);
         $balance=$client->getBalance($email); 
         $newaddress=$client->getNewAddress($email);
         $address=$client->getAddress($email);

         $data=array(
            'address'=>$address,
            'balance'=>$balance,
            'email'=> $email,
            'coin'=> 'Bitcoin',
            'newAddress'=>$newaddress,
            'allData'=>$keyValue,
            'security'=>$security,
        );
	      // print_r($data); die();
		$this->load->view('frontend/pay-per-membership',$data);

	}
	public function cryptocoin($value,$id)
    {
        $getData=$this->Account_model->coinboxs_payment($value,$id);
        $host=$this->Host_model->hosting();
        $rpc_host = $host[0]->host_name;
        $rpc_port = $host[0]->host_port;
        $rpc_user = $host[0]->host_user;
        $rpc_pass = $host[0]->host_pass;
       /* $getData=$this->Account_model->invoice($coin);*/
        $email=$this->session->userdata('email');
        $id=$this->session->userdata('user_id');
        $boxid=$this->session->userdata('box_id');

        $security=$this->Account_model->security_key_listing($id,$boxid);
        $keyValue=$this->Account_model->paymentCoin();
         $coinList=$this->Coin_model->listing();
         $client= new Client($rpc_host, $rpc_port, $rpc_user, $rpc_pass);
         $balance=$client->getBalance($email); 
         $address=$client->getAddress($email);
         $newaddress=$client->getNewAddress($email);
         $keyValue=$this->Account_model->view_account();
            $data=array(
                'address' =>$address,
                'balance' =>$balance,
                'email' => $email,
                'newAddress' =>$newaddress,
                'coin' => 'Bitcoin',
                'coinList' =>$coinList,
                'allData' =>$coinList,
                'security' =>$security,
            );
           
        $this->load->view('frontend/pay-per-membership', $data);
        
    }
	
}
