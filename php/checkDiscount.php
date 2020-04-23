<?php 

$dsn = 'localhost:3306';
$user = 'root';
$password = '';
$dbname = "dbsystems";

// Create connection
$conn = new mysqli($dsn, $user, $password, $dbname);

echo "This code is for item: Football";
echo "<br>This code expires in 7 days";

// $code = $_POST['dCode'];

// $query = "SELECT * FROM Orders WHERE DiscountCode = '$code'";
// $result = $conn->query($query);
// $id = 0;

// while($rows = $result->fetch_assoc()){
//     $id = (int)$row['ItemID'];
// }

// $query = "SELECT * FROM Items WHERE ItemID = $id";
// $result = $conn->query($query);

// while($rows = $result->fetch_assoc()){
//     echo "The Item Associated with this code is: ".$rows['ItemName'];
// }
