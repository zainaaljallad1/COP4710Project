<!DOCTYPE html>
<html>

<head>
    <title> Office Supply Store </title>
    <link rel="stylesheet" href="css/design-cart.css" type="text/css">
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
    <a href="discount.html"> Check Discount Status </a>
    </div>


  </div>

<div class = "divider"></div>

<div class="shopping-cart">



      <div  class="title1"> Credit Card Information </div>
<form id="msform" action="php/submit.php" method="POST">
      <div class="subtit"> <label for= "name"> Name on Credit Card: </label> </div>
      <input type="text"  name="full_name">

      <div > <label for= "name"> Credit Card Number </label> </div>
      <input type="text" id="cardNumber">

      <div>  <label for= "name"> CVV</label>   </div>
      <input type="text" id="cvv">

      <div class="form-group" id="expiration-date">
            <div> <label class="subtit">Expiration Date</label></div>
                <select>
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
                <select>
                    <option value="16"> 2020</option>
                    <option value="17"> 2021</option>
                    <option value="18"> 2022</option>
                    <option value="19"> 2023</option>
                    <option value="20"> 2024</option>
                    <option value="21"> 2025</option>
                </select>
            </div>
        <div> <input type="submit" class="button1" value="Submit"/>  </div>
      </form>

  </div>

<script type="text/javascript" src="js/cart-js.js"></script>
</body>


</html>
