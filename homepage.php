<?php 
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>homepage</title>
</head>
<body>
  <div style="text-align:centre; padding:15%;">
      <p style="font-size:50px; font-weight:bold;">
          hello   <?php 
          if(isset($_SESSION['email'])){
            $email=$_SESSION['email'];
            query=mysqli_query($conn, "SELECT user.* FROM `users` WHERE user.email='$email' ");
            while($row=mysqli_fetch_array($query)){
              echo $row['firstName'].''.$row['lastName'];
            }
          }
          ?>
          :)
      </p>
      <a href="logout.php">logout</a>
  </div>
</body>
</html>