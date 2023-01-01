<?php include('header.php'); ?> 


<?php include 'db_connect.php'; ?>

                                <?php

                                if(isset($_GET['delete'])){

                                    $id = $_GET['delete'];

                                    $sql = "DELETE FROM drinks_menu WHERE id='".$id."'";

                                    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                                }


                                $sql = "SELECT * FROM drinks_menu";

                                $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));


   
                                ?>

<!-- Start Gallery -->
  <section id="mu-gallery">
    <div class="container">

      <div class="row">
        <div class="col-md-12">
          <div class="mu-gallery-area">

            <div class="mu-title">
              <span class="mu-subtitle">Discover</span>
              <h2>Our Menu</h2>
              <div class="menu">
                <a href="menu.php" class="btn btn-lg btn-primary" style="background: none; color: orange">Breakfast</a>
                 <a href="meals.php" class="btn btn-lg btn-primary" style="background: none; color: orange">Meals</a>
                  <a href="snacks.php" class="btn btn-lg btn-primary" style="background: none; color: orange">Snacks</a>
                   <a href="drinks.php" class="btn btn-lg btn-primary" style="background: none; color: orange">Drinks</a>
              </div>
            </div>

            <div class="mu-gallery-content">
            
              <!-- Start gallery image -->
              <div class="mu-gallery-body">
                <!-- start single gallery image -->
  <?php while($staff_row = mysqli_fetch_assoc($query)): ?>
                <div class="mu-single-gallery col-md-4">
                    <div class="mu-single-gallery-item">
                      <figure class="mu-single-gallery-img">
                        <a class="mu-imglink" href="food-menu/drinks/<?php echo $staff_row['picture']; ?>">
                          <img alt="img" src="food-menu/drinks/<?php echo $staff_row['picture']; ?>">
                           <div class="mu-single-gallery-info">
                              <img class="mu-view-btn" src="assets/img/plus.png" alt="plus icon img">
                          </div> 
                        </a>
                      </figure> 
                      <div style="text-align: center;">
                        <h3><?php echo $staff_row['food_name']; ?></h3>
                        <h3><?php echo $staff_row['price']; ?></h3>
                      </div>  
                    </div>
                </div>
              <?php endwhile; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Gallery -->

  <?php include('footer.php'); ?> 