<?php include('header.php'); ?> 

<?php include 'db_connect.php'; ?>

                               

<!-- Start Gallery -->
  <section id="mu-gallery">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-gallery-area">

            <div class="mu-title">
              <span class="mu-subtitle">Discover</span>
              <h2>Our Gallery</h2>
            </div>

            <div class="mu-gallery-content">
            
              <!-- Start gallery image -->
              <div class="mu-gallery-body">
                <!-- start single gallery image -->

                <?php
                    $sql = "SELECT * FROM gallery";
                    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                ?>
  <?php while($gallery_row = mysqli_fetch_assoc($query)): ?>
                <div class="mu-single-gallery col-md-4">
                    <div class="mu-single-gallery-item">
	                    <figure class="mu-single-gallery-img">
	                      <a class="mu-imglink" href="assets/images/gallery/<?php echo $gallery_row['picture']; ?>">
                          <img alt="img" src="assets/images/gallery/<?php echo $gallery_row['picture']; ?>">
                           <div class="mu-single-gallery-info">
                              <img class="mu-view-btn" src="assets/img/plus.png" alt="plus icon img">
                          </div> 
                        </a>
	                    </figure> 
                                
                  	</div>
                </div>
              <?php endwhile; ?>
                <!-- End single gallery image -->

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Gallery -->

  <?php include('footer.php'); ?> 