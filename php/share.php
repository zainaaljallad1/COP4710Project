<?php

$dsn = 'localhost:3306';
$user = 'root';
$password = '';
$dbname = "dbsystems";

// Create connection
$conn = new mysqli($dsn, $user, $password, $dbname);

$query = "SELECT * From Orders";
$result = $conn->query($query);
$discount = 0;
$dCode = "";
$hash = $_POST['hash'];


while($row = $result->fetch_assoc()){
    $discount = $row['DiscountP'];
    $dCode = $row['DiscountCode'];
}
echo $dCode;
echo "<br><br>";
if($discount < 50){
    
    $query = "UPDATE Orders SET DiscountP = DiscountP + 5 WHERE DiscountCode = '$dCode' ";
    $conn->query($query) or die(mysqli_error($conn));
}
header("Location: /checking.php?code=".$hash);
