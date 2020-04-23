<?php

$dsn = 'localhost:3306';
$user = 'root';
$password = '';
$dbname = "dbsystems";

// Create connection
$conn = new mysqli($dsn, $user, $password, $dbname);

$item = $_POST['iid'];
$itemName = $_POST['iname'];

$hash = md5($itemName);

echo $itemName."<br>Discount Code: ".$hash;
$query="INSERT INTO Orders (DiscountCode, DiscountP) VALUES('$hash', 10) ON DUPLICATE KEY UPDATE DiscountCode = '$hash', DiscountP = 10";
$conn->query($query);

header("Location: /cart.php?code=$hash");



