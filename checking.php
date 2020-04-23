<!DOCTYPE html>
<html>

<head>
    <title> Office Supply Store </title>
    <link rel="stylesheet" href="css/design-checking.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2&display=swap" rel="stylesheet">
</head>
<body>
  <h1 class="title"> Office Supplies </h1>
  <div class="menu">
    <div>
    <a href="shopping.php"> Shop </a>
    </div>
    <div>
    <a href="discount.php"> Check Discount Status </a>
    </div>
  </div>
<div class = "divider"></div>
<div class="shopping-cart">
      <div  class="title1"> Credit Card Information </div>



<form id="msform" action="php/purchase.php" method="POST">
      <div class="subtit"> <label for= "name"> Name on Credit Card: </label> </div>
      <input type="text"  name="full_name">
      <div> <label for= "name"> Address: </label> </div>
      <input type="text"  name="address">
      <div > <label for= "name"> Credit Card Number </label> </div>
      <input type="text" name="cardNumber">
      <div>  <label for= "name"> CVV</label>   </div>
      <input type="text" name="cvv">
      <div class="form-group" id="expiration-date">
            <div> <label class="subtit">Expiration Date</label></div>
                <select form="msform" name="month">
                    <option value="01">January</option>
                    <option value="02">February </option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                <select form="msform" name="year">
                    <option value="16"> 2020</option>
                    <option value="17"> 2021</option>
                    <option value="18"> 2022</option>
                    <option value="19"> 2023</option>
                    <option value="20"> 2024</option>
                    <option value="21"> 2025</option>
                </select>
            </div>
        <div> <input type="submit" class="button1" value="Purchase"/>  </div>

        
        <ul>
          <?php 
            $dsn = 'localhost:3306';
            $user = 'root';
            $password = '';
            $dbname = "dbsystems";
            
            // Create connection
            $conn = new mysqli($dsn, $user, $password, $dbname);

            $query="SELECT * FROM Orders";
            $result = $conn->query($query);
            $discount = 0;

            while($row = $result->fetch_assoc()){
            $discount = $row['DiscountP'];

            if($row['DiscountCode'] == $_GET['code']){

            
          ?>
            <li>Discount Code: <?php echo $row['DiscountCode'];?></li>
            <input type="hidden" name="dCode" value="<?php echo $row['DiscountCode'];?>"/>

            <?php }} ?>
        </ul>
            <?php
            $query="SELECT * FROM Items WHERE InCart = 1";
            $result = $conn->query($query);

            $totalPrice = 0;

            while($row = $result->fetch_assoc()){
              $totalPrice = $totalPrice + $row['ItemPrice'];
            }
            ?>
            <p>Discount %: <?php echo $discount; ?> </p>
            <p>Total Price: $<?php echo $totalPrice - ($totalPrice * $discount/100);?></p>
      </form>

      <form action="php/share.php" method="POST">
              <input name="hash" type="hidden" value="<?php echo $_GET['code']?>"/>
              <input type="submit" value="Share Code"/>
      </form>
  </div>
<script type="text/javascript" src="js/cart-js.js"></script>
</body>
</html>