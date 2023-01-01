<?php 
session_start();

ob_start();

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist2/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


<?php include('db_connect.php'); ?>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="admin-dashboard.php" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
              <div class="dropdown-menu dropdown-menu-right user-dd animated">
                <a class="dropdown-item" href="admin-profile.php"><i class="far fa-user nav-icon"></i> My Profile</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="admin-profile-image.php"><i class="fas fa-image nav-icon"></i> Change Profile Image</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="change-pass.php"><i class="fas fa-lock nav-icon"></i> Change Password</a>
                  <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="admin_logout.php"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                  <div class="dropdown-divider"></div>
              </div>
      </li>
    </ul>


  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="admin-dashboard.php" class="brand-link">
      <img src="dist2/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light" style="color: orange"><b>STEAM FAST</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="admin-dashboard.php" class="nav-link active">
              <i class="fa fa-fw fa-home"></i>
              <p>
                DASHBOARD  
              </p>
            </a>
       
          </li>
    
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                INCOMMING
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/ready_reservation.php" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Reservation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/ready_contact.php" class="nav-link">
                  <i class="far fa-envelope nav-icon"></i>
                  <p>Contact</p>
                </a>
              </li>

            </ul>
          </li>
         
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-image nav-icon"></i>
              <p>
                GALLERY
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin-create-gallery.php" class="nav-link">
                  <i class="fas fa-plus-circle"></i>
                  <p>Add New Picture</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin-gallery.php" class="nav-link">
                  <i class="far fa-image nav-icon"></i>
                  <p>View Gallery</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                CHEF
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin-create-chef.php" class="nav-link">
                  <i class="fas fa-plus-circle"></i>
                  <p>Add New Chef</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin-chef-gallery.php" class="nav-link">
                  <i class="far fa-image nav-icon"></i>
                  <p>Chef Gallery</p>
                </a>
              </li>
            </ul>
          </li>

           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                ABOUT-US
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="about.php" class="nav-link">
                  <i class="nav-icon fas fa-address-book"></i>
                  <p>About-us Statement</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="mission.php" class="nav-link">
                  <i class="nav-icon fas fa-address-book"></i>
                  <p>Mission Statement</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="vision.php" class="nav-link">
                  <i class="nav-icon fas fa-address-book"></i>
                  <p>Vision Statement</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="about-us-image.php" class="nav-link">
                  <i class="far fa-image nav-icon"></i>
                  <p>About-us Image</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-header">MENU</li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-coffee"></i>
              <p>
                BREAKFAST
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin-create-breakfast-menu.php" class="nav-link">
                  <i class="fas fa-plus-circle nav-icon"></i>
                  <p>Add New Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin-breakfast-menu.php" class="nav-link">
                  <i class="far fa-image nav-icon"></i>
                  <p>Breakfast Gallery</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                SNACKS
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin-create-snacks-menu.php" class="nav-link">
                  <i class="fas fa-plus-circle nav-icon"></i>
                  <p>Add New Menu</p>
                </a>
              </li>
              <li class="nav-item">
              <li class="nav-item">
                <a href="admin-snacks-menu.php" class="nav-link">
                  <i class="far fa-image nav-icon"></i>
                  <p>Snacks Gallery</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                DRINKS
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin-create-drinks-menu.php" class="nav-link">
                  <i class="fas fa-plus-circle nav-icon"></i>
                  <p>Add New Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin-drinks-menu.php" class="nav-link">
                  <i class="fas fa-image nav-icon"></i>
                  <p>Drinks Gallery</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                MEALS
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin-create-meals-menu.php" class="nav-link">
                  <i class="fas fa-plus-circle nav-icon"></i>
                  <p>Add New Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin-meals-menu.php" class="nav-link">
                  <i class="fas fa-image nav-icon"></i>
                  <p>Meals Gallery</p>
                </a>
              </li>
            </ul>
          </li>

            <li class="nav-header">CONTACT DETAILS</li>
          <li class="nav-item">
            <a href="email.php" class="nav-link">
              <i class="far fa-envelope nav-icon"></i>
              <p class="text">Company Email</p>
            </a>
          </li>

            <li class="nav-item">
            <a href="admin_edit_opening_hour.php" class="nav-link">
              <i class="far fa-clock nav-icon"></i>
              <p class="text">Opening Hours</p>
            </a>
          </li>

            <li class="nav-item">
            <a href="office_address.php" class="nav-link">
              <i class="fas fa-lg fa-building"></i>
              <p class="text">Office Address</p>
            </a>
          </li>

            <li class="nav-item">
            <a href="telephone.php" class="nav-link">
              <i class="fas fa-lg fa-phone"></i>
              <p class="text">Office Telephone </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-gray">
              <div class="inner">

                   <?php 
                   
                        $sql_gallery = "SELECT COUNT(gallery.id) AS sum FROM gallery";

                        $query_gallery = mysqli_query($conn, $sql_gallery) or die(mysqli_error($conn));
                   ?>
                  <?php while ($gallery_id = mysqli_fetch_assoc($query_gallery)): ?> 
                <h3><?php echo  $gallery_id['sum']; ?></h3>
                 <?php endwhile ?>
                <p>GALLERY</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="admin-gallery.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">

                <?php 
                   
                        $sql_staff = "SELECT COUNT(staff.id) AS sum FROM staff";

                        $query_staff = mysqli_query($conn, $sql_staff) or die(mysqli_error($conn));
                   ?>
                  <?php while ($staff_id = mysqli_fetch_assoc($query_staff)): ?> 
                <h3><?php echo  $staff_id['sum']; ?></h3>
                 <?php endwhile ?>
                <p>OUR CHEF</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php 
                   
                        $sql_breakfast = "SELECT COUNT(breakfast_menu.id) AS sum FROM breakfast_menu";

                        $query_breakfast = mysqli_query($conn, $sql_breakfast) or die(mysqli_error($conn));
                   ?>
                  <?php while ($breakfast_id = mysqli_fetch_assoc($query_breakfast)): ?> 
                <h3><?php echo  $breakfast_id['sum']; ?></h3>
                 <?php endwhile ?>
                <p>BREAKFAST MENU</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                 <?php 
                   
                        $sql_meals = "SELECT COUNT(meals_menu.id) AS sum FROM meals_menu";

                        $query_meals = mysqli_query($conn, $sql_meals) or die(mysqli_error($conn));
                   ?>
                  <?php while ($meals_id = mysqli_fetch_assoc($query_meals)): ?> 
                <h3><?php echo  $meals_id['sum']; ?></h3>
                 <?php endwhile ?>

                <p>MEALS</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

         <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-orange">
              <div class="inner">
                 <?php 
                   
                        $sql_drinks = "SELECT COUNT(drinks_menu.id) AS sum FROM drinks_menu";

                        $query_drinks = mysqli_query($conn, $sql_drinks) or die(mysqli_error($conn));
                   ?>
                  <?php while ($drinks_id = mysqli_fetch_assoc($query_drinks)): ?> 
                <h3><?php echo  $drinks_id['sum']; ?></h3>
                 <?php endwhile ?>

                <p>DRINKS</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                 <?php 
                   
                        $sql_snacks = "SELECT COUNT(snacks_menu.id) AS sum FROM snacks_menu";

                        $query_snacks = mysqli_query($conn, $sql_snacks) or die(mysqli_error($conn));
                   ?>
                  <?php while ($snacks_id = mysqli_fetch_assoc($query_snacks)): ?> 
                <h3><?php echo  $snacks_id['sum']; ?></h3>
                 <?php endwhile ?>

                <p>SNACKS</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-dark">
              <div class="inner">
                 <?php 
                   
                        $sql_reservation = "SELECT COUNT(reservation.id) AS sum FROM reservation";

                        $query_reservation = mysqli_query($conn, $sql_reservation) or die(mysqli_error($conn));
                   ?>
                  <?php while ($reservation_id = mysqli_fetch_assoc($query_reservation)): ?> 
                <h3><?php echo  $reservation_id['sum']; ?></h3>
                 <?php endwhile ?>

                <p>TOTAL RESERVATIONS</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="pages/tables/total_reservation.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-pink">
              <div class="inner">
                 <?php 
                   
                        $sql_contact = "SELECT COUNT(contact_us.id) AS sum FROM contact_us";

                        $query_contact = mysqli_query($conn, $sql_contact) or die(mysqli_error($conn));
                   ?>
                  <?php while ($contact_id = mysqli_fetch_assoc($query_contact)): ?> 
                <h3><?php echo  $contact_id['sum']; ?></h3>
                 <?php endwhile ?>

                <p>TOTAL CONTACT</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="pages/tables/total_contact.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

<!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-12 connectedSortable">

   <!-- Calendar -->
            <div class="card bg-gradient-success">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
     
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->


    <section class="col-lg-12 connectedSortable">
    <!-- Map card -->
            <div class="card bg-gradient-primary">
            
              <!-- /.card-body-->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <div id="sparkline-1"></div>
                    <div class="text-white">Online</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-2"></div>
                    <div class="text-white">Speed</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-3"></div>
                    <div class="text-white">Visitors</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.card -->
        </section>

  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">Steam Fast</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.1
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist2/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist2/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist2/js/demo.js"></script>

</body>
</html>
