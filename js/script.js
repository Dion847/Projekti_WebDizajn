function signupValidation() {

    var name = document.getElementById('name');
    var email = document.getElementById('email');
    var password = document.getElementById('password');
    var confirmPassword = document.getElementById('confirmPassword');


    var errorName = document.getElementById('errorName');
    var errorEmail = document.getElementById('errorEmail');
    var errorPassword = document.getElementById('errorPassword');
    var errorConfirmPassword = document.getElementById('errorConfirmPassword');


    var nameRegex = /^[A-Z][a-z]+$/;
    if (!nameRegex.test(name.value)) {
        errorName.innerText = "Enter a valid name";
        event.preventDefault();
        return false;
    }
    errorName.innerText = "";


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



    if (confirmPassword.value !== password.value) {
        errorConfirmPassword.innerText = "The passwords do not match";
        event.preventDefault();
        return false;
    }

    errorConfirmPassword.innerText = "";

}

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
}

function contactValidation() {
    var email = document.getElementById('email');
    var description = document.getElementById('description');

    var errorEmail = document.getElementById('errorEmail');
    var errorDescription = document.getElementById('errorDescription');

    var emailRegex = /^[a-zA-Z.-_]+@+[a-z]+\.+[a-z]{2,3}$/;
    if (!emailRegex.test(email.value)) {
        errorEmail.innerText = "Enter a valid email";
        event.preventDefault();
        return false;
    }
    errorEmail.innerText = "";

    if (description.value == "") {
        errorDescription.innerText = "Write a description";
        event.preventDefault();
        return false;
    }
    errorDescription.innerText = "";
    alert("Mesazhi eshte derguar me sukses");
}