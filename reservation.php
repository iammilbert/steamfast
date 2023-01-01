<?php include('header.php'); 
  include('db_connect.php');
?> 


<?php
if (isset($_POST['reserve'])) {
      $fullName = $_POST['fullName'];
      $email = $_POST['email'];
      $mobile = $_POST['mobile'];
      $persons = $_POST['persons'];
      $date = $_POST['date'];
      $time = $_POST['time'];
      $message = $_POST['message'];
      $status = $_POST['status'];

      $sql = "INSERT INTO reservation(fullName, email, mobile, persons, date, time, message, status) VALUES('".$fullName."', '".$email."', '".$mobile."', '".$persons."', '".$date."', '".$time."', '".$message."', '2')";

      $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

        if ($query) {
            $_SESSION['message'] = "Reservation Successful, we look forward to see you." ;
            $_SESSION['msg_type'] = "success";
        }else{
           $_SESSION['message'] = "Sorry! reservation not submitted, something went wrong" ;
          $_SESSION['msg_type'] = "danger";
        }
            
      }
  
  ?>


<!-- Start Reservation section -->
  <section id="mu-reservation">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-reservation-area">

            <div class="mu-title">
              <span class="mu-subtitle">Make A</span>
              <h2>Reservation</h2>
            </div>

            <div class="mu-reservation-content">
              <p style="font-size: 20px">Please kindly use the form below to make your reservation and ensure to use a valid phone number for further verification on the day of visit. Thank you.</p>

              <?php
               if (isset($_SESSION['message'])): ?> 
                <div style="font-size: 20px;" class="aler alert-<?=$_SESSION['msg_type']?>" >

            <?php 
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            ?>
             <a href="index.php" style="color: blue">Home</a>
                </div>
                
            <?php endif ?>

              <div class="col-md-6">
                <div class="mu-reservation-left">
                  <form class="mu-reservation-form" method="POST">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">                       
                          <input type="text" class="form-control" placeholder="Full Name" name="fullName" required="fullName">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">                        
                          <input type="email" class="form-control" placeholder="Email" name="email" required="email">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">                        
                          <input type="tel" class="form-control" placeholder="Phone Number" name="mobile" required="mobile">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <select class="form-control" name="persons" required="persons">
                            <option selected disabled>How Many?</option>
                            <option value="1 Person">1 Person</option>
                            <option value="2 People">2 People</option>
                            <option value="3 People">3 People</option>
                            <option value="4 People">4 People</option>
                            <option value="5 People">5 People</option>
                            <option value="6 People">6 People</option>
                            <option value="7 People">7 People</option>
                            <option value="8 People">8 People</option>
                            <option value="9 People">9 People</option>
                            <option value="10 People">10 People</option>
                          </select>                      
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" class="form-control" id="datepicker" placeholder="Date" name="date" required="date">              
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="time e.g 7:30am" name="time" required="time">              
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <textarea class="form-control" cols="30" rows="10" placeholder="Your Message" name="message" required="message"></textarea>
                          <input type="hidden" name="status">
                        </div>
                      </div>
                      <button type="submit" class="mu-readmore-btn" name="reserve">Make Reservation</button>
                    </div>
                  </form>    
                </div>
              </div>

              <div class="col-md-5 col-md-offset-1">
                <div class="mu-reservation-right">
                  <div class="mu-opening-hour">
                    <h2>Opening Hours</h2>

                    <?php
                        $sql="SELECT * FROM opening_Hours";
                          $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                          $row1 = mysqli_fetch_assoc($query)
                      ?>

                      <ul class="list-unstyled">
                        <li>
                            <p>Monday &amp; Tuesday</p>
                            <p><?php echo $row1['monday']; ?></p>
                        </li>
                        <li>
                            <p>Wednesday &amp; Thursday</p>
                            <p><?php echo $row1['monday']; ?></p>
                        </li>
                        <li>
                            <p>Friday</p>
                            <p><?php echo $row1['monday']; ?></p>
                        </li>

                        <li>
                            <p>Saturday</p>
                            <p><?php echo $row1['saturday']; ?></p>
                        </li>

                        <li>
                            <p>Sunday</p>
                            <p><?php echo $row1['sunday']; ?></p>
                        </li>
                      </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  
  <!-- End Reservation section -->


  <?php include('footer.php'); ?> 