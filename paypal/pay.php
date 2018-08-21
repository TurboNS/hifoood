<!DOCTYPE html>
<html lang="en">

     <head>
          <meta charset="UTF-8">
          <title> Pay for order</title>

          <link rel="stylesheet" href="css/app.css">
     </head>

     <body>
          <div class="payment-container">
              <h2 class="header"> Pay for your order</h2>


              <form action="checkout.php" method="post" autocomplete="off">
                   <label for="item">
                   Product
                   <input type="text" name="product">
                   </label>

                   <label for="amount">
                   Price
                   <input type="text" name="price">
                   </label>

                   <input type="submit" value="Pay">
              </form>
              <p> You will be take to PayPal to complete your payment</p>
          </div>
     </body>
</html>