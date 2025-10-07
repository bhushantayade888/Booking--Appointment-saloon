<?php
$servername = "localhost";   // or your RDS endpoint if using AWS
$username = "root";          // change if needed
$password = "bhushu";        // your MySQL password
$dbname = "vk_salon";        // name of the DB you created

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
