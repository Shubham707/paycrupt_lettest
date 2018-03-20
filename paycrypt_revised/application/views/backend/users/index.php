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
                                    <h3 class="panel-title"><a class="btn btn-info" href="<?php echo base_url();?>index.php/admin/user/add_user">Add User</a></h3>
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
                                                <th>Full Name</th>
                                                <th>Email</th>
                                                <th>Website</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1; foreach($listing as $list){ ?>
                                            <tr>
                                                <td><?= $i++;?></td>
                                                <td><?= $list->title.'&nbsp'.$list->firstname.'&nbsp;'.$list->lastname;?></td>
                                                <td><?= $list->email;?></td>
                                                <td><?= $list->company_website;?></td>
                                                <td>
                                                    <a class="btn btn-info" href="user/edit_user/<?= $list->user_id;?>">Edit</a>
                                                    <a href="<?= $list->user_id;?>" class="btn btn-danger">Delete</a>
                                                    <a href="user/details/<?= $list->user_id;?>" class="btn btn-success">View</a>
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


