<?php
session_start();
?>

<link rel="stylesheet" href="Css/Style.css">
<title>Flavor Haven Restaurant</title>
<header>
        <div class="headeri">
            <div class="name"> 
                <p>Flavor Haven Restaurant</p>
            </div>
        </div>
        <ul>
            <li><a style="text-decoration:none; color: black;" href="index.php">Home</a></li>
            <li><a style="text-decoration:none; color: black;" href="News.php">News</a></li>
            <li><a style="text-decoration:none; color: black;" href="Menu.php">Menu</a></li>
            <li><a style="text-decoration:none; color: black;" href="aboutus.php">About Us</a></li>
            <li><a style="text-decoration:none; color: black;" href="contact.php">Contact Us</a></li>

            <?php
                if (isset($_SESSION['id'])) {
                    echo "<li><a href='logout.php'>Log Out</a></li>";
                } else {
                    ?>
                    <li><a style="text-decoration:none; color: black;" href="login.php">Log In</a></li>
            <?php } ?>
        </ul>
</header>