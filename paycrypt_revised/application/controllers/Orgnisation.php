<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Orgnisation extends CI_Controller 
{
	
	public function __construct() 
    {
        parent::__construct();
        $this->load->model('Host_model');
		$this->load->helper(array('form', 'url','file'));
		// if($this->session->userdata('is_logged_in'))
  //       {
  //           redirect(base_url().'login');
  //       }
	}
	public function paycrypt_services_bitcoin()
	{
		$this->load->view('dashboard/paycrypt-services-bitcoin');
	}
	public function paycrypt_card()
	{
		$this->load->view('dashboard/paycrypt-card');
	}
	public function paying_with_bitcoin()
	{
		$this->load->view('dashboard/paying-with-bitcoin');
	}
	public function paycrypt_wallet()
	{
		$this->load->view('dashboard/paycrypt-Wallet');
	}
	public function businesses_organizations()
	{
		$this->load->view('dashboard/Businesses-Organizations');
	}
}