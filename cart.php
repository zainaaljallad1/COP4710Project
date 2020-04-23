<?php include_once "php/connect.php" ?>

<!DOCTYPE html>
<html>

<head>
    <title> Office Supply Store </title>
    <link rel="stylesheet" href="css/design-cart.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2&display=swap" rel="stylesheet">
</head>

<body>
  <h1 class="title"> Office Supplies </h1>

  <div class="menu">
    <div>
    <a href="shopping.php"> Shop </a>
    </div>

    <div>
    <a href="discount.html"> Check Discount Status </a>
    </div>

  
  </div>

  <?php $itemId=substr($_SERVER['QUERY_STRING'], 3);?>
  <p><?php echo $itemId;?></p>
  <?php $query = "SELECT * FROM Items WHERE ItemID=$itemId;";

    if($result = mysqli_query($conn, $query)){

    while($row = mysqli_fetch_row($result)){
  ?>

# row[1]=>name row[4]=>category
<div class = "divider"></div>
    <div class="shopping-cart">
      <!-- Product #1 -->
      <div class="item">
        <p name="itemName"> <?php echo $row[1];?> </p>
        <p name="description"> <?php echo $row[4];?> </p>


        <div class="description">
          <span>Paper</span>
        </div>

        <input type="text" id="quantity" value="1">



        <div name="total-price" class="total-price" id="totalCost" value=<php echo $row[3];?>></div>
      </div>

      <form name = "form1" style="margin-left:50px;">
        <ul>
          <label for="name" class="discount_title" style="font-size:20px;margin-left:12%;" >
             Enter Discount Code:</label>
          <input type="text"  name="user_name">
          <button class="submit"><a style="color:black;"> Submit</a></button>
        </ul>
        <div style="margin-left:43%; margin-top: -10px;
              font-family:'Baloo Thambi 2', cursive;">
              OR </div>


      <button  class="discount" onclick="newDiscount()"> <a style="color:black;"> Request Discount</a> </button>
      <div>
        <button id="myButton"> <a style="color:black;" href="checking.html"> Check Out</a></button>
      </div>
          </form>
      </div>

    <script type="text/javascript" src="js/cart-js.js"></script>
</body>
</html>
