<?php 
include("inc/header.php");
include_once 'admin/lib/User.php';

if (isset($_SESSION['id'])) {
    header('Location:index.php');
}


if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = new Admin\Lib\User();
    $user = $user->verifyUser($email, $password);
    if ($user) {
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['id'] = $user->getId();
        $_SESSION['name'] = $user->getName();
        $_SESSION['email'] = $user->getEmail();
        $_SESSION['role'] = $user->getRole();

        if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'staf') {
            header('Location:admin/user.php');
        } else if ($_SESSION['role'] == 'user') {
            header('Location:index.php');
        }

    } else {
        echo "<script>alert('Te dhenat qe keni shenuar jane gabim')</script>";
    }
}

?>
<link rel="stylesheet" href="Css/LoginForm">

<div class="container">
    <div class="loginBox">
        <h1>Log In</h1>
        <form action="" id="loginForm" method="post">

            <input type="email" name="email" id="email" placeholder="Email" required>
            <div id="errorEmail" style="color: red;"></div>

            <input type="password" name="password" id="password" placeholder="Password" required>
            <div id="errorPassword" style="color: red;"></div>

            <input type="submit" name="login" onclick="loginValidation()">
        </form>
        <p>Don't have an account? <a href="signup.php">Sign Up.</a></p>
    </div>
</div>