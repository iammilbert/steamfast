<?php 
session_start();

ob_start();

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Forgot Password</title>
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
<body class="hold-transition login-page">


  <?php 
include('db_connect.php');
$id = $_SESSION['id'];

if (isset($_POST['submit'])) {

    $id = $_SESSION['id'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM admin_login WHERE id = '".$id."' AND password = '".$password."'";

    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if (mysqli_num_rows($query)==1) {

    $row = mysqli_fetch_assoc($query);

    header('Location: new-password.php');

    }else{
      $_SESSION['message'] = "Password incorrect!";
            $_SESSION['msg_type'] = "warning";
    }
  }


?>


<div class="login-box">
  <div class="login-logo">
    <a href="forgot-password.php"><b>Admin Password</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Here you can easily Change your password.</p>

       <?php
                 if (isset($_SESSION['message'])): ?> 
                <div style="font-size: 20px;" class="aler alert-<?=$_SESSION['msg_type']?>" >
                <?php 
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                ?>
                    </div>
                    
                <?php endif ?>

      <form method="POST">
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="password" name="password" required="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block" name="submit">Request new password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="admin_logout.php" class="text-center">Logout</a>
      </p>
      <p class="mb-0">
        <a href="admin-dashboard.php">Dashboard</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist2/js/adminlte.min.js"></script>

</body>
</html>
