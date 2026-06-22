<?php
session_start();
include("config.php");
include("header.php");

if (!isset($_SESSION['last_purchase']) || empty($_SESSION['last_purchase'])) {
    header("Location: index.php");
    exit();
}

$purchasedItems = $_SESSION['last_purchase'];
$grandTotal = 0;
$orderDate = date("Y-m-d H:i:s");
?>

<div class="container" style="text-align: center; max-width: 600px; margin: 50px auto; padding: 40px; border: 2px solid #556b2f; border-radius: 20px; background: white; box-shadow: 0 10px 25px rgba(0,0,0,0.05);">
    
    <h1 style="color: #3f4f2f; font-family: 'Young Serif', serif; margin-bottom: 5px;">Order Invoice 📜</h1>
    <p style="color: #666; margin-bottom: 30px;">Thank you for shopping with Bean & Brew!</p>
    
    <div style="text-align: left; background: #f9fbf7; padding: 20px; border-radius: 12px; border-left: 5px solid #556b2f; margin-bottom: 25px;">
        <p style="margin: 5px 0; font-family: Arial, sans-serif; color: #333;"><strong>Date:</strong> <?php echo $orderDate; ?></p>
        <p style="margin: 5px 0; font-family: Arial, sans-serif; color: #333;"><strong>Status:</strong> <span style="color: #2e7d32; font-weight: bold;">Paid & Confirmed ✅</span></p>
    </div>

    <table style="width: 100%; border-collapse: collapse; margin-top: 10px;">
        <thead>
            <tr style="background: #556b2f; color: white;">
                <th style="padding: 12px; text-align: left;">Product</th>
                <th style="padding: 12px; text-align: center;">Qty</th>
                <th style="padding: 12px; text-align: right;">Total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($purchasedItems as $item): 
                $grandTotal += $item['total_price'];
            ?>
                <tr style="border-bottom: 1px solid #ddd;">
                    <td style="padding: 12px; text-align: left; font-family: Arial, sans-serif;"><?php echo $item['product']; ?></td>
                    <td style="padding: 12px; text-align: center; font-family: Arial, sans-serif;"><?php echo $item['quantity']; ?></td>
                    <td style="padding: 12px; text-align: right; font-family: Arial, sans-serif;"><?php echo $item['total_price']; ?> SAR</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div style="margin-top: 30px; text-align: right; border-top: 2px dashed #ddd; padding-top: 15px;">
        <h2 style="color: #3f4f2f; font-family: 'Young Serif', serif; margin: 0;">Grand Total: <?php echo $grandTotal; ?> SAR</h2>
    </div>

    <div class="actions" style="margin-top: 40px; text-align: center;">
        <a href="index.php" class="btn" style="background: #3f4f2f; color: white; padding: 12px 30px; text-decoration: none; border-radius: 12px; font-weight: bold; font-family: 'Young Serif', serif; display: inline-block;">Back to Home ☕</a>
    </div>

</div>

</body>
</html>
<?php 
unset($_SESSION['last_purchase']); 
?>