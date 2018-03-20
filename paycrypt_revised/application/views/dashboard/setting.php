<?php $this->load->view('dashboard/header');
$this->load->view('dashboard/sidebar');
?>
<style type="text/css">
  .error
  {
    color: red;
  }
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
      $(document).ready(function(){
        function a(){
      setTimeout(function(){ window.location.href=<?php echo base_url(); ?>"logout";},3000);
         }                                 //setTimeout(function(){ alert("Hello"); },3000);
      });
</script>
<style media="screen">


.selectBox {
position: relative;
}

.selectBox select {
width: 100%;
border: none;
background: none!important
}

.overSelect {
position: absolute;
left: 0;
right: 0;
top: 0;
bottom: 0;
}

#checkboxes {
border: 1px #dadada solid;
padding: 5px;
margin-top: 5px;
max-height: 100px;
overflow: scroll;;
}

#checkboxes label {
display: block;
}

#checkboxes label:hover {
background-color: #1e90ff;
}       

.setting_alart_box{

  margin: auto;margin-bottom: 20px;
}

.setting_alart_cross{
  color: #fff !important;  opacity: 1.0;margin-left: 10px;text-decoration: none!important;}
 </style>
<script type="text/javascript">        
var expanded = false;
function showCheckboxes() {  var checkboxes = document.getElementById("checkboxes");  if (!expanded) {    checkboxes.style.display = "block";    expanded = true;  } else {    checkboxes.style.display = "none";    expanded = false;  }
}
</script>
      <article class="content forms-page">

                        <div class="content">
                          <div class="row">
                          <!---Acount Password Message-->
                          <?php
                            if($this->session->flashdata('pass_success'))
                            {
                              $error=$this->session->flashdata('pass_success');
                              //echo '<span style="color:green;">'.$error.'</span>';
                              ?>
                               <div class="alert alert-success fade in setting_alart_box" >
                                <a href="#" class="close setting_alart_cross" data-dismiss="alert">&times;</a>
                                <strong>Success!</strong><?php echo $error; ?>.
                             </div>
                             <script>
                               $(".alert-success").hide(6000);
                             </script>
                              <?php
                            $this->session->unset_userdata('pass_success');
                            }
                            if($this->session->flashdata('pass_fail'))
                            {
                              $error=$this->session->flashdata('pass_fail');
                              //echo '<span style="color:red;">'.$error.'</span>';
                              ?>
                                <div class="alert alert-danger fade in setting_alart_box">
                                  <a href="#" class="close setting_alart_cross" data-dismiss="alert">&times;</a>
                                  <strong>Error!</strong> <?php echo $error; ?>
                               </div>
                               <script>
                               $(".alert-danger").hide(6000);
                             </script>
                              <?php
                              $this->session->unset_userdata('pass_fail');
                            }
                            ?>
                            <!---Default Currency Message-->
                            <?php
                                if($this->session->flashdata('currency_success'))
                                    {
                                      $error=$this->session->flashdata('currency_success');
                                      //echo '<span style="color:green;">'.$error.'</span><br/>';
                                      ?>
                                       <div class="alert alert-success fade in setting_alart_box" >
                                        <a href="#" class="close setting_alart_cross" data-dismiss="alert">&times;</a>
                                        <strong>Success!</strong><?php echo $error; ?>.
                                     </div>
                                     <script>
                                       $(".alert-success").hide(6000);
                                     </script>
                                      <?php
                                    }
                                    if($this->session->flashdata('currency_fail'))
                                    {
                                      $error=$this->session->flashdata('currency_fail');
                                      //echo '<span style="color:red;">'.$error.'</span><br/>';
                                      ?>
                                      <div class="alert alert-danger fade in setting_alart_box">
                                        <a href="#" class="close setting_alart_cross" data-dismiss="alert">&times;</a>
                                        <strong>Error!</strong> <?php echo $error; ?>
                                     </div>
                                     <script>
                                       $(".alert-danger").hide(6000);
                                     </script>
                                    <?php
                                    }
                                ?>
                                <!--Recurrying Payment Message-->
                                <?php
                                if($this->session->flashdata('add_success'))
                                    {
                                      $error=$this->session->flashdata('add_success');
                                      //echo '<span style="color:green;">'.$error.'</span><br/>';
                                      ?>
                                       <div class="alert alert-success fade in setting_alart_box" >
                                        <a href="#" class="close setting_alart_cross" data-dismiss="alert">&times;</a>
                                        <strong>Success!</strong><?php echo $error; ?>
                                     </div>
                                     <script>
                                       $(".alert-success").hide(6000);
                                     </script>
                                      <?php
                                    }
                                    if($this->session->flashdata('add_fail'))
                                    {
                                      $error=$this->session->flashdata('add_fail');
                                      //echo '<span style="color:red;">'.$error.'</span><br/>';
                                      ?>
                                      <div class="alert alert-danger fade in setting_alart_box">
                                        <a href="#" class="close setting_alart_cross" data-dismiss="alert">&times;</a>
                                        <strong>Error!</strong> <?php echo $error; ?>
                                     </div>
                                     <script>
                                       $(".alert-danger").hide(6000);
                                     </script>
                                    <?php
                                    }
                                ?>
                        </div>
                    <div class="row">
                        <div class="col-md-12">

                          <div class="tab_main">
                          
                            <input class="tab_input" id="tab1" type="radio" name="tabs" checked>
                            <label class="tab_label" for="tab1">Password</label>

                            <input class="tab_input" id="tab2" type="radio" name="tabs">
                            <label  class="tab_label" for="tab2">Two Factor Authentication</label>

                            <input class="tab_input" id="tab3" type="radio" name="tabs">
                            <label class="tab_label" for="tab3">Default Currency</label>

                            <input class="tab_input" id="tab4" type="radio" name="tabs">
                            <label class="tab_label" for="tab4">Plans</label>

                            <input class="tab_input" id="tab5" type="radio" name="tabs">
                            <label class="tab_label" for="tab5">Recurring Payment</label>
                            
                            <section class="tab_section" id="content1">
                              <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6" >
                                  <div class="card setting_card" >
                                    <form action="<?php echo base_url().'User/resetPassword' ?>" method="post"/ id="resetPass">
                                      <div class="card-header hd-box" data-background-color="blue" style="padding:0px!important; min-height:40px; margin-bottom:10px;">
                                      <div class="text-center">
                                      <h3><span > ACCOUNT PASSWORD</span></h3>
                                      </div>
                                      </div>
                                      
                                      <span class="input input--hoshi">
                                        <input class="input__field input__field--hoshi" type="password" id="current_pass" name="current_pass" value="<?php echo set_value('current_pass'); ?>" />
                                        <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
                                          <label id="current_pass-error" class="error" for="current_pass"><?php echo form_error('current_pass'); ?></label>
                                          <span class="input__label-content input__label-content--hoshi">Current Password</span>
                                        </label>
                                      </span>
                                      <span class="input input--hoshi">
                                        <input class="input__field input__field--hoshi" type="password" id="newpass" name="newpass" value="<?php echo set_value('newpass'); ?>" />
                                        <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
                                          <label id="newpass-error" class="error" for="newpass"><?php echo form_error('newpass'); ?></label>
                                          <span class="input__label-content input__label-content--hoshi">New Password</span>
                                        </label>
                                      </span>

                                      <span class="input input--hoshi">
                                        <input class="input__field input__field--hoshi" type="password" id="confirm_new_pass" name="confirm_new_pass" value="<?php echo set_value('confirm_new_pass'); ?>"/>
                                        <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
                                          <label id="confirm_new_pass-error" class="error" for="confirm_new_pass"><?php echo form_error('confirm_new_pass'); ?></label>
                                          <span class="input__label-content input__label-content--hoshi">Confirm Password</span>
                                        </label>
                                      </span>
                                      <button type="submit" class="btn btn-primary " style="width:40%; margin-left:30%">Submit</button>
                                    </form>
                                </div>


                                </div>
                                <div class="col-md-3"></div>

                              </div>

                            </section>

                            <section class="tab_section" id="content2">
                              <div class="row">
                                <?php
                                $tfastatus=$this->session->userdata('tfastatus');
                                $secretkey=$this->session->userdata('googlesecretkey');
                                //var_dump($secretkey);
                                if(!$tfastatus)
                                {
                                  //print_r($qrcode);
                                  ?>
                                  <div class="col-md-12" >
                                    <div class="card setting_card">
                                      <div class="card-header hd-box" data-background-color="blue" style="padding:0px!important; margin-bottom:10px;">
                                        <div class="text-center">
                                        <h3><span class="spanunderline">TWO FACTOR AUTHENTICATION</span>
                                        </h3>
                                        </div>
                                      </div>
                                  <div class="text-center"></div>
                                  <div class="text-center" id="device">

                                  <p><span style="color: red">*Please back up your secret key.</span> Resetting your two factor authentication requires open a<br> support ticket and make up to 7 days to address</p>

                                  <p>Enter the verification code generated by Google Authenticator app on your phone.</p>
                                  <div id="img">
                                    <img style="height:200px; width:200px" src="<?php echo @$qrcode; ?>">
                                  </div><br>
                                  <lable class="marginTop50" style="color:black; margin-right:5px;">Secret Key</lable>
                                  <input type="email" style="padding-left:5px;" name="" class="gDisCode"  value="<?php echo base64_decode($secretkey); ?>" placeholder=""><br><br>
                                  <?php
                                    if($this->session->flashdata('code_fail'))
                                    {
                                      $error=$this->session->flashdata('code_fail');
                                      echo '<span style="color:red;">'.$error.'</span><br/>';
                                      $this->session->unset_userdata('code_fail');
                                    }
                                    if($this->session->flashdata('code_success_update'))
                                    {
                                      $error=$this->session->flashdata('code_success_update');
                                      echo '<span style="color:green;">'.$error.'</span><br/>';
                                      ?>
                                      <script>a();</script>
                                      <?php
                                      //$this->session->unset_userdata('code_success_update');
                                    }
                                    if($this->session->flashdata('code_fail_update'))
                                    {
                                      $error=$this->session->flashdata('code_fail_update');
                                      echo '<span style="color:red;">'.$error.'</span><br/>';
                                      $this->session->unset_userdata('code_fail_update');

                                    }
                                     if($this->session->flashdata('code_fail_validate'))
                                    {
                                      $error=$this->session->flashdata('code_fail_validate');
                                      echo '<span style="color:red;">'.$error.'</span><br/>';
                                      //$this->session->unset_userdata('code_fail_validate');

                                    }

                                    ?>
                                  <form method="post" action="<?php echo base_url(); ?>UserManager/enableTfa">
                                    <label style="font-size:12px;">Enter Google Authenticator Code</label><br>

                                    <label id="code-error" class="error" for="code"><?php echo form_error('code'); ?></label>
                                    <input type="text" style="padding-left:5px" class="gDisCode" id="codeUser" name="codeUser" value="<?php echo set_value('codeUser'); ?>"><br>
                                  <button type="submit" style="width:20%;border-radius:.2em!important;" class="btn btn-primary">Enable</button>
                                  </form>

                                </div>
                                  </div>
                                  </div>
                                  <?php
                                }
                                else {
                                  ?>
                                  <div class="col-md-12" >
                                    <div class="card setting_card">
                                      <div class="card-header hd-box" data-background-color="blue" style="padding:0px!important; margin-bottom:10px;">
                                        <div class="text-center">
                                        <h3><span class="spanunderline">TWO FACTOR AUTHENTICATION</span>
                                        <!--<form method="post" action="<?php echo base_url(); ?>UserManager/disableTfa">

                                        </form>-->
                                        <span><button type="button" id="disbleTfa" class="btn btn-danger Settings-btn-danger">Disable</button></sanp>
                                        </h3>
                                        </div>
                                      </div>
                                  <div class="text-center"></div>
                                  </div>
                                  </div>
                                  <?php
                                }
                                 ?>

                              </div>
                            </section>

                            <section class="tab_section" id="content3">
                              <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6" >
                                  <div class="card setting_card" >
                                  
                                <div class="card-header hd-box" data-background-color="blue" style="padding:0px!important; min-height:40px; margin-bottom:10px;">
                                <div class="text-center">

                                <h3><span>Choose Your Default Currency</span></h3>
                                </div>
                                </div>

                                <?php
                                //print_r($getDetails);
                                //print_r($coinList);
                                //echo count($coinList);
                                ?>
                                <form action="<?php echo base_url(); ?>userManager/defaultCurrency" method="post">
                                  <select class="form-control-inp" id="currency" name="currency">
                                    <?php
                                      if(count($coinList)>0)
                                      {
                                        foreach ($coinList as $key => $coinValue) {
                                          ?>
                                           <option <?php if($getDetails[0]->currency){ if($getDetails[0]->currency==$coinValue['coin_name']){ ?> selected <?php }} ?> value="<?= $coinValue['coin_name'] ?>"><?= $coinValue['coin_name'] ?></option>
                                        <?php
                                        }

                                      }
                                      else{
                                        ?>
                                        <option>No such currency found</option>
                                        <?php
                                      }
                                    ?>

                                  </select>
                                  <button type="submit" class="btn btn-primary " style="width:40%; margin-left:30%">Submit</button>
                                </form>


                                </div>


                                </div>
                                <div class="col-md-3"></div>

                              </div>
                            </section>

                            <section class="tab_section" id="content4">
                              <div class="row">
                              <div class="col-sm-12">
                                  <div class="row">
                                    <?php
                                    //print_r($plans);
                                    //echo count($plans);
                                    if(count($plans)>0)
                                    {
                                      foreach ($plans as $key => $plansValue) {
                                       ?>
                                       <div class="col-sm-4">
                                          <div class="pricingTable <?= $plansValue['color_code'] ?>">
                                              <div class="pricingTable-header">
                                                  <?= $plansValue['icon_class'] ?>
                                                  <div class="price-value"> $<?= $plansValue['threashold_amount'] ?> <span class="month">per month</span> </div>
                                              </div>
                                              <h3 class="heading"><?= $plansValue['planType'] ?></h3>
                                              <div class="pricing-content">
                                                  <ul>
                                                      <li><b><?= $plansValue['transaction_fee'] ?>%</b> Withdrawal fee</li>
                                                      <li><b><?= $plansValue['payable_amount'] ?>$</b> Amount</li>
                                                  </ul>
                                              </div>
                                              <div class="pricingTable-signup">
                                                  <?php
                                                    if($getDetails[0]->user_plan && $getDetails[0]->user_plan==$plansValue['planId'] )
                                                    {
                                                      ?>
                                                      <a href="javascript::void(0)" style="text-decoration: none;">Your Current Plan</a>
                                                      <?php
                                                    }
                                                    else
                                                    {
                                                      ?>
                                                      <a href="<?php echo base_url().'products/buy/'.$plansValue['planId']; ?>" class="addPlans" id="paln_<?= $plansValue['planId'] ?>" style="text-decoration: none;">Add <?= $plansValue['payable_amount'] ?>$</a>
                                                      <?php
                                                    }
                                                  ?>
                                              </div>
                                          </div>
                                      </div>
                                       <?php
                                      }
                                    }
                                    else
                                    {
                                      echo "No Plans found";
                                    }
                                    ?>
                                      </div>
                                  </div>
                              </div>
                            </section>

                            <section class="tab_section" id="content5">
                               <div class="row">
                             <div class="col-md-3"></div>
                             <div class="col-md-6" >
                             <div class="card setting_card" >

                             <div class="card-header hd-box" data-background-color="blue" style="padding:0px!important; min-height:40px; margin-bottom:10px;">
                             <div class="text-center">
                             <h3><span >Recurring Payment</span></h3>
                             </div>

                             </div>
                             
                             <form action="<?php echo base_url();?>userManager/recurringPayment" method="post" id="recurringForm">
                             <span class="input input--hoshi">
                             <label id="pymentDate-error" class="error" for="pymentDate"><?php echo form_error('pymentDate'); ?></label>
                             <input class="input__field input__field--hoshi" type="date" id="pymentDate" name="pymentDate" />
                             <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4"></label>
                             </span>

                             <span class="input input--hoshi">
                             <label id="recurringType-error" class="error" for="recurringType"><?php echo form_error('recurringType'); ?></label>
                             <select class="form-control-inp" id="recurringType" name="recurringType">
                             <option value="select">--- Select recurring type-----</option>
                             <option>15 Days</option>
                             <option>Weak</option>
                             <option>Month</option>
                             </select>
                             </span>
                             <span class="input input--hoshi" style="height: 140px;"> <label  class="error" ><?php echo form_error('recurringCurrency[]'); ?></label>
                             <div class="form-control-inp">
                             <div class="selectBox" onclick="showCheckboxes()">
                             <select>
                             <option>--- Select currency-----</option>
                             </select>

                             <div class="overSelect"></div>
                              </div>
                              <div id="checkboxes">
                              <?php
                              //print_r($coinList);
                                      if(count($coinList)>0)
                                      {
                                        foreach ($coinList as $key => $monetiserValue) {
                                          ?>
                                           <label for="<?= $monetiserValue['coin_name'] ?>">
                                            <input name="recurringCurrency[]" type="checkbox" id="<?= $monetiserValue['coin_name'] ?>" value="<?= $monetiserValue['coin_name'] ?>_<?= $monetiserValue['coin_id'] ?>" /><?= $monetiserValue['coin_name'] ?>
                                            </label>
                                        <?php
                                        }

                                      }
                                      else{
                                        ?>
                                        <option>No such currency found</option>
                                        <?php
                                      }
                                    ?>


                               </div>
                               </div>
                               </span>



                             <span class="input input--hoshi">
                             <label id="recurringAddr-error" class="error" for="recurringAddr"><?php echo form_error('recurringAddr'); ?></label>
                             <input class="input__field input__field--hoshi" type="text" id="recurringAddr" name="recurringAddr" />
                             <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
                             <span class="input__label-content input__label-content--hoshi">Address</span>
                             </label>
                             </span>
                             <button type="submit" class="btn btn-primary " style="width:40%; margin-left:30%">Submit</button>
                             </form>
                             </div>
                             </div>
                             <div class="col-md-3"></div>
                             </div>
                            </section>

                          </div>



                        </div>

                </div>

             </div>
        <?php $this->load->view('dashboard/footer');?>
