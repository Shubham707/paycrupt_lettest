
                        <nav class="menu">
                             <?php
                        //print_r($this->session->userdata('plans'));
                        //var_dump($this->session->userdata('plans'));
                        //$planData=$this->session->userdata('user_plan');
                         $this->session->userdata('company_name');
            if($this->session->userdata('company_name')==NULL)
                        {
                            ?>
                            <ul class="sidebar-menu metismenu" id="sidebar-menu">
                                <li>
                                    <a href="javascript::void(0)" class="setPlan">
                                        <i class="fa fa-home"></i> Payouts
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript::void(0)" class="setPlan">
                                        <i class="fa fa-users"></i>User
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript::void(0)" class="setPlan">
                                        <i class="fa fa-cog"></i> Stats
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript::void(0)" class="setPlan">
                                        <i class="fa fa-envelope"></i> Message box


                                    </a>
                                </li>
                                <li>
                                    <a href="javascript::void(0)" class="setPlan">
                                        <i class="fa fa-envelope"></i> Creat new box
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript::void(0)" class="setPlan">
                                        <i class="fa fa-university"></i> View History
                                    </a>
                                </li>
                                <li class="">
                                    <a href="<?php echo base_url();?>profile" class="setPlan">
                                        <i class="fa fa-folder"></i> Profile
                                        </a>
                                </li>
                                <li>
                                    <a href="javascript::void(0)" class="setPlan">
                                        <i class="fa fa-paypal"></i> Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript::void(0)" class="setPlan">
                                        <i class="fa fa-question-circle"></i> Help and Supports
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript::void(0)" class="setPlan">
                                        <i class="fa fa-file"></i> Api Docks
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>logout">
                                        <i class="fa fa-sign-out"></i> Logout
                                    </a>
                                </li>

                            </ul>
                              <?php
                        }
                        else
                        {
                            ?>
                            <ul class="sidebar-menu metismenu" id="sidebar-menu">
                                <li>
                                    <a href="<?php echo base_url();?>Withdraw/addwithdraw">
                                        <i class="fa fa-home"></i> Payouts
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>account/my-account-details">
                                        <i class="fa fa-users"></i>User
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>userManager/dashboard">
                                        <i class="fa fa-cog"></i> Stats
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>messagebox">
                                        <i class="fa fa-envelope"></i> Message box


                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>account/my-account">
                                        <i class="fa fa-envelope"></i> Creat new box
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>welcome/history">
                                        <i class="fa fa-university"></i> View History
                                    </a>
                                </li>
                                <li class="">
                                    <a href="<?php echo base_url();?>profile">
                                        <i class="fa fa-folder"></i> Profile
                                        </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>settings">
                                        <i class="fa fa-paypal"></i> Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>help-and-support">
                                        <i class="fa fa-question-circle"></i> Help and Supports
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>payouts">
                                        <i class="fa fa-file"></i> Api Docks
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>logout">
                                        <i class="fa fa-sign-out"></i> Logout
                                    </a>
                                </li>

                            </ul>
                            <?php }?>
                        </nav>
                    </div>

                </aside>
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
