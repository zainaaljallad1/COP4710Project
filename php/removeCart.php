<?php

$dsn = 'localhost:3306';
$user = 'root';
$password = '';
$dbname = "dbsystems";

// Create connection
$conn = new mysqli($dsn, $user, $password, $dbname);

$item = (int)$_POST['item'];
echo "$item";
$query = "UPDATE Items SET InCart = 0 WHERE ItemID = $item";

if($conn->query($query)){
    echo "SUCCESS";
}
else{
    echo "ERROR";
}
$conn->close();

Header("Location: /cart.php?removed=true");