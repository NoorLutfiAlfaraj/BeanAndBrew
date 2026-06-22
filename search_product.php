<?php
session_start();
include("config.php");

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

$search = "";

if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $sql = "SELECT * FROM products WHERE name LIKE '%$search%'";
} else {
    $sql = "SELECT * FROM products";
}

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="admin-page">

<div class="container">
    <h1>Search Product</h1>

    <form method="GET" class="search-bar">
        <input type="text" name="search" placeholder="Search..." value="<?php echo $search; ?>">
        <input type="submit" value="Search" class="UpdateButton small-btn">
    </form>

    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
        </tr>

        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['price']; ?></td>
        </tr>
        <?php } ?>
    </table>

    <div class="actions">
        <a href="dashboard.php"><input type="button" value="Back" class="ClearButton"></a>
    </div>
</div>

</body>
</html>