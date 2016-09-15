<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ApperalTech</title>
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="build/css/custom.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/home.css" type="text/css">
    <script src="js/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="js/sweetalert.css">
	<script type="text/javascript" src="js/load.js"></script> 
  </head>

  <body class="nav-md">
    
  <?php
    session_start();
    include("../config/customermenu.php");  
      
  ?>

<!-- page content -->
<div class="right_col" role="main">
    <H1>Welcome to Priyantha Enterprices</H1>
    <div id = info>
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-align-left"></i> I am</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <!-- start accordion -->
                    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                      <div class="panel">
                       <table>
                            <form method="get">
                                <tr>
                                    <td><h4>Customer name </h4></td>
                                        <td>:
                                        <?php
                                        echo $_SESSION['fname'];
                                        ?></td>
                                </tr>
                                <tr>
                                    <td><h4>Customer ID  </h4></td>
                                        <td>:
                                        <?php
                                        echo $_SESSION['csid'];
                                        ?></td>
                                </tr>
                                <tr>
                                    <td><h4>Company name </h4></td>
                                        <td>: 
                                        <?php
                                        echo $_SESSION['company'];
                                        ?></td>
                                </tr>
                            </form>
                        </table>
                        </div>

                </div>
                </div>
              </div>
        </div>
    <div id="dashbutton">
     <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-align-left"></i> Quick Views</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <!-- start accordion -->
                    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                      <div class="panel">
                        <a class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          <h4 class="panel-title">Purchase Reports</h4>
                        </a>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th>Username</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Jacob</td>
                                  <td>Thornton</td>
                                  <td>@fat</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Larry</td>
                                  <td>the Bird</td>
                                  <td>@twitter</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <h4 class="panel-title">Rent Reports</h4>
                        </a>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body">
                            <p><strong>Collapsible Item 2 data</strong>
                            </p>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                          </div>
                        </div>
                      </div>
                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingThree" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          <h4 class="panel-title">Delivery Reports</h4>
                        </a>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                          <div class="panel-body">
                            <p><strong>Collapsible Item 3 data</strong>
                            </p>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- end of accordion -->


                  </div>
                </div>
              </div>
    </div>
    <div class="x_panel" id="quick_btn">
                  <div class="x_title">
                    <h2>Quick Buttons</h2>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <a class="btn btn-app">
                      <i class="fa fa-edit"></i> Purchase
                    </a>
                    <a class="btn btn-app">
                      <i class="fa fa-trash-o"></i> Pancel p/o
                    </a>
                    <a class="btn btn-app">
                      <i class="fa fa-retweet"></i> Rent
                    </a>
                    <a class="btn btn-app">
                      <i class="fa fa-trash"></i> Cacnel Rent
                    </a>
                    <a class="btn btn-app">
                      <i class="fa fa-cart-arrow-down"></i> MyCart
                    </a>
                    <a class="btn btn-app">
                      <i class="fa fa-credit-card"></i> Payment
                    </a>
                    <a class="btn btn-app">
                      <i class="fa fa-users"></i> Username
                    </a>
                    <a class="btn btn-app">
                      <i class="fa fa-unlock-alt"></i> Password
                    </a>
                  </div>
                </div>
</body>
       <div id="dashbutton">
     
    </div>

<!-- jQuery -->
<script src="vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
  <!-- Custom Theme Scripts -->
<script src="build/js/custom.min.js"></script>
</html>
