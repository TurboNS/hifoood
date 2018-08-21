<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">

  <!-- Site title
   ================================================== -->
  <title>HiFood</title>

  <!-- Bootstrap CSS
   ================================================== -->
  <link rel="stylesheet" href="css/newbootstrap.min.css">

  <!-- Animate CSS
   ================================================== -->
  <link rel="stylesheet" href="css/animate.min.css">

  <!-- Font Icons CSS
   ================================================== -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/ionicons.min.css">

  <!-- Main CSS
   ================================================== -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Google web font 
   ================================================== --> 
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
</head>
<body>
<?php include'connector.php';?>
    



<section id="header" class="header-one">
 
<div class="container">

     <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
          <div class="header-thumb">
              <h1 class="wow fadeInUp" data-wow-delay="1.6s">HiFood</h1>
              <p class="wow fadeInUp" data-wow-delay="1.6s">Admin Registeration</p>



<center>
<form method ='post'>
<?php

if(isset($_POST['register'])){
  $adminName= $_POST['adminName'];
  $adminUsername= $_POST['adminUsername'];
  $adminPassword= ($_POST['adminPassword']);
  
  
  if(empty($adminUsername) or empty($adminPassword)){
    $message = "please fill the informations";
      }else{
        $conn = mysqli_connect($host, $user, $pass, $db);
        $query = "INSERT INTO adminusers(id,adminName,adminUsername,adminPassword) VALUES ('','$adminName', '$adminUsername','$adminPassword')";
      
    mysqli_query($conn,$query); 
    $message="Registered";
  }
  echo "<p>$message</p>";
  header('location: adminindex.php');
  ob_end_flush();
  }
  
?>
<p class="lead">Full Name: <input type='text' name='adminName' placeholder="Restaurant name"></p>
<p class="lead">Username: <input type='text' name='adminUsername' placeholder="Your Email"></p>
<p class="lead">Password: <input type='password' name='adminPassword' placeholder="Set your password"></p>
<button type="submit" name="register" value="Register" class="btn btn-danger">REGISTER</button>

</form>
</center>

</div>
</div>
</div>
</section>

  <footer>
  <div class="container">
    <div class="row">

      <div class="col-md-12 col-sm-12">
        <p class="wow fadeInUp"  data-wow-delay="0.3s">Copyright © 2018 HiFood</p>
      <ul class="social-icon wow fadeInUp"  data-wow-delay="0.6s">
          <li><a href="http://www.facebook.com/" class="fa fa-facebook"></a></li>
          <li><a href="http://www.twitter.com/" class="fa fa-twitter"></a></li>
          <li><a href="http://www.instagram.com/" class="fa fa-instagram"></a></li>
          <li><a href="https://plus.google.com/" class="fa fa-google-plus"></a></li>
        
        </ul>
      </div>
      
    </div>
  </div>
  </footer>


<!-- Javascript 
================================================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>