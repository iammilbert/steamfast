<?php include('header.php'); ?>  


<?php
include('db_connect.php');

if (isset($_POST['contact'])) {
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

     

       $_SESSION['message'] = "Sent successfully!, Thank you"." ".$fullName.", We will contact you shortly";
        $_SESSION['msg_type'] = "success";

      }
  
  ?>

<!-- Start Contact section -->
  <section id="mu-contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-contact-area">

            <div class="mu-title">
              <span class="mu-subtitle">Get In Touch</span>
              <h2>Contact Us</h2>
            </div>

            <div class="mu-contact-content">
              <div class="row">

                <div class="col-md-6">
                  <div class="mu-contact-left">
                    <!-- Email message div -->
                    <div id="form-messages">
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
                    <!-- Start contact form -->
                    <form method="POST" class="mu-contact-form">
                      <div class="form-group">
                        <label>Your Name</label>
                        <input type="text" class="form-control" name="fullName" placeholder="Name" required="fullName">
                      </div>

                      <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" required="email">
                      </div>  

                      <div class="form-group">
                        <label>Subject</label>
                        <input type="text" class="form-control" name="subject" placeholder="Subject" required="subject">
                      </div>

                      <div class="form-group">
                        <label>Phone</label>
                        <input type="tel" class="form-control" name="phone" placeholder="Subject" required="subject">
                      </div>

                      <div class="form-group">
                        <label>Message</label>                        
                        <textarea class="form-control" name="message"  cols="30" rows="10" placeholder="Type Your Message"></textarea>
                      </div>  

                       <div class="form-group">
                        <input type="submit" name="contact" class="mu-send-btn" value="Send Message">
                      </div> 
                    </form>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="mu-contact-right">
                    <div class="mu-contact-widget">
                      <h3>Office Address</h3>

                      <?php
                        $sql="SELECT * FROM address";
                          $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                          $row = mysqli_fetch_assoc($query)
                      ?>

                      <address>
                        <p><i class="fa fa-phone"></i> <?php echo $row['tel']; ?></p>
                        <p><i class="fa fa-envelope-o"></i><?php echo $row['email']; ?></p>
                        <p><i class="fa fa-map-marker"></i><?php echo $row['office_Address']; ?></p>
                      </address>
                    </div>
                    <div class="mu-contact-widget">

                      <?php
                        $sql="SELECT * FROM opening_Hours";
                          $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                          $row1 = mysqli_fetch_assoc($query)
                      ?>

                      <h3>Opening and Clossing Hours</h3>                      
                      <address>
                        <p><span>Monday</span> <?php echo $row1['monday']; ?></p>
                        <p><span>Tuesday</span> <?php echo $row1['tuesday']; ?></p>
                        <p><span>Wednesday</span> <?php echo $row1['wednesday']; ?></p>
                        <p><span>Thursday</span> <?php echo $row1['thursday']; ?></p>
                        <p><span>Friday</span> <?php echo $row1['friday']; ?></p>
                        <p><span>Saturday</span> <?php echo $row1['saturday']; ?></p>
                        <p><span>Sunday</span> <?php echo $row1['sunday']; ?></p>
                      </address>
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
  <!-- End Contact section -->

  <?php include('footer.php'); ?>  