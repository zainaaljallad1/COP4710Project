<?php include_once "php/connect.php" ?>

<!DOCTYPE html>
<html>

<head>
    <title> Office Supply Store </title>
    <!-- <script type="text/javascript" src="js/cart-js.js"></script> -->
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
    <a href="discount.php"> Check Discount Status </a>
    </div>

  
  </div>

  <?php $query = "SELECT * FROM Items WHERE InCart = 1;";

    if($result = $conn->query($query)){

    while($row = $result->fetch_assoc()){
      $name = $row['ItemName'];
      $id = $row['ItemID'];
  ?>

<!-- row[1]=>name row[4]=>category -->
<div class = "divider"></div>
    <div class="shopping-cart">
      <!-- Product #1 -->
      <div class="item">
        <form action="php/removeCart.php" method="POST">
          <input name="item" type="hidden" value="<?php echo $row['ItemID'];?>"/>
          <p name="itemName"> <?php echo "1x ".$row['ItemName']." : $".$row['ItemPrice'];?> </p>
          <input type="submit" value="X"/>
        </form>
      </div>
      <?php }
      } 
      ?>
      <form name = "form1" style="margin-left:50px;">
        <ul>
          <label for="name" class="discount_title" style="font-size:20px;margin-left:12%;" >
             Enter Discount Code:</label>
          <input type="text"  name="dCode">
          <Input type="submit"class="submit" value="Submit"/>
          

        </ul>
          </form>
          <?php 
            $code = $_GET['code'];
            if(isset($code)){
              echo "<p>Discount Code: $code</p>";
            }

            
          $query = "SELECT * FROM Items WHERE InCart = 1;";
          if($result = $conn->query($query)){

          while($row = $result->fetch_assoc()){
          ?>

          <form action="php/makeOrder.php" method="POST">
            <input name="iname" type="hidden" value="<?php echo $row['ItemName'];?>"/>
            <input class="submit" type="submit" value="Request Discount Code"/>
          </form>
          
          <?php }}?>
          <div>
        <button id="myButton"> <a style="color:black;" href="./checking.php?code=<?php echo $_GET['code']?>"> Check Out</a></button>
      </div>
      </div>
      
    

</body>
</html>
