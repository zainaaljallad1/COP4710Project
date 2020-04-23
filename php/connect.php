<?php

$serverName = "fdb25.awardspace.net";
$username = "3409623_dbsystems1";
$password = "d%{Ap9[N0d;^yI{o";
$dbName = "3409623_dbsystems1";
$port = "3306";

$conn = mysqli_connect($serverName, $username, $password, $dbName, $port);

if($conn){
    echo "CONNECTED";
}
else{
    echo "ERROR";
}
