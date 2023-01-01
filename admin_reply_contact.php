<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Steam Fast | Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">    
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datepicker.css">   
     <!-- Gallery Lightbox -->
    <link href="assets/css/magnific-popup.css" rel="stylesheet"> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">     

    <!-- Main style sheet -->
    <link href="style.css" rel="stylesheet">    

   
    <!-- Google Fonts -->

    <!-- Prata for body  -->
    <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>
    <!-- Tangerine for small title -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>   
    <!-- Open Sans for title -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

<?php
	
$id = isset($_GET['id']) ? $_GET['id'] : '';
include('db_connect.php');

		$sql = "SELECT * FROM contact_us WHERE contact_us.id = '".$id."'";

		$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
		 $row = mysqli_fetch_assoc($query);


		if (isset($_POST['reply'])) {

	$fullName = $_POST['fullName'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $phone = $_POST['phone'];
      $message = $_POST['message'];

      $to='michaelgabriel165@gmail.com';
      $subject2='Form Submission';
      $msg="Name: ".$fullName."\n"."Phone: ".$phone."\n". "Wrote the following: "."\n\n".$message;
      $headers="From: ".$email;


      $sql = "INSERT INTO contact_us(fullName, email, subject, phone, message) VALUES('".$fullName."', '".$email."', '".$subject."', '".$phone."', '".$message."')";

      $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

	}

	?>

<style type="text/css">
	form{	
		color: black;
	}

	.form-group .form-control{	
		color: black;
		border-color: orange;
	}

</style>



    <div id="contact" class="section wb" style="padding-top: 80px; padding-bottom: 50px">
    	<div class="section-title text-center">
        			<?php
           		 if (isset($_SESSION['message'])): ?> 
              	<div style="font-size: 20px;" class="aler alert-<?=$_SESSION['msg_type']?>" >

		        <?php 
		            echo $_SESSION['message'];
		            unset($_SESSION['message']);
		        ?>
		            </div>
		            
		        <?php endif ?>
    		</div>
        <div class="col-md-4 col-md-offset-4">
           <div class="contact_form">
	<form class="form" method="POST" ">
		<div class="row">
			<div>
				<fieldset">
					
					<div class="form-group">
						<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
						<label>Replying<b style="color: red;">*</b></label>
						<input type="text" name="fullName" class="form-control" value="<?php echo $row['fullName']; ?>">
					</div>

					<div class="form-group">
						<label>Mobile<b style="color: red;">*</b></label>
						<input type="text" name="phone" class="form-control" value="<?php echo $row['phone']; ?>">
					</div>

					<div class="form-group">
						<label>Email<b style="color: red;">*</b></label>
						<input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>">
					</div>


					<div class="form-group">
						<label>Contact Message<b style="color: red;">*</b></label>
						<textarea class="form-control"><?php echo $row['message']; ?></textarea>
					</div>


					<div class="form-group">
						<label>Yours Message<b style="color: red;">*</b></label>
						<textarea class="form-control"></textarea>
					</div>


					<div class="form-group" style="padding-bottom: 50px">
						<input type="submit" name="update" value="Reply" class="btn btn-lg btn-primary">
						<a href="ready_contact.php" class="btn btn-lg btn-danger"><i class="fa fa-backward"> Back</i></a>
						<a href="ready_contact.php" class="btn btn-lg btn-warning">Dashboard</a>
					</div>

				</fieldset>
			</div>
		</div>
	</form>
	</div>
		</div>
	</div>


    <?php include 'footer.php' ?>
</body>
</html>