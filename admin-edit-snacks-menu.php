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
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist2/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
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
        <a href="../../admin-dashboard.php" class="nav-link">Home</a>
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
    <section class="content-header">
    
    </section>


<?php 

$id = isset($_GET['id']) ? $_GET['id'] : '';

$sql = "SELECT * FROM snacks_menu WHERE id='".$id."'";

$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

$snacks_row = mysqli_fetch_assoc($query);


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $pic_name = $_FILES['picture']['name'];

    $pic_tmp_name = $_FILES['picture']['tmp_name'];



    $food_id = $_POST['id'];

    $food_name = $_POST['food_name'];

    $price = $_POST['price'];

    $picture = $pic_name;



    $sql = "UPDATE snacks_menu 
                    SET 
                        food_name = '".$food_name."', 
                        price = '".$price."', 
                        picture='".$picture."' 
                        WHERE id='".$food_id."'";


    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));


    if($query)
    {
        move_uploaded_file($pic_tmp_name, "assets/images/food/snacks/$pic_name");

         $_SESSION['message'] = "Successfully updated!";
        $_SESSION['msg_type'] = "success";
    }


}


?>



    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-2">
            
        </div>
        <div class="col-8">
          <div class="form-group">
            <h3>Editing Snacks Menu</h3>
          </div>
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <div class="form-group">
                  <?php
               if (isset($_SESSION['message'])): ?> 
                <div style="font-size: 20px;" class="aler alert-<?=$_SESSION['msg_type']?>" >

            <?php 
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            ?>
            <a href="admin-snacks-menu.php" style="color: blue">Refresh</a>
                </div>
                
            <?php endif ?>
                    
                </div>

             <form method = "POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">

               <div class="form-group">
                    <input type="hidden" id="id" name="id" value="<?php echo $snacks_row['id']; ?>">
                </div>

                   <div class="form-group">
                    <label>Requirements</label>
                    <ul>
                        <li>Picture Width 657 (in pixels)</li>
                        <li>Picture height 657 (in pixels)</li>
                        <li>Picture format PNG or JPEG</li>
                    </ul>
                </div>
                 
               <div class="form-group">
                        <label for="food_name">Food Name</label>
                        <input class="form-control" type="text" name="food_name" placeholder="Food Name" value="<?php echo $snacks_row['food_name']; ?>">
                </div>

                 <div class="form-group">
                        <label for="price">Price</label>

                        <input type="text" class="form-control" name="price" placeholder="Price" value="<?php echo $snacks_row['price']; ?>">
                </div>

                 <div class="form-group">
                     <label for="price">Price</label>
                        <input type="file" name="picture" class="form-control">
                </div>

                <div class="form-group">
                        <input type="submit" name="submit" value="Update" class="btn btn-lg btn-primary">
                </div>                

            </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->

        <div class="col-2">
            
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
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
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="dist2/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist2/js/demo.js"></script>
<script type="text/javascript" src="assets/libs/jquery/dist/jquery.min.js"></script>
<!-- page script -->
</body>
</html>