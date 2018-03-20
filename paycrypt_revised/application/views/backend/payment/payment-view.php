<?php $this->load->view('backend/header');?>
<style>
    .panel-heading .col-md-6{ font-size: 16px; }
</style>
           <div class="page-content">
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
             
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                  
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                   
                </ul>
            
                <ul class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li class="active">User</li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="panel panel-success">
                                <div class="panel-heading ui-draggable-handle">
                                    <h3 class="panel-title">User Details</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body"> 
                                    
                                  <div class="row panel-heading">
                                      <div class="col-md-6">Name:</div>
                                      <div class="col-md-6"><?= $details[0]->title.'&nbsp;'.$details[0]->firstname.'&nbsp;'.$details[0]->lastname;?></div>
                                  </div>
                                  <div class="row panel-heading">
                                      <div class="col-md-6">Nick Name:</div>
                                      <div class="col-md-6"><?= $details[0]->username;?></div>
                                  </div>
                                  <div class="row panel-heading">
                                      <div class="col-md-6">Position:</div>
                                      <div class="col-md-6"><?= $details[0]->position;?></div>
                                  </div>
                                  <div class="row panel-heading">
                                      <div class="col-md-6">Country:</div>
                                      <div class="col-md-6"><?= $details[0]->country;?></div>
                                  </div>
                                  <div class="row panel-heading">
                                      <div class="col-md-6">State:</div>
                                      <div class="col-md-6"><?= $details[0]->state;?></div>
                                  </div>
                                  <div class="row panel-heading">
                                      <div class="col-md-6">City:</div>
                                      <div class="col-md-6"><?= $details[0]->city;?></div>
                                  </div>
                                  <div class="row panel-heading">
                                      <div class="col-md-6">Company Name</div>
                                      <div class="col-md-6"><?= $details[0]->company_name;?></div>
                                  </div>
                                  <div class="row panel-heading">
                                      <div class="col-md-6">Company Website</div>
                                      <div class="col-md-6"><?= $details[0]->company_website;?></div>
                                  </div>
                                  <div class="row panel-heading" >
                                      <div class="col-md-6">Photo:</div>
                                      <div class="col-md-6"><img src="<?= base_url().'uploads/'.$details[0]->photo;?>" width="60" height="60"></div>
                                  </div>
                                  <div class="row panel-heading" >
                                      <div class="col-md-6">Paid:</div>
                                      <div class="col-md-6"><?= $details[0]->paid;?></div>
                                  </div>
                                  <div class="row panel-heading">
                                      <div class="col-md-6">Monetiser:</div>
                                      <div class="col-md-6"><?= $details[0]->monetiser;?></div>
                                  </div>
                                  <div class="row panel-heading">
                                      <div class="col-md-6">Affiliate:</div>
                                      <div class="col-md-6"><?= $details[0]->affiliate;?></div>
                                  </div>
                                  <div class="row panel-heading">
                                      <div class="col-md-6">Notifications:</div>
                                      <div class="col-md-6"><?= $details[0]->notifications;?></div>
                                  </div>
                                 
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>                                              
            </div>
 <?php $this->load->view('backend/footer');?>


