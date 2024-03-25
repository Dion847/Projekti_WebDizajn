<?php 
include("inc/header.php");
include_once 'admin/lib/Contact/php';

if(isset($_POST['submit'])){
    $contact = new Admin\Lib\Contact();
    $contact->setEmail($_POST['email']);
    $contact->setMessage($_POST['message']);

    if($contact->createContact()){
        echo "<script>alert('Message successfully sent!')</script>";
    }else{
        echo "<script>alert('Message failed to send!')</script>";
    }
}
?>
<link rel="stylesheet" href="Css/contactForm">
<div class="container">
    <div class="contactBox">
        <h1>Contact Us</h1>
        <form action="" method="post">

            <input type="email" name="email" id="email" placeholder="Email" value="<?php if (!empty($_SESSION['email'])) {
                echo $_SESSION['email'];
            } ?>" required>
            <div id="errorEmail" class="error"></div>
            <input type="text" name="message" id="message" placeholder="Contact Us!" required>
            <div id="errorDescription" class="error"></div>

            <input type="submit" name="submit" onclick="contactValidation()">
        </form>
    </div>
</div>
