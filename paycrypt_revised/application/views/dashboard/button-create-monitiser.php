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
                    <h4 class="title">Withdraw</h4>
                  </div>

                  <div class="card-content">
                    <div class="row">
                      <div class="col-sm-12">
                      <div class="create-key">
                        
                        <!-- Form Start -->
                        <div class="row">
                          <div class="qr-cd">
                          

                              <!--   <form action="<?php echo base_url();?>wallet/payment-wallet" method="post"> -->
                                  <?php foreach($key as $value){ ?>
                                  <span class="input input--hoshi">
                                    <input class="input__field input__field--hoshi" type="text" name="publicURL" value="<?php echo $value->publicKey;?>" />
                                    <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
                                      <span class="input__label-content input__label-content--hoshi">Public Key</span>
                                    </label>
                                  </span>

                                  
                                  <span class="input input--hoshi">                                  
                                    <input class="input__field input__field--hoshi" type="text" name="coinRate" value="<?php echo $value->publicKey;?>" />
                                    <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">                                    
                                      <span class="input__label-content input__label-content--hoshi">Amount</span>
                                    </label>                               
                                  </span>
                                  <input type="hidden" name="coinLabel" >
                                  <span class="input input--hoshi">       <input type="hidden" name="collbackurl" value="value="<?php echo $value->callbackUrl;?>" >                            
                                    <input class="input__field input__field--hoshi" type="text" id="input-1" value="<?php echo $value->email;?>" />
                                    <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">                                    
                                      <span class="input__label-content input__label-content--hoshi">Email</span>
                                    </label>                               
                                  </span>

                                  
                                  <div class="create-submit">
                                    <button class="btn btn-default"  role="button">Send <i class="fa fa-angle-double-right"></i></button>
                                  </div>

                                  <div class="form-group">
                                    <label for="comment">Create Button copy and paste-:</label>
                                    <textarea class="form-control" rows="8" id="comment">
                                      <!DOCTYPE html>
                                      <html>
                                      <head>
                                        <title>Payment</title>
                                      </head>
                                      <body>
                                          <form action="<?php echo base_url();?>paymentcoin" method="post">
                                            <input type="text" name="coinRate">
                                          
                                            <input type="hidden" name="collbackurl" value="<?php echo $value->callbackUrl;?>" >
                                             <input type="hidden" name="publicKey" value="<?php echo $value->publicKey;?>" >
                                            <div align="center">
                                            <input type="image" name="submit" src="<?php echo base_url();?>assets/images/images1.jpeg" height="100" width="130" border="0" alt="Submit" />
                                            </body>
                                            </html>
                                    </textarea>
                                  </div>

                                 <!--  <button type="submit" class="btn btn-default">Submit</button> -->
                               <!--  </form> -->
                            <?php }?>
                          </div>
                        </div>
                            <!-- Form End -->
                          </div>
                        </div>
                        <!-- Form End -->
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