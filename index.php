<!DOCTYPE html>
<html lang="en">

<?php
$title = 'Home';
$style = '';
include 'bootstrap.php';
?>

<body>
    <div class="container-fluid">
<?php include("navbar.php") ?>

        <div class="row bg-image">
            <div class="col-md-5 p-lg-5 mx-auto my-5 position-relative">
                <!-- <h1 class="display-4 fw-normal">Punny headline</h1>
            <p class="lead fw-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p> -->
                <div class="position-absolute action-button-container-01">
                    <a class="btn btn-primary rounded-0 me-2" href="#">Explore Products</a>
                    <a class="btn btn-success rounded-0" href="#">Get Custom Items</a>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <h3>Genesis News</h3>
                <div class="card shadow p-4 border-0">
                    <div class="d-flex align-items-center justify-content-between my-4 py-3 p-4">
                        <div>
                            <h5>Design of the month</h5>
                            <div>
                                <button class="btn btn-success rounded-0 me-2">View Designer</button>
                                <button class="btn btn-primary rounded-0">View Designer</button>
                            </div>
                        </div>
                        <div>
                            <h6>Iron Man Helmet</h6>
                            <p>The 3D model of the helmet of Ironman in Avengers</p>
                            <h4>
                                $19.99
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-4">
                <div class="card p-4 border-0 shadow my-4 h-100">
                    <h6>Get Customized Items</h6>
                    <div>
                        <button class="btn btn-transparent btn-sm rounded-0 p-0">View Designer</button>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card p-4 border-0 shadow my-4 h-100">
                    <h6>Join us Free</h6>
                    <h6>Becom a member</h6>
                    <div>
                        <button class="btn btn-transparent btn-sm rounded-0 p-0">Sign up now</button>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card p-4 border-0 shadow my-4 h-100">
                    <h6>Cyber sale!!!</h6>
                    <div>
                        <button class="btn btn-transparent btn-sm rounded-0 p-0">View More Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>