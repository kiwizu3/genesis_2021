<!DOCTYPE html>
<html lang="en">

<?php
$title = 'Profile';
$style = '';
include 'bootstrap.php';
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    .profile-picture {
        left: 2rem;
        bottom: -4rem;
    }

    .checked {
        color: orange;
    }

    .sidebar-placement {
        padding-top: 5.5rem;
    }
</style>

<body>


    <?php

    // These are the four factors which affects the final rating 
    $quality = 4; 
    $reliability = 2; 
    $cooperation = 2; 
    $overall = 4; 

    // How the median of the four factors are calculated 
    $rating = ($quality + $reliability + $cooperation +$overall)/4;

    ?>

    <div class="container-fluid">
        <?php include("navbar.php") ?>
        <div class="row g-0">
            <div class="col-12">
                <div class="position-relative">
                    <img class="w-100" src="https://placehold.it/1920x600.png" alt="">
                    <img src="https://placehold.it/150/000" class="rounded-circle position-absolute profile-picture" alt="">
                </div>
            </div>
            <div class="col-2 sidebar-placement text-center">
                <button class="btn btn-primary btn-sm my-2 px-4">Follow</button>
                <div class="d-flex justify-content-center">
                    <div class="me-3">
                        <small>Followers</small>
                        <h5>14</h5>
                    </div>
                    <div>
                        <small>Items</small>
                        <h5>09</h5>
                    </div>
                </div>
                <div>
                    <p>Genesis Performance</p>
                    <div class="card p-4 shadow border-0">
                        52 out of 42 Reviews
                    </div>
                </div>
            </div>
            <div class="col-8 pt-4">
                <div class="d-flex align-items-center justify-content-start ms-3 border border-muted p-4">
                    <div>
                        <h3>Jane Doe</h3>
                        <div class="d-flex">
                            <p>3D Designer</p>
                            <div class="ms-2">
                                <span class="fa fa-star <?php if ($rating >= 1) {echo "checked";} ?>"></span>
                                <span class="fa fa-star <?php if ($rating >= 2) {echo "checked";} ?>"></span>
                                <span class="fa fa-star <?php if ($rating >= 3) {echo "checked";} ?>"></span>
                                <span class="fa fa-star <?php if ($rating >= 4) {echo "checked";} ?>"></span>
                                <span class="fa fa-star <?php if ($rating >= 5) {echo "checked";} ?>"></span>
                            </div>
                        </div>
                    </div>
                    <a href="designVendorRecommendation.php" class="btn btn-primary btn-sm rounded-0 ms-2 ms-auto">Back</a>
                    <a href="studio" class="btn btn-primary btn-sm rounded-0 ms-2">Request</a>
                    <a href="user/chat.php" class="btn btn-transparent btn-sm rounded-0">Chat</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>