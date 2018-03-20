<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from modularcode.io/modular-admin-html/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Feb 2018 07:31:04 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
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
        <article class="content forms-page">
          <section>
            <div class="content" style="padding-top:0px !important">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-3">
                  </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header hd-box" data-background-color="blue">
                              <div class="text-center">
                              <h3><span >Paycrypt</span></h3>
                              </div>
                            </div>
                            <!--  -->
                            <div class="card-content">
                              <div class="row" style="margin-bottom:20px;">
                              <div class="col-md-5">
                              <div style="margin-top:20px; margin-left:20px;float:leftt">
                                <lable style="color:#489ad3; font-weight:bold">Amount :</lable>
                                <input type="email" style="border:none; margin-left:5px;width:50px;" name="amount" value="<?php echo $amount;?>" placeholder="Amount"><br>
                               <lable style="color:#489ad3; font-weight:bold">Total USD &nbsp; $:</lable><input type="email" style="border:none; margin-left:5px;width:50px; color: green" name="amount" value="<?php echo $usd;?>" placeholder="Amount"><br>
                                <lable style="color:#489ad3; font-weight:bold">Invoice Id: &nbsp; :</lable><input type="email" style="border:none; margin-left:5px;width:50px; color: green" name="amount" value="<?php echo $invoice;?>" placeholder="Amount">
                              </div>
                            </div>
                              <div class="col-md-2">  </div>
                              <div class="col-md-5">
                              <div style="margin-top:20px; margin-right:20px; float:right ">
                                <lable style="color:#489ad3; font-weight:bold">Time :</lable>
                                <div id="timer" >
                                  
                                </div>
                              </div>
                            </div>
                            <div class="section-divide-line" style="margin-top:10px; background:#489ad3!important"></div>
                            </div>
                          <div class="row">
                            <div class="  col-sm-3 col-md-3 "></div>
                            <div class="  col-sm-6 col-md-6 ">
                                  <div class="pay-qr">
                                    <img src="http://chart.apis.google.com/chart?cht=qr&chs=300x300&chl=<?php echo $address;?>" alt="QR Code" class="img-thumbnail" style="width: 100%;" >
                                  </a>
                                </div>
                            </div>

                          <!-- img row end  -->
                          </div>
                          </form>
                          <div class="row" style="margin-bottom:50px;">
                            <div class="  col-sm-2 col-md-2 "></div>
                            <div class="  col-sm-8 my-coin col-md-8 ">
                              <div class="section-divide-line" style="margin-top:20px"></div>
                              <div class="input-group">
                                <input type="text" name="orderID" class="form-control" placeholder="Address" value="<?php echo $address;?>">
                              </div>
                              <br>
                              <!-- <div class="payment-button-row" style="text-align:center">
                                <input type="submit" name="submit" class="btn payment-btn-info" value="Submit">
                              </div> -->
                            </div>
                            </div>
                            </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </section>
            </article>
        </div>
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
    <script data-cfasync="false" src="../cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js"></script><script>
        (function(i, s, o, g, r, a, m)
        {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function()
            {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-80463319-4', 'auto');
        ga('send', 'pageview');
    </script>
    <script src="<?php echo base_url();?>vendor/js/vendor.js"></script>
    <script src="<?php echo base_url();?>vendor/js/app.js"></script>
    <script src="<?php echo base_url();?>vendor/js/custom.js"></script>
    <script>
  var acc = document.getElementsByClassName("paycrypt-accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var panel = this.nextElementSibling;
          if (panel.style.display === "block") {
              panel.style.display = "none";
          } else {
              panel.style.display = "block";
          }
      });
  }
  </script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
  document.getElementById('timer').innerHTML =
  15 + ":" + 00;
startTimer();

function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m<0){
    window.location.href="<?php echo $collbackurl;?>?msg=timed is out!";
  }
  
  document.getElementById('timer').innerHTML =
    m + ":" + s;
  setTimeout(startTimer, 1000);
}

function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
  if (sec < 0) {sec = "59"};
  return sec;
}
</script>

</body>

<!-- Mirrored from modularcode.io/modular-admin-html/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Feb 2018 07:31:04 GMT -->
</html>
