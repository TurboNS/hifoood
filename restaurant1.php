<?php
//ob_start();

  session_start();
  if(!isset($_SESSION["sess_user"])){
          header("location:index.php");
          ob_end_flush();
  } else {


?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>HiFood Top List</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="/w3css/3/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>
* {
    box-sizing: border-box;
}

body {
    background-color: #f1f1f1;
    padding: 20px;
    font-family: Arial;
}

/* Center website */
.main {
    max-width: 1000px;
    margin: auto;
}

h1 {
    font-size: 50px;
    word-break: break-all;
}

.row {
    margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
    padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
}

/* Clear floats after rows */ 
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Content */
.content {
    background-color: white;
    padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
    .column {
        width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column {
        width: 100%;
    }
}
</style>

</head>
 



<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="toplist.php">HiFood</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
      <li><a href="toplist.php">Toplist</a></li>
      <li><a href="prepare.php">Prepare Me</a></li>
      <li><a href="direction.php">Direction</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      <li><a href="admin.php">Admin</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
  </div>
</nav>
  


<!-- Slide Show -->
<section>
  <img class="mySlides" src="image/sample1.png" style="width:100%">
  <img class="mySlides" src="image/sample2.png" style="width:100%">
</section>  

  
  <div class="container">
  <h1>Sample Restaurant</h1>
  <p> Welcome to Sample - the home of authentic Thai cuisine and world-class cocktails in the heart of Dublin city.
  <br> We pride ourselves in the quality of our food and the range and inventiveness of our extensive drinks menu.
  <br> But most of all, we delight in providing top-class customer service in a friendly and relaxed atmosphere.
  <br> So come for a great meal.
  <br> Or a meal and drinks.
  <br> Or just drinks in the bar.
  <br> If you want, you can enjoy a complete night out under one roof.
  <br> Have a drink at the bar, enjoy dinner in the restaurant, and come back out to the lounge afterwards for a relaxing digestif.
  <br> Enjoy a friendly chat with our resident cocktail expert.
  <br> We will gladly pass on practical advice and tips from their vast specialist knowledge of what makes a truly great cocktail.
  <br> Quality service, quality cocktails and Thai quality food in the centre of Dublin. </p>
  <br>


<h2>Our recommend dishs</h2>  
<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content">
      <img src="image/sample3.jpg" alt="Mountains" style="width:100%">
      <h3>Tom Yum Goong</h3>
      <p>Indeed, tom yum is characterised by its distinct hot and sour flavours, with fragrant spices and herbs generously used in the broth. The basic broth is made of stock and fresh ingredients such as lemongrass, kaffir lime leaves, galangal, lime juice, fish sauce, and crushed chili peppers.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="image/sample4.jpg" alt="Lights" style="width:100%">
      <h3>Phad Thai noodles</h3>
      <p>Main ingredients. Dried rice noodles, eggs, tofu, tamarind pulp, fish sauce, dried or fresh shrimp, garlic or shallots, red chili pepper, palm sugar, lime, peanuts.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="image/sample5.jpg" alt="Nature" style="width:100%">
      <h3>Green Curry</h3>
      <p>The consistency of its sauce varies with the amount of coconut milk used. Green curry paste is traditionally made by pounding in a mortar green chillies, shallots, garlic, galangal, lemongrass, kaffir lime peel, cilantro roots (coriander), and cumin seeds, white peppercorns, shrimp paste and salt.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="image/sample6.jpg" alt="Mountains" style="width:100%">
      <h3>Massaman Curry</h3>
      <p>This paste is first fried with coconut cream, and only then are meat, potatoes, onions, fish sauce or salt, tamarind paste, sugar, coconut milk and peanuts added. Massaman is usually eaten with rice, in a meal together with other dishes.</p>
    </div>
  </div>
<!-- END GRID -->
</div>



  <a href="order.php" class="btn btn-success" role="button">ORDER</a>
  <a href="booking.php" class="btn btn-success" role="button">BOOK TABLE</a>
  </div>



<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000);
}
</script>

  	   
	
  <!--footer-->
  <footer>
     <div class="container"> 
     <hr>
 
     <div class="row">
     <div class="col-lg-12">
        <p>Copyright 2018 &copy; Hifood ltd </p>
     </div>
     </div>
  </footer>
  
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

  <?php
  }
  ?>