

<?php
var_dump( $_POST);
    if ($_POST['name'] === '' || $_POST['email'] === '') :?>
        alert("test")
        <?php header("location:" . $_SERVER['HTTP_REFERER']); ?>
    <?php endif; ?>


    <p>Votre prénom : <?php echo $_POST['name']; ?> </p>
    <p>email : <?php echo $_POST['email']; ?> </p>