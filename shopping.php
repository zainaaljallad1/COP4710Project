<?php include_once "php/connect.php" ?>

<!DOCTYPE html>
<html>

<head>
    <title> Office Supply Store </title>
    <link rel="stylesheet" href="css/design-shopping.css" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Bitter&display=swap" rel="stylesheet">
</head>

<body>

    <div class="menu">
      <a href="shopping.php"> Shop </a>
      <a href="cart.php"> Cart </a>
      <a href="admin.php"> Admin </a>
      <a href="discount.php"> Check Discount Status </a>
    </div>


  <h1 class="title"> Office Supplies </h1>
<div class = "divider"></div>

<?php $query = "SELECT * FROM Items;";

      $result = $conn->query($query);
      while($row = $result->fetch_assoc()){
?>


<div class="item-table">
      <form action="php/addToCart.php" method="POST">
        <p class="info"> <?php echo $row['ItemName']; ?> : $<?php echo $row['ItemPrice'];?> </p>
        <input name="item" value="<?php echo $row['ItemID']; ?>" type="hidden">
        <input type="submit" class="cartButton" value="Add to Cart"/> 
        <p>---------------------</p>
      </form>
</div>
      <?php } ?>

</body>










</html>
