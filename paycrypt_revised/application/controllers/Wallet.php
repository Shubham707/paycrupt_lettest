<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//include_once APPPATH.'third_party/jsonRPCClient.php';
include_once APPPATH.'third_party/Client.php';

class Wallet extends CI_Controller 
{
	public function __construct() 
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Wallet_model');
        $this->load->model('Host_model');
        $this->load->model('Account_model');
        $this->load->database();
        $this->load->library('Rpc');
        $this->load->library('email');
        $this->load->library('googleAuth/GoogleAuthenticator');
    }
	
    public function index()
    { 
        $host=$this->Host_model->hosting();
        $rpc_host = $host[0]->host_name;
        $rpc_port = $host[0]->host_port;
        $rpc_user = $host[0]->host_user;
        $rpc_pass = $host[0]->host_pass;

        $email=$this->input->post('email');
        $client= new Client($rpc_host, $rpc_port, $rpc_user, $rpc_pass);
        $balance=$client->getBalance($email); 
        $address=$client->getAddress($email);
        $newaddress=$client->getNewAddress($email);

        $rand='#inv-'.rand(99999,10000);
        $private=$this->input->post('privateURL');
        $query=$this->Wallet_model->check_private($private);
       //print_r($query); die();
        if($query[0]->privateKey==$private){
            $getArray= array(
                'id' => $rand,
                'privateURL' =>$query[0]->publicKey,
                'privateText' => $this->input->post('privateText'),
                'publicTitle' => $this->input->post('publicTitle'),
                'walletAddress' => $this->input->post('walletAddress'),
                'expiryDate' => $this->input->post('expiryDate'),
                'boxId' => $this->input->post('boxId'),
                'coinLabel'=> $this->input->post('coinLabel'),
                'coinRate'=> $this->input->post('coinRate'),
                'affiUSD'=> $this->input->post('affiUSD'),
                'balance'=> $balance,
                'address'=> $address,
                'newaddress'=> $newaddress,
            ); 
           // print_r($getArray); die();
            $this->load->view('dashboard/button-create',$getArray);
        }
        else
        {
            $getArray['message']="Private Key is not found!";
            redirect(base_url().'payment/new_payment','refresh');
        }
    }
    public function withdraw()
    {

       $host=$this->Host_model->hosting();
        $rpc_host = $host[0]->host_name;
        $rpc_port = $host[0]->host_port;
        $rpc_user = $host[0]->host_user;
        $rpc_pass = $host[0]->host_pass;

        $public=$this->input->post('publicURL');
        $email=$this->input->post('email');
        $boxname=$this->input->post('coinLabel');

        $client= new Client($rpc_host, $rpc_port, $rpc_user, $rpc_pass);
        $balance=$client->getBalance($email); 
        $address=$client->getAddress($email);
        $newaddress=$client->getNewAddress($email);

        $rand='#inv-'.rand(99999,10000);
        $usd=$this->input->post('usd');
        $inr=$this->input->post('inr');
        if($usd){
            $url = "https://bitpay.com/api/rates";
            $json= $this->get_data($url);
            $dataarr = json_decode($json, TRUE);
            $onebtcrate = $dataarr[1]["rate"]; 
           $data= round($usd,2)/round($onebtcrate,2);
            
        }
        else if($inr){
            $url = "https://bitpay.com/api/rates";
            $json= $this->get_data($url);
            $dataarr = json_decode($json, TRUE);
            $onebtcrate = $dataarr[66]["rate"]; 
            $data=$inr/$onebtcrate;
        }
      
        $getDetail=$this->Wallet_model->getDetails($public,$email,$boxname);
         
        if($getDetail[0]->publicKey == $this->input->post('publicURL')) 
        {
            
            $getArray= array(
                'id' => $rand,
                'walletAddress' => $this->input->post('walletAddress'),
                'boxId' => $this->input->post('boxId'),
                'coinRate'=> $this->input->post('coinRate'),
                'address'=> $address,
                'coinLabel'=> $getDetail[0]->boxName,
                'newaddress'=> $newaddress,
                'balance'=> $balance,
                'rate'=>$data,
                'boxname'=>$boxname,
            );
           // print_r($getArray); die();
            $this->load->view('frontend/cart_view',$getArray);
        }
        else{
             $getArray= array(
                    'id' => $rand,
                    'walletAddress' => $this->input->post('walletAddress'),
                    'boxId' => $this->input->post('boxId'),
                    'coinRate'=> $this->input->post('coinRate'),
                    'balance'=> $balance,
                    'address'=> $address,
                    'newaddress'=> $newaddress,
                    'rate'=>$data,
                    'boxname'=>$boxname,
                );
            $getArray['message']="Your public key id is wrong!";
            $getArray=$this->session->set_flashdata('flashSuccess', 'This is a success message.');
            $this->load->view('frontend/create-button', $getArray);
        }
        //print_r($getArray); die();
       
    }

    public function withdrawBitcoin()
    {
        $host=$this->Host_model->hosting();
        $rpc_host = $host[0]->host_name;
        $rpc_port = $host[0]->host_port;
        $rpc_user = $host[0]->host_user;
        $rpc_pass = $host[0]->host_pass;

        

        $client= new Client($rpc_host, $rpc_port, $rpc_user, $rpc_pass);
        $balance=$client->getBalance($email); 
        $address=$client->getAddress($email);
        $newaddress=$client->getNewAddress($email);

        $rand='#inv-'.rand(99999,10000);

        $boxId=$this->input->post('boxId');
        $email=$this->input->post('email');
        $boxname=$this->input->post('boxname');
        $getDetail=$this->Wallet_model->getDetails($boxId,$email,$boxname);
        //print_r($getDetail['boxID']); die();

        $getArray= array(
            'id' => $rand,
            'privateURL' =>$this->input->post('privateURL'),
            'privateText' => $this->input->post('privateText'),
            'publicTitle' => $this->input->post('publicTitle'),
            'walletAddress' => $this->input->post('walletAddress'),
            'expiryDate' => $this->input->post('expiryDate'),
            'boxId' => $this->input->post('boxId'),
            'coinLabel'=> $this->input->post('coinLabel'),
            'coinRate'=> $this->input->post('coinRate'),
            'affiUSD'=> $this->input->post('affiUSD'),
            'balance'=> $balance,
            'address'=> $address,
            'newaddress'=> $newaddress,
        );
        
        //print_r($getArray); die();
    }
    public function multi_wallet_payment()
    {

       /* $rpc_host = "104.219.251.147";
        $rpc_user="EBTC147";
        $rpc_pass="33Mj169rVg9d55Ef1QPt";
        $rpc_port="8116";

        $email=$this->input->post('email');
        echo $extract=$str = implode(",",$_REQUEST['bitcoin']);
        

        $client= new Client($rpc_host, $rpc_port, $rpc_user, $rpc_pass);
        $balance=$client->getBalance($email); 
        $address=$client->getAddress($email);
        $newaddress=$client->getNewAddress($email);
        $this->load->view('frontend/multiinvoice');*/
         $host=$this->Host_model->hosting();
        $rpc_host = $host[0]->host_name;
        $rpc_port = $host[0]->host_port;
        $rpc_user = $host[0]->host_user;
        $rpc_pass = $host[0]->host_pass;

        $email=$this->input->post('email');

        $client= new Client($rpc_host, $rpc_port, $rpc_user, $rpc_pass);
        $balance=$client->getBalance($email); 
        $address=$client->getAddress($email);
        $newaddress=$client->getNewAddress($email);

        $rand='#inv-'.rand(99999,10000);

        $boxId=$this->input->post('boxId');
        $boxname=$this->input->post('coinLabel');
        
        $getDetail=$this->Wallet_model->getDetails($boxId,$email,$boxname);
        //print_r( $getDetail[0]->boxID); die();
        if ($getDetail[0]->publicKey==$this->input->post('privateURL')) 
        {
                $getArray= array(
                    'id' => $rand,
                    'privateURL' =>$this->input->post('privateURL'),
                    'privateText' => $this->input->post('privateText'),
                    'publicTitle' => $this->input->post('publicTitle'),
                    'walletAddress' => $this->input->post('walletAddress'),
                    'expiryDate' => $this->input->post('expiryDate'),
                    'boxId' => $this->input->post('boxId'),
                    'coinLabel'=> $this->input->post('coinLabel'),
                    'coinRate'=> $this->input->post('coinRate'),
                    'affiUSD'=> $this->input->post('affiUSD'),
                    'balance'=> $balance,
                    'address'=> $address,
                    'newaddress'=> $newaddress,
                );
                print_r($getArray); die();
                $this->load->view('frontend/cart_view',$getArray);
        }
        else{
            
            $getArray['message']="Your public key id is wrong!";
            $this->index($getArray);
        }
        //print_r($getArray); die();
       $this->load->view('frontend/cart_view',$getArray);
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
    public function withdraw_value()
    {
         $host=$this->Host_model->hosting();
        $rpc_host = $host[0]->host_name;
        $rpc_port = $host[0]->host_port;
        $rpc_user = $host[0]->host_user;
        $rpc_pass = $host[0]->host_pass;

         $email=$this->input->post('email');
         $address=$this->input->post('address');
         $amount=$this->input->post('rate');
         $bitcoin=$this->input->post('bitcoin');
        $getData=$this->Wallet_model->withdraw_final($email,$bitcoin);
        //print_r($getData);die();
        $comment="Transection withdraw Address Based";
        $client= new Client($rpc_host, $rpc_port, $rpc_user, $rpc_pass);
        $balance=$client->getBalance($email);
        if($email){
            $this->withdraw($email, $address, $amount, $comment);
        }
        $htmlContent = '<h1>Gourl</h1>';
        $htmlContent=$this->load->view('frontend/invoice-temp');   
        $config['mailtype'] = 'html';
        $this->email->initialize($config);
        $this->email->to('shubhamsahu707@gmail.com');
        $this->email->from($this->input->post('email'),'Gourl');
        $this->email->subject('Ragistration Gourl Successfull');
        $this->email->message($htmlContent);
        $this->email->send();

        redirect($getData[0]->callbackUrl,'refresh');

    }
    public function payment_wallet()
    {
        

         $public=$this->input->post('publicURL');
        $value=$this->Wallet_model->wallet_public($public);
        if($value[0]->publicKey == $public)
        {
        $host=$this->Host_model->hosting();
        $rpc_host = $host[0]->host_name;
        $rpc_port = $host[0]->host_port;
        $rpc_user = $host[0]->host_user;
        $rpc_pass = $host[0]->host_pass;
        
            $client= new Client($rpc_host, $rpc_port, $rpc_user, $rpc_pass);
            $balance=$client->getBalance($value[0]->email); 
            $address=$client->getAddress($value[0]->email);
            $newaddress=$client->getNewAddress($value[0]->email);

            $ga = new GoogleAuthenticator();
            //$tfastatus=$this->session->userdata('tfastatus');
            $secretkey=$this->session->userdata('googlesecretkey');
            $user_session=$this->session->userdata('userEmail');
            //$qrCodeUrl['getDetails']= $this->User_model->details_user($user_session);
            $data['qrcode'] = $ga->getQRCodeGoogleUrl($user_session, base64_decode($secretkey));
         $data=array(
            'publicURL' =>$this->input->post('publicURL'),
            'coinRate' => $this->input->post('coinRate'),
            'email' => $value[0]->email,
            'address'=>$newaddress, 
            'coinLabel' => $this->input->post('coinLabel'),
             );
           $data['qrcode'] = $ga->getQRCodeGoogleUrl($this->input->post('coinRate'),$newaddress);
           $this->load->view('dashboard/qr-code',$data);
        }
        else
        {
            $msg['message']="Public key did not match!";
            $this->load->view('dashboard/button-create',$msg);
        }
    }
    
    
}

