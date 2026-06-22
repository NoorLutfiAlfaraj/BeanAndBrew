<?php
session_start();
include("config.php");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin
        WHERE username='$username'
        AND password='$password'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){

    $_SESSION['admin'] = $username;

    header("Location: dashboard.php");
    exit();

}
else{

    $_SESSION['login_error'] = "Wrong username or password!";

    header("Location: admin_login.php");
    exit();

}
?>