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
  <title>HiFood Login</title>

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
    


<section id="header" class="header-one">
 
<div class="container">

     <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
          <div class="header-thumb">
              <h1 class="wow fadeIn" data-wow-delay="1.6s">HiFood Login</h1>
              <h3 class="wow fadeInUp" data-wow-delay="1.9s">Let HiFood help you find your favorite foods</h3>

<center>
<form action="index.php" method="POST">	
<p class="lead">Username: <input type="text" name="username" placeholder="Your username"></p>
<p class="lead">Password: <input type="password" name="password" placeholder="Your password"></p>
<button type="submit" name="submit" value="Login" class="btn btn-success">LOGIN</button> 
<a href="register.php" class="btn btn-danger" role="button">REGISTER</a>
<a href="adminindex.php" class="btn btn-info" role="button">ADMIN</a>
</form>
</center>

<?php
//if(isset($_POST["submit"]))	
if(!empty($_POST['username']) && !empty($_POST['password'])) {
        $username=$_POST['username'];
        $password=$_POST['password'];
		
 
        $con=mysqli_connect('localhost','id5834649_turbo','turbo', 'id5834649_database');
		if (!$con) {
			echo 'Can not connect to database';
			die("");
		}
 
        $query=mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND password='$password'");
		//flush($query);
        $numrows=mysqli_num_rows($query);
		echo $numrows;
        if($numrows!=0)
        {
        while($row=$query -> fetch_assoc())
        {
        $username=$row['username'];
        $password=$row['password'];
        }
 
        if($username == $username && $password == $password)
        {
        
        session_start();
        $_SESSION['sess_user']=$username;
        
        header("Location: toplist.php");
        ob_end_flush();
        }
        } else {
        echo "Invalid username or password!";
        }
 
} else {
        echo "";
}

?>

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

