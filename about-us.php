<?php include('header.php'); ?> 
<?php include 'db_connect.php'; ?>

<?php 
    $sql = "SELECT * FROM about_us";

    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
     $row = mysqli_fetch_assoc($query);

?>


<style type="text/css">
  .mu-about-us-right h1{
      color: orange; 
      font-family: gabriola; 
      font-weight: bold;"
  }
  .mu-about-us-right p{
      font-size: 20px; 
      font-family: Times New Roman; 
      text-align: justify;"
  }
  
</style>

  <body>

<!-- Start About us -->
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">

            <div class="mu-title">
              <span class="mu-subtitle">Discover</span>
              <h2>ABOUT US</h2>
            </div>

            <div class="row">
              <div class="col-md-6">
               <div class="mu-about-us-left">     
                <img src="assets/images/about-us/<?php echo $row['picture']; ?>" alt="img">           
                </div>
              </div>
              <div class="col-md-6">
                 <div class="mu-about-us-right">
                  <h1>About us</h1>
                 <p><?php echo $row['about']; ?></p>  


                   <h1>Mission</h1>
                 <p><?php echo $row['mission']; ?></p>

                  <h1>Vision</h1>
                 <p><?php echo $row['vision']; ?> </p>                            
                    
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About us -->


<?php 
    $sql = "SELECT * FROM staff";

    $query1 = mysqli_query($conn, $sql) or die(mysqli_error($conn));

?>
 <!-- Start Chef Section -->
  <section id="mu-chef">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-chef-area">

            <div class="mu-title">
              <span class="mu-subtitle">Our Professionals</span>
              <h2>MASTER CHEFS</h2>
            </div>

            <div class="mu-chef-content">
              <ul class="mu-chef-nav">
          <?php while($staff_row = mysqli_fetch_assoc($query1)): ?>
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/images/staff/<?php echo $staff_row['picture']; ?>" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4><?php echo $staff_row['firstName']; ?></h4>
                      <span><?php echo $staff_row['position']; ?></span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>
          <?php endwhile; ?>
                            
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Chef Section -->

  
<?php include('footer.php'); ?>  

  </body>
</html>