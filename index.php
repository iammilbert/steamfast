<?php include('header.php'); ?> 

<?php include 'db_connect.php'; ?>

                                <?php

                                if(isset($_GET['delete'])){

                                    $id = $_GET['delete'];

                                    $sql = "DELETE FROM staff WHERE id='".$id."'";

                                    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                                }


                                $sql = "SELECT * FROM staff";

                                $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));


                                ?>

  <body>

 

  
  <!-- Start slider  -->
  <section id="mu-slider">
    <div class="mu-slider-area"> 

      <!-- Top slider -->
      <div class="mu-top-slider">

        <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <img src="assets/img/slider/1.jpeg" alt="img">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">Welcome</span>
            <h2 class="mu-slider-title">To Steam Fast</h2>
            <p>We provide affordable, quality, and nutritious food to all our customers and esteemed customers</p>           
            <a href="reservation.php" class="mu-readmore-btn">BOOK A TABLE</a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->    

         <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <img src="assets/img/slider/2.jpeg" alt="img">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">The Elegant</span>
            <h2 class="mu-slider-title">World Restaurant</h2>
            <p>We prepare numerous meals for which the world accept</p>           
           <a href="reservation.php" class="mu-readmore-btn">BOOK A TABLE</a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide --> 

        <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <img src="assets/img/slider/3.jpeg" alt="img">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">Delicious</span>
            <h2 class="mu-slider-title">Spicy Meals</h2>
            <p>For you that love Spicy food, Steam Fast is the right place for you.</p>           
            <a href="reservation.php" class="mu-readmore-btn">BOOK A TABLE</a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->   

      </div>
    </div>
  </section>
  <!-- End slider  -->


  <!-- Start About us -->
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">

            <div class="mu-title">
              <span class="mu-subtitle">STEAM FAST</span>
              <h2>DISCOVERING</h2>
            </div>

            <div class="row">
              <div class="col-md-3">
               <div class="mu-about-us-left">     
                <img src="assets/img/discovering/2.jpg" alt="img">           
                </div>
              </div>

              <div class="col-md-3">
               <div class="mu-about-us-left">     
                <img src="assets/img/discovering/8.jpg" alt="img">           
                </div>
              </div>

              <div class="col-md-3">
               <div class="mu-about-us-left">     
                <img src="assets/img/discovering/6.jpg" alt="img">           
                </div>
              </div>

              <div class="col-md-3">
               <div class="mu-about-us-left">     
                <img src="assets/img/discovering/9.jpg" alt="img">           
                </div>
              </div>
         
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About us -->

  

  <!-- Start Counter Section -->
  <section id="mu-counter">
    <div class="mu-counter-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-counter-area">
              <h1 style="color: orange; text-align: center; font-size: 50px; font-family: gabriola"><b>AVAILABILTY</b></h1>
              <ul class="mu-counter-nav">

                <li class="col-md-3 col-sm-3 col-xs-12">
                  <div class="mu-single-counter">
                    <span>Fresh</span>
                    <h3><span class="counter-value" data-count="150">0</span><sup>+</sup></h3>
                    <p>Breakfast Items</p>
                  </div>
                </li>

                <li class="col-md-3 col-sm-3 col-xs-12">
                  <div class="mu-single-counter">
                    <span>Delicious</span>
                    <h3><span class="counter-value" data-count="60">0</span><sup>+</sup></h3>
                    <p>Lunch Items</p>
                  </div>
                </li>

                 <li class="col-md-3 col-sm-3 col-xs-12">
                  <div class="mu-single-counter">
                    <span>Hot</span>
                     <h3><span class="counter-value" data-count="45">0</span><sup>+</sup></h3>
                    <p>Coffee Items</p>
                  </div>
                </li>

                 <li class="col-md-3 col-sm-3 col-xs-12">
                  <div class="mu-single-counter">
                    <span>Satisfied</span>
                    <h3><span class="counter-value" data-count="6560">0</span><sup>+</sup></h3>
                    <p>Customers</p>
                  </div>
                </li>

              </ul>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Counter Section --> 


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
          <?php while($staff_row = mysqli_fetch_assoc($query)): ?>
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


  <!-- Start Client Testimonial section -->
  <section id="mu-client-testimonial">
    <div class="mu-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-client-testimonial-area">

              <div class="mu-title">
                <span class="mu-subtitle">Testimonials</span>
                <h2>What Customers Say</h2>
              </div>

              <!-- testimonial content -->
              <div class="mu-testimonial-content">
                <!-- testimonial slider -->
                <ul class="mu-testimonial-slider">
                  <li>
                    <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                        <p>Steam Fast is the best, their food is so yummy</p>
                      </div>
                      <div class="mu-testimonial-bio">
                        <p>- Michael Gabriel Hishen -</p>                      
                      </div>
                    </div>
                  </li>
                   <li>
                    <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                        <p>When it comes to spicy foods, Steam Fast is the best</p>
                      </div>
                      <div class="mu-testimonial-bio">
                        <p>- Mercy Samson -</p>                      
                      </div>
                    </div>
                  </li>
                   <li>
                    <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                        <p>This is the best restaurant i have been to so far. i will visit this restaurant</p>
                      </div>
                      <div class="mu-testimonial-bio">
                        <p>- Saviour Raymond Joshua -</p>                      
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Client Testimonial section -->
  
  

 

<?php include('footer.php'); ?>  

  </body>
</html>