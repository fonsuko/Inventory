<?php 
  session_start(); 
  include('../../template/top_menu.php');
  include('../../template/left_menu.php');

  if(!isset($_SESSION['type'])){
    header("Location: ../../loginses.php");
  } else {
    //echo "You are " . $_SESSION['type'] . ". ";
    if($_SESSION['type']=='staff' || $_SESSION['type']=='admin'){
      //echo "You have permission. ";
    } else {
      echo "You do not have permission.";
      echo "<br><a href=/Inventory/loginses.php>Go to login page</a>";
      exit();
    }
  }
?>
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

<?php 
create_top_menu();
create_left_menu('staff','add','a');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add New Product to Inventory
        <small class="label bg-red"> new </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Add Product</a></li>
        <li class="active">Add New Product</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">New Product Details </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="add_new_process.php" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">

                  <!-- Select Product Type-->
                  <label><b>Product Type :</b></label>
                    <select class="form-control" name="productType">
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>

                  <!--Select Product Name -->
                  <label><b>Product Name :</b></label>
                  <input type="text" class="form-control" name="productName" placeholder="ex. Pentel Pencil, Moji Pencil">


                  <!--Select Product ID -->
                  <label><b>Product ID :</b></label>
                  <input type="text" class="form-control" name="productId"placeholder="ex. PC000001, PC000002">

                  <label><b>Product Brand :</b></label>
                  <input type="text" class="form-control" name="productBrand" >

                  <label><b>Vendor :</b></label>
                  <input type="text" class="form-control" name="vendor">

                  <label><b>Product Quantity :</b></label>
                  <input type="text" class="form-control" name="productQuantity" placeholder="ex. 100, 200">

                  <label><b>Sale Price Per Piece :</b></label>
                  <input type="text" class="form-control" name="sppp" placeholder="ex. $5, $20">


                   <div class="form-group">
                    <label><b>Expiration Date :</b></label>

                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control" name="exp" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                    </div>
                    <!-- /.input group -->
                  </div>


                  <label><b>Location :</b></label>
                  <div class="box-body">
                    <div class="row">

                      <div class="col-xs-3">
                        Block : <input type="text" class="form-control" placeholder=".col-xs-3">
                      </div>

                      <div class="col-xs-4">
                        Shelf :<input type="text" class="form-control" placeholder=".col-xs-4">
                      </div>
                      <div class="col-xs-5">
                        Row :<input type="text" class="form-control" placeholder=".col-xs-5">
                      </div>
                    </div>
                  </div>
                </div>


                <div class="form-group">
                  <label for="exampleInputFile">Image Reference :</label>
                  <input type="file" id="pimg" name="pimg">

                  <p class="help-block">Image size should not be more than 2 KB </p>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

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
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
