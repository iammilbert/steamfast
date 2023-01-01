<?php include('header.php'); ?> 

<?php include 'db_connect.php'; ?>

              
<!-- Start Restaurant Menu -->
  <section id="mu-restaurant-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-restaurant-menu-area">

            <div class="mu-title">
              <span class="mu-subtitle">Discover</span>
              <h2>OUR MENU</h2>
            </div>
            
            <div class="mu-restaurant-menu-content">
              <ul class="nav nav-tabs mu-restaurant-menu">
                <li class="active"><a href="#breakfast" data-toggle="tab">Breakfast</a></li>
                <li><a href="#meals" data-toggle="tab">Meals</a></li>
                <li><a href="#snacks" data-toggle="tab">Snacks</a></li>
                <li><a href="#drinks" data-toggle="tab">Drinks</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="breakfast">
                  <div class="mu-tab-content-area">
                    <div class="row">

                              <?php


                                $breakfast_sql = "SELECT * FROM breakfast_menu";

                                $breakfast_query = mysqli_query($conn, $breakfast_sql) or die(mysqli_error($conn));


   
                                ?>

          <?php while($breakfast_row = mysqli_fetch_assoc($breakfast_query)): ?>
                      <div class="col-md-4">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="assets/images/food/breakfast/<?php echo $breakfast_row['picture']; ?>">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading">English Breakfast</h4>
                                  <span class="mu-menu-price"><?php echo $breakfast_row['price']; ?></span>
                                  <p><?php echo $breakfast_row['food_name']; ?></p>
                                </div>
                              </div>
                            </li>
                  
                          </ul>   
                        </div>
                      </div>                  
            <?php endwhile; ?>

                   </div>
                 </div>
                </div>

                <div class="tab-pane fade" id="meals">
                  <div class="mu-tab-content-area">
                    <div class="row">

                              <?php

                                $meals_sql = "SELECT * FROM meals_menu";

                                $meals_query = mysqli_query($conn, $meals_sql) or die(mysqli_error($conn));


   
                                ?>

      <?php while($meals_row = mysqli_fetch_assoc($meals_query)): ?>
                      <div class="col-md-4">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="assets/images/food/meals/<?php echo $meals_row['picture']; ?>">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading">English Meals</h4>
                                  <span class="mu-menu-price"><?php echo $meals_row['price']; ?></span>
                                  <p><?php echo $meals_row['food_name']; ?></p>
                                </div>
                              </div>
                            </li>
                  
                          </ul>   
                        </div>
                      </div>                  
      <?php endwhile; ?>

                    
                   </div>
                 </div>
                </div>

                <div class="tab-pane fade" id="snacks">
                  <div class="mu-tab-content-area">
                    <div class="row">

                      
                              <?php

                                $snacks_sql = "SELECT * FROM snacks_menu";

                                $snacks_query = mysqli_query($conn, $snacks_sql) or die(mysqli_error($conn));


   
                                ?>

      <?php while($snacks_row = mysqli_fetch_assoc($snacks_query)): ?>
                      <div class="col-md-4">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="assets/images/food/snacks/<?php echo $snacks_row['picture']; ?>">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading">English Snacks</h4>
                                  <span class="mu-menu-price"><?php echo $snacks_row['price']; ?></span>
                                  <p><?php echo $snacks_row['food_name']; ?></p>
                                </div>
                              </div>
                            </li>
                  
                          </ul>   
                        </div>
                      </div>                  
      <?php endwhile; ?>

                   </div>
                 </div>
                </div>

                <div class="tab-pane fade" id="drinks">
                  <div class="mu-tab-content-area">
                    <div class="row">

                          <?php

                                $drinks_sql = "SELECT * FROM drinks_menu";

                                $drinks_query = mysqli_query($conn, $drinks_sql) or die(mysqli_error($conn));


   
                                ?>

      <?php while($drinks_row = mysqli_fetch_assoc($drinks_query)): ?>
                      <div class="col-md-4">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="assets/images/food/drinks/<?php echo $drinks_row['picture']; ?>">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading">English Drinks</h4>
                                  <span class="mu-menu-price"><?php echo $drinks_row['price']; ?></span>
                                  <p><?php echo $drinks_row['food_name']; ?></p>
                                </div>
                              </div>
                            </li>
                  
                          </ul>   
                        </div>
                      </div>                  
      <?php endwhile; ?>

                   </div>
                 </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Restaurant Menu -->


  <?php include('footer.php'); ?> 