<?php

    function create_left_menu($memrole,$active,$sub=null){

        //echo "<script type='text/javascript'>alert('sub is'". $sub .");</script>";

        $isactive1 = "";
        $isactive2 = "";
        $isactive3 = "";
        $isactive3a = "";
        $isactive3b = "";
        $isactive3c = "";
        $isactive4 = "";
        $isactive4a = "";
        $isactive4b = "";
        $isactive5 = "";
        $isactive6 = "";
        $isactive7 = "";
        $isactive8 = "";
        $isactive8a = "";
        $isactive8b = "";
        $isactive9 = "";
        $isactive10 = "";
        $isactive11 = "";

        switch($active){
            case "inventory": $isactive1 = "active"; break;
            case "cart": $isactive2 = "active"; break;
            case "customer":
                $isactive3 = "active";
                switch($sub){
                    case "a": $isactive3a = "active"; break;
                    case "b": $isactive3b = "active"; break;
                    case "c": $isactive3c = "active"; break;
                }
                break;
            case "purchase":
                $isactive4 = "active";
                switch($sub){
                    case "a": $isactive4a = "active"; break;
                    case "b": $isactive4b = "active"; break;
                }
                break;
            case "order": $isactive5 = "active"; break;
            case "payment"; $isactive6 = "active"; break;
            case "shipment": $isactive7 = "active"; break;
            case "add":
                $isactive8 = "active";
                switch($sub){
                    case "a": $isactive8a = "active"; break;
                    case "b": $isactive8b = "active"; break;
                }
                break;
            case "status": $isactive9 = "active"; break;
            case "list": $isactive10 = "active"; break;
            case "stock": $isactive11 = "active"; break;
        }

        if($memrole=='seller'){
           $print =
           "
           <!-- Left side column. contains the logo and sidebar -->
           <aside class='main-sidebar'>
             <!-- sidebar: style can be found in sidebar.less -->
             <section class='sidebar'>
               <!-- Sidebar user panel -->
               <div class='user-panel'>
                 <div class='pull-left image'>
                   <img src='/Inventory/dist/img/user2-160x160.jpg' class='img-circle' alt='User Image'>
                 </div>


         <!-- **** This have to update the name of person who logged in to the system -->

                 <div class='pull-left info'>

                   <!-- ** Attract person info from Database -->
                   <p>".$_SESSION['username']."</p>
                   <p>".$_SESSION['type']."</p>

                 </div>
               </div>
               <!-- search form -->
               <form action='#' method='get' class='sidebar-form'>
                 <div class='input-group'>
                   <input type='text' name='q' class='form-control' placeholder='Search...'>
                   <span class='input-group-btn'>
                         <button type='submit' name='search' id='search-btn' class='btn btn-flat'><i class='fa fa-search'></i>
                         </button>
                       </span>
                 </div>
               </form>
               <!-- /.search form -->
               <!-- sidebar menu: : style can be found in sidebar.less -->
               <ul class='sidebar-menu' data-widget='tree'>
                 <li class='header'>MAIN NAVIGATION</li>
                 <li class='".$isactive1." treeview'>
                   <a href='#'>
                     <i class='fa fa-archive'></i> <span>Inventory Stock</span>
                     <span class='pull-right-container'>
                       <i class='fa fa-angle-left pull-right'></i>
                     </span>
                   </a>
                   <ul class='treeview-menu'>
                     <li class='".$isactive1."'><a href='/Inventory/indexseller.php'><i class='fa fa-circle-o'></i> Stock Retails </a></li>
                     <li><a href='/Inventory/indexseller.php'><i class='fa fa-circle-o'></i> Stock Wholesale </a></li>
                   </ul>
                 </li>

                 <li class='".$isactive2." treeview'>
                   <a href='#'>
                     <i class='fa  fa-cart-arrow-down'></i> <span>Cart</span>
                     <span class='pull-right-container'>
                       <i class='fa fa-angle-left pull-right'></i>
                     </span>
                   </a>
                   <ul class='treeview-menu'>
                     <li class='".$isactive2."'><a href='/Inventory/pages/tables/selected_product.php'><i class='fa fa-circle-o'></i> Selected Product </a></li>
                   </ul>
                 </li>

                 <li class='".$isactive3." treeview'>
                   <a href='#'>
                     <i class='fa fa-edit'></i> <span>Customer</span>
                     <span class='pull-right-container'>
                       <i class='fa fa-angle-left pull-right'></i>
                     </span>
                   </a>
                   <ul class='treeview-menu'>
                     <li class='".$isactive3a."'><a href='/Inventory/pages/tables/customer_list.php'><i class='fa fa-circle-o'></i> Customer List </a></li>
                     <li class='".$isactive3b."'><a href='/Inventory/pages/tables/create_customer.php'><i class='fa fa-circle-o'></i> Create Customer Profile </a></li>
                     <li class='".$isactive3c."'><a href='/Inventory/pages/tables/edit_customer.php'><i class='fa fa-circle-o'></i> Edit Customer Profile </a></li>
                   </ul>
                 </li>

                 <li class='".$isactive4." treeview'>
                   <a href='#'>
                       <i class='fa fa-file-text-o'></i> <span>Purchase Order</span>
                     <span class='pull-right-container'>
                       <i class='fa fa-angle-left pull-right'></i>
                     </span>
                   </a>
                   <ul class='treeview-menu'>
                     <li class='".$isactive4a."'><a href='/Inventory/pages/tables/create_po.php'><i class='fa fa-circle-o'></i> PO Invoice </a></li>
                     <li class='".$isactive4b."'><a href='#'><i class='fa fa-circle-o'></i> Customer Order </a></li>

                   </ul>
                 </li>

                 <li class='".$isactive5." treeview'>
                   <a href='#'>
                     <i class='fa fa-tasks'></i><span> Order List </span>
                     <span class='pull-right-container'>
                       <i class='fa fa-angle-left pull-right'></i>
                     </span>
                   </a>
                   <ul class='treeview-menu'>
                     <li class='".$isactive5."'><a href='/Inventory/pages/tables/order_list.php'><i class='fa fa-circle-o'></i> Order Detail</a></li>
                   </ul>
                 </li>

                 <li class='".$isactive6." treeview'>
                   <a href='#'>
                     <i class='fa fa-newspaper-o'></i> <span> Payment Status</span>
                     <span class='pull-right-container'>
                       <i class='fa fa-angle-left pull-right'></i>
                     </span>
                   </a>
                   <ul class='treeview-menu'>
                     <li><a href='#'><i class='fa fa-circle-o'></i> Payment List </a></li>
                     <li><a href='#'><i class='fa fa-circle-o'></i> Edit Payment </a></li>

                   </ul>
                 </li>

                 <li class='".$isactive7." treeview'>
                   <a href='#'>
                     <i class='fa fa-truck'></i> <span>Shipment Process</span>
                     <span class='pull-right-container'>
                       <i class='fa fa-angle-left pull-right'></i>
                     </span>
                   </a>
                   <ul class='treeview-menu'>
                     <li><a href='#'><i class='fa fa-circle-o'></i> Shipment Process </a></li>
                     <li><a href='#'><i class='fa fa-circle-o'></i> Shipment via Map </a></li>

                   </ul>
                 </li>

                 <li class='header'>LABELS</li>
                 <li><a href='#'><i class='fa fa-circle-o text-red'></i> <span>Important</span></a></li>
                 <li><a href='#'><i class='fa fa-circle-o text-yellow'></i> <span>Warning</span></a></li>
                 <li><a href='#'><i class='fa fa-circle-o text-aqua'></i> <span>Information</span></a></li>
               </ul>
             </section>
             <!-- /.sidebar -->
           </aside>

           ";
           echo $print;
        } else if ($memrole == 'staff'){
            $print = <<<EOT
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
              <!-- sidebar: style can be found in sidebar.less -->
              <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                  <div class="pull-left image">
                    <img src="/Inventory/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                  </div>


          <!-- **** This have to update the name of person who logged in to the system -->

                  <div class="pull-left info">

                    <!-- ** Attract person info from Database -->
                    <p>{$_SESSION['username']}</p>
                    <p>{$_SESSION['type']}</p>
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
                  <li class="$isactive1 treeview">
                    <a href="#">
                      <i class="fa fa-archive"></i> <span>Inventory Stock</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li class="$isactive1"><a href="/Inventory/indexreal.php"><i class="fa fa-circle-o"></i> Stock Retails </a></li>
                      <li><a href="#"><i class="fa fa-circle-o"></i> Stock Wholesale </a></li>
                    </ul>
                  </li>

                  <li class="$isactive8 treeview">
                    <a href="#">
                      <i class="fa fa-edit"></i> <span>Add Product</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li class="$isactive8a"><a href="/Inventory/pages/forms/add_new.php"><i class="fa fa-circle-o"></i> Add New Product <small class="label pull-right bg-red">new</small></a></li>
                      <li class="$isactive8b"><a href="/Inventory/pages/forms/add_more.php"><i class="fa fa-circle-o"></i> Add More Product <small class="label pull-right bg-green">more</small></a></li>
                      <li><a href="#"><i class="fa fa-circle-o"></i> Manage Product Details </a></li>
                    </ul>
                  </li>

                  <li class="$isactive9 treeview">
                    <a href="#">
                      <i class="fa fa-tasks"></i> <span>Product Status</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#"><i class="fa fa-circle-o"></i> View Product Status </a></li>
                      <li><a href="#"><i class="fa fa-circle-o"></i> Manage Product Status </a></li>

                    </ul>
                  </li>

                  <li class="$isactive10 treeview">
                    <a href="#">
                      <i class="fa fa-newspaper-o"></i> <span>Order List</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="/Inventory/pages/tables/order_list.php"><i class="fa fa-circle-o"></i> Order List details </a></li>
                      <li><a href="#"><i class="fa fa-circle-o"></i> Manage Order List</a></li>

                    </ul>
                  </li>

                  <li class="$isactive11 treeview">
                    <a href="#">
                      <i class="fa fa-truck"></i> <span>Stock History</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#"><i class="fa fa-circle-o"></i> Shipment History </a></li>
                      <li><a href="#"><i class="fa fa-circle-o"></i> Order List History </a></li>
                      <li><a href="#"><i class="fa fa-circle-o"></i> Manage History</a></li>
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

EOT;
            echo $print;

        }

    }

    //create_left_menu("seller","cart");
?>
