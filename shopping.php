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
      <a href="shopping.html"> Shop </a>
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
      <form action="php/addToCart.php" method="POST">
        <p class="info"> <?php echo $row[1]; ?> : $<?php echo $row[3];?> </p>
        <input type="hidden" name="item" value="<?php echo $row[0] ?>"/>
        <input type="submit" class="cartButton" value="Add to Cart"/>
        <p>---------------------</p>
      </form>
</div>
      <?php }
      } ?>

</body>










</html>
