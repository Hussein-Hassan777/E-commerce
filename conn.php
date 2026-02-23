<?php
$host = "localhost";
$user = "hussein";
$pass = "0000";
$db = "ecommerce_db";
$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
