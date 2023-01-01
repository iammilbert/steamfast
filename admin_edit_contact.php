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

<div class="banner-area banner-bg-1">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="banner">
						<h2>My Profile</h2>
						<ul class="page-title-link">
							<li><a href="student_page.php">Home</a></li>
							<li><a href="student_logout.php">Logout</a></li>
							<li><a href="#">Change Password</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

    <div id="contact" class="section wb">
    	<div class="section-title text-center">
        		<h3><b>Reply</b></h3>

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
        <div class="col-md-8 col-md-offset-2"  style="background-color: darkgrey">
           <div class="contact_form">
	<form class="form" method="POST" ">
		<div class="row">
			<div>
				<fieldset">
					<legend style="color: green;"><h2><b>Profile</b></h2></legend>
					<div class="form-group">
						<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
						<label>First Name<b style="color: red;">*</b></label>
						<input type="text" name="firstName" class="form-control" value="<?php echo $row['firstName']; ?>">
					</div>

					<div class="form-group">
						<label>Last Name<b style="color: red;">*</b></label>
						<input type="text" name="lastName" class="form-control" value="<?php echo $row['lastName']; ?>" >
					</div>

					<div class="form-group">
						<label>Middle Name</label>
						<input type="text" name="middleName" class="form-control" value="<?php echo $row['middleName']; ?>">
					</div>

						<div class="form-group">
						<label>Gender<b style="color: red;">*</b></label>
						<input type="text" name="gender" class="form-control" value="<?php echo $row['gender']; ?>">
					</div>

					

					<div class="form-group">
						<label>Institution<b style="color: red;">*</b></label>
						<select class="form-control" name="school_id">
								<option value="<?php echo $row['school_id']; ?>"><?php echo $row['schoolNames']; ?></option>
					<?php 
							$sql2 = "SELECT * FROM schools";
						$query2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));

						?>
							
								<?php while($row2 = mysqli_fetch_assoc($query2)): ?>
								<option><?php echo $row2['schoolNames']; ?></option>
							<?php endwhile; ?>
							</select>
					</div>



					<div class="form-group">
						<label>Faculty<b style="color: red;">*</b></label>
						<select class="form-control" name="faculty_id">
								<option value="<?php echo $row['faculty_id']; ?>"><?php echo $row['faculties']; ?></option>
					<?php 
							$sql3 = "SELECT * FROM faculties";
							$query3 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
						?>
							
								<?php while($row3 = mysqli_fetch_assoc($query3)): ?>
								<option><?php echo $row3['faculties']; ?></option>
							<?php endwhile; ?>
							</select>
					</div>



					<div class="form-group">
						<label>Department<b style="color: red;">*</b></label>
						<select class="form-control" name="department_id">
								<option value="<?php echo $row['department_id']; ?>"><?php echo $row['departments']; ?></option>
					<?php 
							$sql4 = "SELECT * FROM departments";
						$query4 = mysqli_query($conn, $sql4) or die(mysqli_error($conn));
						?>
							
								<?php while($row4 = mysqli_fetch_assoc($query4)): ?>
								<option><?php echo $row4['departments']; ?></option>
							<?php endwhile; ?>
							</select>
					</div>


					
					<div class="form-group">
						<label>Course of Study<b style="color: red;">*</b></label>
						<select class="form-control" name="course_id">
								<option value="<?php echo $row['course_id']; ?>"><?php echo $row['courses']; ?></option>
					<?php 
							$sql5 = "SELECT * FROM courses";
						$query5 = mysqli_query($conn, $sql5) or die(mysqli_error($conn));
						?>
							
								<?php while($row5 = mysqli_fetch_assoc($query5)): ?>
								<option><?php echo $row5['courses']; ?></option>
							<?php endwhile; ?>
							</select>
					</div>



					<div class="form-group">
						<label>Matric. Number<b style="color: red;">*</b></label>
						<input type="text" name="matric_Number" class="form-control" value="<?php echo $row['matric_Number']; ?>">
					</div>

					<div class="form-group">
						<label>Mobile<b style="color: red;">*</b></label>
						<input type="text" name="mobile" class="form-control" value="<?php echo $row['mobile']; ?>">
					</div>

					<div class="form-group">
						<label>Email<b style="color: red;">*</b></label>
						<input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>">
					</div>


					<div>
						<input type="submit" name="update" value="Update" class="btn btn-light btn-radius btn-brd grd1 btn-block">
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