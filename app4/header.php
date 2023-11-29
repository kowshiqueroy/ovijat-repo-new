<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<?php
date_default_timezone_set("Asia/Dhaka");

?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ovintory WebApp</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.js"></script>

  <script src="plugins/jquery/jquery.min.js"></script>

  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">

  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

  <!-- date-range-picker -->
  <script src="plugins/daterangepicker/daterangepicker.js"></script>

  <!-- AdminLTE App -->
  

  <!-- Bootstrap 4 -->

  <script src="plugins/sweetalert2/sweetalert2.js"></script>
  <script src="plugins/sweetalert2/sweetalert2.all.js"></script>
  <script src="plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- AdminLTE App -->
 

  <!-- DataTables -->

  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <script src="plugins/datatables/jquery.dataTables.js"></script>
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="plugins/jszip/jszip.min.js"></script>
  <script src="plugins/pdfmake/pdfmake.min.js"></script>
  <script src="plugins/pdfmake/vfs_fonts.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item">
          <a href="order.php" class="nav-link active">
            <i class="fa fa-cart-arrow-down"></i>
          </a>
        </li>

        <li class="nav-item">
          <a href="order.php" class="nav-link active">
            <i class="fa fa-truck"></i>

          </a>
        </li>

        <li class="nav-item">
          <a href="order.php" class="nav-link active">
            <i class="fa fa-universal-access"></i>

          </a>
        </li>

        <li class="nav-item">
          <a href="order.php" class="nav-link active">
            <i class="fa fa-unlock-alt"></i>

          </a>
        </li>

      </ul>

      <!-- SEARCH FORM -->

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->

        <!-- Notifications Dropdown Menu -->

        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <i class="fa fa-home"></i>
        <span class="brand-text font-weight-light">Ovintory</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
          <!--     <img src="dist/img/icebear.png" class="img-circle elevation-2" alt="User Image">-->
          </div>
          <div class="info">
            <a href="#" class="d-block"><strong><?php echo $_SESSION['username'];?></strong></a>
            <a href="#" class="d-block"><?php echo $_SESSION['username'];?></a>
          </div>
        </div>

        <!-- SidebarSearch Form -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="tree" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="w3-dropdown-hover">
              <a style="color:black;" href="home.php" class="nav-link ">
                <i class="fa fa-home"></i>
                <p>
                  Dashboard

                </p>
              </a>

            </li>

            <li class="nav-item w3-dropdown-hover">
              <h5 style="color:black; background-color:white;" href="" class="nav-link ">
                <i class="fa fa-edit"></i>
                <p>
                Setup

                </p>
              </h5>

              <ul style="color:black; background-color:white;font-size:10px;" class="nav nav-treeview w3-dropdown-content w3-bar-block w3-border">
                <li class="nav-item w3-bar-item w3-button">
                  <a href="company_info.php" class="nav-link active">
                    <i class="	fa fa-cube"></i>
                    <p>Company Info</p>
                  </a>
                </li>
                <li class="nav-item w3-bar-item w3-button">
                  <a href="registration.php" class="nav-link active">
                    <i class="	fa fa-cube"></i>
                    <p>User</p>
                  </a>
                </li>

              </ul>

            </li>



            <li class="nav-item w3-dropdown-hover">
              <h5 style="color:black; background-color:white;" href="" class="nav-link ">
                <i class="fa fa-edit"></i>
                <p>
                In/Receive

                </p>
              </h5>

              <ul style="color:black; background-color:white;font-size:10px;" class="nav nav-treeview w3-dropdown-content w3-bar-block w3-border">
                <li class="nav-item w3-bar-item w3-button">
                  <a href="in.php" class="nav-link active">
                    <i class="	fa fa-cube"></i>
                    <p>Create In</p>
                  </a>
                </li>
                <li class="nav-item w3-bar-item w3-button">
                  <a href="in_list.php" class="nav-link active">
                    <i class="	fa fa-cube"></i>
                    <p>In List</p>
                  </a>
                </li>

                <li class="nav-item w3-bar-item w3-button">
                  <a href="in_info.php" class="nav-link active">
                    <i class="	fa fa-cube"></i>
                    <p>In Info</p>
                  </a>
                </li>

                <li class="nav-item w3-bar-item w3-button">
                  <a href="mrr.php" class="nav-link active">
                    <i class="	fa fa-cube"></i>
                    <p>MRR</p>
                  </a>
                </li>

              </ul>

            </li>

            <li class="nav-item w3-dropdown-hover">
              <h5 style="color:black; background-color:white;" href="" class="nav-link ">
                <i class="fa fa-edit"></i>
                <p>
                Out/Sell

                </p>
              </h5>

              <ul style="color:black; background-color:white;font-size:10px;" class="nav nav-treeview w3-dropdown-content w3-bar-block w3-border">
                <li class="nav-item w3-bar-item w3-button">
                  <a href="companyifo.php" class="nav-link active">
                    <i class="	fa fa-cube"></i>
                    <p>Create Out</p>
                  </a>
                </li>
                <li class="nav-item w3-bar-item w3-button">
                  <a href="registration.php" class="nav-link active">
                    <i class="	fa fa-cube"></i>
                    <p>Out List</p>
                  </a>
                </li>

              </ul>

            </li>


            <li class="nav-item w3-dropdown-hover">
              <h5 style="color:black; background-color:white;" href="" class="nav-link ">
                <i class="fa fa-edit"></i>
                <p>
                Item/Category Name

                </p>
              </h5>

              <ul style="color:black; background-color:white;font-size:10px;" class="nav nav-treeview w3-dropdown-content w3-bar-block w3-border">
                <li class="nav-item w3-bar-item w3-button">
                  <a href="item.php" class="nav-link active">
                    <i class="	fa fa-cube"></i>
                    <p>Item Names</p>
                  </a>
                </li>
                <li class="nav-item w3-bar-item w3-button">
                  <a href="category.php" class="nav-link active">
                    <i class="	fa fa-cube"></i>
                    <p>Category Names</p>
                  </a>
                </li>

              </ul>

            </li>


            <li class="nav-item w3-dropdown-hover">
              <h5 style="color:black; background-color:white;" href="" class="nav-link ">
                <i class="fa fa-edit"></i>
                <p>
                Person Name

                </p>
              </h5>

              <ul style="color:black; background-color:white;font-size:10px;" class="nav nav-treeview w3-dropdown-content w3-bar-block w3-border">
                <li class="nav-item w3-bar-item w3-button">
                  <a href="person.php" class="nav-link active">
                    <i class="	fa fa-cube"></i>
                    <p>Person Names</p>
                  </a>
                </li>
                

              </ul>

            </li>


            
            <li class="nav-item w3-dropdown-hover">
              <h5 style="color:black; background-color:white;" href="" class="nav-link ">
                <i class="fa fa-edit"></i>
                <p>
                Stock Report

                </p>
              </h5>

              <ul style="color:black; background-color:white;font-size:10px;" class="nav nav-treeview w3-dropdown-content w3-bar-block w3-border">
                <li class="nav-item w3-bar-item w3-button">
                  <a href="stock_sum.php" class="nav-link active">
                    <i class="	fa fa-cube"></i>
                    <p>Summary</p>
                  </a>
                </li>
                <li class="nav-item w3-bar-item w3-button">
                  <a href="expiring.php" class="nav-link active">
                    <i class="	fa fa-cube"></i>
                    <p>Expiring</p>
                  </a>
                </li>

                <li class="nav-item w3-bar-item w3-button">
                  <a href="expired.php" class="nav-link active">
                    <i class="	fa fa-cube"></i>
                    <p>Expired</p>
                  </a>
                </li>

              </ul>

            </li>


            <li class="nav-item w3-dropdown-hover">
              <h5 style="color:black; background-color:white;" href="" class="nav-link ">
                <i class="fa fa-edit"></i>
                <p>
                Store Damage

                </p>
              </h5>

              <ul style="color:black; background-color:white;font-size:10px;" class="nav nav-treeview w3-dropdown-content w3-bar-block w3-border">
                <li class="nav-item w3-bar-item w3-button">
                  <a href="companyifo.php" class="nav-link active">
                    <i class="	fa fa-cube"></i>
                    <p>Create Store Damage</p>
                  </a>
                </li>
               

                <li class="nav-item w3-bar-item w3-button">
                  <a href="registration.php" class="nav-link active">
                    <i class="	fa fa-cube"></i>
                    <p>Approval Store Damage</p>
                  </a>
                </li>

                
                <li class="nav-item w3-bar-item w3-button">
                  <a href="registration.php" class="nav-link active">
                    <i class="	fa fa-cube"></i>
                    <p>Store Damage List</p>
                  </a>
                </li>

              </ul>

            </li>

            
            <li class="nav-item w3-dropdown-hover">
              <h5 style="color:black; background-color:white;" href="" class="nav-link ">
                <i class="fa fa-edit"></i>
                <p>
                Store Return

                </p>
              </h5>

              <ul style="color:black; background-color:white;font-size:10px;" class="nav nav-treeview w3-dropdown-content w3-bar-block w3-border">
                <li class="nav-item w3-bar-item w3-button">
                  <a href="companyifo.php" class="nav-link active">
                    <i class="	fa fa-cube"></i>
                    <p>Create Store Return</p>
                  </a>
                </li>
                

                <li class="nav-item w3-bar-item w3-button">
                  <a href="registration.php" class="nav-link active">
                    <i class="	fa fa-cube"></i>
                    <p>Approval Store Return</p>
                  </a>
                </li>

                
                <li class="nav-item w3-bar-item w3-button">
                  <a href="registration.php" class="nav-link active">
                    <i class="	fa fa-cube"></i>
                    <p>Store Return List</p>
                  </a>
                </li>

              </ul>

            </li>
            


            <li class="nav-item w3-dropdown-hover">
              <h5 style="color:black; background-color:white;" href="" class="nav-link ">
                <i class="fa fa-edit"></i>
                <p>
               Requision Order

                </p>
              </h5>

              <ul style="color:black; background-color:white;font-size:10px;" class="nav nav-treeview w3-dropdown-content w3-bar-block w3-border">
                <li class="nav-item w3-bar-item w3-button">
                  <a href="r_o_create.php" class="nav-link active">
                    <i class="	fa fa-cube"></i>
                    <p>R O Create</p>
                  </a>
                </li>
                <li class="nav-item w3-bar-item w3-button">
                  <a href="companyifo.php" class="nav-link active">
                    <i class="	fa fa-cube"></i>
                    <p>R O View</p>
                  </a>
                </li>
                <li class="nav-item w3-bar-item w3-button">
                  <a href="companyifo.php" class="nav-link active">
                    <i class="	fa fa-cube"></i>
                    <p>R O Update</p>
                  </a>
                </li>

                <li class="nav-item w3-bar-item w3-button">
                  <a href="r_o_create.php" class="nav-link active">
                    <i class="	fa fa-cube"></i>
                    <p>R O Approval</p>
                  </a>
                </li>

                <li class="nav-item w3-bar-item w3-button">
                  <a href="registration.php" class="nav-link active">
                    <i class="	fa fa-cube"></i>
                    <p>R O List</p>
                  </a>
                </li>

              </ul>

            </li>

            <li class="nav-item w3-dropdown-hover">
              <h5 style="color:black; background-color:white;" href="" class="nav-link ">
                <i class="fa fa-edit"></i>
                <p>
               Purchase Order

                </p>
              </h5>

              <ul style="color:black; background-color:white;font-size:10px;" class="nav nav-treeview w3-dropdown-content w3-bar-block w3-border">
                <li class="nav-item w3-bar-item w3-button">
                  <a href="companyifo.php" class="nav-link active">
                    <i class="	fa fa-cube"></i>
                    <p>P O Create</p>
                  </a>
                </li>

                <li class="nav-item w3-bar-item w3-button">
                  <a href="companyifo.php" class="nav-link active">
                    <i class="	fa fa-cube"></i>
                    <p>P O View</p>
                  </a>
                </li>

                <li class="nav-item w3-bar-item w3-button">
                  <a href="companyifo.php" class="nav-link active">
                    <i class="	fa fa-cube"></i>
                    <p>P O Update</p>
                  </a>
                </li>

                <li class="nav-item w3-bar-item w3-button">
                  <a href="companyifo.php" class="nav-link active">
                    <i class="	fa fa-cube"></i>
                    <p>P O Approval</p>
                  </a>
                </li>
                <li class="nav-item w3-bar-item w3-button">
                  <a href="registration.php" class="nav-link active">
                    <i class="	fa fa-cube"></i>
                    <p>P O List</p>
                  </a>
                </li>

              </ul>

            </li>




            
            <li class="nav-item w3-dropdown-hover">
              <h5 style="color:black; background-color:white;" href="" class="nav-link ">
                <i class="fa fa-edit"></i>
                <p>
                Profile

                </p>
              </h5>

              <ul style="color:black; background-color:white;font-size:10px;" class="nav nav-treeview w3-dropdown-content w3-bar-block w3-border">
                <li class="nav-item w3-bar-item w3-button">
                  <a href="profile.php" class="nav-link active">
                    <i class="	fa fa-cube"></i>
                    <p>Change Password</p>
                  </a>
                </li>
            
                <li class="nav-item w3-bar-item w3-button">
                  <a href="logout.php" class="nav-link active">
                    <i class="	fa fa-cube"></i>
                    <p>Logout</p>
                  </a>
                </li>

              </ul>

            </li>


           
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<p>Dev: kowshiqueroy@gmail.com</p>
         
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

          </ul>

        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>