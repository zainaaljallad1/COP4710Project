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

$itemName = $_POST['item_name'];
$itemPrice = $_POST['price'];
$category = $_POST['category'];


echo "Wilton would like this product!<br>";

//$query = "SELECT * FROM Orders WHERE Category = '$category'";
//$response = $conn->query($query) or die($conn->error);

// while($row = $response->fetch_assoc()){
//     echo $row['FullName']." would like this product!<br>"; 
// }

$query = "INSERT INTO Items (ItemName, ItemPrice, Category)
          VALUES('$itemName', '$itemPrice', '$category');";

$res = $conn->query($query);

echo "<a href='/shopping.php'>SHOP<a>";

//header("Location: ../admin.php?itemAdded=success");