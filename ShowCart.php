<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include("config.php");

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

$message = "";

if (isset($_POST['deleteID'])) {
    unset($_SESSION['cart'][$_POST['deleteID']]);
    $message = "Item Deleted";
}

if (isset($_POST['updateID'])) {
    $id = $_POST['updateID'];
    $newQuantity = (int)$_POST['quantity'];

    $checkStockSql = "SELECT name, stock FROM products WHERE id = '$id'";
    $stockResult = mysqli_query($conn, $checkStockSql);
    
    if ($stockRow = mysqli_fetch_assoc($stockResult)) {
        if ($newQuantity > $stockRow['stock']) {
            $message = "Out of stock! Only " . $stockRow['stock'] . " items available for '" . $stockRow['name'] . "'.";
        } else {
            $_SESSION['cart'][$id]['quantity'] = $newQuantity;
            $message = "Quantity Updated Successfully! 🎉";
        }
    }
}

if (isset($_POST['deleteALL'])) {
    $_SESSION['cart'] = array();
    $message = "Cart Cleared";
}

if (isset($_POST['purchase'])) {

    if (!isset($_SESSION['customer_id'])) {
        header("Location: login.php");
        exit();
    }

    $customer_id = $_SESSION['customer_id'];

    foreach ($_SESSION['cart'] as $id => $item) {
        $checkStockSql = "SELECT name, stock FROM products WHERE id = '$id'";
        $stockResult = mysqli_query($conn, $checkStockSql);
        if ($stockRow = mysqli_fetch_assoc($stockResult)) {
            if ($item['quantity'] > $stockRow['stock']) {
                $message = "Sorry! Only " . $stockRow['stock'] . " items left in stock for '" . $stockRow['name'] . "'.";
                break; 
            }
        }
    }

    if ($message == "") {
        $purchasedItems = array(); 

        foreach ($_SESSION['cart'] as $id => $item) {
            $product_name = $item['product'];
            $price = $item['price'];
            $quantity = $item['quantity'];
            $total_price = $price * $quantity;

            $sql = "INSERT INTO orders 
                    (customer_id, product_name, price, quantity, total_price, order_date)
                    VALUES 
                    ('$customer_id', '$product_name', '$price', '$quantity', '$total_price', NOW())";

            if (!mysqli_query($conn, $sql)) {
                die("Order insert error: " . mysqli_error($conn));
            }

            $updateStock = "UPDATE products 
                            SET stock = stock - $quantity 
                            WHERE id = '$id'";

            if (!mysqli_query($conn, $updateStock)) {
                die("Stock update error: " . mysqli_error($conn));
            }

            $purchasedItems[] = [
                'product' => $product_name,
                'price' => $price,
                'quantity' => $quantity,
                'total_price' => $total_price
            ];
        }

        $_SESSION['last_purchase'] = $purchasedItems;

        $_SESSION['cart'] = array();

        header("Location: invoice.php");
        exit();
    }
}
?>

<?php include("header.php"); ?>

<div class="container">

    <h1>My Cart</h1>

    <?php
    if ($message != "") {
        $styleClass = (strpos($message, 'stock') !== false || strpos($message, 'Sorry') !== false) ? "style='color:#8b3a3a; text-align:center; font-weight:bold; margin-bottom:20px; font-size:18px;'" : "class='message'";
        echo "<p $styleClass>$message</p>";
    }

    if (empty($_SESSION['cart'])) {

        echo "<p class='empty'>Cart Empty</p>";

    } else {

        $grandTotal = 0;

        echo "<table>";

        echo "<tr>
                <th>Image</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Options</th>
              </tr>";

        foreach ($_SESSION['cart'] as $id => $item) {

            $total = $item['price'] * $item['quantity'];
            $grandTotal += $total;

            echo "<tr>";

            echo "<td>
                    <img src='images/".$item['image']."' style='width:80px; height:80px; object-fit:cover; border-radius:10px;'>
                  </td>";

            echo "<td>".$item['product']."</td>";

            echo "<td>".$item['price']." SAR</td>";

            echo "<td>
                    <form method='post'>
                        <input type='hidden' name='updateID' value='$id'>
                        <input type='number' name='quantity' value='".$item['quantity']."' min='1'>
                        <input type='submit' value='Update' class='UpdateButton'>
                    </form>
                  </td>";

            echo "<td>".$total." SAR</td>";

            echo "<td>
                    <form method='post'>
                        <input type='hidden' name='deleteID' value='$id'>
                        <input type='submit' value='Delete' class='DeleteButton'>
                    </form>
                  </td>";

            echo "</tr>";
        }

        echo "</table>";

        echo "<h2 style='margin-top:20px;'>Grand Total: ".$grandTotal." SAR</h2>";
        ?>

        <div class="actions">
            <form method="post">
                <input type="submit" name="deleteALL" value="Clear Cart" class="ClearButton">
            </form>

            <?php if (isset($_SESSION['customer_id'])): ?>
                <form method="post">
                    <input type="submit" name="purchase" value="Purchase" class="BuyButton">
                </form>
            <?php else: ?>
                <a href="login.php" class="BuyButton" style="text-align:center; text-decoration:none; display:inline-block; line-height:2.5; background-color:#d9534f !important;">Login to Purchase 🔒</a>
            <?php endif; ?>
        </div>

    <?php
    }
    ?>

</div>

<script src="script.js"></script>

</body>
</html>