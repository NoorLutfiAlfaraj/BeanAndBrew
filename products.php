<?php include("header.php"); ?>

<h1 class="title">Our Products</h1>

<h2 id="coffee" class="category-title">
    Coffee Beans
</h2>

<div class="products-grid">
    <div class="product-card">
        <img src="images/Espresso Dark Roast Blend.png">
        <h3>Espresso Dark Roast Blend</h3>
        <p>SAR 55.00</p>
        <div class="button-group">
            <button class="btn-action" onclick="location.href='product_details.php?id=1'">View Details</button>
            <button class="btn-action add-to-cart-btn" data-id="1">Add to Cart</button>
        </div>
    </div>

    <div class="product-card">
        <img src="images/Medium Roast Blend.png">
        <h3>Medium Roast Blend</h3>
        <p>SAR 60.00</p>
        <div class="button-group">
            <button class="btn-action" onclick="location.href='product_details.php?id=2'">View Details</button>
            <button class="btn-action add-to-cart-btn" data-id="2">Add to Cart</button>
        </div>
    </div>

    <div class="product-card">
        <img src="images/Vanilla Flavored Blend.png">
        <h3>Vanilla Flavored Blend</h3>
        <p>SAR 55.00</p>
        <div class="button-group">
            <button class="btn-action" onclick="location.href='product_details.php?id=3'">View Details</button>
            <button class="btn-action add-to-cart-btn" data-id="3">Add to Cart</button>
        </div>
    </div>

    <div class="product-card">
        <img src="images/Light Roast Blend.png">
        <h3>Light Roast Blend</h3>
        <p>SAR 45.00</p>
        <div class="button-group">
            <button class="btn-action" onclick="location.href='product_details.php?id=4'">View Details</button>
            <button class="btn-action add-to-cart-btn" data-id="4">Add to Cart</button>
        </div>
    </div>

    <?php
    include("config.php");
    $sql_new_coffee = "SELECT * FROM products WHERE (LOWER(category) = 'coffee' OR LOWER(category) = 'coffee beans') AND id > 4";
    $res_new_coffee = mysqli_query($conn, $sql_new_coffee);
    if($res_new_coffee && mysqli_num_rows($res_new_coffee) > 0) {
        while($row = mysqli_fetch_assoc($res_new_coffee)) {
            echo '
            <div class="product-card">
                <img src="images/'.$row['image'].'">
                <h3>'.$row['name'].'</h3>
                <p>SAR '.number_format($row['price'], 2).'</p>
                <div class="button-group">
                    <button class="btn-action" onclick="location.href=\'product_details.php?id='.$row['id'].'\'">View Details</button>
                    <button class="btn-action add-to-cart-btn" data-id="'.$row['id'].'">Add to Cart</button>
                </div>
            </div>';
        }
    }
    ?>
</div>

<h2 id="instant" class="category-title">
    Instant Coffee
</h2>

<div class="products-grid">
    <div class="product-card">
        <img src="images/XL Cold Brew Bags.png">
        <h3>XL Cold Brew Bags</h3>
        <p>SAR 25.00</p>
        <div class="button-group">
            <button class="btn-action" onclick="location.href='product_details.php?id=5'">View Details</button>
            <button class="btn-action add-to-cart-btn" data-id="5">Add to Cart</button>
        </div>
    </div>

    <div class="product-card">
        <img src="images/Flavored Variety Cold Brew Singles.png">
        <h3>Flavored Variety Cold Brew Singles</h3>
        <p>SAR 85.00</p>
        <div class="button-group">
            <button class="btn-action" onclick="location.href='product_details.php?id=6'">View Details</button>
            <button class="btn-action add-to-cart-btn" data-id="6">Add to Cart</button>
        </div>
    </div>

    <div class="product-card">
        <img src="images/Variety Cold Brew Singles.png">
        <h3>Variety Cold Brew Singles</h3>
        <p>SAR 90.00</p>
        <div class="button-group">
            <button class="btn-action" onclick="location.href='product_details.php?id=7'">View Details</button>
            <button class="btn-action add-to-cart-btn" data-id="7">Add to Cart</button>
        </div>
    </div>

    <div class="product-card">
        <img src="images/Vanilla Cold Brew Singles.png">
        <h3>Vanilla Cold Brew Singles</h3>
        <p>SAR 80.00</p>
        <div class="button-group">
            <button class="btn-action" onclick="location.href='product_details.php?id=8'">View Details</button>
            <button class="btn-action add-to-cart-btn" data-id="8">Add to Cart</button>
        </div>
    </div>

    <div class="product-card">
        <img src="images/Medium Roast Cold Brew Singles.png">
        <h3>Medium Roast Cold Brew Singles</h3>
        <p>SAR 85.00</p>
        <div class="button-group">
            <button class="btn-action" onclick="location.href='product_details.php?id=9'">View Details</button>
            <button class="btn-action add-to-cart-btn" data-id="9">Add to Cart</button>
        </div>
    </div>

    <?php
    $sql_new_instant = "SELECT * FROM products WHERE (LOWER(category) = 'instant' OR LOWER(category) = 'instant coffee' OR LOWER(category) = 'instant coffee packets') AND id > 9";
    $res_new_instant = mysqli_query($conn, $sql_new_instant);
    if($res_new_instant && mysqli_num_rows($res_new_instant) > 0) {
        while($row = mysqli_fetch_assoc($res_new_instant)) {
            echo '
            <div class="product-card">
                <img src="images/'.$row['image'].'">
                <h3>'.$row['name'].'</h3>
                <p>SAR '.number_format($row['price'], 2).'</p>
                <div class="button-group">
                    <button class="btn-action" onclick="location.href=\'product_details.php?id='.$row['id'].'\'">View Details</button>
                    <button class="btn-action add-to-cart-btn" data-id="'.$row['id'].'">Add to Cart</button>
                </div>
            </div>';
        }
    }
    ?>
</div>

<h2 id="matcha" class="category-title">
    Matcha
</h2>

<div class="products-grid">
    <div class="product-card">
        <img src="images/Matcha Green tea.png">
        <h3>Matcha Green Tea</h3>
        <p>SAR 60.00</p>
        <div class="button-group">
            <button class="btn-action" onclick="location.href='product_details.php?id=10'">View Details</button>
            <button class="btn-action add-to-cart-btn" data-id="10">Add to Cart</button>
        </div>
    </div>

    <div class="product-card">
        <img src="images/Vanilla Matcha Green tea.png">
        <h3>Vanilla Matcha Green Tea</h3>
        <p>SAR 65.00</p>
        <div class="button-group">
            <button class="btn-action" onclick="location.href='product_details.php?id=11'">View Details</button>
            <button class="btn-action add-to-cart-btn" data-id="11">Add to Cart</button>
        </div>
    </div>

    <div class="product-card">
        <img src="images/matcha_set.png">
        <h3>Matcha Set</h3>
        <p>SAR 120.00</p>
        <div class="button-group">
            <button class="btn-action" onclick="location.href='product_details.php?id=12'">View Details</button>
            <button class="btn-action add-to-cart-btn" data-id="12">Add to Cart</button>
        </div>
    </div>

    <?php
    $sql_new_matcha = "SELECT * FROM products WHERE (LOWER(category) = 'matcha' OR LOWER(category) = 'matcha green tea') AND id > 12";
    $res_new_matcha = mysqli_query($conn, $sql_new_matcha);
    if($res_new_matcha && mysqli_num_rows($res_new_matcha) > 0) {
        while($row = mysqli_fetch_assoc($res_new_matcha)) {
            echo '
            <div class="product-card">
                <img src="images/'.$row['image'].'">
                <h3>'.$row['name'].'</h3>
                <p>SAR '.number_format($row['price'], 2).'</p>
                <div class="button-group">
                    <button class="btn-action" onclick="location.href=\'product_details.php?id='.$row['id'].'\'">View Details</button>
                    <button class="btn-action add-to-cart-btn" data-id="'.$row['id'].'">Add to Cart</button>
                </div>
            </div>';
        }
    }
    ?>
</div>

<h2 id="accessories" class="category-title">
    Accessories
</h2>

<div class="products-grid">
    <div class="product-card">
        <img src="images/Iced Coffee Glass.png">
        <h3>Iced Coffee Glass</h3>
        <p>SAR 25.00</p>
        <div class="button-group">
            <button class="btn-action" onclick="location.href='product_details.php?id=13'">View Details</button>
            <button class="btn-action add-to-cart-btn" data-id="13">Add to Cart</button>
        </div>
    </div>

    <div class="product-card">
        <img src="images/Ceramic Coffee Mug.png">
        <h3>Ceramic Coffee Mug</h3>
        <p>SAR 40.00</p>
        <div class="button-group">
            <button class="btn-action" onclick="location.href='product_details.php?id=14'">View Details</button>
            <button class="btn-action add-to-cart-btn" data-id="14">Add to Cart</button>
        </div>
    </div>

    <div class="product-card">
        <img src="images/Coffee Scented Candle.png">
        <h3>Coffee Scented Candle</h3>
        <p>SAR 35.00</p>
        <div class="button-group">
            <button class="btn-action" onclick="location.href='product_details.php?id=15'">View Details</button>
            <button class="btn-action add-to-cart-btn" data-id="15">Add to Cart</button>
        </div>
    </div>

    <div class="product-card">
        <img src="images/Matcha Scented Candle.png">
        <h3>Matcha Scented Candle</h3>
        <p>SAR 35.00</p>
        <div class="button-group">
            <button class="btn-action" onclick="location.href='product_details.php?id=16'">View Details</button>
            <button class="btn-action add-to-cart-btn" data-id="16">Add to Cart</button>
        </div>
    </div>

    <?php
    $sql_new_access = "SELECT * FROM products WHERE (LOWER(category) = 'accessories' OR LOWER(category) = 'tools') AND id > 16";
    $res_new_access = mysqli_query($conn, $sql_new_access);
    if($res_new_access && mysqli_num_rows($res_new_access) > 0) {
        while($row = mysqli_fetch_assoc($res_new_access)) {
            echo '
            <div class="product-card">
                <img src="images/'.$row['image'].'">
                <h3>'.$row['name'].'</h3>
                <p>SAR '.number_format($row['price'], 2).'</p>
                <div class="button-group">
                    <button class="btn-action" onclick="location.href=\'product_details.php?id='.$row['id'].'\'">View Details</button>
                    <button class="btn-action add-to-cart-btn" data-id="'.$row['id'].'">Add to Cart</button>
                </div>
            </div>';
        }
    }
    ?>
</div>

<div id="toast-notification" class="toast">Product added to cart successfully! 🎉</div>

<footer>
    <p>© Bean & Brew 2026</p>
</footer>

<style>
.button-group {
    display: flex; 
    gap: 10px; 
    justify-content: center;
    margin-top: 15px;
}
.btn-action {
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    background-color: #4B6F44 !important;
    color: white !important;
    transition: background-color 0.3s ease;
}
.btn-action:hover {
    background-color: #3B5634 !important; 
}
.toast {
    visibility: hidden;
    min-width: 300px;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 5px;
    padding: 16px;
    position: fixed;
    z-index: 9999;
    left: 50%;
    top: 50px;
    transform: translateX(-50%);
    font-size: 16px;
    box-shadow: 0px 4px 10px rgba(0,0,0,0.3);
    opacity: 0;
    transition: opacity 0.5s, top 0.5s;
}
.toast.show {
    visibility: visible;
    opacity: 1;
    top: 30px;
}
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('.add-to-cart-btn').on('click', function(e) {
        e.preventDefault();
        var productId = $(this).data('id');
        
        $.ajax({
            url: 'CheckCart.php',
            type: 'POST',
            data: { 
                product_id: productId,
                quantity: 1 
            },
            success: function(response) {
                var toast = $('#toast-notification');
                toast.addClass('show');
                setTimeout(function() {
                    toast.removeClass('show');
                }, 4000);
            },
            error: function() {
                alert('An error occurred. Please try again.');
            }
        });
    });
});
</script>

<script src="script.js"></script>
</body>
</html>