
  <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo">
                    <a href="<?php echo base_url(); ?>">
                        <!-- <span class=""><img src="<?php echo base_url(); ?>assets/"></span> -->
                        <span class="logo-default" style= "font-size: 25px !important;
    margin: 10px !important;">RUAS </span> </a>
                </div>
                <!-- logo end -->
                <ul class="nav navbar-nav navbar-left in">
                    <li><a href="#" class="menu-toggler sidebar-toggler"><i data-feather="menu"></i></a></li>
                </ul>
                
                <!-- start mobile menu -->
                <a class="menu-toggler responsive-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                    <span></span>
                </a>


                <!-- end mobile menu -->
                <!-- start header menu -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">


                    
                               <!-- start notification dropdown -->
                               <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                            <a class="dropdown-toggle notifications-button" id="notifications-button" data-bs-toggle="dropdown" data-hover="dropdown"
                                data-close-others="true">
                                <i data-feather="bell"></i>
                                <span class="badge headerBadgeColor1 count"> 0 </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="external">
                                    <h3><span class="bold">Notifications</span></h3>
                                    <!-- <span class="notification-label purple-bgcolor count">New </span> -->
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list small-slimscroll-style message-center" id="notifications-modal"  data-handle-color="#637283">
                                      
                                    </ul>
                                    <div class="dropdown-menu-footer">
                                        <a href="#" class="clear" id="clear"> Clear All</a>
                                    </div>
                               
                                </li>
                            </ul>


                        </li>
                        <!-- end notification dropdown -->

       
                        <!-- end notification dropdown -->

                
                        <!-- end message dropdown -->
                        <!-- start manage user dropdown -->
                        <li class="dropdown dropdown-user">
                            <a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown"
                                data-close-others="true">
                                <!-- <img alt="" class="img-circle " src="<?php //echo base_url('assets/uploads/admin_profile/').$admin_data->profile ?>" /> -->
                                <!-- <img alt="image" class="img-circle "  src="<?php  echo base_url('assets/default.png'); ?> " > -->
                                <img alt="image"  src="<?php if($admin_data->profile ) { echo base_url('assets/uploads/profile/').$admin_data->profile; }else{ echo base_url('assets/default.png'); } ?> " >
                                <span class="username username-hide-on-mobile"> <?php  echo $admin_data->name; ?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="<?php echo base_url(); ?>Admin/View_profile">
                                        <i class="icon-logout"></i>Profile</a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url(); ?>Admin/Logout">
                                        <i class="icon-logout"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- end manage user dropdown -->

                    </ul>
                </div>
            </div>
        </div>

    <style type="text/css">
      .read{
        display: none;
      }
      .txt-name{
        color: black;
        font-size: 15px;
        /* //font-weight: bold; */
      }
      .time{
            max-width: none!important;
      }
  </style>