<!DOCTYPE html>
<html>

<head>
    <title> Office Supply Store </title>
    <link rel="stylesheet" href="css/design-cart.css" type="text/css">
    <link rel="stylesheet" href="css/design-checking.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2&display=swap" rel="stylesheet">
</head>

<body>
  <h1 class="title"> Admin Office </h1>

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

      <div  class="title1"> Add an item </div>

<form id="msform" action="php/addItem.php" method="POST">
      <div class="subtit"> <label for= "name"> Name of Item: </label> </div>
      <input type="text"  name="item_name">

      <div > <label for= "name"> Item Price </label> </div>
      $<input type="text" name="price">

      <div > <label for= "name"> Discount % </label> </div>
      <input type="text" name="discount">

      <div class="form-group" id="expiration-date">
            <div> <label class="subtit">Category</label></div>

                <select name="category">
                    <option value="tech">Technology</option>
                    <option value="food">Food</option>
                    <option value="sports">Sports</option>
                    <option value="clothing">Clothing</option>
                </select>
                
            </div>
            
        <div> 
        <input type="submit" class="button1" value="additem"/>  </div> 
      </form>

  </div>

<script type="text/javascript" src="js/cart-js.js"></script>
</body>


</html>
