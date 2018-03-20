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
                         <form action="<?php echo base_url('withdraw');?>" style="text-align: left;">
                                  
                        <!-- Form Start -->
                        <div class="row">
                          <div class="qr-cd">
                          <p style="color: #489fdb;font-weight: bold;">SCAN QR-CODE</p>
                          <img src="http://chart.apis.google.com/chart?cht=qr&chs=300x300&chl='<?php echo $coin;?>' Address=<?php echo $address;?> Amount=<?php echo $amount;?>" alt="QR Code" style="width:300px;border:0;">

                               
                                  <span class="input input--hoshi">
                                      <input class="input__field input__field--hoshi" type="text" id="input-1" name="address" value="<?php echo $address;?>"/>
                                      <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
                                        <span class="input__label-content input__label-content--hoshi">Aaddress:</span>
                                      </label>
                                    </span>
                                    <!-- <span class="input input--hoshi">                                  
                                          <input class="input__field input__field--hoshi" type="text" name="amount" id="input-1" />
                                          <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">                                    
                                            <span class="input__label-content input__label-content--hoshi">Amount:</span>
                                          </label>                               
                                        </span> -->
                                  
                                  <!-- <span class="input input--hoshi">                                  
                                          <input class="input__field input__field--hoshi" type="text" id="input-1" name="address" />
                                          <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">                                    
                                            <span class="input__label-content input__label-content--hoshi">Address</span>
                                          </label>                               
                                        </span> -->

                                 <!--  <button type="submit" class="btn btn-default">Submit</button> -->
                                
                            <!-- <div class="create-submit">
                              <button class="btn btn-default" name="submit" role="button">Submit <i class="fa fa-angle-double-right"></i></button>
                            </div> -->
                          </div>
                        </div>
                        </form>
                            <!-- Form End -->
                          </div>
                        </div>
                      </form>
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