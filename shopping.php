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

# row[0]=>id, row[1]=>name, row[3]=> price
<div class="item-table">
      <form action="cart.php?id=<?php echo row[0]; ?>" method="POST">
        <p class="info"> <?php echo $row[1]; ?> : $<?php echo $row[3];?> </p>
        <input value=<?php echo $row[0]; ?> id="itemId" type="hidden">
        <input type="submit" class="cartButton" value="Add to Cart"/> 
        <p>---------------------</p>
      </form>
</div>
      <?php }
      } ?>

</body>










</html>
