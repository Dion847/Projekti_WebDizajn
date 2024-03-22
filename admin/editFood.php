<?php

include 'inc/header.php';
include 'inc/sidebar.php';
include 'lib/Food.php';

$food = new Admin\Lib\Food();
if (isset($_GET['nid'])) {
    $food = $food->getFoodId($_GET['nid']);
}


if (isset($_POST['edit']) && $_FILES['image']) {
    $food->setTitle($_POST['title']);
    $food->setDescription($_POST['description']);
    $food->setImage($_FILES['image']['name']);
    if ($food->updateFood()) {
        echo "<script>alert('Succesfully edited post!')</script>";
        header('Location:index.php');
    } else {
        echo "<script>alert('Editing failed!')</script>";
    }
}

?>
<div class="container">
    <div class="registerBox">
        <h1>Edit Food</h1>
        <form method="post" id="signupForm" enctype="multipart/form-data">
            <!-- <label for="title">Title</label> -->
            <input type="text" title="title" id="title" name="title" placeholder="Title" required value="<?php if (!empty($food->getTitle())) {
                echo $food->getTitle();
            } ?>">
            <div id="errorTitle" style="color: red;"></div>

            <!-- <label for="description">Description</label> -->
            <input type="text" title="description" name="description" id="description" placeholder="Description" required value="<?php if (!empty($food->getDescription())) {
                echo $food->getDescription();
            } ?>">
            <div id="errorDescription" style="color: red;"></div>

            <input type="file" title="image" name="image" id="image" required>
            <div id="errorImage" style="color: red;"></div>

            <input type="submit" value="Edit" name="edit" title="edit" class="btn">
        </form>
    </div>
</div>
</div>
</body>