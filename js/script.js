function loginValidation() {
    var email = document.getElementById('email');
    var password = document.getElementById('password');

    var errorEmail = document.getElementById('errorEmail');
    var errorPassword = document.getElementById('errorPassword');

    var emailRegex = /^[a-zA-Z.-_]+@+[a-z]+\.+[a-z]{2,3}$/;
    if (!emailRegex.test(email.value)) {
        errorEmail.innerText = "Enter a valid email";
        event.preventDefault();
        return false;
    }
    errorEmail.innerText = "";

    var passwordRegex = /^[A-Z][a-z]+(\d{3})$/;
    if (!passwordRegex.test(password.value)) {
        errorPassword.innerText = "Enter a valid password";
        event.preventDefault();
        return false;
    }
    errorPassword.innerText = "";
    // alert("Jeni kyqur me sukses");
}
