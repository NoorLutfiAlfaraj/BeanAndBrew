<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Create Account - Bean & Brew</title>

    <link rel="stylesheet" href="style.css">

    <link href="https://fonts.googleapis.com/css2?family=Young+Serif&display=swap" rel="stylesheet">

</head>

<body style="margin:0; padding:0;">

<header class="navbar">

    <div class="logo">
        Bean & Brew
    </div>

    <ul class="nav-links">

        <li><a href="index.php">Home</a></li>

        <li><a href="products.php">Products</a></li>

        <li><a href="contact.php">Contact</a></li>

    </ul>

</header>


<div class="container"
style="
max-width:480px;
margin:30px auto;
padding:35px;
text-align:center;
border:none;
border-radius:18px;
box-shadow:0 4px 12px rgba(0,0,0,0.08);
background:white;
">

    <h1 style="
    font-family:'Young Serif', serif;
    color:#3f4f2f;
    font-size:38px;
    margin-bottom:8px;
    ">
        Create Account ✨
    </h1>


    <p style="
    color:#777;
    margin-bottom:30px;
    font-size:15px;
    ">
        Join the Bean & Brew community
    </p>


    <form
    action="signup_process.php"
    method="POST"
    style="text-align:left;"
    onsubmit="return validateCreateAccountForm()"
    >

        <label style="font-weight:600; font-size:17px;">
            Full Name
        </label>

        <input
        type="text"
        id="fullName"
        name="full_name"
        style="
        width:100%;
        padding:12px;
        margin-top:8px;
        border-radius:12px;
        border:2px solid #d9d9d9;
        background:#eef1fb;
        font-size:14px;
        box-sizing:border-box;
        outline:none;
        ">

        <p id="nameError" class="error"></p>


        <label style="font-weight:600; font-size:17px;">
            Email
        </label>

        <input
        type="text"
        id="signupEmail"
        name="email"
        style="
        width:100%;
        padding:12px;
        margin-top:8px;
        border-radius:12px;
        border:2px solid #d9d9d9;
        background:#eef1fb;
        font-size:14px;
        box-sizing:border-box;
        outline:none;
        ">

        <p id="emailError" class="error"></p>


        <label style="font-weight:600; font-size:17px;">
            Password
        </label>

        <input
        type="password"
        id="signupPassword"
        name="password"
        style="
        width:100%;
        padding:12px;
        margin-top:8px;
        border-radius:12px;
        border:2px solid #d9d9d9;
        background:#eef1fb;
        font-size:14px;
        box-sizing:border-box;
        outline:none;
        ">

        <p id="passwordError" class="error"></p>


        <label style="font-weight:600; font-size:17px;">
            Confirm Password
        </label>

        <input
        type="password"
        id="confirmPassword"
        name="confirm_password"
        style="
        width:100%;
        padding:12px;
        margin-top:8px;
        border-radius:12px;
        border:2px solid #d9d9d9;
        background:#eef1fb;
        font-size:14px;
        box-sizing:border-box;
        outline:none;
        ">

        <p id="confirmPasswordError" class="error"></p>


        <input
        type="submit"
        value="Create Account"
        class="BuyButton"
        style="
        width:100%;
        padding:13px;
        font-size:18px;
        border-radius:12px;
        font-weight:bold;
        margin-top:15px;
        ">

    </form>


    <div style="margin-top:25px;">

        <p style="
        color:#666;
        margin-bottom:12px;
        font-size:15px;
        ">
            Already have an account?
        </p>


        <a
        href="login.php"
        class="UpdateButton"
        style="
        padding:12px 28px;
        border-radius:12px;
        font-size:15px;
        text-decoration:none;
        display:inline-block;
        color:white;
        ">
            Login
        </a>

    </div>

</div>


<script>

function validateCreateAccountForm(){

    var fullName = document.getElementById("fullName");
    var email = document.getElementById("signupEmail");
    var password = document.getElementById("signupPassword");
    var confirmPassword = document.getElementById("confirmPassword");

    var nameError = document.getElementById("nameError");
    var emailError = document.getElementById("emailError");
    var passwordError = document.getElementById("passwordError");
    var confirmPasswordError = document.getElementById("confirmPasswordError");

    nameError.innerHTML = "";
    emailError.innerHTML = "";
    passwordError.innerHTML = "";
    confirmPasswordError.innerHTML = "";

    fullName.style.border = "2px solid #d9d9d9";
    email.style.border = "2px solid #d9d9d9";
    password.style.border = "2px solid #d9d9d9";
    confirmPassword.style.border = "2px solid #d9d9d9";

    var valid = true;

    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if(fullName.value.trim() == ""){
        nameError.innerHTML = "<span style='color:red;'>Please enter your full name</span>";
        fullName.style.border = "2px solid red";
        valid = false;
    }

    if(email.value.trim() == ""){
        emailError.innerHTML = "<span style='color:red;'>Please enter your email </span>";
        email.style.border = "2px solid red";
        valid = false;
    }
    else if(!emailPattern.test(email.value)){
        emailError.innerHTML = "<span style='color:red;'>Please enter a valid email </span>";
        email.style.border = "2px solid red";
        valid = false;
    }

    if(password.value.trim() == ""){
        passwordError.innerHTML = "<span style='color:red;'>Please enter your password</span>";
        password.style.border = "2px solid red";
        valid = false;
    }
    else if(password.value.length < 6){
        passwordError.innerHTML = "<span style='color:red;'>Password must be at least 6 characters</span>";
        password.style.border = "2px solid red";
        valid = false;
    }

    if(confirmPassword.value.trim() == ""){
        confirmPasswordError.innerHTML = "<span style='color:red;'>Please confirm your password</span>";
        confirmPassword.style.border = "2px solid red";
        valid = false;
    }
    else if(confirmPassword.value != password.value){
        confirmPasswordError.innerHTML = "<span style='color:red;'>Passwords do not match</span>";
        confirmPassword.style.border = "2px solid red";
        valid = false;
    }

    return valid;
}

</script>

</body>
</html>