<?php
$host = 'localhost';
$user = 'root';
$password = 'bhushu'; // update if your DB has a password
$database = 'vk_salon';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
[ec2-user@ip-172-31-32-192 vk-salon-chalisgaon]$ 
