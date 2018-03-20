<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//include_once APPPATH.'third_party/jsonRPCClient.php';
include_once APPPATH.'third_party/Client.php';

class Withdraw extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Wallet_model');
        $this->load->model('Host_model');
        $this->load->model('UserManagerModel');
        $this->load->database();
        $this->load->library('session');
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
        $email=$this->session->userdata('userEmail');
        $amount=$this->input->post('amount');
        $with=$this->input->post('address');
        $currency=$this->input->post('currency');
        $withdraw_Address=$this->Host_model->addresswithdraw($currency);
        if($withdraw_Address)
        {
        $reciever_address=$withdraw_Address[0]->with_address;
        $host=$this->Host_model->hosting();
         $rpc_host = $host[0]->host_name;
         $rpc_port = $host[0]->host_port;
         $rpc_user = $host[0]->host_user;
         $rpc_pass = $host[0]->host_pass;
         $rpc_name = $host[0]->coin_name;
        
        $client= new Client($rpc_host, $rpc_port, $rpc_user, $rpc_pass);
        
        }
       if(isset($client))
        {
               //$tran=$client->getNewAddress($reciever_address);
             // $balance=$client->getBalance($reciever_address);
           $withdraw_message = $client->withdraw($reciever_address, $with, (float)$amount, 'Payment Successfully');
            $getArray['totalearning']=$this->UserManagerModel->currentearning($email);
            $getArray['message']="Payment Successfully!";
            $getArray['coinsList']=$this->UserManagerModel->coinsList();
          $this->load->view('dashboard/withdraw',$getArray);
        }
        else{ 
             $getArray['totalearning']=$this->UserManagerModel->currentearning($email);
            $getArray['coinsList']=$this->UserManagerModel->coinsList();
        $getArray['message']="Payment not Successfully!";
          $this->load->view('dashboard/withdraw',$getArray);
      }
        
    }
    
    
    public function addwithdraw()
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
                  $newaddress=$client->getNewAddress($email);
                }

        $data['totalearning']=$this->UserManagerModel->currentearning($email);
        $data['coinsList']=$this->UserManagerModel->coinsList();
        $data['address']=$newaddress;
        $this->load->view('dashboard/withdraw',$data);
    }
    
    public function get_data($url)
    { 
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, Array("User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.15) Gecko/20080623 Firefox/2.0.0.15") ); 
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result= curl_exec ($ch);
        curl_close ($ch); 
        return $result; 
    }
    
    
    
}
