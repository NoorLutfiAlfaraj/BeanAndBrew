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
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="admin-page">
    <nav class="simple-navbar">
    <div class="nav-logo">Bean & Brew</div>
    <?php
if(isset($_SESSION['customer'])){
    echo "<div style='color:white; font-weight:bold;'>
    Welcome, " . $_SESSION['customer'] . " ☕
    </div>";
}
?>
    <div class="nav-menu">
        <a href="index.php">Home</a>
        <a href="products.php">Products</a>
        <a href="contact.php">Contact</a>
    </div>
    
   
    

</nav>

<div class="container">
    <h1>Welcome, <?php echo $_SESSION['admin']; ?></h1>

    <div class="actions">
        <a href="add_product.php"><input type="button" value="Add Product" class="UpdateButton"></a>
        <a href="edit_product.php"><input type="button" value="Modify Product" class="UpdateButton"></a>
        <a href="search_product.php"><input type="button" value="Search Product" class="UpdateButton"></a>
        <a href="delete_product.php"><input type="button" value="Delete Product" class="DeleteButton"></a>
        <a href="logout.php"><input type="button" value="Logout" class="ClearButton"></a>
    </div>
</div>

</body>
</html>