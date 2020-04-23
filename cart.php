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

<div class = "divider"></div>
    <div class="shopping-cart">
      <!-- Product #1 -->
      <div class="item">

        <div class="image">
          <img src="assets/paper.jpg"> </img>
        </div>

        <div class="description">
          <span>Paper</span>
        </div>

        <div>
          <button class="minus-btn" type="button" name="button" onclick="decrementValue()"
           value="Decrement Value">
            <img src="assets/minus.svg"> </img>
          </button>
        </div>

        <input type="text" id="quantity" value="1">


        <div>
            <button class="plus-btn" type="button" name="button" onclick="incrementValue()"
             value="Increment Value">
              <img src="assets/plus.svg"> </img>
          </button>
        </div>


        <div class="total-price" id="totalCost" value = "10"></div>
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
