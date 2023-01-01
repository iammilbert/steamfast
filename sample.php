   <select name="status" class="form-control custom-select" onchange="pending_visit(this.value,<?php echo $row['id'];?>)">
                              <option selected disabled>Select one</option>
                              <option value="1">Success</option>
                              <option value="2">Pending</option>
                              <option value="0">Canceled</option>
                            </select>








CREATE TABLE pre_nce_signup(
  id INTEGER AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100),
    userName VARCHAR(100),
    tel VARCHAR(100),
    password VARCHAR(100)
    
);



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist2/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<div class="wrapper">


<?php include('../../db_connect.php'); ?>
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
            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
              <div class="dropdown-menu dropdown-menu-right user-dd animated">
                <a class="dropdown-item" href="../../admin-profile.php"><i class="far fa-user nav-icon"></i> My Profile</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../../admin-profile-image.php"><i class="fas fa-image nav-icon"></i> Change Profile Image</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../../change-pass.php"><i class="fas fa-lock nav-icon"></i> Change Password</a>
                  <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="../../admin_logout.php"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                  <div class="dropdown-divider"></div>
              </div>
      </li>
    </ul>


  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../admin-dashboard.php" class="brand-link">
      <img src="../../dist2/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
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
                      <a href="../../admin-dashboard.php" class="nav-link active">
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
                <a href="ready_reservation.php" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Reservation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="ready_contact.php" class="nav-link">
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
                <a href="../../admin-create-gallery.php" class="nav-link">
                  <i class="fas fa-plus-circle"></i>
                  <p>Add New Picture</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../admin-gallery.php" class="nav-link">
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
                <a href="../../admin-create-chef.php" class="nav-link">
                  <i class="fas fa-plus-circle"></i>
                  <p>Add New Chef</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../admin-chef-gallery.php" class="nav-link">
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
                <a href="../../about.php" class="nav-link">
                  <i class="nav-icon fas fa-address-book"></i>
                  <p>About-us Statement</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../mission.php" class="nav-link">
                  <i class="nav-icon fas fa-address-book"></i>
                  <p>Mission Statement</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="../../vision.php" class="nav-link">
                  <i class="nav-icon fas fa-address-book"></i>
                  <p>Vision Statement</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="../../about-us-image.php" class="nav-link">
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
                <a href="../../admin-create-breakfast-menu.php" class="nav-link">
                  <i class="fas fa-plus-circle nav-icon"></i>
                  <p>Add New Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../admin-breakfast-menu.php" class="nav-link">
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
                <a href="../../admin-create-snacks-menu.php" class="nav-link">
                  <i class="fas fa-plus-circle nav-icon"></i>
                  <p>Add New Menu</p>
                </a>
              </li>
              <li class="nav-item">
              <li class="nav-item">
                <a href="../../admin-snacks-menu.php" class="nav-link">
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
                <a href="../../admin-create-drinks-menu.php" class="nav-link">
                  <i class="fas fa-plus-circle nav-icon"></i>
                  <p>Add New Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../admin-drinks-menu.php" class="nav-link">
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
                <a href="../../admin-create-meals-menu.php" class="nav-link">
                  <i class="fas fa-plus-circle nav-icon"></i>
                  <p>Add New Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../admin-meals-menu.php" class="nav-link">
                  <i class="fas fa-image nav-icon"></i>
                  <p>Meals Gallery</p>
                </a>
              </li>
            </ul>
          </li>

            <li class="nav-header">CONTACT DETAILS</li>
          <li class="nav-item">
            <a href="../../email.php" class="nav-link">
              <i class="far fa-envelope nav-icon"></i>
              <p class="text">Company Email</p>
            </a>
          </li>

            <li class="nav-item">
            <a href="../../admin_edit_opening_hour.php" class="nav-link">
              <i class="far fa-clock nav-icon"></i>
              <p class="text">Opening Hours</p>
            </a>
          </li>

            <li class="nav-item">
            <a href="../../office_address.php" class="nav-link">
              <i class="fas fa-lg fa-building"></i>
              <p class="text">Office Address</p>
            </a>
          </li>

            <li class="nav-item">
            <a href="../../telephone.php" class="nav-link">
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
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Reservations Table</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
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
            <a href="ready_reservation.php" style="color: blue">Refresh</a>
                </div>
                
            <?php endif ?>
                    
                </div>   
              <form class="form" method="POST">
                <table id="example1" class="table table-bordered table-striped">

                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Mobile Number</th>
                        <th>Number of People</th>
                        <th>Reserved Date</th> 
                        <th>Visiting Date</th> 
                         <th>Time</th>  
                        <th>Message</th>  
                        <th>Current Status</th> 
                        <th>Actions</th>
                        <th>Process</th>  
                    </tr>
                    </thead>
                    <tbody  id="prs">

                <?php
                $result = mysqli_query($conn,"SELECT * FROM reservation ORDER BY id ASC");
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['fullName']; ?></td>
                        <td><?php echo $row['mobile']; ?></td>
                        <td><?php echo $row['persons']; ?></td>
                        <td style="color: green"><?php echo $row['reserved_date']; ?></td>
                        <td style="color: red"><?php echo $row['date']; ?></td>
                        <td style="color: green"><?php echo $row['time']; ?></td>
                        <td><?php echo $row['message']; ?></td>
                        <td>
                            <?php
                                if($row['status']==1){
                                    echo "<p id=str".$row['id'].">Success</p>";
                                }
                                elseif($row['status']==2){
                                    echo "<p id=str".$row['id'].">Pending</p>";
                                }
                                elseif($row['status']==0){
                                    echo "<p id=str".$row['id'].">Canceled</p>";
                                }
                                  else{
                                    echo "<p id=str".$row['id'].">Invalid</p>";
                                  };


                            ?>
                        </td>
                        

                        <td>

                         


                            <?php
                                if($row['status']==1){
                                    echo "<select class='btn btn-flat btn-dark' selected disabled class='form-control'><option>Success</option></select>";
                                }

                                 elseif($row['status']==0){
                                    echo "<select class='btn btn-flat btn-dark' selected disabled class='form-control'><option>Canceled</option></select>";
                                }
                                else{
                                    echo "<select onchange='pending_visit(this.value, ".$row['id'].")' class='form-control'><option selected disabled>Select one</option><option value='1'>Process</option><option value='0'>Cancel</option></select>";
                                };
                          


                            ?>
                                
                                
                        </td>



                        <td>
                            <?php
                                if($row['status']==1){
                                    echo "<button class='btn btn-flat btn-dark' selected disabled>Success</button>";
                                }
                                elseif($row['status']==2){
                                    

                                  echo "<a href='../../process-reservation.php?id=".$row['id']."' class='btn btn-flat btn-success'> Process</a>";
                                }
                                elseif($row['status']==0){
                                    echo "<button class='btn btn-flat btn-dark' selected disabled>Canceled</button>";
                                }
                                  else{
                                    echo "<button selected disabled>Invalid</button>";
                                  };


                            ?>
                        </td>
                    </tr>

                <?php
                    }

                ?>
            </tbody>
         </table>
      </form>
    </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
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
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="../../dist2/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist2/js/demo.js"></script>
<script type="text/javascript" src="assets/libs/jquery/dist/jquery.min.js"></script>
<!-- page script -->
<script type="text/javascript">
  $(function () {
    $("#example1").DataTable();
  });
</script>

<script type="text/javascript">
    function pending_visit(val, id){
        $.ajax({
            type:'post',
            url:'change_status.php',
            data:{val:val,id:id},
            success:function(result){
                if(result==1) {
                    $('#str'+id).html('Success');
                }elseif(result==2){
                    $('#str'+id).html('Pending');
                }elseif(result==0){
                    $('#str'+id).html('Canceled');
                }else{
                    $('#str'+id).html('Invalid');
                }
            }
        });
    }
</script>
</body>
</html>
