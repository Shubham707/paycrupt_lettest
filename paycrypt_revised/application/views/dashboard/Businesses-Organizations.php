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
                              <h3><span >Businesses & Organizations</span></h3>
                              </div>
                            </div>
                            <div class="card-content">
                              <button class="paycrypt-accordion">Can I set up multi-user access on the Paycrypt dashboard?</button>
                              <div class="paycrypt-panel">
                              <p>With Paycrypt's Business plan you can add multiple users to the Paycrypt dashboard. Each user will have individual login credentials (email and password).</p>
                              <p>Go to to invite a new user to your Paycrypt dashboard and choose the set of privileges which shall be given to the new user.</p>
                              <p>The invite will be sent to the email address provided.</p>
                              <p>It contains a link which allows the user to create an account and set a password. </p>
                              <p>Each user can set up 2 Factor Authentication via  after creating their account (recommended).</p>
                              <p>The below screenshot shows what a user with support privileges would see if he logs into the Paycrypt merchant account. The support privilege allows him to view incoming payments but not to modify the account settings (settlement information for instance).</p>

                              </div>

                              <button class="paycrypt-accordion">How are daily approved volume limits calculated?</button>
                              <div class="paycrypt-panel">
                                <p>Our approved sales volumes are on a rolling 24 hour time frame. This means that when an invoice is fully paid, the paid amount is reduced from your approved sales volume for 24 hours.</p>
                                <p><b>For example:</b> </p>
                                <p>Let us say you have an approved sales volume of $100 per day and your client creates and fully pays an invoice for $25 on January 1, 2014 at 12:00 UTC. Your approved sales volume will be reduced by $25 until January 2, 2014 at 12:00 UTC. On January 2, 2014 at 12:01 UTC, your approved sales volume will be reverted back to $100 until another invoice has been fully paid.</p>

                              </div>

                              <button class="paycrypt-accordion">Can I use Paycrypt in my industry?</button>
                              <div class="paycrypt-panel">
                                <p>We are able to process bitcoin payments for most businesses, but legal and regulatory issues prevent us from servicing some industries. We'd like to provide all legitimate businesses the opportunity to accept bitcoin, and we are constantly working to make that a possibility.</p>
                                <p>We understand that some items may be legal to sell where you are located. However, because Paycrypt’s headquarters is in the United States, we comply with all federal laws and regulations. This means that you cannot directly or indirectly sell any of the following:</p>
                                <ul>
                                  <li>Narcotics, research chemicals, or any controlled substances</li>
                                  <li>Cash or cash equivalents, including items used for speculation or hedging purposes (such as derivatives), and the sale or trade of virtual currencies</li>
                                  <li>items that infringe or violate any intellectual property rights such as copyrights, trademarks, trade secrets, or patents</li>
                                  <li>ammunition, firearms, explosives (including fireworks), or weapons regulated under applicable law or as determined by Paycrypt</li>
                                  <li>any services which compete with Paycrypt</li>
                                </ul>
                              </div>

                              <button class="paycrypt-accordion">How do I refund the overpaid portion of an overpaid invoice?</button>
                              <div class="paycrypt-panel">
                                <p>Note: For overpaid invoices, the amount due on the invoice is automatically credited to the merchant once the transaction reaches 6 confirmations.  However, the merchant can refund the overpaid amount.</p>
                                <ul>
                                  <li>Log in to your Paycrypt merchant account and select the Payments view from the left panel.</li>
                                  <li>Select the desired invoice in the Payments view.</li>
                                  <li>Click Resolve at the top of the page to proceed.</li>
                                  <li>Select ‘Refund Overpayment’ and then click Next.</li>
                                  <li>If the purchaser’s wallet provided a refund address to use, you will have the option to use the provided address.  Otherwise, you can specify an refund bitcoin address.  Click the View Confirmation button to continue.</li>
                                  <li>Confirm the amount to refund (this must match the overpaid amount listed above the field) and click Refund Payment.</li>
                                  <li>You will be returned to the Payment Details view for the invoice, which states ‘A refund is pending approval from Paycrypt’ at the top of the screen.  The status of the invoice will be changed to ‘Paid’ once the refund has been processed.  Refunds are typically processed within 24 hours, but we ask that you allow up to 1-2 business days.</li>
                                </ul>
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

