<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include('header.php'); 
?>

<?php
if(isset($_SESSION['customer'])){
    echo "
    <div style='background: #3f4f2f; color: white; padding: 10px 48px; font-family: \"Young Serif\", serif; font-size: 16px; border-top: 1px solid rgba(255,255,255,0.1);'>
        Welcome, ".$_SESSION['customer']." ☕
    </div>";
}
?>

<section class="hero">

  <a href="products.php" class="btn">
    Shop Now
  </a>

</section>


<section class="categories">

  <h2 class="title">
    Shop by Category
  </h2>

  <div class="category-grid">

    <a href="products.php#coffee" class="category-card">

      <img src="images/be.jpg" alt="Coffee Beans">

      <h3>
        Coffee Beans
      </h3>

    </a>


    <a href="products.php#instant" class="category-card">

      <img src="images/coffee.jpg" alt="Instant Coffee">

      <h3>
        Instant Coffee Packets
      </h3>

    </a>


    <a href="products.php#matcha" class="category-card">

      <img src="images/matcha.jpg" alt="Matcha">

      <h3>
        Matcha
      </h3>

    </a>


    <a href="products.php#accessories" class="category-card">

      <img src="images/Ceramic Coffee Mug.png" alt="Accessories">

      <h3>
        Accessories
      </h3>

    </a>

  </div>

</section>


<section class="about" id="about">

  <h2>
    About Us
  </h2>

  <p>
    At <strong>Bean & Brew</strong>, we’re passionate about providing high quality, delicious beverages.
    So you can enjoy every sip, with the knowledge that what you’re drinking
    isn’t just delicious, but also thoughtfully made.
  </p>

  <p>
    We are grateful to be a part of your daily routine, and we take it seriously.
    We believe that drinks can be more than just drinks, but sources of joy,
    inspiration and creativity in a cup.
  </p>

</section>


<footer>
    <div class="footer-links-container">
        <div class="footer-col">
            <h3>Bean & Brew</h3>
            <p>Your ultimate destination for premium coffee beans, high-quality matcha, and beautifully crafted brewing accessories.</p>
        </div>

        <div class="footer-col">
            <h3>Shop Policy</h3>
            <ul>
                <li><a href="policy.php#privacy">Privacy Policy</a></li>
                <li><a href="policy.php#terms">Terms & Conditions</a></li>
                <li><a href="policy.php#returns">Return & Refund Policy</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h3>Follow Us</h3>
            <div class="footer-social">
                <a href="#">🐦 @BeanAndBrew</a>
                <a href="#">📸 @BeanAndBrew</a>
                <a href="#">🎵 @BeanAndBrew</a>
                <a href="#">👻 @BeanAndBrew</a>
            </div>
        </div>
    </div>

    <div class="footer-copyright">
        <p>&copy; 2026 Bean & Brew. All Rights Reserved.</p>
    </div>
</footer>



<div id="cookieBox" class="cookie-box">

    <p>
        We use cookies to improve your experience on Bean & Brew.
        By using this website, you agree to our Cookie Policy.
    </p>

    <button onclick="acceptCookies()">
        Accept
    </button>

</div>

<div id="mouseTooltip" class="custom-tooltip">View Details</div>

<script>
const tooltip = document.getElementById('mouseTooltip');
const cards = document.querySelectorAll('.category-card');

cards.forEach(card => {
    card.addEventListener('mouseenter', () => {
        tooltip.style.opacity = '1';
    });

    card.addEventListener('mousemove', (e) => {
        tooltip.style.left = e.clientX + 'px';
        tooltip.style.top = e.clientY + 'px';
    });

    card.addEventListener('mouseleave', () => {
        tooltip.style.opacity = '0';
    });
});
</script>

<script src="script.js"></script>

</body>
</html>