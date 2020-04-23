<?php
include_once "connect.php";

$itemName = $_POST['item_name'];
$itemPrice = $_POST['price'];
$discount = $_POST['discount'];
$category = $_POST['category'];

$query = "INSERT INTO Items (ItemName, ItemPrice, Discount, Category)
          VALUES('$itemName', '$itemPrice', '$discount', '$category');";

$res = mysqli_query($conn, $query);

header("Location: ../admin.php?itemAdded=success");