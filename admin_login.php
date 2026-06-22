<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="admin-page">

<nav class="simple-navbar">
    <div class="nav-logo">Bean & Brew</div>
    <div class="nav-menu">
        <a href="index.php">Home</a>
        <a href="products.php">Products</a>
        <a href="contact.php">Contact</a>
    </div>
</nav>

<div class="container">
    <h1>Admin Login</h1>

<form action="login_process.php"
method="POST"
onsubmit="return validateAdminLoginForm()"
novalidate>

    <label>Username</label>

    <input
    type="text"
    id="adminUsername"
    name="username">

    <p id="adminUsernameError" style="
    color:red;
    font-size:14px;
    margin-top:5px;
    margin-bottom:20px;
    font-weight:bold;
    "></p>


    <label>Password</label>

    <input
    type="password"
    id="adminPassword"
    name="password">

    <p id="adminPasswordError" style="
    color:red;
    font-size:14px;
    margin-top:5px;
    margin-bottom:20px;
    font-weight:bold;
    "></p>


    <input
    type="submit"
    value="Login"
    class="UpdateButton">

</form>
</div>

<script src="script.js"></script>

</body>
</html>