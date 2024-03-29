<?php
session_start();


if (!(isset($_SESSION['id'])) || $_SESSION['role'] == 'user') {
    header("Location:../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flavor Haven</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c9fcbbfbdb.js" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
</head>

<body>

    <div class="header">
        <nav>
            <a href="index.php">
                <h2 class="navText"><span>Admin</span> Dashboard</h2>
            </a>
            <ul class="navbar">
                <li class="settings">
                        <a href="../logout.php">Log Out</a>
                </li>
            </ul>
        </nav>
    </div>