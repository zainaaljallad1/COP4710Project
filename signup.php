<!DOCTYPE html>
<html>

<head>
    <title> Office Supply Store </title>
      <link rel="stylesheet" href="css/design.css" type="text/css">
      <link rel="stylesheet" href="css/design-signup.css" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Bitter&display=swap" rel="stylesheet">
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

    <div>
    <a href="login.php"> Login </a>
    </div>

    <div>
    <a href="signup.php"> Sign Up </a>
    </div>
  </div>

<div class = "divider"></div>

  <form id="msform" action="php/submit.php" method="POST">
    
    <h2 class="fs-title">Sign Up</h2>
    <input type="text" name="email" placeholder="Email" />
    <input type="password" name="pass" placeholder="Password" />
    <input type="password" name="cpass" placeholder="Confirm Password" />
    <input type="submit" name="submit" class="next action-button" value="Create Account"/>
    
  </form>



</body>









<script type="text/javascript" src="js/popup.js"></script>
</html>
