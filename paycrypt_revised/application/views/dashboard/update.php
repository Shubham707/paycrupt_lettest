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
                           <h4>
                            <a href="<?php echo base_url('account/my_account_update');?>" style="background: #489dd8;color: #fff;padding: 7px 31px;border-radius: 25px; border: none;font-size: 16px; text-decoration: none;  position: relative; top: -6px;">Update</a>
                            <a href="<?php echo base_url('account/my_account_details');?>" style="background: #489dd8;color: #fff;padding: 7px 31px;border-radius: 25px; border: none;font-size: 16px; text-decoration: none; position: relative; top: -6px;">Details</a> </h4>
                            </h4>
                          </div>
                          <div class="row">
                          <div class="col-2"></div>
                            <div class="col-sm-8">
                              <div class="row">
                                <form id="signupForm" method="post" class="form-horizontal" action="<?php echo base_url();?>index.php/user/update_user" enctype="multipart/form-data">

                                <div class="row">
                                  <!-- <div class="col-sm-12">
                                  <span class="input input--hoshi">
                                      <label for="exampleSelect1">Title:</label>
                                      <select class="form-control-inp" id="title" name="title" placeholder="Title">
                                        <option><?php echo $getDetails[0]->title;?></option>

                                          <option value="Mr."> Mr.</option>
                                          <option value="Miss"> Miss</option>
                                          <option value="Mrs."> Mrs.</option>
                                          <option value="Ms."> Ms.</option>
                                          <option value="Dr."> Dr.</option>
                                          <option value="Prof."> Prof.</option>
                                      </select>
                                  </span>
                                  </div> -->

                                  <div class="col-md-6">
                                    <span class="input input--hoshi">
                                      <input class="input__field input__field--hoshi" type="text" id="firstname" name="firstname" value="<?php echo $getDetails[0]->firstname;?>"  />
                                      <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
                                        <span class="input__label-content input__label-content--hoshi">First Name</span>
                                      </label>
                                    </span>
                                  </div>

                                  <div class="col-md-6">
                                    <span class="input input--hoshi">
                                    <input class="input__field input__field--hoshi" type="text" id="lastname" name="lastname"  value="<?php echo $getDetails[0]->lastname;?>"  />
                                    <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-5">
                                    <span class="input__label-content input__label-content--hoshi">Last Name</span>
                                    </label>
                                    </span>
                                  </div>



                                  <div class="col-md-6">
                                    <span class="input input--hoshi">
                                    <input class="input__field input__field--hoshi" type="text" id="company_name" name="company_name"  value="<?php echo $getDetails[0]->company_name;?>" />
                                    <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-5">
                                    <span class="input__label-content input__label-content--hoshi">Company Name (Optional):</span>
                                    </label>
                                    </span>
                                  </div>

                                  <div class="col-md-6">
                                    <span class="input input--hoshi">
                                      <input class="input__field input__field--hoshi" type="text" id="company_website" name="company_website"  value="<?php echo $getDetails[0]->company_website;?>"/>
                                      <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
                                        <span class="input__label-content input__label-content--hoshi">Company Website:</span>
                                      </label>
                                    </span>
                                  </div>

                                  <div class="col-md-6">
                                    <span class="input input--hoshi">
                                    <input class="input__field input__field--hoshi" type="text" id="phone" name="phone"  value="<?php echo $getDetails[0]->phone;?>" />
                                    <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-5">
                                    <span class="input__label-content input__label-content--hoshi">Phone:</span>
                                    </label>
                                    </span>
                                  </div>

                                  <div class="col-md-6">
                                    <span class="input input--hoshi">
                                        <label for="exampleInputFile">Upload Id</label>
                                        <input type="file" class="form-control-file"  id="photo" name="userfile" placeholder="Avatar/Photo">
                                    </span>
                                  </div>

                                  <div class="col-sm-6">
                                    <span class="input input--hoshi">
                                      <label for="exampleInputtext" style="display: block;" >Url Monetiser - Email Notifications:</label>
                                      <label class="radio-inline" >
                                        <input type="radio" name="optradio" style="margin-right: 10px;">No
                                      </label>
                                      <label class="radio-inline" style="margin-left:10px;">
                                        <input type="radio" name="optradio" style="margin-right: 10px;">Yes
                                      </label>

                                  </div>

                                  <div class="col-sm-6">
                                    <span class="input input--hoshi">
                                      <label for="exampleInputtext" style="display: block;" >Affiliate Program - Email Notifications:</label>
                                      <label class="radio-inline" >
                                        <input type="radio" id="affiliate" name="affiliate" placeholder="Affiliate Program - Email Notifications" value="yes" style="margin-right: 10px;">Yes
                                      </label>
                                      <label class="radio-inline" style="margin-left:10px;">
                                        <input type="radio" id="affiliate" name="affiliate" placeholder="Affiliate Program - Email Notifications" value="No" style="margin-right: 10px;">No
                                      </label>

                                  </div>

                                  <div class="col-sm-6">
                                    <span class="input input--hoshi">
                                      <label for="exampleInputtext" style="display: block;" >Receive Email Newsletter</label>
                                      <label class="radio-inline" >
                                        <input type="radio"  id="notifications" name="notifications" placeholder="Affiliate Program - Email Notifications" value="yes"  style="margin-right: 10px;">Yes
                                      </label>
                                      <label class="radio-inline" style="margin-left:10px;">
                                        <input type="radio"  id="notifications" name="notifications" placeholder="Affiliate Program - Email Notifications" value="No"  style="margin-right: 10px;">No
                                      </label>

                                  </div>

                                </div>

                              <div class="col-sm-12">
                                <div class="create-submit" style="float: left;">
                                <button type="submit" name="submit" style="background: #4494cc; color: #fff; padding: 6px 25px;border-radius: 25px;border: none;cursor: pointer; margin-top: 15px;">
                                  Update <i class="fa fa-angle-double-right"></i>
                                </button>
                                 <!--  <a  href="#" role="button"></a> -->
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
