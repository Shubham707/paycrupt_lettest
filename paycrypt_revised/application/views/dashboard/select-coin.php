<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from modularcode.io/modular-admin-html/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Feb 2018 07:31:04 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Paycrypt.io</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>vendor/image/paycrypt-favicon.png"/>
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/css/vendor.css">
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/css/set1.css">
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/css/app.css">



</head>
<body>
    <div class="main-wrapper">
        <div class="app" id="app" style="padding-left:0px!important">
          <header class="header" style="left:0px !important">
            <div class="sidebar-header">
                <div class="brand1">
                   <img src="<?php echo base_url();?>vendor/assets/img/paycrypt-Logo.png">

                </div>
            </div>
            <div class="header-block header-block-collapse d-lg-none d-xl-none">
                <button class="collapse-btn" id="sidebar-collapse-btn">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
              <div class="header-block header-block-search">

              </div>

              <div class="header-block header-block-nav">

               
              </div>
          </header>

            <article class="content forms-page">
                <section>
                    <div class="content">
                      <div class="container-fluid">
                <div class="row">
                   <form id="saveAffifiliated" class="cmxform" method="post" action="
                          <?php echo base_url();?>paymentcoin/payment" novalidate="novalidate">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header hd-box" data-background-color="blue">
                              <div class="text-center">
                              <h3><span >Payment</span></h3>

                              </div>
                            </div>
                            <div class="card-content">
                              <div class="row">
                            <div class="  col-sm-2 col-md-2 "></div>
                            <div class="  col-sm-8 my-coin col-md-8 ">
                              <div style="text-align: center; color: red; margin-top: 20px;margin-bottom: 20px;"><?php echo @$msg;?></div>

                              <div class="row">

                                <?php foreach($coins as $value){ ?>
                                <div class="col-sm-3">
                                  <div class="bit-coin" style="width:91%;">
                                 
                                    <input type="checkbox" name="coinLabel" class="example" value="<?php echo $value->coin_name;?>" style="width: 75%; height: 123px; position: absolute; top: 1px; left: 12px; opacity: 0.3;"> <img id="DIV3" src="<?php echo base_url();?>uploads/<?= $value->coin_image;?>" class="img-responsive">
                                  
                                </div>
                                </div>
                                 <?php } ?>
                              </div>


                            </div>
                          <!-- img row end  -->
                          </div>

                          <div class="row" style="margin-bottom:50px;">
                            <div class="  col-sm-2 col-md-2 "></div>
                            <div class="  col-sm-8 my-coin col-md-8 ">
                              <div class="section-divide-line" style="margin-top:20px"></div>
                             
                              <!-- <br> -->
                              <!-- <div class="input-group">
                                <span class="payment-input-group-addon">Address:</span>
                                <input type="text" name="orderID" class="form-control" placeholder="Transaction ID">
                              </div> -->
                               <input type="hidden" name="email" value="<?= $email;?>">
                              <br>
                              <div class="input-group">
                                <span class="payment-input-group-addon">Email:</span>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                              
                              </div>
                              <input type="hidden" id="coinRate" name="coinRate" value="<?php echo $coinRate;?>" >
                              <input type="hidden" name="collbackurl" value="<?php echo $collbackurl;?>">
                              <input type="hidden" name="publicKey" value="<?php echo $publicKey;?>">
                              <br>
                              <div class="payment-button-row" style="text-align:center">
					                      <input type="submit" name="submit" class="btn payment-btn-info" value="Payment">
                                </div>

                            </div>
                          </div>

                            </div>
                        </div>
                    </div>
                  </form>
            </div>
                      </div>
                </section>




            </article>


        </div>
    </div>
    <!-- Reference block for JS -->
    <div class="ref" id="ref">
        <div class="color-primary"></div>
        <div class="chart">
            <div class="color-primary"></div>
            <div class="color-secondary"></div>
        </div>
    </div>
   

 <script src="<?php echo base_url(); ?>assets/home/js/validation.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/calender/js/jquery.datepicker.js"></script>

     <script type="text/javascript"> 
      $('input.example').on('change', function() { $('input.example').not(this).prop('checked', false); }); </script>

 <script src="<?php echo base_url('vendor/')?>js/vendor.js"></script>
        <script src="<?php echo base_url()?>country.js"></script>
        <script src="<?php echo base_url('vendor/')?>js/app.js"></script>
        <script src="<?php echo base_url(); ?>assets/home/js/validation.js"></script>
        <script src="<?php echo base_url(); ?>assets/home/js/paycrypt_custom.js"></script>
        <script src="<?php echo base_url(); ?>vendor/js/lightbox.js"></script>

</body>

<!-- Mirrored from modularcode.io/modular-admin-html/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Feb 2018 07:31:04 GMT -->
</html>
