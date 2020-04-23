<?php
include_once "connect.php";

$itemName = $_POST['item_name'];
$itemPrice = $_POST['price'];
$category = $_POST['category'];

$query = "INSERT INTO Items (ItemName, ItemPrice, Category)
          VALUES('$itemName', '$itemPrice', '$category');";

$res = mysqli_query($conn, $query);
$quit = mysqli_close($conn);

header("Location: ../admin.php?itemAdded=success");