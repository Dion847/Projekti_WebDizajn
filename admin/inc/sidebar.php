<link rel="stylesheet" href="css/Style.css">
<div class="container">
    <div class="sidebar">
        <div class="sideNav">
            <a href="index.php"><i class="fa-regular fa-user"></i> Food</a>
            <a href="user.php"><i class="fa-solid fa-newspaper"></i> User</a>
            <a href="contact.php"><i class="fa-regular fa-address-book"></i> Contact</a>
        </div>

        <div class="sideNavFooter">
            <p>Logged in as:
                <?php echo $_SESSION['name'] ?>
            </p>
        </div>
    </div>
</div>