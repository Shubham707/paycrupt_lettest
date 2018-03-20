<?php $this->load->view('backend/header');?>
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
                    <li class="active">Coin</li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                             <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/coin/update_coin" method="post" enctype="multipart/form-data">
                            <div class="panel panel-default">
                                <div class="panel-heading ui-draggable-handle">
                                    <h3 class="panel-title">Coin Update</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">  
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Coin Name:</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="coin_name" value="<?= $editCoin[0]->coin_name;?>" class="form-control">
                                            </div>                                            
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">File</label>
                                        <div class="col-md-6 col-xs-12">
                                            <a class="file-input-wrapper btn btn-default  fileinput btn-primary"><span>Browse file</span><input type="file" class="fileinput btn-primary" name="userfile" value="<?= $editCoin[0]->coin_image;?>" id="filename" title="Browse file"></a>
                                            <span class="help-block">Input type file</span>
                                        </div>
                                    </div>
                                    <input type="hidden" name="coin_id" value="<?= $editCoin[0]->coin_id;?>">
                                   
                                    <div class="form-group">
                                        <div class="col-md-6 col-xs-12">             
                                             <button class="btn btn-primary pull-right">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>                                              
            </div>
 <?php $this->load->view('backend/footer');?>


