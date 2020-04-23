<?php
include_once "connection.php";

$item = (is_numeric($_POST['item']) ? (int)$_POST['item'] : 0);

$query = "UPDATE Items SET InCart = 1 WHERE (ItemID = $item)";
          
if (mysqli_query($conn, $query)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

$close = mysqli_close($conn);
//header("Location: ../shopping.php");
