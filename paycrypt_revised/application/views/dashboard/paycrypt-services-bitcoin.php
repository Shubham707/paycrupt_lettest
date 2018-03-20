<?php $this->load->view('dashboard/header');
$this->load->view('dashboard/sidebar');
?>
            <article class="content forms-page">
                <section>
                    <div class="content">
                      <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" >
                            <div class="card-header hd-box" data-background-color="blue" >
                              <div class="text-center">
                              <h3><span >Paycrypt Services &amp; Bitcoin</span></h3>
                              </div>
                            </div>
                            <div class="card-content" >
                              <h5>Information About Paycrypt</h5>
                              <button class="paycrypt-accordion" style="margin-top: 30px;">How do I get a personal account with Paycrypt?</button>
                              <div class="paycrypt-panel" >
                                <p>Paycrypt does not currently offer personal accounts for payment processing. Payment processing accounts are available for businesses and organizations only.</p>

                                <p><b>What about the Paycrypt wallet?</b></p>
                                <p> The Paycrypt wallet is bitcoin wallet software released by Paycrypt which lets you store and spend bitcoin. You can use this wallet to buy Amazon.com gift cards, shift between BCH and BTC on ShapeShift, and sync up with the Coinbase exchange.</p>

                                <p>Creating a Paycrypt wallet does not create a Paycrypt account. The Paycrypt or Copay wallet is 100% your responsibility. You (and only you) have complete access and control over your bitcoin, which is stored on your device and not in the cloud.</p>
                              </div>

                              <button class="paycrypt-accordion">Why can't I use Paycrypt's services in my country?</button>
                              <div class="paycrypt-panel">
                                <p>Paycrypt is a U.S.-based company that complies with all mandated federal and local regulations.</p>

                                <p>U.S. companies are prohibited from engaging economically or by trade with persons or businesses based in countries that are under trade and economic sanctions set forth by the U.S. Department of Treasury's Office of Foreign Asset Control (OFAC).</p>

                                <p>You can view an updated list of OFAC sanctions on the OFAC site. </p>

                                <p>Paycrypt also complies with local regulations which ban cryptocurrency. If your country has banned bitcoin or cryptocurrency use in general, we cannot offer our services to your business or customers.</p>

                                <p>Currently, Paycrypt cannot service merchants that are based in the following countries: Bangladesh, Bolivia, Ecuador, Kyrgyzstan.</p>
                              </div>

                              <button class="paycrypt-accordion">Why is the support team taking so long to reply?</button>
                              <div class="paycrypt-panel">
                                <p>While we aim to reply within 1 business day, please allow up to 3 business days for first response. We are currently working to clear a backlog of over 1,000 tickets so we can get back to meeting our service standards.</p>

                                <p>We apologize to everyone affected by this delay, and we ask for your patience as we work to answer your inquiry. We are making important changes to our product and support processes to streamline your user and support experiences. </p>

                                <p>We put priority on tickets submitted first. We also aim to answer issues requiring bitcoin refunds first. We work from oldest to newest, so please do not send more emails for the same issue. This will move your inquiry out of its place in our support queue.</p>
                              </div>

                              <button class="paycrypt-accordion">Where does Paycrypt get its exchange rates?</button>
                              <div class="paycrypt-panel">
                                <p>Paycrypt has relationships with many bitcoin exchanges around the world, but we only utilize exchanges which meet our operational and regulatory requirements. When calculating our exchange rates for Paycrypt invoices, we only incorporate rates of bitcoin exchanges which meet our regulatory, operational, and market depth requirements.</p>

                                <p>To calculate the exchange rate for US Dollars, we typically pull the market depth from an exchange with adequate liquidity and reliable withdrawal capabilities in the USA and Eurozone. We factor "slippage" into our exchange rates, which means that the larger the value of the invoice, the lower the exchange rate. Slippage is usually only noticeable on very large invoices.</p>

                                <p>We set exchange rates for non-USD currencies indirectly using the Open Exchange Rates API. In the future, as Bitcoin markets in non-USD currencies mature, Paycrypt will use those markets directly.</p>
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