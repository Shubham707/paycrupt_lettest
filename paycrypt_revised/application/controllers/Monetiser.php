<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include_once APPPATH.'third_party/Client.php';

class Monetiser extends CI_Controller 
{   
	public function __construct() 
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('session','cart');
        $this->load->library('email','parser');
        $this->load->model('Account_model');
        $this->load->model('Host_model');
        $this->load->model('User_model');
        $this->load->model('Coin_model');
        $this->load->database();
        $email=$this->session->userdata('userEmail');
        $boxid=$this->session->userdata('box_id');
       /* if($this->session->userdata('is_logged_in')==false)
        {
            redirect('user/login');
        }
*/
    }
    public function index()
    {
        $host=$this->Host_model->hosting();
        $rpc_host = $host[0]->host_name;
        $rpc_port = $host[0]->host_port;
        $rpc_user = $host[0]->host_user;
        $rpc_pass = $host[0]->host_pass;
         $client= new Client($rpc_host, $rpc_port, $rpc_user, $rpc_pass); 
        if($client)
        {
         $address=$client->getNewAddress($this->session->userdata('userEmail'));
        }
    	$coins=$this->Coin_model->listing();
    	$id=$this->session->userdata('box_id');

        $data=array(
        	'boxid'=> $id,
            'coins'=> $coins,
            'address'=>$address,
    		);
        $this->load->view('dashboard/payment-url-online',$data);
    }
    public function saveMonetiser()
    {
        //$getData=$this->Account_model->coinboxs_payment($value,$id);
       $host=$this->Host_model->hosting();
        $rpc_host = $host[0]->host_name;
        $rpc_port = $host[0]->host_port;
        $rpc_user = $host[0]->host_user;
        $rpc_pass = $host[0]->host_pass;
         $client= new Client($rpc_host, $rpc_port, $rpc_user, $rpc_pass); 
        
        $comment="withdraw Balance";
        $amount=$this->input->post('coinRate');
        $address=$this->input->post('walletAddress');
        $email=$this->session->userdata('userEmail');
        
        $invoice_id='#in-'.rand(9999999,1000000);
        $data=array(
            'invoice_id'=>$invoice_id,
            'email'=>$this->session->userdata('userEmail'),
            'privateURL'=>$this->input->post('privateURL'),
            'privateText'=>$this->input->post('privateText'),
            'publicTitle'=>$this->input->post('publicTitle'),
            'coinRate'=>$this->input->post('coinRate'),
            'monUSD'=>$this->input->post('affiUSD'),
            'walletAddress'=>$this->input->post('walletAddress'),
            'expiryDate'=>$this->input->post('expiryDate'),
            'boxId'=>$this->input->post('boxId'),
            'coinLabel'=>$this->input->post('coinLabel'),
            'coin_qty'=>'1',
        );
       
        
        if($client)
        {
             $return=$this->Account_model->monetiserSave($data);
             $config = Array(
                  'protocol' => 'smtp',
                  'smtp_host' => 'smtp.gmail.com',
                  'smtp_port' => 587,
                  'smtp_user' => 'shubhamsahu707@gmail.com', // change it to yours
                  'smtp_pass' => 'shubham707', // change it to yours
                  'mailtype' => 'html',
                  'charset' => 'iso-8859-1',
                  'wordwrap' => TRUE
            );
                $this->email->initialize($config);
                /*$from_email['user_email']=$data;*/
                $from_email['user_email'] =$this->session->userdata('userEmail');
                $to_email = $this->session->userdata('email');
                $this->load->library('email');
                $this->email->from($this->session->userdata('userEmail'), 'Identification');
                $this->email->to($to_email);
                $this->email->subject('Monetiser Payment');
                $message=$this->load->view('dashboard/payment-invoice',$data, TRUE);
                $this->email->message($message);
                 $send=$this->email->send();
                if($send)
                {
                $msg['boxid']=$this->session->userdata('box_id');
                $msg['coins']=$this->Coin_model->listing();
               
                if($send == true){
                $messge = array('message' => 'Created button successfull!','class' => 'alert alert-success');
                $this->session->set_flashdata('item', $messge);
                } else {
                $messge = array('message' => 'Button created not successfull!','class' => 'alert alert-danger');
                $this->session->set_flashdata('item',$messge );
                }
                $this->load->view('frontend/cryptocoin-monetiser',$msg);
                }
                else{
                    $msg['boxid']=$this->session->userdata('box_id');
                    $msg['coins']=$this->Coin_model->listing();
                    $msg['address']=$address;
                    $messge = array('message' => 'Public And Private Key Created Not Successfull!','class' => 'alert alert-danger');
                    $this->session->set_flashdata('item',$messge);
                    $this->load->view('dashboard/payment-url-online',$msg);
                }
        }
        else 
        {
            $msg['address']=$address;
            $msg['boxid']=$this->session->userdata('box_id');
            $msg['coins']=$this->Coin_model->listing();
            $messge = array('message' => 'Button created not successfull!','class' => 'alert alert-danger');
            $this->session->set_flashdata('item',$messge);
            $this->load->view('dashboard/payment-url-online',$msg);
        }
        
    }
    public function monEdit($value)
    {
        $data['boxid']=$this->session->userdata('box_id');
        $data['coins']=$this->Coin_model->listing();
        $data['details']=$this->Account_model->monetiser_edit($value);
        $this->load->view('dashboard/update-monitiser',$data);
    }
    public function update_data()
    {
       $id=$this->input->post('monetiser_id');
        $data=array(
            'email'=>$this->session->userdata('userEmail'),
            'privateURL'=>$this->input->post('privateURL'),
            'privateText'=>$this->input->post('privateText'),
            'publicTitle'=>$this->input->post('publicTitle'),
            'coinRate'=>$this->input->post('coinRate'),
            'monUSD'=>$this->input->post('affiUSD'),
            'walletAddress'=>$this->input->post('walletAddress'),
            'expiryDate'=>$this->input->post('expiryDate'),
            'boxId'=>$this->input->post('boxId'),
            'coinLabel'=>$this->input->post('coinLabel'),
            'coin_qty'=>'1',
        );
        $this->db->where('monetiser_id',$id);
        $this->db->update('monetiser',$data);
        $this->session->set_flashdata('message', 'Button Update Successfull!');
       redirect(base_url().'monetiser/monEdit/'.$id,'refresh');
    }
    public function createButton($id,$privateURL,$bix_id)
    {
        $data['key']=$this->Coin_model->create_button($id,$privateURL,$bix_id);
        $this->load->view('dashboard/button-create-monitiser',$data);
    }
   


}
