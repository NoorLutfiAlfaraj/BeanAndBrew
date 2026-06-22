function validateCartForm(){

    var quantity =
    document.getElementById("quantity").value;

    if(quantity <= 0){

        alert("Quantity must be greater than 0");

        return false;
    }

    return true;
}



var modal =
document.getElementById("helpModal");

var btn =
document.getElementById("helpBtn");

var span =
document.getElementsByClassName("close")[0];


if(btn){

    btn.onclick = function() {

        modal.style.display = "block";

    }
}


if(span){

    span.onclick = function() {

        modal.style.display = "none";

    }
}


window.onclick = function(event) {

    if (event.target == modal) {

        modal.style.display = "none";

    }
}



if(localStorage.getItem("cookiesAccepted")){

    var cookieBox =
    document.getElementById("cookieBox");

    if(cookieBox){

        cookieBox.style.display = "none";
    }
}


function acceptCookies(){

    localStorage.setItem("cookiesAccepted", "yes");

    document.getElementById("cookieBox").style.display = "none";
}

function validateCustomerLoginForm(){

    var email = document.getElementById("customerEmail");
    var password = document.getElementById("customerPassword");

    var emailError = document.getElementById("emailError");
    var passwordError = document.getElementById("passwordError");

    emailError.innerHTML = "";
    passwordError.innerHTML = "";

    email.style.border = "2px solid #d9d9d9";
    password.style.border = "2px solid #d9d9d9";

    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    var valid = true;

    if(email.value.trim() == ""){
        emailError.innerHTML = "Please enter your email";
        email.style.border = "2px solid red";
        valid = false;
    }
    else if(!emailPattern.test(email.value)){
        emailError.innerHTML = "Wrong email format";
        email.style.border = "2px solid red";
        valid = false;
    }

    if(password.value.trim() == ""){
        passwordError.innerHTML = "Please enter your password";
        password.style.border = "2px solid red";
        valid = false;
    }
    else if(password.value.length < 4){
        passwordError.innerHTML = "Wrong password";
        password.style.border = "2px solid red";
        valid = false;
    }

    return valid;
}


function validateAdminLoginForm(){

    var username = document.getElementById("adminUsername");
    var password = document.getElementById("adminPassword");

    var usernameError = document.getElementById("adminUsernameError");
    var passwordError = document.getElementById("adminPasswordError");

    usernameError.innerHTML = "";
    passwordError.innerHTML = "";

    username.style.border = "1px solid #ccc";
    password.style.border = "1px solid #ccc";

    var valid = true;

    if(username.value.trim() == ""){
        usernameError.innerHTML = "Please enter admin username";
        username.style.border = "2px solid red";
        valid = false;
    }
    else if(username.value.trim().length < 4){
        usernameError.innerHTML = "Wrong admin username";
        username.style.border = "2px solid red";
        valid = false;
    }

    if(password.value.trim() == ""){
        passwordError.innerHTML = "Please enter admin password";
        password.style.border = "2px solid red";
        valid = false;
    }
    else if(password.value.length < 4){
        passwordError.innerHTML = "Wrong admin password";
        password.style.border = "2px solid red";
        valid = false;
    }

    return valid;
}