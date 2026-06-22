<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}

$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html>

<head>

    <title>Bean & Brew</title>

    <link rel="stylesheet" href="style.css">

    <link href="https://fonts.googleapis.com/css2?family=Young+Serif&display=swap" rel="stylesheet">

</head>

<body>

<header class="navbar"
style="
background:#556b2f;
padding:28px 48px;
display:flex;
justify-content:space-between;
align-items:center;
box-sizing:border-box;
">

    <div class="logo"
    style="
    color:white;
    font-size:26px;
    font-family:'Young Serif', serif;
    ">
        Bean & Brew
    </div>

    <ul class="nav-links"
    style="
    display:flex;
    gap:30px;
    list-style:none;
    align-items:center;
    margin:0;
    padding:0;
    ">

        <?php
        
        if(isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true){
            echo '<li><a href="dashboard.php">Dashboard</a></li>';
            echo '<li><a href="add_product.php">Add Product</a></li>';
            echo '<li><a href="logout.php">Logout</a></li>';
        }
        
        elseif(isset($_SESSION['customer'])){
            echo '<li><a href="profile.php">Profile</a></li>';
            echo '<li><a href="index.php">Home</a></li>';
            echo '<li><a href="products.php">Products</a></li>';
            echo '<li><a href="contact.php">Contact Us</a></li>';
            echo '<li><a href="ShowCart.php">🛒</a></li>';
            echo '<li><a href="logout.php">Logout</a></li>';
        }
        else{
            if($currentPage != "login.php"){
                echo '<li><a href="login.php">Login</a></li>';
            }
            echo '<li><a href="index.php">Home</a></li>';
            echo '<li><a href="products.php">Products</a></li>';
            echo '<li><a href="contact.php">Contact Us</a></li>';
            echo '<li><a href="ShowCart.php">🛒</a></li>';
        }
        ?>

    </ul>

<style>

.nav-links a{

    text-decoration:none;
    color:white;
    font-family:'Young Serif', serif;
    font-size:18px;
    font-weight:600;

}

.nav-links a:hover{

    opacity:0.85;

}

</style>

</header>
<button id="helpBtn" class="help-btn">Help</button>

<div id="helpModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>

        <h2>Need Assistance? ☕</h2>

        <p>We are here to help you use Bean & Brew.</p>

        <h4>How to Order</h4>
        <p>Go to Products, choose an item, view details, select quantity, then add it to cart.</p>

        <h4>Cart Help</h4>
        <p>You can update quantity, delete items, clear the cart, or purchase products.</p>

        <h4>Contact Us</h4>
        <p>
            WhatsApp: +966 50 000 0000<br>
            Email: info@beanandbrew.com
        </p>
    </div>
</div>