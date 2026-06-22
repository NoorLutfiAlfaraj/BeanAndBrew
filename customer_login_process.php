<?php

session_start();
include("config.php");

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM customers
WHERE email='$email'
AND password='$password'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1){

    $row = mysqli_fetch_assoc($result);

    $_SESSION['customer_id'] = $row['id'];

    $_SESSION['customer'] = $row['full_name'];

    $_SESSION['customer_email'] = $row['email'];

    header("Location: index.php");
    exit();

}
else{

    echo "Invalid Email or Password";

}

?>