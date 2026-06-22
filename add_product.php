<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="admin-page">

<div class="container">
    <h1>Add Product</h1>

    <?php
    if (isset($_SESSION['message'])) {
        echo '<div class="message" style="text-align:center; color:#3f7a3f; font-weight:bold; margin-bottom:20px;">' . $_SESSION['message'] . '</div>';
        unset($_SESSION['message']);
    }
    ?>

    <form action="insert_product.php" method="POST" enctype="multipart/form-data" class="product-form">

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" required>
        </div>

        <div class="form-group">
            <label>Price</label>
            <input type="number" name="price" step="0.01" required>
        </div>

        <div class="form-group full-width">
            <label>Description</label>
            <textarea name="description" required></textarea>
        </div>

        <div class="form-group">
            <label>Category</label>
            <input type="text" name="category" required>
        </div>

        <div class="form-group">
            <label>Stock</label>
            <input type="number" name="stock" required>
        </div>

        <div class="form-group full-width">
            <label>Image</label>
            <input type="file" name="image" required>
        </div>

        <div class="form-buttons">
            <input type="submit" name="submit" value="Add Product" class="UpdateButton">
            <a href="dashboard.php"><input type="button" value="Back" class="ClearButton"></a>
        </div>

    </form>
</div>

</body>
</html>