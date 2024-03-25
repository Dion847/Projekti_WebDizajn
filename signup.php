<?php
include("inc/header.php");
require_once 'admin/lib/User.php';

if (isset($_SESSION['id'])) {
    header('Location:index.php');
}


if (isset($_POST['submit'])) {
    $user = new Admin\Lib\User();
    $user->setName($_POST['name']);
    $user->setEmail($_POST['email']);
    $user->setPassword($_POST['password']);
    if ($user->createUser()) {
        echo "<script>alert('Succesfully created account!')</script>";
        header('Location:login.php');
    } else {
        echo "<script>alert('Creation failed!')</script>";

    }
}
?>
<link rel="stylesheet" href="Css/SignupForm.css">
<div class="container">
    <div class="registerBox">
        <h1>Sign up</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" id="signupForm">
            
            <input type="text" name="name" id="name" placeholder="Name" required>
            <div id="errorName" style="color: red;"></div>

            <input type="email" name="email" id="email" placeholder="Email" required>
            <div id="errorEmail" style="color: red;"></div>

            <input type="password" name="password" id="password" placeholder="Password" required>
            <div id="errorPassword" style="color: red;"></div>

            <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" required>
            <div id="errorConfirmPassword" style="color: red;"></div>

            <input type="submit" name="submit" class="btn" onclick="signupValidation()">
        </form>
        <p>Already have an account? Log in <a href="login.php">here</a></p>
    </div>
</div>
