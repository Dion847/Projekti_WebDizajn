<?php
use Admin\Lib\Food;

include 'inc/header.php';
include 'inc/sidebar.php';
include 'lib/Food.php';

if ($_SESSION['role'] == 'user') {
    header("Location:../index.php");
}
?>

<div class="dashboardContainer">
    <h1>Food</h1>
    <div class="tableContainer">
        <table>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

            <?php
            $allFood = new Food();
            $allFood = $allFood->getAllFood();
            foreach ($allFood as $food) {
                echo "  
                    <tr>
                        <td>" . $food->getId() . "</td>
                        <td>" . $food->getTitle() . "</td>
                        <td class='cardText' >" . $food->getDescription() . "</td>
                        <td><img src='../Css/Fotot/" . $food->getImage() . "' width='150px' height='100'></td>
                        <td><a href='editFood.php?nid=" . $food->getId() . "'>Edit</a></td>
                        <td><a href='deleteFood.php?nid=" . $food->getId() . "'>Delete</a></td>      
                    </tr>
                    ";
            }
            ?>
        </table>
        <a href="createFood.php" class="createUser">Create Food</a>
    </div>
</div>
</div>
</body>