<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include_once APPPATH.'third_party/Client.php';
include_once APPPATH.'third_party/jsonRPCClient.php';

class Paymentcoin extends CI_Controller 
{   
	public function __construct() 
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('session','cart');
        $this->load->library('Rpc');
        $this->load->library('email','parser');
        $this->load->model('Account_model');
        $this->load->model('Host_model');
        $this->load->model('User_model');
        $this->load->model('Wallet_model');
        $this->load->model('Coin_model');
        $this->load->model('UserManagerModel');
        $this->load->database();
        $this->load->library('googleAuth/GoogleAuthenticator');
       // if($this->session->userdata('is_logged_in'))
       //  {
       //      redirect(base_url().'login');
       //  }
    }
    public function index()
    {
    	$coin=$this->Coin_model->listing();
    	$data= array(
    		    'coins'=>$coin,
            'coinRate'=>$this->input->post('coinRate'),
            'collbackurl'=>$this->input->post('collbackurl'),
            'email'=>$this->input->post('email'),
            'publicKey'=>$this->input->post('publicKey'),
    		);
      //print_r($data); die();
        $this->load->view('dashboard/select-coin',$data);
    }
    public function payment()
    {

         $email=$this->input->post('email');
         $collbackurl=$this->input->post('collbackurl');
          $product_amount=$this->input->post('coinRate'); 
         //cho $coinlabel=strtolower($this->input->post('coinLabel'));
         $publicKey=$this->input->post('publicKey');
         $public=$this->Wallet_model->wallet_public($publicKey);
           $coinName=strtolower($this->input->post('coinLabel'));
         if($public[0]->email)
         {
          
               if($coinName=='bitcoin'){
                  $coinlabel='BTC';
               }
               else if($coinName=='litecoin'){
                    $coinlabel='LTC';
               }
               else if($coinName=='dogecoin'){

                    $coinlabel='DGC';
               }
                $url = "https://bittrex.com/api/v1.1/public/getticker?market=USDT-".$coinlabel; 
               $decode = json_decode(file_get_contents($url), true); 
                $coinval=floatval($decode['result']['Ask']);
                $coinval=$product_amount/$coinval;
             
               $this->db->insert('walletnotify',array('tot_amt'=> $coinval,'email'=>$email,'publickey'=>$publicKey,));
               if($host=$this->Host_model->hosting())
               {
             
                $rpc_host = $host[0]->host_name;
                $rpc_port = $host[0]->host_port;
                $rpc_user = $host[0]->host_user;
                $rpc_pass = $host[0]->host_pass;
                $client= new Client($rpc_host, $rpc_port, $rpc_user, $rpc_pass);
                if($client)
                {
                  $newaddress=$client->getNewAddress($public[0]->email);
                }
                 $rand = mt_rand(10000,99999);
                 $this->db->insert('walletnotify',array('address'=>$newaddress,'invoice'=>$rand,'publickey'=>$publicKey,)); 
                  $subject="Invoice Id";
                 $message = 'Transection Invoice Id:'.$rand;
                 $config['protocol'] = 'smtp';
                 $config['smtp_host'] = 'ssl://smtp.zoho.com';
                 $config['smtp_port'] = 465;
                 $config['smtp_user'] = 'info@v-coin.io';
                 $config['smtp_pass'] = 'vision@123';
                  $this->load->library('email',$config);
                  $this->email->set_newline("\r\n");
                  $this->email->from('noreply@gmail.com');
                  $this->email->to($this->input->post('myEmail'));
                  $this->email->subject($subject);
                  $this->email->message($message);
                  $this->email->send();
                
                    
                      $data=array(
                      'address'=> $newaddress,
                      'collbackurl'=>$collbackurl,
                      'amount'=>$coinval,
                      'publicKey'=>$public[0]->website,
                      'usd'=>$product_amount,
                      'plan'=>@$plan,
                      'coin'=>$this->input->post('coinLabel'),
                      'invoice'=>$rand,
                      );
                      //print_r($data); die();
                      $this->UserManagerModel->savemessge($email,$subject,$message,$rand);
                      $this->load->view('dashboard/confirm-payment',$data);
             
              }
            }
    }
    /*public function transection()
    {
        $address=$this->input->post('address');
        $amount=$this->input->post('amount');
        $comment='send successfully';
        $user="shubhamsahu707@gmail.com";

        $host=$this->Host_model->hosting();
        $rpc_host = $host[0]->host_name;
        $rpc_port = $host[0]->host_port;
        $rpc_user = $host[0]->host_user;
        $rpc_pass = $host[0]->host_pass;
        $client= new Client($rpc_host, $rpc_port, $rpc_user, $rpc_pass);
        if($client){
         $balance=$client->withdraw($user, $address, $amount, $comment);
        }

        
    }*/

    public function notifyWallet()
    {
        $not='TT8NYPxnGNLaUw8nsCgFfFymSCT8QmbHiQ';
        echo $query=$this->db->query("select * from walletnotify where wallet_status='$not'")->result();
         echo $query[0]->wallet_status;
        $host=$this->Host_model->hosting();
        $rpc_host = $host[0]->host_name;
        $rpc_port = $host[0]->host_port;
        $rpc_user = $host[0]->host_user;
        $rpc_pass = $host[0]->host_pass;
        $client= new Client($rpc_host, $rpc_port, $rpc_user, $rpc_pass);
        if($client){
         //echo $balance=$client->getBalance($query[0]->wallet_status);
          echo $tran=$client->gettransaction($not);
         //if($tran[0]["address"]== $not) 
         
        }
        
        
      // print_r($query);
       $this->db->where('wallet_status',$query[0]->wallet_status);
        $this->db->update('walletnotify',array('wallet_status'=>$not));
        
    }
    public function getnotification()
    {
           $not=$this->input->post('address');
           $query=$this->db->query("select * from walletnotify where wallet_status='".$not."'")->result();
            return count($query);

   }
    public function timedout($url)
    {
      $msg['msg']='<script>alert("Your transection timed out!")<script>';
      redirect($url,$msg,'refresh');
    }
}
