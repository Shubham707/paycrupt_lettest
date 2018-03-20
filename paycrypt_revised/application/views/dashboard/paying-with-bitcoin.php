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
                              <h3><span >Paying with Bitcoin</span></h3>
                              </div>
                            </div>
                            <div class="card-content">
                              <button class="paycrypt-accordion">How do I pay without a payment bitcoin address?</button>
                              <div class="paycrypt-panel">
                                <p>Paycrypt invoices have recently changed to display Payment Protocol URLs or a Payment Protocol QR codes, which provide bitcoin address and amount information securely to bitcoin wallets.</p>
                                <p> <b>What You'll Need to Pay</b> </p>
                                <p>You can use any of the popular Payment Protocol-compatible wallets below to pay a Paycrypt invoice. If you don't have one of these wallets yet, simply create a wallet (please use the current release version) and send some bitcoin to it. </p>
                              </div>

                              <button class="paycrypt-accordion">How to claim a bitcoin refund from a Paycrypt merchant refund email</button>
                              <div class="paycrypt-panel">
                                <p>If a Paycrypt merchant has initiated a bitcoin refund for an order you placed, you will receive an email from noreply@Paycrypt.com telling you that the merchant has authorized a refund. You will receive this email at the email address that you entered when you paid the invoice.</p>

                                <p>Note that full and partial refund email links expire within 3 days, so please claim your refund within 3 days of receiving your email. </p>
                              </div>

                              <button class="paycrypt-accordion">Why did my payment from a account or exchange not work?</button>
                              <div class="paycrypt-panel">
                                <p>When you send bitcoin from a true bitcoin wallet, it will immediately broadcast to the Bitcoin network. When the Bitcoin network confirms the transaction, the funds will be spendable by the recipient.</p>

                                <p>Bitcoin exchanges and account services are different. These services hold your bitcoin in their own true bitcoin wallets. When you send a payment with these services, they have to send it for you from their own wallets.</p>

                                <p>Because they have millions of users and hold a large quantity of bitcoin, exchange and account try to send your transaction as efficiently as possible by grouping your transaction with other customer transactions. This means that it can take longer than normal to get a payment broadcast to the Bitcoin network. Outgoing transactions typically go out every few hours.</p>

                                <p>Your payment will arrive eventually. But since Paycrypt payment windows expire within 15 minutes, outgoing exchange/account transactions are often too slow to successfully pay a Paycrypt merchant.  If your payment arrives after a Paycrypt payment window expires, you will have to reach out to the Paycrypt support team with your transaction information to request a refund. </p>

                                <p>To prevent these headaches and hassles, Paycrypt now requires all payments to be made with an updated wallet that is compatible with Payment Protocol. To pay a Paycrypt invoice, we recommend transferring your spending bitcoin from an account service to a true bitcoin wallet.</p>
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