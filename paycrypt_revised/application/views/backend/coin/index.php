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
                    <li><a href="#">Home</a></li>
                    <li class="active">Coin Listing</li>
                </ul>

                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Coin Listing</h2>
                </div>
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title"><a class="btn btn-info" href="<?php echo base_url();?>index.php/admin/coin/add_coin">Add Coin</a></h3>
                                    <div style="color:green;"><?php echo @$msg;?></div>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1; foreach($getCoin as $coin){ ?>
                                            <tr>
                                                <td><?= $i++;?></td>
                                                <td><?= $coin->coin_name;?></td>
                                                <td><img src="<?= base_url().'uploads/'.$coin->coin_image;?>" height="60" width="60"></td>
                                                <td><?= $coin->coin_date;?></td>
                                                <td>
                                                    <a class="btn btn-info" href="coin/edit_coin/<?= $coin->coin_id;?>">Edit</a>
                                                    <a href="<?= $coin->coin_id;?>" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            
                                           <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>                                
                    
                </div>                               
            </div>
 <?php $this->load->view('backend/footer');?>


