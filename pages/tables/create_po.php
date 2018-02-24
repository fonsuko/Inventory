<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inventory Management System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="indexreal.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>I</b>MS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>IMS</b> SERVICE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>

              <!-- Notifications Head Contents -->

    <!--          <span class="label label-success">4</span> -->
            </a>

            <ul class="dropdown-menu">
      <!--          <li class="header">You have 4 messages</li> -->
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li><!-- start message -->
                      <a href="#">
                        <div class="pull-left">
                          <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                          Support Team
                     <small><i class="fa fa-clock-o"></i> 5 mins</small>
                        </h4>
                        <p>Fonsuko kukikukikuki</p>
                      </a>
                    </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>

                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
<!--              <span class="label label-warning">10</span> -->
            </a>
            <ul class="dropdown-menu">


              <!-- Notifications Content -->
<!--            <li class="header">You have 10 notifications</li> -->
<li>
  <!-- inner menu: contains the actual data -->
  <ul class="menu">
    <li>
      <a href="#">

<!--                      <i class="fa fa-users text-aqua"></i> 5 new members joined today -->
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
        page and may cause design problems
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-users text-red"></i> 5 new members joined
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-shopping-cart text-green"></i> 25 sales made
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-user text-red"></i> You changed your username
      </a>
    </li>
  </ul>
</li>
<li class="footer"><a href="#">View all</a></li>
</ul>
</li>
<!-- Tasks: style can be found in dropdown.less -->
<li class="dropdown tasks-menu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<i class="fa fa-flag-o"></i>

<!-- Notifications Content -->
<!--          <span class="label label-danger">9</span> -->
</a>
<ul class="dropdown-menu">
<!--          <li class="header">You have 9 tasks</li> -->
<li>
  <!-- inner menu: contains the actual data -->
  <ul class="menu">
    <li><!-- Task item -->
      <a href="#">
        <h3>
          Design some buttons
          <small class="pull-right">20%</small>
        </h3>
        <div class="progress xs">
          <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
            <span class="sr-only">20% Complete</span>
          </div>
        </div>
      </a>
    </li>
    <!-- end task item -->
    <li><!-- Task item -->
      <a href="#">
        <h3>
          Create a nice theme
          <small class="pull-right">40%</small>
        </h3>
        <div class="progress xs">
          <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
            <span class="sr-only">40% Complete</span>
          </div>
        </div>
      </a>
    </li>
    <!-- end task item -->
    <li><!-- Task item -->
      <a href="#">
        <h3>
          Some task I need to do
          <small class="pull-right">60%</small>
        </h3>
        <div class="progress xs">
          <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
            <span class="sr-only">60% Complete</span>
          </div>
        </div>
      </a>
    </li>
    <!-- end task item -->
    <li><!-- Task item -->
      <a href="#">
        <h3>
          Make beautiful transitions
          <small class="pull-right">80%</small>
        </h3>
        <div class="progress xs">
          <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
            <span class="sr-only">80% Complete</span>
          </div>
        </div>
        </a>
        </li>
          <!-- end task item -->
        </ul>
      </li>
    <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Fonsuko</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Fonsuko Cutecute  - Web Developer
                  <small>Member since February 2018</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>


<!-- **** This have to update the name of person who logged in to the system -->

        <div class="pull-left info">

          <!-- ** Attract person info from Database -->
          <p><?php echo $_SESSION['memname']; ?></p>

          <!-- **Check the role of user after logged in -->
          <?php if($_SESSION['memrole'] == 1) { ?>
            <a href="#"><i class="fa fa-circle text-success"></i> Online : Admin</a>
          <?php } ?>
          <?php if($_SESSION['memrole'] == 2) { ?>
            <a href="#"><i class="fa fa-circle text-success"></i> Online : Manager</a>
          <?php } ?>
          <?php if($_SESSION['memtier'] == 3) { ?>
            <a href="#"><i class="fa fa-circle text-success"></i> Online : Seller</a>

          <?php } ?>
        <?php

        ?>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-archive"></i> <span>Inventory Stock</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="indexreal.php"><i class="fa fa-circle-o"></i> Stock Retails </a></li>
            <li><a href="indexreal.php"><i class="fa fa-circle-o"></i> Stock Wholesale </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa  fa-cart-arrow-down"></i> <span>Cart</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="customer_list.php"><i class="fa fa-circle-o"></i> Selected Product </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Customer</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="customer_list.php"><i class="fa fa-circle-o"></i> Customer List </a></li>
            <li><a href="pages/forms/add_more.php"><i class="fa fa-circle-o"></i> Create Customer Profile </a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Edit Customer Profile </a></li>
          </ul>
        </li>

        <li class=" active treeview">
          <a href="#">
              <i class="fa fa-file-text-o"></i> <span>Purchase Order</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> Create PO </a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Customer Order </a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> PO History </a></li>

          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-tasks"></i><span> Order List </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> Order Detail</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i> <span> Payment Status</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/order_list.php"><i class="fa fa-circle-o"></i> Payment List </a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Edit Payment </a></li>

          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-truck"></i> <span>Shipment Process</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> Shipment Process </a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Shipment via Map </a></li>

          </ul>
        </li>

        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Create Purchase Order
        <small> View </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Create PO</a></li>
        <li class="active">Create PO</li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content">
      <div class="row">

        <!-- ** Extend the tables wides -->
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Add </h3>

              <!-- Search for Order list Number -->

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search ">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
            </div>
            <!-- /.box-header -->

            <!-- Customer List Tables -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
                  <th style="width: 80px">Customer Number</th>
                  <th style="width: 5px">Title</th>
                  <th style="width: 100px">Customer Name</th>
                  <th style="width: 100px">Customer Surname</th>
                  <th style="width: 40px">Current PO</th>
                  <th style="width: 40px">History PO</th>

                </tr>
                <tr>
                  <!-- first 3 Columns -->
                  <td>1.</td>
                  <td>CTM000001</td>
                  <td>Mr.</td>

                  <!-- Customer Name-Surname -->
                  <td> John </td>
                      <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                      <td>Donahs</td>
                      </div>
                  </td>


                  <!-- PO Current -->
                  <td><button type="button" class="btn btn-block btn-info btn-xs">PO-9834</button></td>
                  <!-- PO History -->
                  <td><button type="button" class="btn btn-block btn-default btn-xs">PO-8712</button></td>
                </tr>


                <tr>
                  <!-- first 3 Columns -->
                  <td>2.</td>
                  <td>CTM000251</td>
                  <td>Ms.</td>

                  <!-- Customer Name-Surname -->
                  <td> Yumiko </td>
                      <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                      <td>Otaruza</td>
                      </div>
                  </td>


                  <!-- PO Current -->
                  <td><button type="button" class="btn btn-block btn-info btn-xs">PO-9856</button></td>
                  <!-- PO History -->
                  <td><button type="button" class="btn btn-block btn-default btn-xs">PO-8727</button></td>
                </tr>


                <tr>
                  <!-- first 3 Columns -->
                  <td>3.</td>
                  <td>CTM001287</td>
                  <td>Mr.</td>

                  <!-- Customer Name-Surname -->
                  <td> Louis </td>
                      <div class="progress-bar progress-bar-primary" style="width: 30%"></div>

                  <!--Surname -->
                      <td>Obrien</td>
                      </div>
                  </td>


                  <!-- PO Current -->
                  <td><button type="button" class="btn btn-block btn-info btn-xs">PO-9887</button></td>
                  <!-- PO History -->
                  <td><button type="button" class="btn btn-block btn-default btn-xs">PO-8790</button></td>
                </tr>


                <tr>
                  <!-- first 3 Columns -->
                  <td>4.</td>
                  <td>CTM001826</td>
                  <td>Mr.</td>

                  <!-- Customer Name-Surname -->
                  <td> Klars </td>
                      <div class="progress-bar progress-bar-primary" style="width: 30%"></div>

                  <!--Surname -->
                      <td>Karmar</td>
                      </div>
                  </td>


                  <!-- PO Current -->
                  <td><button type="button" class="btn btn-block btn-info btn-xs">PO-9898</button></td>
                  <!-- PO History -->
                  <td><button type="button" class="btn btn-block btn-default btn-xs">PO-8999</button></td>
                </tr>


                <tr>
                  <!-- first 3 Columns -->
                  <td>5.</td>
                  <td>CTM001297</td>
                  <td>Ms.</td>

                  <!-- Customer Name-Surname -->
                  <td> June </td>
                      <div class="progress-bar progress-bar-primary" style="width: 30%"></div>

                  <!--Surname -->
                      <td>Jeng Jeng </td>
                      </div>
                  </td>

                  <!-- PO Current -->
                  <td><button type="button" class="btn btn-block btn-info btn-xs">PO-9900</button></td>
                  <!-- PO History -->
                  <td><button type="button" class="btn btn-block btn-default btn-xs">PO-9911</button></td>

                </tr>


                <tr>
                  <!-- first 3 Column -->
                  <td>6.</td>
                  <td>CTM001299</td>
                  <td>Ms.</td>

                  <!-- Customer Name-Surname -->
                  <td> Fon </td>
                      <div class="progress-bar progress-bar-primary" style="width: 30%"></div>

                  <!--Surname -->
                      <td>Cutemak </td>
                      </div>
                  </td>

                  <!-- PO Current -->
                  <td><button type="button" class="btn btn-block btn-info btn-xs">PO-9991</button></td>
                  <!-- PO History -->
                  <td><button type="button" class="btn btn-block btn-default btn-xs">PO-1823</button></td>

                </tr>

              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
          <!-- /.box -->
          <div class="box">
            <!-- /.box-header -->
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">


          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>


  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2017-2018 <a href="https://github.com/fonsuko">Fonsuko Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>