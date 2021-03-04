<!DOCTYPE html>
<html lang="en">

<?php
$title = '3D Studio';
$style = '';
include 'bootstrap.php';
?>

<body>
    <div class="container-fluid">
        <?php include("navbar.php") ?>
        <div class="row">
            <div class="col-6 my-auto">
                <h2>Turn your ideas into object with Genesis Studio</h2>
                <p>Genesis Studio gives you access to a range of 3D designers, allowing you to choose from a variety of models and products, all thanks to 3D printing!</p>
                <div class="d-flex">
                    <a class="btn btn-success me-2 rounded-0" href="customDesign.php">Buy Custom Design</A>
                    <a class="btn btn-primary rounded-0" href="customProduct.php">Buy Custom Product</a>
                </div>
            </div>
            <div class="col-6 my-auto">
                <img src="images/studio.png" alt="">
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12 my-4 ">
                <hr>
                <h4>How it works</h4>
            </div>
            <div class="col-3">
                <img src="images/1.png" alt="">
            </div>
            <div class="col-3">
                <img src="images/2.png" alt="">
            </div>
            <div class="col-3">
                <img src="images/3.png" alt="">
            </div>
            <div class="col-3">
                <img src="images/4.png" alt="">
            </div>
        </div>
    </div>
</body>

</html>