<?php $this->load->view('dashboard/header');
$this->load->view('dashboard/sidebar');
?>
         <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script> 
         <style>
         iframe{width: 100%; height: 30% !important;}        
         </style> 
         <article class="content forms-page">     
      <section>
        <div class="content">
            <div class="row">
              <div class="col-md-12">

                <div class="card">
                  <div class="card-header hd-box" data-background-color="blue">
                    <h4 class="title">Update Public and Private key</h4>
                  </div>
                     <?php foreach($allKey as $value){ ?>
                      <form class="cmxform" id="commentForm" method="post" action="<?php echo base_url();?>account/update-security-coin">
                  <div class="card-content">
                    <div class="row">
                      <div class="col-sm-12">
                      <div class="create-key">
                        <div class="create-heading">
                          <h4>Create Key</h4>
                        </div>
                        <!-- Form Start -->
                        <div class="row">
                          <div class="col-sm-2"></div>
                          <div class="col-sm-8">
                            <form>
                            <div class="row">
                              <div class="col-sm-6">
                                
                                  <div class="form-group">
                                    <label for="exampleInputtext">Box Id:</label>
                                    <input type="text" class="form-control" id="boxID" name="boxID"  required placeholder="Box Id" value="<?php echo  $value->boxID;?>" >
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Public Key</label>
                                    <input  id="publicKey" type="text" name="publicKey" placeholder="Public Key" required value="<?php echo  $value->publicKey;?>">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Coin Name</label>
                                    
                                    <select class="form-control" id="coinName" name="coinName" placeholder="Coin Name" required>
                                      <option value=""> - Select One - </option>
                                     <option value="<?php echo  $value->coinName;?>"><?php echo  $value->coinName;?> </option>
                                      <option  value='bitcoin'> bitcoin</option>
                                      <option  value='bitcoincash'> bitcoincash</option>
                                      <option  value='litecoin'> litecoin</option>
                                      <option  value='dash'> dash</option>
                                      <option  value='dogecoin'> dogecoin</option>
                                      <option  value='speedcoin'> speedcoin</option>
                                      <option  value='reddcoin'> reddcoin</option>
                                      <option  value='potcoin'> potcoin</option>
                                      <option  value='feathercoin'> feathercoin</option>
                                      <option  value='vertcoin'> vertcoin</option>
                                      <option  value='peercoin'> peercoin</option>
                                      <option  value='monetaryunit'> monetaryunit</option>
                                    </select>
                                  </div>
                                  <!-- <div class="form-group">
                                    <label for="exampleInputtext">Your External Wallet Address: </label>
                                    <input type="text" class="form-control" id="isLockAddr" type="text" name="isLockAddr" placeholder="Your External Wallet Address" required value="<?php //echo  $value->isLockAddr;?>">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputtext">Lock External Address Forever: </label>
                                    <input id="isLockAddr" type="text" name="isLockAddr" placeholder="Lock External Address Forever" required value="<?php //echo  $value->isLockAddr;?>">
                                  </div>
                                 -->
                                 <div class="form-group">
                                    <label style="display: block;" for="exampleInputtext">Use on Adult/Gambling Website ?</label>
                                    <label class="radio-inline"><input type="radio" name="optradio">No</label>
                                    <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                                  </div> 
                                  
                                
                              </div>
                              <div class="col-sm-6">
                                
                                 <div class="form-group">
                                    <label for="exampleInputname">Payment Box Name:</label>
                                    <input type="name" class="form-control" id="boxName" name="boxName"  type="text" required placeholder="Box Name" value="<?php echo  $value->boxName;?>">
                                  </div> 
                                  <div class="form-group">
                                    <label for="exampleInputtext">Private Key</label>
                                    <input id="privateKey" type="text" name="privateKey" placeholder="Private Key" required value="<?php echo  $value->privateKey;?>">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Type of Payment Box:</label>
                                    <select class="form-control"id="boxType" type="text" name="boxType" placeholder="Box Type" required>
                                      <option value="<?php echo  $value->boxType;?>"> <?php echo  $value->boxType;?></option>
                              <option  value='paymentbox'> paymentbox</option>
                             <!--  <option  value='captchabox'> captchabox</option> -->
                                          </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputtext">Notification By Email:</label>
                                    <input type="email" id="email" type="email" name="email" placeholder="Notification By Email:" required value="<?php echo  $value->email;?>">
                                  </div>
                                  
                                  <div class="form-group">
                                    <label for="exampleInputtext">Callback URL: </label>
                                    <input id="callbackUrl" type="url" name="callbackUrl" placeholder="Callback URL" required value="<?php echo  $value->callbackUrl;?>">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputtext">company Website Url: </label>
                                    <input type="url" name="website" class="form-control" id="exampleInputtext" placeholder="Company Website Url" value="<?php echo  $value->website;?>">
                                  </div>

                              </div>
                              <input type='hidden' id='isAdult_exst' name='isAdult_exst' value="<?php echo  $value->isAdult;?>">
                       <input type='hidden' id='start_time' name='start_time' value="<?php echo  $value->start_time;?>">
                       <input type='hidden' id='user_id' name='user_id' value="<?php echo  $value->user_id;?>">
                       <input type='hidden' id='key_id' name='key_id' value="<?php echo  $value->key_id;?>">

                              <div class="col-sm-12">
                                <div class="create-submit">
                                  <button type="submit" name="submit" class="btn btn-primary" role="button">Submit <i class="fa fa-angle-double-right"></i></button>
                                </div>
                              </div>

                              </form>
                            </div>
                            <!-- Form End -->
                          </div>
                        </div>
                        <!-- Form End -->
                      </div>
                       
                          
                      </div>

                    </div>
                  </div>
                </form>
                  <?php }?>
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