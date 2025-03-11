<?php
$host = "sql308.infinityfree.com"; // Check your InfinityFree MySQL Hostname
$user = "if0_38493441"; // Your InfinityFree username
$pass = "your_password"; // Your InfinityFree database password
$db = "if0_38493441_cafe_billing_db"; // Your InfinityFree database name

$conn = mysqli_connect($host, $user, $pass, $db);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}
?>
