<?php

// Hostinger PHP details
$serverName = "localhost";
$dbUsername = "u339846197_root";
$dbPassword = "6i|QFfeZ]";
$dbName = "u339846197_userRegistra";

// Using MYSQLi as a database
$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
