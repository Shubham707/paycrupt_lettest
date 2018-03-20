<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserManager extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->helper('form');
    $this->load->database();
    $this->load->model('UserManagerModel');
    $this->load->model('User_model');
    $this->load->library('googleAuth/GoogleAuthenticator');
    $this->load->library('email');
   
  }
  //user signup function
  public function signup()
  {
    $this->load->view('public/signup');
  }
  //user login function
  public function login()
  {
    $session_captcha['captchaVals']=$this->userDefaultCaptch();
    $this->load->view('public/login',$session_captcha);
  }
  //user forget password functions
  public function forget()
  {
    $this->load->view('public/forgot');
  }
//user dashboard page
  public function dashboard()
  {
     // if($this->session->userdata('is_logged_in'))
     //    {
     //        redirect(base_url().'login');
     //    }
    $email=$this->session->userdata('userEmail');
    $arr['users']=$this->UserManagerModel->total($email);
    $arr['items']=$this->UserManagerModel->coinItem($email);
    $arr['items_sold']=$this->UserManagerModel->items_sold($email);
    $arr['monthly']=$this->UserManagerModel->imcome_monthly($email);
    $arr['all']=$this->UserManagerModel->imcome_All($email);
    $arr['box']=$this->UserManagerModel->boxList($email);
    $arr['activeItem']=$this->UserManagerModel->monetiserList($email);
    $arr['soldItem']=$this->UserManagerModel->soldItems($email);
   $this->load->view('dashboard/index',$arr);
  }
  //profile page
  public function profile()
  {
     // if($this->session->userdata('is_logged_in'))
     //    {
     //        redirect(base_url().'login');
     //    }
    $this->load->view('dashboard/profile');
  }
  //setting page
  public function settings()
  {
     // if($this->session->userdata('is_logged_in'))
     //  {
     //        redirect(base_url().'login');
     //  }
    $ga = new GoogleAuthenticator();
    $tfastatus=$this->session->userdata('tfastatus');
    $secretkey=$this->session->userdata('googlesecretkey');
    $user_session=$this->session->userdata('userEmail');
    $qrCodeUrl['getDetails']= $this->User_model->details_user($user_session);
    $qrCodeUrl['qrcode'] = $ga->getQRCodeGoogleUrl($user_session, base64_decode($secretkey));
    $qrCodeUrl['plans']=$this->UserManagerModel->planList();
    $qrCodeUrl['monetiserList']=$this->UserManagerModel->monetiserList($user_session);
    $qrCodeUrl['coinList']=$this->UserManagerModel->coinsList();
    
    $this->load->view('dashboard/setting',$qrCodeUrl);
  }
//Authenticate page
  public function authenticate()
  {
    $this->load->view('public/auth');
  }

  public function register()
  {
    $ga = new GoogleAuthenticator();
    $secret = $ga->createSecret();
    $this->form_validation->set_error_delimiters('<label class="error">', '</label>');
    $this->form_validation->set_rules('fname', 'First name', 'required|alpha');
    $this->form_validation->set_rules('lname', 'Last name', 'required|alpha');
    $this->form_validation->set_rules('uemail', 'Email', 'required|valid_email|is_unique[users.email]',array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
        ));
    $this->form_validation->set_rules('upassword', 'Password', 'required');
    $this->form_validation->set_rules('ucpassword', 'Confirm Password', 'required');
    if ($this->form_validation->run() == FALSE)
    {
    $this->load->view('public/signup');
    }else {
      $boxID=$this->UserManagerModel->listing();
      $total=$boxID + 1;
      $ip= $_SERVER['REMOTE_ADDR'];
      $data = array(
      'firstname'=> $this->input->post('fname'),
      'lastname'=>  $this->input->post('lname'),
      'email'=>   $this->input->post('uemail'),
      'box_id'=>    $total,
      'ipAddress'=>    $ip,
      'password'=>    hash('sha256', strtolower($this->input->post('upassword'))),
      'googlesecretkey'=>base64_encode($secret),
      'user_plan'=>'1'
    );
    if($this->UserManagerModel->dataSave($data))
    {
      $lastInsertId=$this->UserManagerModel->dataSave($data);
      //add user plans
      $planData=array(
          'user_id'=>$lastInsertId,
          'email'=>$this->input->post('uemail'),
          'current_plan'=>'1',
          'createDate'=>date('Y-m-d')
        );
      $this->UserManagerModel->userPlansAdd($planData);
      //SMTP & mail configuration
      $config = array(
          'protocol'  => 'smtp',
          'smtp_host' => 'ssl://smtp.gmail.com',
          'smtp_port' => 465,
          'smtp_user' => 'kk611781@gmail.com',
          'smtp_pass' => 'nazarhussain1',
          'mailtype'  => 'html',
          'charset'   => 'utf-8'
      );
      $this->email->initialize($config);
      $this->email->set_mailtype("html");
      $this->email->set_newline("\r\n");
      //Email content
      $htmlContent = '<h4>User Registration</h4>';
      $htmlContent .='<p>Registration Successfull</p>';
      $this->email->to($this->input->post('uemail'));
      $this->email->from('helpdesk@paycrypt.com','Paycrypt');
      $this->email->subject('User Registration');
      $this->email->message($htmlContent);

       if($this->email->send())
       {
          $this->session->set_flashdata('signup_success', 'Sucessfully Registered.');
          redirect(base_url().'login','refresh');
       }
      else
      {
        $this->session->set_flashdata('signup_error', 'Something wrong! try again.');
        $this->load->view('public/signup');
      }
     // $this->session->set_flashdata('signup_success', 'Sucessfully Registered.');
      //redirect(base_url().'login','refresh');
    }
    else {
      $this->session->set_flashdata('signup_error', 'Something wrong! try again.');
      $this->load->view('public/signup');
    }

    }
  }
  //Generate User Caotcha
  public function userCaptch()
  {
    $randstr="";
   srand((double) microtime(TRUE) * 1000000);
   //our array add all letters and numbers if you wish
   $chars = array(
       'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'p',
       'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '1', '2', '3', '4', '5',
       '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K',
       'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

   for ($rand = 0; $rand <= 5; $rand++) {
       $random = rand(0, count($chars) - 1);
       $randstr .= $chars[$random];
   }
   $this->session->set_userdata('captcha_session', $randstr);
   echo  $randstr;
  }
  //for default captcha
  public function userDefaultCaptch()
  {
    $randstr="";
   srand((double) microtime(TRUE) * 1000000);
   //our array add all letters and numbers if you wish
   $chars = array(
       'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'p',
       'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '1', '2', '3', '4', '5',
       '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K',
       'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

   for ($rand = 0; $rand <= 5; $rand++) {
       $random = rand(0, count($chars) - 1);
       $randstr .= $chars[$random];
   }
   $this->session->set_userdata('captcha_session', $randstr);
   return  $randstr;
  }
  public function userLogin()
  {
    $this->form_validation->set_error_delimiters('<label class="error">', '</label>');
    $this->form_validation->set_rules('uemail', 'Email', 'required');
    $this->form_validation->set_rules('upassword', 'Password', 'required');
    $this->form_validation->set_rules('inputcap', 'Captcha', 'required|callback_captcha_check');

    if ($this->form_validation->run() == FALSE)
    {
      $session_captcha['captchaVals']=$this->userDefaultCaptch();
      $this->load->view('public/login',$session_captcha);
    }else {
      $data = array(
      'email'=>   $this->input->post('uemail'),
      'password'=>    hash('sha256', strtolower($this->input->post('upassword'))),
    );
      if($this->UserManagerModel->login($data))
      {
        $userInfo=$this->UserManagerModel->details_user($this->input->post('uemail'));
        
        if($userInfo[0]->tfastatus)
        {
          $this->session->set_userdata('tfastatus', $userInfo[0]->tfastatus);
          $this->session->set_userdata('googlesecretkey', $userInfo[0]->googlesecretkey);
          $this->session->set_userdata('plans', $userInfo[0]->user_plan);
          $this->session->set_userdata('box_id', $userInfo[0]->box_id);
          $this->session->set_userdata('company_name', $userInfo[0]->company_name);
          $this->session->set_userdata('tempEmail',$this->input->post('uemail'));
          $this->session->set_userdata('is_logged_in',TRUE);
          redirect(base_url().'auth','refresh');
        }
        else{
          $this->session->set_userdata('userId', $userInfo[0]->user_id);
          $this->session->set_userdata('userFirstName', $userInfo[0]->firstname);
          $this->session->set_userdata('tfastatus', $userInfo[0]->tfastatus);
          $this->session->set_userdata('googlesecretkey', $userInfo[0]->googlesecretkey);
          $this->session->set_userdata('plans', $userInfo[0]->user_plan);
          $this->session->set_userdata('company_name', $userInfo[0]->company_name);
          $this->session->set_userdata('userEmail', $this->input->post('uemail'));
          $this->session->set_userdata('box_id', $userInfo[0]->box_id);
          $this->session->set_userdata('is_logged_in',TRUE);
          if($userInfo[0]->company_name==NULL)
          {
            redirect(base_url().'profile','refresh');
          }
          else
          {
            redirect(base_url().'dashboard','refresh');
          }
          
        }
        
      }
      else {
        $session_captcha['captchaVals']=$this->userDefaultCaptch();
          $this->session->set_flashdata('login_fail', 'Something wrong!try again.');
        $this->load->view('public/login',$session_captcha);
      }
  }
}
public function captcha_check($str)
{
  $captcha_session = $this->session->userdata('captcha_session');
  if ($str == $captcha_session)
    {
      return TRUE;

    }
    else
    {
      $this->form_validation->set_message('captcha_check', 'Captcha is not matching.');
      return FALSE;
    }
}

//check unique emailId
public function _unique_email($email) {


  if ($str == $captcha_session)
    {
      return TRUE;

    }
    else
    {
      $this->form_validation->set_message('captcha_check', 'Captcha is not matching.');
      return FALSE;
    }
}

public function logout()
{
  $this->session->unset_userdata('userId');
  $this->session->unset_userdata('userFirstName');
  $this->session->unset_userdata('userEmail');
  $this->session->unset_userdata('plans');
  $this->session->unset_userdata('is_logged_in');
  //$this->session->sess_destroy();
  redirect(base_url().'login','refresh');
}
public function forget_pass()
{
  $this->form_validation->set_error_delimiters('<label class="error">', '</label>');
  $this->form_validation->set_rules('uemail', 'Email', 'required|valid_email|callback_checkEmailExist',array(
  'required'=> 'You have not provided %s.'));
  if ($this->form_validation->run() == FALSE)
  {
    $this->load->view('public/forgot');
  }
  else
  {
    $email=$this->input->post('uemail');
    $rand=rand(99999999,11111111);
    $otp=hash('sha256', strtolower($rand));
    @$this->db->where('email', $email);
    @$this->db->update('users', array('password'=> $otp));
  //SMTP & mail configuration
  $config = array(
      'protocol'  => 'smtp',
      'smtp_host' => 'ssl://smtp.gmail.com',
      'smtp_port' => 465,
      'smtp_user' => 'kk611781@gmail.com',
      'smtp_pass' => 'nazarhussain1',
      'mailtype'  => 'html',
      'charset'   => 'utf-8'
  );
  $this->email->initialize($config);
  $this->email->set_mailtype("html");
  $this->email->set_newline("\r\n");
  //Email content
  $htmlContent = '<h4>Reset Password</h4>';
  $htmlContent .= $rand.'<p> is your temporary password,please logged in and then change your password from accounts.</p>';
  $this->email->to($email);
  $this->email->from('helpdesk@paycrypt.com','Paycrypt');
  $this->email->subject('Your Reset Password');
  $this->email->message($htmlContent);
    if($this->email->send())
    {
      $session_captcha['captchaVals']=$this->userDefaultCaptch();
      $this->session->set_flashdata('reset_success', 'Successfull password sent on your email.');
      $this->load->view('public/login',$session_captcha);
    }
    else {
      $this->session->set_flashdata('reset_fail', 'Something wrong!try again.');
      $this->load->view('public/forgot');
    }
  }
}

public function checkEmailExist($email)
{
  if($this->UserManagerModel->emailExist($email))
  {
      return TRUE;
  }
  else {
    $this->form_validation->set_message('checkEmailExist', 'Email does not exists.');
    return FALSE;
  }
}
public function user_profile()
{
  // if($this->session->userdata('is_logged_in'))
  //       {
  //           redirect(base_url().'login');
  //       }
   $email=$this->session->userdata('userEmail');
  $data['getDetails']= $this->User_model->details_user($email);
  $this->load->view('dashboard/profile',$data);
}
public function addProfile()
{
  $this->form_validation->set_error_delimiters('<label class="error">', '</label>');
  $this->form_validation->set_rules('org_name', 'Organisation Name', 'required');
  $this->form_validation->set_rules('website_name', 'Website Name', 'required|valid_url',
    array(
            'required'=>'Enter website URL',
            'valid_url'=>'Enter website URL'
        ));
  $this->form_validation->set_rules('businessType', 'Business Type', 'required');
  //$this->form_validation->set_rules('userFile', 'Upload Id', 'required');
  $this->form_validation->set_rules('mobileNum', 'Mobile Number', 'required|numeric');
  if($this->form_validation->run() == TRUE)
  {
    //$upload_data = $this->upload->data(); 
    //$file_name = $upload_data['userFile'];
    $file_name = $_FILES['userFile']['name'];
    if ($file_name=="") {
      $data = array(
      'company_name'=>$this->input->post('org_name'),
      'company_website'=>$this->input->post('website_name'),
      'phone'=>$this->input->post('mobileNum'),
      'business_type'=>$this->input->post('businessType')
    );
    if($this->UserManagerModel->updateUserProfile($data))
    {
      $email=$this->session->userdata('userEmail');
      $userInfo=$this->UserManagerModel->details_user($email);
      $this->session->set_userdata('company_name', $userInfo[0]->company_name);
      $this->session->set_flashdata('update_success', 'User profile added successfully');
      redirect(base_url().'loadProfile','refresh');

    }
    else {
      $this->session->set_flashdata('update_fail', 'User profile not added');
      $this->load->view('dashboard/profile');
    }

    }
    else
    {

    $config['upload_path']          = 'upload/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg';
    $config['max_size']             = 10000;
    $config['max_width']            = 10024;
    $config['max_height']           = 7680;
    $this->load->library('upload', $config);
    if (!$this->upload->do_upload('userFile'))
    {
      $error = array('error' => $this->upload->display_errors());
      $this->session->set_flashdata('upload_fail', $error);
      //$this->load->view('dashboard/profile');

    }
    else
    {
      $imageData = $this->upload->data();
      $fileName=$imageData['file_name'];
      $data = array(
      'company_name'=>$this->input->post('org_name'),
      'company_website'=>$this->input->post('website_name'),
      'phone'=>$this->input->post('mobileNum'),
      'photo'=>$fileName,
      'business_type'=>$this->input->post('businessType')
    );
    if($this->UserManagerModel->updateUserProfile($data))
    {
      $email=$this->session->userdata('userEmail');
      $userInfo=$this->UserManagerModel->details_user($email);
      $this->session->set_userdata('company_name', $userInfo[0]->company_name);
      $this->session->set_flashdata('update_success', 'User profile added successfully');
      redirect(base_url().'loadProfile','refresh');

    }
    else {
      $this->session->set_flashdata('update_fail', 'User profile not added');
      $this->load->view('dashboard/profile');
    }
    }
  }
  }
}

public function enableTfa()
{
  $this->form_validation->set_error_delimiters('<label class="error">', '</label>');
  $this->form_validation->set_rules('codeUser', 'Two Factor Code', 'required');
  if($this->form_validation->run()==FALSE)
  {
    //fail
    $this->session->set_flashdata('code_fail_validate', 'Please enter code');
    redirect(base_url().'settings');
  }
  else {
    //success
    //echo "hello";
    //$code=$this->input->post('codeUser');
    //echo $code;
       $ga = new GoogleAuthenticator();
       $secretkey=$this->session->userdata('googlesecretkey');
       $user_session=$this->session->userdata('userEmail');
       $code=$this->input->post('codeUser');
       $checkResult = $ga->verifyCode(base64_decode($secretkey), $code, 2);// 2 = 2*30sec clock tolerance
       $qrCodeUrl['qrcode'] = $ga->getQRCodeGoogleUrl($user_session, base64_decode($secretkey));
       if ($checkResult) {
         //print_r($this->UserManagerModel->updateTfaStatus());
         //var_dump($this->UserManagerModel->updateTfaStatus());
         //die();
        //change tfastatus
        if($this->UserManagerModel->updateTfaStatus())
        {
          $this->session->set_flashdata('code_success_update', 'Two factor enabled');
          //$this->load->view('dashboard/setting',$qrCodeUrl);
          $this->logout();
          //$this->session->set_userdata('userEmail', $code);
        }
        else
        {
          $this->session->set_flashdata('code_fail_update', 'Two factor not enabled');
          $this->load->view('dashboard/setting',$qrCodeUrl);
        }
      }
      else {
        $this->session->set_flashdata('code_fail', 'Code Not Matched');
        redirect(base_url().'settings');
      }
    
  }



}

public function defaultCurrency()
{
  $curremcy=$this->input->post('currency');
  $data=array('currency'=>$curremcy);
  if($this->UserManagerModel->updateUserCurrency($data))
  {
    $this->session->set_flashdata('currency_success', 'Successfully currency updated');
    redirect(base_url().'settings');
  }
  else
  {
    $this->session->set_flashdata('currency_fail', 'Currency not updated');
    redirect(base_url().'settings');
  }
}

public function disableTfa()
  {
    $action=$this->input->post('action');
    if($action=="disableTfa")
    {
      $user_session=$this->session->userdata('userEmail');
    if($this->UserManagerModel->updateTfaStatusDisable())
    {
      $data=array('status'=>200,'message'=>'Successfully Two factor Disabled');
      //$this->logout();
    }
    else{
      $data=array('status'=>400,'message'=>'Something wrong!try again');
    }
    }
    echo json_encode($data);
  }
 public function authVerify()
 {
  $this->form_validation->set_error_delimiters('<label class="error">', '</label>');
  $this->form_validation->set_rules('authCode', 'Two Factor Authentication Code', 'required');
  if($this->form_validation->run()==FALSE)
  {
    //fail
    $this->session->set_flashdata('auth_fail_validate', 'Please enter code');
    redirect(base_url().'auth');
  }
  else
  {
    $ga = new GoogleAuthenticator();
    $secretkey=$this->session->userdata('googlesecretkey');
    $user_session=$this->session->userdata('tempEmail');
    $code=$this->input->post('authCode');
    $checkResult = $ga->verifyCode(base64_decode($secretkey), $code, 2);// 2 = 2*30sec clock tolerance
    if ($checkResult) {
      $userInfo=$this->UserManagerModel->details_user($user_session);
      $this->session->set_userdata('userId', $userInfo[0]->user_id);
      $this->session->set_userdata('userFirstName', $userInfo[0]->firstname);
      $this->session->set_userdata('userEmail', $user_session);
      $this->session->unset_userdata('tempEmail');
      redirect(base_url().'dashboard','refresh');

    }
    else
    {
      $this->session->set_flashdata('auth_fail_validate', 'Please enter correct code');
    redirect(base_url().'auth');
    }
  }
 }

 public function addPlans()
 {
   $user_session=$this->session->userdata('userEmail');
   $plan=$this->input->post('planId');
   $data=array("user_plan"=>$plan);
   $planRes=$this->UserManagerModel->addUserPlan($data,$user_session);
   if($planRes)
   {
    $userInfo=$this->UserManagerModel->details_user($user_session);
    $this->session->set_userdata('plans', $userInfo[0]->user_plan);
   }
   echo $planRes;
 }

 public function recurringPayment()
 {
  // print_r($this->input->post('recurringCurrency'));
  // die();
    $this->form_validation->set_error_delimiters('<label class="error">', '</label>');
    $this->form_validation->set_rules('pymentDate', 'Recurring Date', 'required');
    $this->form_validation->set_rules('recurringType', 'Recurring Date', 'required');
    $this->form_validation->set_rules('recurringCurrency[]', 'Recurring Currency', 'required');
    $this->form_validation->set_rules('recurringAddr', 'Recurring address', 'required');
    //print_r($this->form_validation->run());
    //var_dump($this->form_validation->run());
    //die();
    if($this->form_validation->run() == TRUE)
    {
      //print_r($this->input->post('recurringCurrency'));

      foreach ($this->input->post('recurringCurrency') as $key => $currenctValue) {
        $explodeCurrency=explode('_', $currenctValue);
        //print_r($currenctValue);
        $checkExist=$this->UserManagerModel->checkMonetiser($explodeCurrency[1]);
        if($checkExist)
        {
          $data= array(
          'datePayment'=>$this->input->post('pymentDate'),
          'recurringType'=>$this->input->post('recurringType'),
          'currency'=>$explodeCurrency[0],
          'address'=>$this->input->post('recurringAddr')
          );
          $addRes=$this->UserManagerModel->updateRecurringPayment($data,$explodeCurrency[1]);
        }
        else
        {
          $data= array(
          'datePayment'=>$this->input->post('pymentDate'),
          'recurringType'=>$this->input->post('recurringType'),
          'currency'=>$explodeCurrency[0],
          'address'=>$this->input->post('recurringAddr'),
          'coin_id'=>$explodeCurrency[1]
          );
          $addRes=$this->UserManagerModel->addRecurringPayment($data);
        }
      }
      if($addRes)
          {
            $this->session->set_flashdata('add_success', 'Recurring payment  added');
            redirect(base_url().'settings','refresh');
          }
        else
          {
            $this->session->set_flashdata('add_fail', 'Recurring payment not added');
            redirect(base_url().'settings','refresh');
         }
    }
    else
    {
      $this->session->set_flashdata('add_fail', 'Something wrong!try again');
      redirect(base_url().'settings','refresh');
    }
 }

 public function isLiveSession()
{
  if($this->session->userdata('userId')=="" || $this->session->userdata('userFirstName')=="" || $this->session->userdata('userEmail')=="")
  {
    echo "1";
  }
  else
  {
    echo "0";
  }

}

public function totalEarning()
{
  $uemail=$this->input->post('email');
  $valRes=$this->UserManagerModel->totalEarningList($uemail);
  $result="";
  if(count($valRes)>0)
  {
    foreach ($valRes as $key => $valueEarning) {
      ?>
      $result.='<tr>
          <td><?php echo $valueEarning['createDate'] ?></td>
          <td><?php echo $valueEarning['amount'] ?></td>
          <td><?php echo $valueEarning['category'] ?></td>
          <td><?php echo $valueEarning['address'] ?></td>
      </tr>';
      <?php
    }
  }
  else
  {
    ?>
    $result.='<tr>
      <td colspan="4">No Record Found.</td>
    </tr>';
    <?php
  }
  echo $result;
}



}
