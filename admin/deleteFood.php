<?php

include 'inc/header.php';
include 'inc/sidebar.php';
include 'lib/Food.php';

$food = new Admin\Lib\Food();
if (isset($_GET['nid'])) {
    $food = $food->getFoodId($_GET['nid']);
}


if (isset($_POST['delete'])) {
    if ($food->deleteFood()) {
        echo "<script>alert('Succesfully created food!')</script>";
        header('Location:index.php');
    } else {
        echo "<script>alert('Deleting failed!')</script>";
    }
}

?>
<div class="container">
    <div class="registerBox">
        <h1>Delete Food</h1>
        <form method="post" id="signupForm" enctype="multipart/form-data">

            <input type="text" title="title" id="title" name="title" placeholder="Title" disabled  value="<?php if (!empty($food->getTitle())) {
                echo $food->getTitle();
            } ?>">
            <div id="errorTitle" style="color: red;"></div>
            
            <input type="text" title="description" name="description" id="description" disabled placeholder="Description" required value="<?php if (!empty($food->getDescription())) {
                echo $food->getDescription();
            } ?>">
            <div id="errorDescription" style="color: red;"></div>

            <input type="file" title="image" name="image" id="image" disabled>
            <div id="errorImage" style="color: red;"></div>

            <input type="submit" value="Delete" name="delete" title="delete" class="btn">
        </form>
    </div>
</div>
</div>
</body>