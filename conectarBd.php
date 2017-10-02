<?php
$servername = "localhost";
$username = "root";
$password = "@mysql40!2104";
$dbname = "articulei";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";


?>