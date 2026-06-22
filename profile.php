<?php

session_start();
include("config.php");

if(!isset($_SESSION['customer_id'])){
    header("Location: login.php");
    exit();
}

$customer_id = $_SESSION['customer_id'];

$sql = "SELECT * FROM customers
WHERE id='$customer_id'";

$result = mysqli_query($conn,$sql);

$user = mysqli_fetch_assoc($result);

$orders = mysqli_query($conn,"
SELECT * FROM orders
WHERE customer_id='$customer_id'
ORDER BY order_date DESC
");

?>

<!DOCTYPE html>
<html>

<head>

    <title>My Profile</title>

    <link rel="stylesheet" href="style.css">

    <link href="https://fonts.googleapis.com/css2?family=Young+Serif&display=swap" rel="stylesheet">

</head>

<body class="admin-page">

<nav class="simple-navbar">

    <div class="nav-logo">
        Bean & Brew
    </div>

    <div class="nav-menu">

        <a href="index.php">Home</a>

        <a href="products.php">Products</a>

        <a href="contact.php">Contact</a>

    </div>

</nav>


<div class="container"
style="
max-width:1000px;
margin:40px auto;
padding:40px;
">

    <h1 style="
    text-align:center;
    font-family:'Young Serif', serif;
    color:#3f4f2f;
    margin-bottom:40px;
    ">
        My Profile ☕
    </h1>


    <div style="
    background:#f5f5f5;
    padding:25px;
    border-radius:15px;
    margin-bottom:40px;
    ">

        <h2 style="color:#3f4f2f;">
            Account Information
        </h2>

        <br>

        <p>
            <strong>Full Name:</strong>
            <?php echo $user['full_name']; ?>
        </p>

        <br>

        <p>
            <strong>Email:</strong>
            <?php echo $user['email']; ?>
        </p>

    </div>


    


    <div style="
    background:#f5f5f5;
    padding:25px;
    border-radius:15px;
    ">

        <h2 style="
        color:#3f4f2f;
        margin-bottom:25px;
        ">
            My Orders
        </h2>

        <table>

            <tr>

                <th>Product</th>

                <th>Price</th>

                <th>Quantity</th>

                <th>Total</th>

                <th>Date</th>

            </tr>

            <?php
            while($row=mysqli_fetch_assoc($orders)){
            ?>

            <tr>

                <td>
                    <?php echo $row['product_name']; ?>
                </td>

                <td>
                    <?php echo $row['price']; ?> SAR
                </td>

                <td>
                    <?php echo $row['quantity']; ?>
                </td>

                <td>
                    <?php echo $row['total_price']; ?> SAR
                </td>

                <td>
                    <?php echo $row['order_date']; ?>
                </td>

            </tr>

            <?php } ?>

        </table>

    </div>

    <br><br>

    <a href="logout.php">

        <input
        type="button"
        value="Logout"
        class="DeleteButton">

    </a>

</div>

</body>
</html>