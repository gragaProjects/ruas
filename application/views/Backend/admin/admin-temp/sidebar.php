
  <div class="sidebar-container">
                <div class="sidemenu-container navbar-collapse collapse fixed-menu">
                    <div id="remove-scroll" class="left-sidemenu">
                        <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
                            data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <li class="sidebar-user-panel">
                                <div class="sidebar-user">
                                    <div class="sidebar-user-picture">
                                        <!-- <img alt="image" src="<?php //echo base_url('assets/uploads/admin_profile/').$admin_data->profile ?>"> -->
                                        <img alt="image"  src="<?php if($admin_data->profile ) { echo base_url('assets/uploads/profile/').$admin_data->profile; }else{ echo base_url('assets/default.png'); } ?> " >
                                     
                                            <!-- <img src=" <?php echo base_url('assets/default.png'); ?>  " alt="image"> -->
                                        
                                    </div>
                                    <div class="sidebar-user-details">
                                        <div class="user-name"><?php echo $admin_data->name; ?></div>
                                        <div class="user-role"><?php echo $admin_data->role; ?></div>
                                    </div>
                                </div>
                            </li>


                           

                            <li class="nav-item <?=  !$this->uri->segment(2)  ? 'active' : '' ?>">
                                        <a href="<?php echo base_url(); ?>Admin/" class="nav-link "> <i data-feather="book"></i> <span class="title">
                                                Dashboard</span>
                                        </a>
                             </li>
                          
                             <?php  if($admin_data->user_status == '0') { ?>
                             <li class="nav-item <?= $this->uri->segment(2) === 'Students' ? 'active' : '' ?>">
                                        <a href="<?php echo base_url(); ?>Admin/Students" class="nav-link "><i data-feather="book"></i> <span class="title">
                                        Students</span>
                                        </a>
                                </li> 
                             <?php }  if($admin_data->user_status == '0') { ?>
                           
                           
                       <!-- <li class="nav-item">
                                <a href="#" class="nav-link nav-toggle"><i data-feather="book"></i>
                                    <span class="title">    Leader Board</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu"  <?= $this->uri->segment(2) === 'Leader_Board' ||  $this->uri->segment(2) === 'Points'  ? 'style="display: block;"' : '' ?>>
                                 
                                <li class="nav-item <?= $this->uri->segment(2) === 'Leader_Board' ? 'active' : '' ?>">
                                        <a href="<?php echo base_url(); ?>Admin/Leader_Board" class="nav-link "> <span class="title">
                                        Leader Board</span>
                                        </a>
                                </li> 
                             
                                <li class="nav-item <?= $this->uri->segment(2) === 'Points' ? 'active' : '' ?>">
                                        <a href="<?php echo base_url(); ?>Admin/Points" class="nav-link "> <span class="title">
                                        Points</span>
                                        </a>
                                </li> 
                               
                        
                                </ul>
                            </li> -->

                            <?php } ?>
                           
                             

                             

<!--                 
                            <?php  if($admin_data->user_status == '0') { ?>

                                <li class="nav-item <?= $this->uri->segment(2) === 'Leader_Board' ? 'active' : '' ?>">
                                        <a href="<?php echo base_url(); ?>Admin/Leader_Board" class="nav-link "><i data-feather="book"></i>  <span class="title">
                                        Leader Board</span>
                                        </a>
                                </li>

                            <?php } ?> -->

                
                            <?php  if($admin_data->user_status == '0') { ?>

                                <li class="nav-item <?= $this->uri->segment(2) === 'All_Members' ? 'active' : '' ?>">
                                        <a href="<?php echo base_url(); ?>Admin/All_Members" class="nav-link "><i data-feather="book"></i>  <span class="title">
                                        
                                        Branches</span>
                                        </a>
                                 </li> 

                            <?php } ?>
                            <?php  if($admin_data->user_status == '0') { ?>

                                <li class="nav-item <?= $this->uri->segment(2) === 'Points' ? 'active' : '' ?>">
                                        <a href="<?php echo base_url(); ?>Admin/Points" class="nav-link "> <i data-feather="book"></i> <span class="title">
                                        
                                        Payments</span>
                                        </a>
                                 </li> 

                            <?php } ?>

                            <?php  if($admin_data->user_status == '0') { ?>
                                <!-- <li class="nav-item <?= $this->uri->segment(2) === 'All_Events' ? 'active' : '' ?>">
                                        <a href="<?php echo base_url(); ?>Admin/All_Events" class="nav-link "> <i data-feather="book"></i> <span class="title">View
                                        Events</span>
                                        </a>
                                    </li> 
                   -->

                            <?php } ?>

                            <?php  if($admin_data->user_status == '0') { ?>
                           
<!--                            
                           <li class="nav-item">
                                    <a href="#" class="nav-link nav-toggle"><i data-feather="book"></i>
                                        <span class="title"> Event card</span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu"  <?= $this->uri->segment(2) === 'event_card'   ? 'style="display: block;"' : '' ?>>
                                     
                                    <li class="nav-item <?= $this->uri->segment(2) === 'event_card' ? 'active' : '' ?>">
                                            <a href="<?php echo base_url(); ?>Admin/event_card" class="nav-link "> <span class="title">
                                            Event card</span>
                                            </a>
                                    </li> 
                                 
                            
                                    </ul>
                                </li> -->
    
                                <?php } ?>


                           

                           
                        </ul>
                    </div>
                </div>
            </div>