<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$dbname = "beanandbrew";
$port = 3307; 

$conn = mysqli_connect('localhost', 'root', '', 'beanandbrew', 3307);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>