function validationForm() {
    var username = document.getElementById("login").value;
    var password = document.getElementById("password").value;
    var repeatPassword = document.getElementById("repeat-password").value;
    var passwordMatchStatus = document.getElementById("password-match-status");
    var registrationButton = document.getElementById("registration-button");

    if (username === "") {
        document.getElementById("login-error").style.color = "red";
        document.getElementById("login-error").innerHTML = "Username is required!";
    }

    if (
        password === repeatPassword &&
        username !== "" &&
        password !== "" &&
        repeatPassword !== ""
    ) {
        passwordMatchStatus.innerHTML = "Password confirmed!";
        passwordMatchStatus.style.color = "green";
        registrationButton.disabled = false;
    } else {
        passwordMatchStatus.innerHTML = "Password not verified!";
        passwordMatchStatus.style.color = "red";
        registrationButton.disabled = true;
    }
}

function showPassword() {
    var password = document.getElementById("password");
    var repeatPassword = document.getElementById("repeat-password");
    if (password.type === "password") {
        password.type = "text";
        repeatPassword.type = "text";
    } else {
        password.type = "password";
        repeatPassword.type = "password";
    }
}

var btnShowPassword = document.getElementById("show-password");
btnShowPassword.addEventListener("click", showPassword);
