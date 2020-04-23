<?php

$dsn = 'localhost:3306';
$user = 'root';
$password = '';
$dbname = "dbsystems";

// Create connection
$conn = new mysqli($dsn, $user, $password, $dbname);


$name = $_POST['full_name'];
$address = $_POST['address'];
$cardNo = $_POST['cardNumber'];
$cvv = $_POST['cvv'];
$exprMonth = $_POST['month'];
$exprYear = $_POST['year'];
$expr = $exprMonth." ".$exprYear;
$item = 0;
$itemName = "";
$hash = $_POST['dCode'];

$query = "SELECT * FROM Items WHERE InCart = 1";
$result = $conn->query($query);


while($row = $result->fetch_assoc()){
    $item = (int)$row['ItemID'];
    $itemName = $row['ItemName']; 
}

echo $hash;
$query = "UPDATE Orders SET ItemID=$item,
          FullName='$name', Address='$address',
          CardNo='$cardNo',  Exp='$expr',
          CVV='$cvv' 
          WHERE DiscountCode='$hash';";

$result = $conn->query($query);

header("Location: /shopping.php");

