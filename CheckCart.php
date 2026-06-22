<?php
session_start();

include("config.php");

if (!isset($_SESSION['cart'])) {

    $_SESSION['cart'] = array();

}

if (isset($_POST['product_id'])) {

    $id = $_POST['product_id'];

    $quantity = $_POST['quantity'];

    $sql = "SELECT * FROM products WHERE id='$id'";

    $result = mysqli_query($conn, $sql);

    $productData = mysqli_fetch_assoc($result);

    if ($productData) {

        if (isset($_SESSION['cart'][$id])) {

            $_SESSION['cart'][$id]['quantity'] += $quantity;

        } 
        else {

            $_SESSION['cart'][$id] = array(

                'product' => $productData['name'],
                'price' => $productData['price'],
                'image' => $productData['image'],
                'quantity' => $quantity

            );

        }

    }

}

header("Location: ShowCart.php");

exit;
?>