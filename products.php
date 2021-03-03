<!DOCTYPE html>
<html lang="en">

<?php
$title = '3D Products';
$style = 'products.css';
include 'bootstrap.php';
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

<body>
    <div class="container-fluid">
        <?php include("navbar.php") ?>

        <div class="row">
        <img src="images/designs.png" alt="">
        </div>
        
        <div class="row my-4">
            <div class="col-3">
                <div class="card border-0 rounded-0">
                    <ul class="list-group">
                        <p class="ps-3 mb-0"><strong>Categories</strong></p>
                        <li class="list-group-item">Art</li>
                        <li class="list-group-item">Fashion</li>
                        <li class="list-group-item">Gadgets</li>
                        <li class="list-group-item">Hoousehold</li>
                        <li class="list-group-item">Models</li>
                        <li class="list-group-item">Toys</li>
                        <li class="list-group-item">Tools</li>
                        <li class="list-group-item">Other</li>
                    </ul>
                </div>
            </div>
            <div class="col-8">
                <div class="card-group">

                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card shadow rounded-0 border-0">
                                <img src="https://placehold.it/400.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Women's Yellow Top</h5>
                                    <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                                    <span class="price">$699.99</span>
                                </div>
                                <a class="btn btn-primary btn-sm rounded-0" href="">Add to cart</a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow rounded-0 border-0">
                                <img src="https://placehold.it/400.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Women's Yellow Top</h5>
                                    <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                                    <span class="price">$699.99</span>
                                </div>
                                <a class="btn btn-primary btn-sm rounded-0" href="">Add to cart</a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow rounded-0 border-0">
                                <img src="https://placehold.it/400.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Women's Yellow Top</h5>
                                    <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p> -->
                                    <span class="price">$699.99</span>
                                </div>
                                <a class="btn btn-primary btn-sm rounded-0" href="">Add to cart</a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow rounded-0 border-0">
                                <img src="https://placehold.it/400.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Women's Yellow Top</h5>
                                    <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                                    <span class="price">$699.99</span>
                                </div>
                                <a class="btn btn-primary btn-sm rounded-0" href="">Add to cart</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</body>

</html>