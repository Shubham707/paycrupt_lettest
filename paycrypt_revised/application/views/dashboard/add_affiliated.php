<?php $this->load->view('dashboard/header');
$this->load->view('dashboard/sidebar');
?>
         <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script> 
         <style>
         iframe{width: 100%; height: 30% !important;}        
         </style>    
      <section>
        <div class="content">
            <div class="row">
              <div class="col-md-12">

                <div class="card">
                  <div class="card-header hd-box" data-background-color="blue">
                    <h4 class="title">Affiliated Account Add Wallet</h4>
                     <h4 class="pull-right"><a title="Update" href="<?php echo base_url('affiliated/edit_data');?>">Update</a></h4>
                  </div>

                  <div class="card-content">
                    <div class="row">
                      <div class="col-sm-12">

                        <div class="paycrypt-io">

                          <div class="my-select">
                           <h4></h4> 
                          </div>
                          <div class="row">
                          <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                              
                                <form id="signupForm" method="post" class="form-horizontal" action="<?php echo base_url();?>affiliated/saveAffiliated" enctype="multipart/form-data">
                                <div class="row">
                                  <div class="col-md-3">
                                    <label class="control-label">Affiliate Title::</label>
                                  </div>
                                  <div class="col-sm-9">
                                     <input type="text" id="privateURL" name="title" class="form-control" placeholder="Affiliate Title">
                                  </div>
                                </div>
                                <div class="row margtop20">
                                  <div class="col-md-3">
                                    <label class="control-label">Affiliate Key:</label>
                                  </div>
                                  <div class="col-sm-9">
                                     <input type="text" id="privateURL" name="affiPrivateKey" class="form-control" placeholder="Affiliate Key">
                                  </div>
                                </div>

                                <div class="row margtop20">
                                  <div class="col-md-3">
                                    <label class="control-label">Bitcoins:</label>
                                  </div>
                                  <div class="col-sm-9">
                                     <input type="text" id="privateURL" name="bitcoinAddress" class="form-control" placeholder="Bitcoins">
                                  </div>
                                </div>

                                <div class="row margtop20">
                                  <div class="col-md-3">
                                    <label class="control-label">BitcoinCash:</label>
                                  </div>
                                  <div class="col-sm-9">
                                     <input type="text" id="privateURL" name="bitcoinCashAddress" class="form-control" placeholder="BitcoinCash">
                                  </div>
                                </div>

                                <div class="row margtop20">
                                  <div class="col-md-3">
                                    <label class="control-label">Litecoins:</label>
                                  </div>
                                  <div class="col-sm-9">
                                     <input type="text" id="privateURL" name="litecoinAddress" class="form-control" placeholder="Litecoins">
                                  </div>
                                </div>
 
                                <div class="row margtop20">
                                  <div class="col-md-3">
                                    <label class="control-label">Dashcoins:</label>
                                  </div>
                                  <div class="col-sm-9">
                                     <input type="text" id="privateURL" name="dashcoinAddress" class="form-control" placeholder="Dashcoins">
                                  </div>
                                </div>

                                <div class="row margtop20">
                                  <div class="col-md-3">
                                    <label class="control-label">Dogecoins:</label>
                                  </div>
                                  <div class="col-sm-9">
                                     <input type="text" id="privateURL" name="dogecoinAddress" class="form-control" placeholder="Dogecoins">
                                  </div>
                                </div>

                                <div class="row  margtop20">
                                  <div class="col-md-3">
                                    <label class="control-label">Speedcoins:</label>
                                  </div>
                                  <div class="col-sm-9">
                                     <input type="text" class="form-control" placeholder="Reddcoins" id="privateURL" name="speedcoinAddress">
                                  </div>
                                </div>

                                <div class="row  margtop20">
                                  <div class="col-md-3">
                                    <label class="control-label">UniversalCurrency:</label>
                                  </div>
                                  <div class="col-sm-9">
                                     <input type="text" id="privateURL" name="universalCurrency" class="form-control" placeholder="UniversalCurrency">
                                  </div>
                                </div>

                                <div class="row  margtop20">
                                  <div class="col-md-3">
                                    <label class="control-label">Feathercoins:</label>
                                  </div>
                                  <div class="col-sm-9">
                                     <input type="text" id="privateURL" name="feathercoinAddress" class="form-control" placeholder="Feathercoins">
                                  </div>
                                </div>

                                <div class="row  margtop20">
                                  <div class="col-md-3">
                                    <label class="control-label">Vertcoins:</label>
                                  </div>
                                  <div class="col-sm-9">
                                     <input type="text" id="privateURL" name="vertcoinAddress" class="form-control" placeholder="Vertcoins">
                                  </div>
                                </div>
                                 <div class="row  margtop20">
                                  <div class="col-md-3">
                                    <label class="control-label">Reddcoins:</label>
                                  </div>
                                  <div class="col-sm-9">
                                     <input type="text" id="privateURL" name="reddcoinAddress" class="form-control" placeholder="Reddcoins">
                                  </div>
                                </div>

                                <div class="row  margtop20">
                                  <div class="col-md-3">
                                    <label class="control-label">Peercoins:</label>
                                  </div>
                                  <div class="col-sm-9">
                                     <input type="text" id="privateURL" name="peercoinAddress" class="form-control" placeholder="Peercoins">
                                  </div>
                                </div>
                                <div class="row  margtop20">
                                  <div class="col-md-3">
                                    <label class="control-label">Potcoin Address:</label>
                                  </div>
                                  <div class="col-sm-9">
                                     <input type="text" id="privateURL" name="potcoinAddress" class="form-control" placeholder="Peercoins">
                                  </div>
                                </div>

                                <div class="row  margtop20">
                                  <div class="col-md-3">
                                    <label class="control-label">Monetary Units:</label>
                                  </div>
                                  <div class="col-sm-9">
                                     <input type="text" id="privateURL" name="MonetaryUnitAddress" class="form-control" placeholder="MonetaryUnits">
                                  </div>
                                </div>
                                
                                <div class="row">
                                  <div class="col-sm-12">
                                    <div class="create-submit" style="float: left;">
                                    <button type="submit" name="submit" style="background: #4494cc; color: #fff; padding: 6px 25px;border-radius: 25px;border: none;cursor: pointer; margin-top: 15px;">
                                      Update <i class="fa fa-angle-double-right"></i>
                                    </button>
                                     <!--  <a  href="#" role="button"></a> -->
                                    </div>
                                  </div>
                                </div>
                              </form>
                                
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
      <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>

      <?php $this->load->view('dashboard/footer');?>

