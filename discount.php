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
    <a href="discount.php"> Check Discount Status </a>
    </div>

  </div>

<div class = "divider"></div>
    <div class="shopping-cart">


      <form action="php/checkDiscount.php" method="POST" style="margin-left:90px;">
        <div class="discount_title">
          <label for= "name"> Enter Discount Code: </label> </div>
          <input type="text" name="dCode">
          <input type="submit" value="Submit"/>
          </form>
      </div>


</body>
</html>
