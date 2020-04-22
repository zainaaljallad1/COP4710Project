<?php

include_once 'connect.php';

$email = $_POST['email'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];

$query = "INSERT INTO users (email, pass)
VALUES ('$email', '$pass');";  
$result = mysqli_query($conn, $query);

header("Location: ../signup.php?signup=success");





