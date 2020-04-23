<?php
/* Connect to an ODBC database using an alias */
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

?>

