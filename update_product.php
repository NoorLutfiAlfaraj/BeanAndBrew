<?php
session_start();
include("config.php");

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$category = $_POST['category'];
$stock = $_POST['stock'];

if (!empty($_FILES['image']['name'])) {
    $imageName = $_FILES['image']['name'];
    $tempName = $_FILES['image']['tmp_name'];

    $targetFolder = __DIR__ . "/uploads/";
    $targetPath = $targetFolder . $imageName;

    if (move_uploaded_file($tempName, $targetPath)) {
        $sql = "UPDATE products 
                SET name='$name', price='$price', description='$description', category='$category', stock='$stock', image='$imageName'
                WHERE id='$id'";
    } else {
        die("Image upload failed.");
    }
} else {
    $sql = "UPDATE products 
            SET name='$name', price='$price', description='$description', category='$category', stock='$stock'
            WHERE id='$id'";
}

if (mysqli_query($conn, $sql)) {

    header("Location: dashboard.php");
    exit();

} else {

    echo "Error: " . mysqli_error($conn);

}
?>