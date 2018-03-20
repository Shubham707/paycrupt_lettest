<?php $this->load->view('dashboard/header');
$this->load->view('dashboard/sidebar');
?>
              <article class="content forms-page">         
      <section>
        <div class="content">
            <div class="row">
              <div class="col-md-12">

                <div class="card">
                  <div class="card-header hd-box" data-background-color="blue">
                    <h4 class="title">Welcome <?php echo $this->session->userdata('userFirstName'); ?>  / Your Personal Detail</h4>
                  </div>

                  <div class="card-content">
                    <div row>
                      <div class="col-sm-12">
                       <div class="monetiser">
                         <button class="accordion"><h5>1. Gourl.io Monetiser Online</h5></button>
                          <div class="panel">
                            <p class="margbottm5">Use our GoUrl Monetiser Online if you don't have your own website - Monetise/sell your Files & Music & Texts & Images & Video online for cryptocoins - Bitcoin, Bitcoin Cash, Litecoin, Dash, etc. Create Your Free GoUrl Payment Urls below (it will protect your information from visitors directly proceeding and monetise it) and after share them on the web - twitter / forums / websites / etc. Make Cryptocoins Money/USD Online 
                            </p>
                            <span class="my-read margtop10"><a href="#" data-toggle="tooltip" data-placement="top" title="Read More">Read More <i class="fa fa fa-angle-double-right"></i></a></span>
                            <!-- table start -->
                            <div class="row">
                              <div class="col-sm-12" style="overflow-y: scroll;">
                                <table class="table table-bordered " style="overflow: scroll; width: 100%; max-height: 100%; font-size: 14px;">
                                  <thead>
                                    <tr class="valigntop">
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 1%;">No</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 12%;">Payment Url</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 5%;">Currency</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 10%;">Amount in Box</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 10%;">Amount in USD</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 5%;">Active ?</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 10%;">Url Expiry Date</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 5%;">Total Confirmed Received</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 5%;">Count - Total Confirmed Received</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 10%;">Total Unconfirmed Received</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 10%;">Count - Total Unconfirmed Received</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 3%;">Edit </th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                          <?php $i=1; foreach($getMonitiger as $monList):?>
                                          <tr>
                                            <td><?php echo $i++;?></td>
                                            <td><?php echo $monList->privateURL;?></td>
                                            <td><img src="<?= base_url();?>uploads/<?php echo $monList->coin_image;?>" width="60" height="60"></td>
                                            <td><?php echo $monList->coinRate;?></td>
                                            <td><?php echo $monList->monUSD;?></td>
                                            <td><?php echo $monList->privateURL;?></td>
                                            <td><?php echo $monList->expiryDate;?></td>
                                            <td><?php echo $monList->monConfirmed;?></td>
                                             <td><?php echo $monList->monConfirmedReceived;?></td>
                                            <td><?php echo $monList->monUnconfirmed;?></td>
                                             <td><?php echo $monList->monUnconfirmedReceived;?></td>
                                            <td style="width: 20%"><a class="btn btn-info" href="<?php echo base_url();?>monetiser/createButton/<?php echo $monList->monetiser_id.'/'.$monList->privateURL.'/'.$monList->boxID;?>">Create Button</a>&nbsp;<a class="btn btn-info" href="<?php echo base_url();?>monetiser/monEdit/<?php echo $monList->monetiser_id;?>">Edit</a></td>
                                          </tr>      
                                     <?php endforeach;?>
                                        </tbody>
                                </table>
                              </div>
                            </div>
                            <div class="create-btn" style="margin-top: 16px;">
                              <a href="<?php echo base_url();?>/monetiser/my-monitiser-online" data-toggle="tooltip" data-placement="top" title="Create New Payment Url Online">Create New Payment Url Online <i class="fa fa fa-angle-double-right"></i></a>
                            </div>
                            <!-- table end -->
                          </div>

                          <button class="accordion"><h5>2. Your Cryptocoin Payment Box / Captcha</h5></button>
                          <div class="panel">
                            <p>If you have your own website, use PHP Class, Wordpress Bitcoin/Altcoin plugins or use Payment API - crypto payment box on your website
                            </p>
                            <span class="my-read margtop10"><a href="#" data-toggle="tooltip" data-placement="top" title="Read More">Read More <i class="fa fa fa-angle-double-right"></i></a></span>
                            <!-- table start -->
                            <div class="row">
                              <div class="col-sm-12" style="overflow-y: scroll;">
                                <table class="table table-bordered " style="overflow: scroll; width: 100%;font-size: 14px;">
                                  <thead>
                                    <tr class="valigntop">
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 1%;">No</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 12%;">Your Payment Box</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 5%;">Coin</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 10%;">Total Confirmed Payments, ~ USD</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 15%;">Total Confirmed Payments</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 5%;">Count Confirmed</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 10%;">Unconfirmed Payments</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 5%;">Unconf. Count</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 10%;">Latest Payment Forwarded to You</th>
                                      
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 3%;">Edit</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                           <?php 
                                            $i=1;
                                            foreach($getKey as $bitcoin){ 
                                            ?>
                                          <tr>
                                            <td><?php echo $i++;?></td>
                                            <td><?php echo $bitcoin->key_id;?></td>
                                            <td><?php echo $bitcoin->boxName;?></td>
                                           
                                             <td><img src="<?php echo base_url();?>uploads/<?php echo $bitcoin->coin_image;?>" height="60" width="60"></td>
                                            
                                            <td><?php echo $bitcoin->amountUSD;?></td>
                                            <td><?php echo $bitcoin->amount;?></td>
                                            <td><?php echo $bitcoin->txConfirmed;?></td>
                                            <td><?php echo $bitcoin->unrecognised;?></td>
                                            <td><?php echo $bitcoin->processed;?></td>
                                           
                                            <td width="200">
                                                <a class="btn btn-info" href="<?php echo base_url();?>account/coinbox/<?php echo $bitcoin->multicurrencyID.'/'.$this->session->userdata('box_id').'/'.str_replace(' ','',$bitcoin->coinName);?>">Edit</a> 
                                              <!-- <a class="btn btn-info" href="<?php echo base_url();?>account/coin_boxes/<?php echo $this->session->userdata('box_id');?>/<?php echo str_replace(' ','',$bitcoin->coinName);?>">Start</a></td> -->
                                          </tr>      
                                         <?php }?>     
                                         
                                        </tbody>
                                </table>
                              </div>
                            </div>

                            <div class="create-btn" style="margin-top: 16px;">
                              <a href="<?php echo base_url();?>account/public_key" data-toggle="tooltip" data-placement="top" title="Create New Payment Url Online">Create New Payment Url Online <i class="fa fa fa-angle-double-right"></i></a>
                            </div>

                            <div class="clearfix"></div>

                            <div class="common">
                              <h2>Common Statistics for All Your Payment Boxes</h2>
                            </div>

                            <div class="create-btn">
                              <a style="margin-bottom:5px;  display: inline-block;" href="<?php echo base_url();?>payment/payment-successfull" data-toggle="tooltip" data-placement="top" title="Payments Successfully Received &amp; Processed ">Payments Successfully Received &amp; Processed <i class="fa fa fa-angle-double-right"></i>
                              </a>
                              <a style="margin-bottom:5px; display: inline-block;" href="<?php echo base_url();?>payment/Unrecognised-Received-Payments" data-toggle="tooltip" data-placement="top" title="Unrecognised Received Payments">Unrecognised Received Payments <i class="fa fa fa-angle-double-right"></i>
                              </a>
                              <a style="margin-bottom:5px; display: inline-block;" href="<?php echo base_url();?>payment/auto-payments-external-wallet" data-toggle="tooltip" data-placement="top" title="Auto Payments to Your Wallet">Auto Payments to Your Wallet <i class="fa fa fa-angle-double-right"></i>
                              </a>
                            </div>
                            <!-- table end -->
                          </div>

                          <button class="accordion"><h5>3. Affiliate Programs</h5></button>
                          <div class="panel">
                            <p>If you have your own website, use PHP Class, Wordpress Bitcoin/Altcoin plugins or use Payment API - crypto payment box on your website
                            </p>
                            <span class="my-read margtop10"><a href="#" data-toggle="tooltip" data-placement="top" title="Read More">Read More <i class="fa fa fa-angle-double-right"></i></a></span>
                            <!-- table start -->
                            <div class="row">
                              <div class="col-sm-12" style="overflow-y: scroll;">
                                <table class="table table-bordered " style="overflow: scroll; width: 100%;font-size: 14px;">
                                  <thead>
                                    <tr class="valigntop">
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 1%;">No</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 5%;">Affiliate Title</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 5%;">Earnings Bitcoins</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 10%;">Earnings BitcoinCash</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 8%;">Earnings Litecoins</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 5%;">Earnings Dash</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 10%;">Earnings Dogecoins</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 5%;">Earnings Reddcoins</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 5%;">Earnings Potcoins</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 8%;">Earnings Feathercoins</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 10%;">Earnings Vertcoins</th>
                                       <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 10%;">Earnings Peercoins</th>
                                        <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 8%;">Earnings MonetaryUnits</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 5%;">Latest Affiliate Received, GMT Time</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 2%;">Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                                <?php $i=1; foreach($getaffiliated as $affiliate):?>
                                              <tr>
                                                <td><?php echo $i++;?></td>
                                                <td><?php echo $affiliate->title?></td>
                                                <td><?php echo $affiliate->bitcoinAddress?></td>
                                                <td><?php echo $affiliate->bitcoinCashAddress?></td>
                                                <td><?php echo $affiliate->litecoinAddress?></td>
                                                <td><?php echo $affiliate->dashcoinAddress?></td>
                                                <td><?php echo $affiliate->dogecoinAddress?></td>
                                                <td><?php echo $affiliate->reddcoinAddress?></td>
                                                <td><?php echo $affiliate->potcoinAddress?></td>
                                                <td><?php echo $affiliate->feathercoinAddress?></td>
                                                 <td><?php echo $affiliate->vertcoinAddress?></td>
                                                 <td><?php echo $affiliate->peercoinAddress?></td>
                                                <td><?php echo $affiliate->MonetaryUnitAddress?></td>
                                                <td><?php echo $affiliate->key_created?></td>
                                                <td><a  class="btn btn-info" href="<?= base_url();?>affiliated/edit_data/<?php echo $affiliate->affiliated_id;?>">EDIT</a> &nbsp;<a  class="btn btn-info" href="">Stats</a></td>
                                              </tr>      
                                             <?php endforeach;?>
                                            </tbody>
                                </table>
                              </div>
                            </div>
                            <div class="create-btn" style="margin-top: 16px;">
                              <a href="<?php echo base_url();?>affiliated" data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Get New Additional Affilate Key">Get New Additional Affilate Key <i class="fa fa fa-angle-double-right"></i></a>
                            </div>
                            <!-- table end -->
                          </div>
                          
                       </div>
                          
                      </div>

                    </div>
                  </div>

                </div>

              </div>
            </div>
        </div>
      </section>
      
      <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight){
              panel.style.maxHeight = null;
            } else {
              panel.style.maxHeight = panel.scrollHeight + "px";
            } 
          });
        }
      </script>


      <?php $this->load->view('dashboard/footer');?>