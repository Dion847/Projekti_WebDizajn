<?php

include 'inc/header.php';
include 'inc/sidebar.php';
include 'lib/Food.php';

if (isset($_POST['create']) && $_FILES['image']) {
    $food = new Admin\Lib\Food();
    $food->setTitle($_POST['title']);
    $food->setDescription($_POST['description']);
    $food->setImage($_FILES['image']['name']);
    if ($food->createFood()) {
        echo "<script>alert('Succesfully created post!')</script>";
        header('Location:index.php');
    } else {
        echo "<script>alert('Creation failed!')</script>";

    }
}

?>
<div class="container">
    <div class="registerBox">
        <h1>Create Food</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" id="signupForm" enctype="multipart/form-data">

            <input type="text" name="title" title="title" id="title" placeholder="Title" required>
            <div id="errorTitle" style="color: red;"></div>

            <input type="text" title="description" name="description" id="description" placeholder="Description" required>
            <div id="errorDescription" style="color: red;"></div>

            <input type="file" title="image" name="image" id="image" required>
            <div id="errorImage" style="color: red;"></div>

            <input type="submit" value="Create" name="create" title="create" class="btn" onclick="signupValidation()">
        </form>
    </div>
</div>
</div>
</body>