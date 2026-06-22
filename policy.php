<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include('header.php'); 
?>

<div class="container" style="max-width: 900px; margin: 40px auto; padding: 30px;">
    
    <h1 style="font-family: 'Young Serif', serif; color: #3f4f2f; text-align: center; margin-bottom: 40px;">
        Store Policies & Compliance 📜
    </h1>

    <div id="privacy" class="policy-block" style="background: white; padding: 25px; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); margin-bottom: 30px; border-left: 5px solid #556b2f;">
        <h2 style="font-family: 'Young Serif', serif; color: #3f4f2f; margin-top: 0;">1. Privacy Policy 🔒</h2>
        <p style="font-family: Arial, sans-serif; color: #555; line-height: 1.7; font-size: 15px;">
            At <strong>Bean & Brew</strong>, we value your privacy. In compliance with the <strong>Saudi Personal Data Protection Law (PDPL)</strong>, we ensure that your personal information—including your name, email address, and purchase records—is securely collected and processed solely for managing your orders and improving your shopping experience. We never share your data with unauthorized third parties.
        </p>
    </div>

    <div id="terms" class="policy-block" style="background: white; padding: 25px; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); margin-bottom: 30px; border-left: 5px solid #556b2f;">
        <h2 style="font-family: 'Young Serif', serif; color: #3f4f2f; margin-top: 0;">2. Terms & Conditions ⚖️</h2>
        <p style="font-family: Arial, sans-serif; color: #555; line-height: 1.7; font-size: 15px;">
            By accessing and purchasing from Bean & Brew, you agree to comply with our store rules. All product prices listed are in Saudi Riyals (SAR). The website content, designs, and images are protected property. We reserve the right to update product stock and availability based on our real-time database updates.
        </p>
    </div>

    <div id="returns" class="policy-block" style="background: white; padding: 25px; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); margin-bottom: 30px; border-left: 5px solid #556b2f;">
        <h2 style="font-family: 'Young Serif', serif; color: #3f4f2f; margin-top: 0;">3. Return & Refund Policy 🔄</h2>
        <p style="font-family: Arial, sans-serif; color: #555; line-height: 1.7; font-size: 15px;">
            Your satisfaction is our priority! Since coffee beans and packets are perishable items, returns are only accepted if you receive the wrong product or if the item is damaged during delivery. Accessories (cups, candles, sets) can be returned or exchanged within 7 days of purchase, provided they are unused and in their original packaging.
        </p>
    </div>

    <div style="text-align: center; margin-top: 40px;">
        <a href="index.php" class="UpdateButton" style="text-decoration: none; padding: 12px 30px; display: inline-block; border-radius: 10px;">Back to Home</a>
    </div>

</div>

<footer>
    <div class="footer-copyright" style="text-align: center; color: #bbb; padding-top: 20px;">
        <p>&copy; 2026 Bean & Brew. All Rights Reserved.</p>
    </div>
</footer>

</body>
</html>