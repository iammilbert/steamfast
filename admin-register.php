<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist2/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<?php
include('db_connect.php');
$errors = array();
  if (isset($_POST['register'])) {
    $fullName = $_POST['fullName'];
    $address = $_POST['address'];
    
    $email = $_POST['email'];
      $check_duplicate_email = "SELECT email FROM admin_login WHERE email = '".$email."'";
      $query_email = mysqli_query($conn, $check_duplicate_email) or die(mysqli_error($conn));
      $email_count = mysqli_num_rows($query_email);
      if ($email_count > 0) {
        array_push($errors, "email already taken, Please use another email");
    
      }

    $userName = $_POST['userName'];
      $check_duplicate_userName = "SELECT email FROM admin_login WHERE userName = '".$userName."'";
      $query_userName = mysqli_query($conn, $check_duplicate_userName) or die(mysqli_error($conn));
      $userName_count = mysqli_num_rows($query_userName);
      if ($userName_count > 0) {
        array_push($errors, "userName already taken, Please use another userName");
    
      }
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if ($password != $cpassword) {
        array_push($errors, "The two password do not match");
      }

      if (count($errors)==0) {
  
      $sql = "INSERT INTO admin_login(fullName,email, userName, address, password) VALUES('".$fullName."', '".$email."', '".$userName."', '".$address."', '".$password."')";

      $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

       $_SESSION['message'] = "Record has been Sucessfully Submitted!" ;
        $_SESSION['msg_type'] = "success";

          
      }

  }

?>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="admin-register.php"><b>Admin Registeration</b></a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new Admin</p>
         <?php
                 if (isset($_SESSION['message'])): ?> 
                <div style="font-size: 20px;" class="aler alert-<?=$_SESSION['msg_type']?>" >
                <?php 
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                ?>
                    </div>
                    
                <?php endif ?>
<b><?php include ('signup_error.php'); ?></b>
      <form method="POST">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name="fullName">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="UserName" name="userName">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="address" class="form-control" placeholder="address" name="address">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-map-marker"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" required="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password" name="cpassword" required="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree" required="terms">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-flat btn-primary btn-block" name="register">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary disabled">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger disabled">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div>

      <a href="admin_login.php" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist2/js/adminlte.min.js"></script>



</body>
</html>
