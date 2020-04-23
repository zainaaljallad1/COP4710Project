<?php
$dsn = 'localhost:3306';
$user = 'root';
$password = '';
$dbname = "dbsystems";

// Create connection
$conn = new mysqli($dsn, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$item = (int)$_POST['item'];

$query = "UPDATE Items SET InCart = 1 WHERE ItemID = $item";

$conn->query($query) or die(mysqli_error($conn));
$conn->close();

header("Location: ../shopping.php?added=success");
