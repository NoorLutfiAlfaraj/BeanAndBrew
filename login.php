<?php include("header.php"); ?>

<div class="container" style="
width:90%;
max-width:1100px;
margin:40px auto;
padding:40px;
border:none;
box-shadow:0 4px 12px rgba(0,0,0,0.08);
border-radius:18px;
background:white;
">

<h1 style="
font-family:'Young Serif', serif;
color:#3f4f2f;
font-size:48px;
text-align:center;
margin-bottom:10px;
">
Customer Login ☕
</h1>

<p style="
text-align:center;
color:#777;
font-size:16px;
margin-bottom:35px;
">
Welcome to Bean & Brew
</p>

<form action="customer_login_process.php" method="POST" onsubmit="return validateCustomerLoginForm()" novalidate>
    <label style="font-size:18px; font-weight:600;">Email</label>

    <input
    type="text"
    id="customerEmail"
    name="email"
    style="
    width:100%;
    box-sizing:border-box;
    padding:14px;
    margin-top:10px;
    border-radius:12px;
    border:2px solid #d9d9d9;
    background:#eef1fb;
    font-size:15px;
    ">

    <p id="emailError" style="
    color:red;
    font-size:14px;
    margin-top:5px;
    margin-bottom:20px;
    font-weight:bold;
    "></p>


    <label style="font-size:18px; font-weight:600;">Password</label>

    <input
    type="password"
    id="customerPassword"
    name="password"
    style="
    width:100%;
    box-sizing:border-box;
    padding:14px;
    margin-top:10px;
    border-radius:12px;
    border:2px solid #d9d9d9;
    background:#eef1fb;
    font-size:15px;
    ">

    <p id="passwordError" style="
    color:red;
    font-size:14px;
    margin-top:5px;
    margin-bottom:20px;
    font-weight:bold;
    "></p>


    <input
    type="submit"
    value="Login"
    class="UpdateButton"
    style="
    width:100%;
    box-sizing:border-box;
    padding:14px;
    font-size:22px;
    border-radius:14px;
    font-weight:bold;
    ">

</form>

<div style="text-align:center; margin-top:30px;">

    <p style="color:#666; font-size:16px; margin-bottom:15px;">
        New customer?
    </p>

    <a href="signup.php" class="BuyButton" style="
    padding:14px 30px;
    border-radius:12px;
    text-decoration:none;
    color:white;
    display:inline-block;
    font-size:18px;
    ">
        Create Account
    </a>

</div>

<div style="text-align:center; margin-top:30px;">

    <a href="admin_login.php" style="
    color:#666;
    text-decoration:none;
    font-size:17px;
    ">
        Admin Login
    </a>

</div>

</div>

<script src="script.js"></script>

</body>
</html>