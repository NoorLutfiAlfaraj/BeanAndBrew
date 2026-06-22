<?php
session_start();
include("config.php");

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

$result = mysqli_query($conn, "SELECT * FROM products");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modify Product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="admin-page">

<div class="container">
    <h1>Modify Product</h1>

    <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <form action="update_product.php" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <label>Name</label>
            <input type="text" name="name" value="<?php echo $row['name']; ?>" required>

            <label>Price</label>
            <input type="number" name="price" value="<?php echo $row['price']; ?>" required>

            <label>Description</label>
            <textarea name="description"><?php echo $row['description']; ?></textarea>

            <label>Category</label>
            <input type="text" name="category" value="<?php echo $row['category']; ?>">

            <label>Stock</label>
            <input type="number" name="stock" value="<?php echo $row['stock']; ?>">

            <label>Image</label>
            <input type="file" name="image">

            <input type="submit" value="Update" class="UpdateButton">

        </form>
        <hr>
    <?php } ?>

    <div class="actions">
        <a href="dashboard.php"><input type="button" value="Back" class="ClearButton"></a>
    </div>
</div>

</body>
</html>