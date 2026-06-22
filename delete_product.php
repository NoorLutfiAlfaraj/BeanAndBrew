<?php
session_start();
include("config.php");

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

if (isset($_GET['id'])) {
    mysqli_query($conn, "DELETE FROM products WHERE id=".$_GET['id']);
    header("Location: delete_product.php");
    exit();
}

$result = mysqli_query($conn, "SELECT * FROM products");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="admin-page">

<div class="container">
    <h1>Delete Product</h1>

    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Action</th>
        </tr>

        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td>
                <a href="?id=<?php echo $row['id']; ?>">
                    <input type="button" value="Delete" class="DeleteButton">
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <div class="actions">
        <a href="dashboard.php"><input type="button" value="Back" class="ClearButton"></a>
    </div>
</div>

</body>
</html>