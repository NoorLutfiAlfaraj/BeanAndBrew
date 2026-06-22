<?php
include("config.php");
include("header.php");

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
} else {
    echo "<div style='text-align:center; padding:20px; font-weight:bold;'>Product ID missing.</div>";
    exit();
}

$sql = "SELECT * FROM products WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$product = mysqli_fetch_assoc($result);

if (!$product) {
    echo "<div style='text-align:center; padding:20px; font-weight:bold;'>Product not found.</div>";
    exit();
}

function resolve_image_path_absolute($db_image, $product_name) {
    $base_dir = "images/";
    
    $path1 = $base_dir . trim($db_image);
    if (!empty($db_image) && file_exists($path1)) {
        return $path1;
    }
    
    $path2 = $base_dir . trim($product_name) . ".png";
    if (file_exists($path2)) { return $path2; }
    $path3 = $base_dir . trim($product_name) . ".jpg";
    if (file_exists($path3)) { return $path3; }
    
    if (is_dir($base_dir)) {
        $files = scandir($base_dir);
        foreach ($files as $file) {
            if ($file !== '.' && $file !== '..') {
                if (strpos(strtolower($product_name), 'variety') !== false && strpos(strtolower($file), 'variety') !== false) {
                    return $base_dir . $file;
                }
                if (strpos(strtolower($product_name), 'ceramic') !== false && strpos(strtolower($file), 'ceramic') !== false) { return $base_dir . $file; }
                if (strpos(strtolower($product_name), 'vanilla') !== false && strpos(strtolower($file), 'vanilla') !== false && strpos(strtolower($file), 'candle') === false) { return $base_dir . $file; }
                if (strpos(strtolower($product_name), 'espresso') !== false && strpos(strtolower($file), 'espresso') !== false) { return $base_dir . $file; }
                if (strpos(strtolower($product_name), 'medium') !== false && strpos(strtolower($file), 'medium') !== false) { return $base_dir . $file; }
            }
        }
    }

    return $base_dir . $db_image;
}

$final_image_src = resolve_image_path_absolute($product['image'], $product['name']);
?>

<div class="product-container">
    
    <div class="product-image">
        <img src="<?php echo $final_image_src; ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
    </div>

    <div class="product-info">

        <h1><?php echo htmlspecialchars($product['name']); ?></h1>

        <p class="description">
            <?php echo htmlspecialchars($product['description']); ?>
        </p>

        <p class="price">
            <?php echo number_format($product['price'], 2); ?> SAR
        </p>

        <?php if ($product['stock'] > 0) { ?>

        <form action="CheckCart.php" method="POST" class="cart-form">

            <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">

            <label for="quantity">Quantity:</label>

            <input
            type="number"
            id="quantity"
            name="quantity"
            value="1"
            min="1"
            max="<?php echo $product['stock']; ?>">

            <button type="submit" class="add-to-cart-btn">
                Add to Cart
            </button>

        </form>

        <?php } else { ?>

        <p style="color:#8b3a3a; font-weight:bold; font-size:18px; margin-top:20px;">
            This product is no longer available.
        </p>

        <?php } ?>

    </div>

</div>

<script src="script.js"></script>

</body>
</html>