<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include('config.php'); 

if (isset($_POST['submit'])) {
    
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $stock = (int)$_POST['stock']; 

    $imageName = $_FILES['image']['name'];
    $imageTmpPath = $_FILES['image']['tmp_name'];
    $imageFolder = "images/" . $imageName;

    move_uploaded_file($imageTmpPath, $imageFolder);

    $sql = "INSERT INTO products (name, price, description, category, stock, image) 
            VALUES ('$name', '$price', '$description', '$category', '$stock', '$imageName')";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['message'] = "Product Added Successfully! 🎉";
    } else {
        $_SESSION['message'] = "Database Error: " . mysqli_error($conn);
    }

    header("Location: add_product.php");
    exit();
}
?>