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
                    <h4 class="title">User Account Update</h4>
                  </div>

                  <div class="card-content">
                    <div class="row">
                      <div class="col-sm-12">

                        <div class="paycrypt-io">

                          <div class="my-select">
                            <h4>
                            <a href="<?php echo base_url('account/my_account_update');?>" style="background: #489dd8;color: #fff;padding: 7px 31px;border-radius: 25px; border: none;font-size: 16px; text-decoration: none;  position: relative; top: -6px;">Update</a>
                            <a href="<?php echo base_url('account/my_account_details');?>" style="background: #489dd8;color: #fff;padding: 7px 31px;border-radius: 25px; border: none;font-size: 16px; text-decoration: none; position: relative; top: -6px;">Details</a> </h4>
                            
                          </div>
                          <div class="row">
                          <div class="col-2"></div>
                            <div class="col-sm-8">
                              <form>
                                
                                <div class="row margtop10">
                                  <div class="col-sm-6"> 
                                      <label for="exampleInputtext" >Name</label>
                                  </div>
                                  <div class="col-sm-6"> 
                                      <label class="radio-inline" ><?php echo $getDetails[0]->title.'&nbsp;'.$getDetails[0]->firstname.'&nbsp;'.$getDetails[0]->lastname;?></label>
                                  </div>
                                </div>

                                <hr>

                                <div class="row ">
                                  <div class="col-sm-6"> 
                                      <label for="exampleInputtext" >Company Name (Optional):</label>
                                  </div>
                                  <div class="col-sm-6"> 
                                      <label class="radio-inline" ><?php echo $getDetails[0]->company_name;?></label>
                                  </div>
                                </div>

                                <hr>

                                <div class="row ">
                                  <div class="col-sm-6"> 
                                      <label for="exampleInputtext" >Company Website:</label>
                                  </div>
                                  <div class="col-sm-6"> 
                                      <label class="radio-inline" ><?php echo $getDetails[0]->company_website;?></label>
                                  </div>
                                </div>

                                <hr>

                                <div class="row">
                                  <div class="col-sm-6"> 
                                      <label for="exampleInputtext" >Phone:</label>
                                  </div>
                                  <div class="col-sm-6"> 
                                      <label class="radio-inline" ><?php echo $getDetails[0]->phone;?></label> 
                                  </div>
                                </div>

                                <hr>

                                <div class="row">
                                  <div class="col-sm-6"> 
                                      <label for="exampleInputtext" >Avatar/Photo:</label>
                                  </div>
                                  <div class="col-sm-6">
                                     <img src="<?php echo base_url().'upload/'.$getDetails[0]->photo;?>" width="60" height="60">
                                  </div>
                                </div>

                                <hr>

                                <div class="row ">
                                  <div class="col-sm-6"> 
                                      <label for="exampleInputtext">Url Monetiser - Email Notifications:</label>
                                  </div>
                                   <?php if($getDetails[0]->monetiser=='no'){?>
                                  <div class="col-sm-6"> 
                                      <label class="radio-inline" >No</label>
                                      <!-- <label class="radio-inline">Yes</label> -->  
                                  </div>
                                  <?php } else { ?>
                                  <div class="col-sm-6"> 
                                      <label class="radio-inline" >Yes</label>
                                      <!-- <label class="radio-inline">Yes</label> -->  
                                  </div>
                                   <?php }?>
                                </div>

                                <hr>

                                <div class="row ">
                                  <div class="col-sm-6"> 
                                      <label for="exampleInputtext">Affiliate Program - Email Notifications:</label>
                                  </div>
                                  <?php if($getDetails[0]->affiliate=='no'){?>
                                  <div class="col-sm-6"> 
                                     <!--  <label class="radio-inline" >No</label> -->
                                      <label class="radio-inline">No</label>
                                  </div>
                                  <?php } else { ?>
                                  <div class="col-sm-6"> 
                                     <!--  <label class="radio-inline" >No</label> -->
                                      <label class="radio-inline">Yes</label>
                                  </div>
                                  <?php }?>  
                                </div>

                                <hr>

                                <div class="row ">
                                  <div class="col-sm-6"> 
                                      <label for="exampleInputtext">Receive Email Newsletter</label>
                                  </div>
                                   <?php if($getDetails[0]->notifications=='no'){?>
                                  <div class="col-sm-6">
                                      <label class="radio-inline" >No</label>
                                      <!-- <label class="radio-inline" style="margin-left:10px;"> Yes</label> -->
                                  </div>
                                  <?php } else{ ?>
                                  <div class="col-sm-6">
                                      <label class="radio-inline" >Yes</label>
                                      <!-- <label class="radio-inline" style="margin-left:10px;"> Yes</label> -->
                                  </div>
                                  <?php }?>
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