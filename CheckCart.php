<?php
session_start();

include("config.php");

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if (isset($_POST['product_id'])) {

    $id = $_POST['product_id'];
    $quantity = (int)$_POST['quantity'];

    if ($quantity < 1) {
        $quantity = 1;
    }

    $sql = "SELECT * FROM products WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $productData = mysqli_fetch_assoc($result);

    if ($productData) {

        $imageName = $productData['image'];

        if (file_exists("images/" . $imageName)) {
            $imagePath = "images/" . $imageName;
        } 
        else if (file_exists("uploads/" . $imageName)) {
            $imagePath = "uploads/" . $imageName;
        } 
        else {
            $imagePath = "images/" . $imageName;
        }

        if (isset($_SESSION['cart'][$id])) {

            $_SESSION['cart'][$id]['quantity'] += $quantity;
            $_SESSION['cart'][$id]['product'] = $productData['name'];
            $_SESSION['cart'][$id]['price'] = $productData['price'];
            $_SESSION['cart'][$id]['image'] = $imagePath;

        } else {

            $_SESSION['cart'][$id] = array(
                'product' => $productData['name'],
                'price' => $productData['price'],
                'quantity' => $quantity,
                'image' => $imagePath
            );

        }
    }
}

header("Location: ShowCart.php");
exit();
?>
