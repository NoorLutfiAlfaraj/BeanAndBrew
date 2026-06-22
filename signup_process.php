<?php

include("config.php");

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO customers(full_name,email,password)
VALUES('$full_name','$email','$password')";

if(mysqli_query($conn,$sql)){

    header("Location: login.php");

}
else{

    echo "Error: " . mysqli_error($conn);

}

?>