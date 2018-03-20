<?php $this->load->view('dashboard/header');
$this->load->view('dashboard/sidebar');
?>
            <article class="content forms-page">
                <section>
                    <div class="content">
                      <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header hd-box" data-background-color="blue">
                              <div class="text-center">
                              <h3><span >Paycrypt Card</span></h3>
                              </div>
                            </div>
                            <div class="card-content">
                              <button class="paycrypt-accordion">Where is my card?</button>
                              <div class="paycrypt-panel">
                                <p>If you are a U.S. cardholder, now you can get instant answers to your card related queries. This service is currently available for U.S. cardholder only.</p>
                              </div>

                              <button class="paycrypt-accordion">Where is the Paycrypt Card available?</button>
                              <div class="paycrypt-panel">
                                <p>The Paycrypt Card is issued in the United States by Metropolitan Commercial Bank and is available and supported in all 50 US states.</p>

                                <p>The Paycrypt Card is issued by Wave Crest Holdings Ltd. outside of the US and is available and supported in the European territories.</p>
                              </div>

                              <button class="paycrypt-accordion">What do I do if my Paycrypt Card application was declined?</button>
                              <div class="paycrypt-panel">
                                <p><b>If you received an ID verification error: </b> </p>
                                <p>Please submit a request to our team and we'll walk you through the process of correcting your application.</p>
                                <p>In the event that you cannot pass the KYC process, we will be happy to issue an order fee refund to you.</p>
                                <p><b>If you received a debit card application error: </b> </p>
                                <p>This means that a system error has prevented your application from being processed. You will be notified via email when our Card Services team has successfully re-submitted your application, or if further action is required on your behalf.</p>
                              </div>

                              <button class="paycrypt-accordion">When will I get my Paycrypt Card in the mail?</button>
                              <div class="paycrypt-panel">
                                <p>You'll receive your Paycrypt Card via US Mail in 7-10 business days from the date of a successful application. If you haven't received your card after 10 full business days, please submit a request to get in contact with our team.</p>
                              </div>
                            </div>
                        </div>
                    </div>

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
    <script src="js/vendor.js"></script>
    <script src="js/app.js"></script>
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
               
<?php $this->load->view('dashboard/footer');?>