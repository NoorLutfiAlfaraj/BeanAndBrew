<?php
session_start();

if (isset($_SESSION['customer'])) {
    unset($_SESSION['customer']);
    header("Location: index.php");
    exit();
}

if (isset($_SESSION['admin'])) {
    unset($_SESSION['admin']);
    header("Location: admin_login.php");
    exit();
}

session_destroy();
header("Location: index.php");
exit();
?>