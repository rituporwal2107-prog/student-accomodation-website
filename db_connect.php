<?php
$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "student_housing";
$port = 3307; // Aapka active MySQL Port

$conn = mysqli_connect($host, $user, $password, $database, $port);

if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}
?>