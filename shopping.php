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
      <a href="admin.php"> Admin </a>
      <a href="discount.html"> Check Discount Status </a>


    </div>


  <h1 class="title"> Office Supplies </h1>
<div class = "divider"></div>


<?php $query = "SELECT * FROM Items;";

      if($result = mysqli_query($conn, $query)){

      while($row = mysqli_fetch_row($result)){
?>

<div class="item-table">
      <ul>
      <p> <?php echo $row[1]; ?> - <?php echo $row[2]; ?> </p>
      <a class = "shoppingmenu" href ="cart.html" > Add to Cart </a>
      <p>---------------------</p>

      </ul>
</div>

      <?php }
      } ?>

</body>










</html>
