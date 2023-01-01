
<?php include('db_connect.php');?>
<?php 
 
  $query=mysqli_query($conn, "update reservation set status='".$_POST['val']."' where id='".$_POST['id']."' ");

            if ($query) 
            {
                $q=mysqli_query($conn, "select * from reservation where id='".$_POST['id']."'");
                $data=mysqli_fetch_assoc($query);
                echo $data['status'];
                
            }
?>