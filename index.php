

<?php
include_once("header.php");
include_once("./assets/images/data.php");
?>

    <br>
    <div class="row">

<?php foreach ($articles as $key => $item): ?>

    <div class="col-lg-4 col-md-6">
        <div class="card">
            <img src= "./assets/images/<?php echo $item['imagePath'] ?>">
                <div class="card-body">
                <h5 class="card-title"> <?php echo $item['name'] ?> </h5>
                <p class="card-text"> <?php echo substr($item['article'], 0, 25) ?> </p>
                <!-- <a href="./single.php" class="btn btn-primary" target="_blank">Article</a> -->
                <a href="./single.php?sport=<?php echo $key; ?>" class="btn btn-primary" target="_blank" onclick="comptage">Article</a>
            </div>
        </div>
    </div>

<?php endforeach; ?>

</div>
 
    <br>
    <a href="./contact.php" target="_blank">Contact</a>

<?php
include_once("footer.php");
?>