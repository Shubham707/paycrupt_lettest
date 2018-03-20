<?php $this->load->view('dashboard/header');
$this->load->view('dashboard/sidebar');
$enc='abchef3424343';
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
                    <div class="col-md-12">
                    <h4 class="title">Withdraw</h4>
                    <h4  class="title btn btn-primary pull-right">Current Earning : $ <?php echo number_format($totalearning,8)?></h4>
                    </div>
                  </div>

                  <div class="card-content">
                    <div class="row">
                      <div class="col-sm-12">
                      <div class="create-key">
                        
                        <!-- Form Start -->
                        <div class="row">
                          <div class="qr-cd">
                          

                              <form action="<?php echo base_url('withdraw');?>" method="post">
                                   <span class="input input--hoshi">   
                                  <select class="form-control-inp" id="currency" name="currency" required>
                                    <?php

                                      if(count($coinsList)>0)
                                      {
                                        foreach ($coinsList as $key => $coinValue) {
                                       
                                          ?>
                                           <option value="<?= $coinValue['coin_name'] ?>"><?= $coinValue['coin_name'] ?></option>
                                        <?php
                                        }

                                      }
                                      else{
                                        ?>
                                        <option>No such currency found</option>
                                        <?php
                                      }
                                    ?>

                                  </select> 
                                  </span>
                                  <span class="input input--hoshi">                                  
                                    <input class="input__field input__field--hoshi" type="text" name="amount" value="" required />
                                    <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">                                    
                                      <span class="input__label-content input__label-content--hoshi">Amount</span>
                                    </label>                               
                                  </span>
                                  <span class="input input--hoshi">                                   
                                    <input class="input__field input__field--hoshi" type="text" id="input-1" name="address" value="" required />
                                    <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">                                    
                                      <span class="input__label-content input__label-content--hoshi">Address</span>
                                    </label>                               
                                  </span>

                                  
                                  <div class="create-submit">
                                    <button class="btn btn-default" name="submit"  type="submit" role="button">Send <i class="fa fa-angle-double-right"></i></button>
                                  </div>
                           
                          </div>
                        </div>
                      </form>
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