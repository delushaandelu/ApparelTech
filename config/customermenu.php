<div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a class="site_title"><i class="fa fa-paw"></i> <span>Customer</span></a>
            </div>

            <div class="clearfix"></div>

            <div class="profile">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php
                    echo $_SESSION['fname'];;
                    ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="../customer/home.php"><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Purchase <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../customer/products.php">All Products</a></li>
                        <li><a href="../customer/products1.php">Sewing Machines</a></li>
                        <li><a href="../customer/products2.php">Machine Spare Parts</a></li>
                        <li><a href="../customer/products3.php">Tools</a></li>
                      <li><a href="../customer/viewCart.php">My Cart</a></li>
                      <li><a href="../customer/cancelPurchase.php">Cancel Purchase</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Rent <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../customer/newRent.php">New Rent</a></li>
                      <li><a href="../customer/canceRent.php">Cancel Rent</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Reports <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../customer/purchaseReport.php">Purchase Reports</a></li>
                      <li><a href="../customer/rentReport.php">Rent Reports</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Delivery <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href=../customer/requestDelivery.php>Request Delivery</a></li>
                      <li><a href="../customer/viewStatus.php">View Status</a></li>
                      <li><a href="../customer/cancelDelivery.php">Cancel Delivery</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i> Setting <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../customer/changeUsername.php">Change Username</a></li>
                      <li><a href="../customer/changePassword.php">Change Password</a></li>
                      <li><a href="../customer/updateProfile.php">Update Profile</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Upgrads</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Utlities <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">Calender</a></li>
                    </ul>
                  </li>   
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Online Payment <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">
                    <?php
                    echo $_SESSION['fname'];
                    ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="#"> Profile</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="../customer/signout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->