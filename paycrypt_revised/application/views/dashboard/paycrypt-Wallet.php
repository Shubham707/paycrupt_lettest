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
                              <h3><span >Paycrypt Wallet</span></h3>
                              </div>
                            </div>
                            <div class="card-content">
                              <button class="paycrypt-accordion">What Does a Spending Password Do?</button>
                              <div class="paycrypt-panel">
                                <p>Your wallet’s spending password offers you extra security by requiring the password you choose whenever you:</p>
                                <ul>
                                  <li>Send a transaction or sign a multi-signature transaction</li>
                                  <li>Export your wallet</li>
                                  <li>Access your backup phrase</li>
                                </ul>

                              </div>

                              <button class="paycrypt-accordion">How to create a Bitcoin Cash wallet in the Paycrypt wallet app</button>
                              <div class="paycrypt-panel">
                                <p>Enabling Bitcoin Cash support in the Paycrypt wallet is easy.</p>

                                <ul>
                                  <ol>Go to your wallet settings and select Bitcoin Cash Support.</ol>
                                  <ol>
                                    Select New personal wallet.
                                  </ol>
                                  <ol>
                                    In the Coin setting on the next screen, select BCH.
                                  </ol>
                                  <ol>
                                    Your new wallet is ready! Find your BCH address by selecting your BCH wallet in the Receive tab.
                                  </ol>
                                </ul>

                              </div>

                              <button class="paycrypt-accordion">How do I move my wallet from Copay to Paycrypt?</button>
                              <div class="paycrypt-panel">
                                <p>You can easily add your Copay-hosted wallet to Paycrypt by restoring your wallet backup in the Paycrypt app.</p>
                                <p>If you have a wallet seed phrase, go to Add Wallet > Import Wallet > Wallet Recovery Phrase in the Paycrypt app and write down your 12-word Copay backup.</p>
                                <P>If you've backed up your wallet in a file or text block, go to Add Wallet > Import Wallet > File/Text Backup in the Paycrypt app and upload your Copay text or file backup.</P>
                                <P>Note that you will now be able to view the same wallet in both Copay and the Paycrypt app. Changes made to the wallet in one app will be reflected in the other.</P>
                                <P>If you have notifications enabled, be sure to disable them in one of your apps to avoid duplicate notifications. You can also delete a wallet from your Copay device (after you have imported it into Paycrypt) by going to Wallet Preferences > Advanced and selecting "Delete Wallet."</P>

                              </div>

                              <button class="paycrypt-accordion">Why don't I have an online account for my Paycrypt wallet?</button>
                              <div class="paycrypt-panel">
                                <p>You do not need an account on Paycrypt.com to use your Paycrypt Wallet. Your Paycrypt Wallet is secured using your device and your private key: by design, Paycrypt never has access to your bitcoin or your wallet.</p>

                                <p>Have you backed up your Paycrypt Wallet? It's extremely important that you do so.</p>
                                <p>If you don't set up a backup and lose your wallet (hard drive failure, theft, etc.), then the funds inside will not be able to be recovered.</p>

                                <p>We have a guide on how to back up your wallet here in this help articles as well as a video guide. </p>

                                <p>You don't need a second device, you just need to copy down the recovery phrase and keep it somewhere safe. Please don't do anything like email it to yourself or keep a copy on the device where your Wallet is. If you do this and then your device is stolen, then the thief would be able to steal your wallet's funds as well.</p>

                                <p>You can review the Wallet's Terms of Service and all of our help center's articles on the Wallet here.</p>
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