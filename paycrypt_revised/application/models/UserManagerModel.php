<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserManagerModel extends CI_Model
{
  //User Register
  public function dataSave($data)
	{
		
    $this->db->insert('users', $data);
    return $insert_id = $this->db->insert_id();
	}

  public function userPlansAdd($data)
  {
   return $this->db->insert('user_plan', $data);
  }
  //User Listing
  public function listing()
	{
		$data= $this->db->query('SELECT box_id FROM users ORDER BY  `box_id` DESC
LIMIT 1')->result();
		foreach ($data as $key => $row)
		{
			return $row->box_id;
		}
	}
 //user Login
 public function login($data)
	{

		$condition = "email =" . "'" . $data['email'] . "' AND " . "password =" . "'" . $data['password'] . "'";
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {

			return true;

		} else {

			return false;
		}
	}
  //get user details
  public function details_user($value)
	{
		return $query=$this->db->select('*')->where('email', $value)->get('users')->result();

	}

  //echeck email existance
  public function emailExist($email)
  {
    $query = $this->db->get_where('users', array('email' => $email));
    $count = $query->num_rows();
    if ($count === 0)
    {
          return FALSE;
    }
    else
    {
      return TRUE;
    }
  }
  //echeck email existance
  public function passExist($email,$pass)
  {
    $query = $this->db->get_where('users', array('email' => $email,'password'=>$pass));
    $count = $query->num_rows();
    if ($count === 0)
    {
          return FALSE;
    }
    else
    {
      return TRUE;
    }
  }

  public function updateUserProfile($data)
  {
    return $val=$this->db->where('user_id', $this->session->userdata('userId'))->update('users', $data);
  }

  public function updateUserCurrency($data)
  {
    $user_session=$this->session->userdata('userEmail');
    return $val=$this->db->where('email', $user_session)->update('users', $data);
    
  }

  public function updateTfaStatus()
  {
    $value=array('tfastatus'=>'1');
    $user_session=$this->session->userdata('userEmail');
     return $val=$this->db->where('email', $user_session)->update('users', $value);
     //echo $this->db->last_query();

  }

  public function updateTfaStatusDisable()
  {
    $value=array('tfastatus'=>'0');
    $user_session=$this->session->userdata('userEmail');
     return $val=$this->db->where('email', $user_session)->update('users', $value);
     //echo $this->db->last_query();

  }
  public function total($email)
  {
    $sql="select * from users where email='$email'";
     return $query=$this->db->query($sql)->result();
     //print_r($query); die();
  }
  public function coinItem($email)
  {
    $sql="select * from monetiser where email='$email'";
     return $query=$this->db->query($sql)->result();
    //print_r($query); die();
  }
  public function items_sold($email)
  {
    $sql="select * from crypto_payments where email='$email'";
    return $query=$this->db->query($sql)->result();
  }
  public function imcome_monthly($email)
  {
    $sql="SELECT txDate,amountUSD,amount FROM crypto_payments WHERE email='$email' and date(`txDate`) BETWEEN (CURDATE() - INTERVAL 1 MONTH) AND (CURDATE())";
     return$query=$this->db->query($sql)->result();
    //print_r($query); die();
  }
  public function imcome_All($email)
  {
    $sql="SELECT txDate,amountUSD FROM crypto_payments where email='$email'";
     return$query=$this->db->query($sql)->result();
    //print_r($query); die();
  }

  public function planList()
  {
     return $query=$this->db->get('plans_tbl')->result_array();

  }

  public function coinsList()
  {
    return $query=$this->db->get('coin')->result_array();
  }

  public function addUserPlan($data,$email)
  {

  $this->db->where('email', $email);
  return $this->db->update('users', $data);

  }
  public function getMonetiserId($currency,$email)
  {
    return $this->db->get_where('monetiser',array('email' => $email,'coinLabel'=>$currency))->result();

  }
  public function checkMonetiser($coinid)
  {
    $this->db->where('coin_id',$coinid);
    $query = $this->db->get('payments');
    if ($query->num_rows() > 0){
        return true;
    }
    else{
        return false;
    }
  }

  public function monetiserList($email)
  {
    return $this->db->get_where('monetiser',array('email' => $email))->result_array();
  }

  public function addRecurringPayment($data)
  {
    return $val=$this->db->insert('payments', $data);
  }

  public function updateRecurringPayment($data,$monetiserId)
  {

    $this->db->where('coin_id',$monetiserId);
    return $val=$this->db->update('payments', $data);
  }

  public function boxList($email)
  {
    $total_send=0;
    $total_receive=0;
    $totalBoxDet=array();
    $boxList=$this->db->get_where('security_key',array('email' => $email))->result_array();
    foreach ($boxList as $key => $boxValue) {

      $totalEarningS = $this->db->query("select amount from walletnotify where email='".$email."' and publickey='".$boxValue['publicKey']."' and category='send'");
     $totalEarningSend = $totalEarningS->row();

      //$totalEarningSend=$this->db->get_where('walletnotify',array('email' => $email,'publickey' => $boxValue['publicKey'],'category'=>'send'))->row();

     $totalEarningR = $this->db->query("select amount from walletnotify where email='".$email."' and publickey='".$boxValue['publicKey']."' and category='receive'");
     $totalEarningReceive = $totalEarningR->row();

      // $totalEarningReceive=$this->db->get_where('walletnotify',array('email' => $email,'publickey' => $boxValue['publicKey'],'category'=>'receive'))->row();

      $total_send+=$totalEarningSend['amount'];
      $total_receive+=$totalEarningReceive['amount'];
      $totalBoxDet[]=array('boxName'=>$boxValue['boxName'],'coinName'=>$boxValue['coinName'],'totalSend'=>$total_send,'total_receive'=>$total_receive,'createDate'=>$boxValue['key_created']);
    }
    return $totalBoxDet;

  }

  public function totalEarningList($email)
  {
    return $this->db->get_where('walletnotify',array('email' => $email))->result_array();
  }
  public function currentearning($email)
  {
    $receive_query = $this->db->query("select sum(amount) as receive from walletnotify where email='".$email."' and category='receive'");
    $receive=$receive_query->row();

    $sent_query = $this->db->query("select sum(amount) as sent from walletnotify where email='".$email."' and category='send'");
    $sent=$sent_query->row();

    $total=$receive->receive-$sent->sent;
   
    return $total;

  }

  public function getmessagebyuser($id)
  {
    $receive_query = $this->db->query("select * from message where email='$id'");
    $receive=$receive_query->result();

   return $receive;
   

  }

  public function savemessge($email,$subject,$message,$rand)
  {
    $data=array(
              "email"=>$email,
              "subject"=>$subject,
              "message"=>$message,
              "invoice"=>$rand
            );

    return $val=$this->db->insert('message', $data);
  }

  public function soldItems($email)
  {
    return $this->db->get_where('walletnotify',array('email' => $email))->result_array();
  }


}

 ?>
