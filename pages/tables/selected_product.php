<?php 
  session_start();
  include('../../template/top_menu.php');
  include('../../template/left_menu.php');
  if(!isset($_SESSION['type'])){
    header("Location: ../../loginses.php");
  } else {
    //echo "You are " . $_SESSION['type'] . ". ";
    if($_SESSION['type']=='seller' || $_SESSION['type']=='admin'){
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
  create_left_menu('seller','cart');
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Selected Product
        <small> View </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Cart</a></li>
        <li class="active">Selected Product</li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content">
      <div class="row">

        <!-- ** Extend the tables wides -->
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"> List of Product(s) in Cart </h3>

              <!-- Search for Order list Number -->

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search Product ">

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
                  <th style="width: 50px">Product Category</th>
                  <th style="width: 20px">Product ID</th>
                  <th style="width: 100px">Product Name</th>
                  <th style="width: 30px">Price</th>
                  <th style="width: 40px">Quantity</th>
                  <th style="width: 40px">Total</th>
                  <th style="width: 80px">Status</th>
                  <th style="width: 20px">Remove</th>

                </tr>

<?php
  $ids = array();
  $q = array();
  foreach ($_SESSION['tmpcart'] as $p) {
    echo implode(",",$p)."|";
    array_push($ids,$p[0]);
    array_push($q,$p[1]);
  }
  $ids_string =  implode(',',$ids);

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "ims";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  $sql = "SELECT * FROM product WHERE id IN ($ids_string )";
  $result = mysqli_query($conn,$sql);
  $i = 1;
  if($result){
    while($row = mysqli_fetch_assoc($result)){
      foreach ($_SESSION['tmpcart'] as $p) {
        if($p[0] == $row['id']){
          $quantity = $p[1];
        }
      }
      echo "<tr>";
      echo "<td>".$i."</td>";
      echo "<td>".$row['type']."</td>";
      echo "<td>".$row['id']."</td>";
      echo "<td>".$row['name']."</td>";
      echo "<td>".$row['sppp']."</td>";
      echo "<td><input onchange={update_q(".$row['id'].")} type='text' name='quantity".$row['id']."' id='quantity".$row['id']."' value='".$quantity."'><button type='input' onclick={add_q(".$row['id'].")}>+</button><button type='input' onclick={deduct_q(".$row['id'].")}>-</button></td>";
      echo "<input type='hidden' id='available_".$row['id']."' value='".$row['quantity']."'>";
      echo "<td>".$row['sppp']*$quantity."</td>";
      echo "<td>".$i."</td>";
      echo "<td><a href='#' onclick={remove(".$row['id'].")}><i class='fa fa-close' style='font-size:24px;color:red'></i></td>";
      echo "</tr>";
      $i = $i+1;
    }
  } else {
    echo "<p>no product selected</p>";
  }
?>
<script>
  function check_exceed(id,q){
    a = document.getElementById('available_'+id).value
    console.log(a,q)
    parseInt(a)<parseInt(q)? console.log('yes'): console.log('no')
    if(parseInt(a)<parseInt(q)){return parseInt(a)}
    else {return false}
  }
  function update_q(i){
    d = document.getElementById('quantity'+i).value
    if(a=check_exceed(i,d)){
      alert('exceed the available quantity: '+a)
      location.reload()
    } else {
      $.ajax({
            url: 'http://localhost/Inventory/tmp_cart.php?p='+i+'&q='+d+'&u=true',
            type: 'GET',
            success : function(data) {
              //console.log(data);
              location.reload();
            }
          });
    }
  }
  function remove(id){
    console.log('remove: '+id)
    $.ajax({
            url: 'http://localhost/Inventory/tmp_cart.php?r='+id,
            type: 'GET',
            success : function(data) {
              //console.log(data);
              location.reload();
            }
          });

  }
  function add_q(i){
    d = document.getElementById('quantity'+i).value
    //alert(d)
    q = parseInt(d)+1
    document.getElementById('quantity'+i).value = q.toString()
    update_q(i)
  }

  function deduct_q(i){
    d = document.getElementById('quantity'+i).value
    q = parseInt(d)-1
    if (q>0) {
      document.getElementById('quantity'+i).value = q.toString()
      update_q(i)
    } else {
      if(confirm('do you want to delete the item')){remove(i)}
    }

  }
</script>

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

              <!-- Second Header Point for Select Customer-->
              <section class="content-header">
                <h1>
                  Select Customer
                  <small> Choose your register customer </small>
                </h1>
              </section>
            </div>
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">

                  <!-- Select Customer Name-->
                  <label><b>Customer Name :</b></label>
                    <select class="form-control">
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                <!--** After Select Customer Name, the anothers Information
                      will automatically show on another filled box **-->


                    <label><b>Customer ID :</b></label>
                      <select class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>

                    <label><b>Telephone Number :</b></label>
                      <select class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>

                      <label><b>Customer Address :</b></label>
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                </div>


              <!-- /.box-body -->

              <div>
                <button type="submit" class="btn btn-primary">Create Purchase Order</button>
              </div>

            </form>
          </div>
          <!-- /.box -->



          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <!-- Content Header (Page header) -->

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
