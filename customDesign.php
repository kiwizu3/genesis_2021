<!DOCTYPE html>
<html lang="en">

<?php
$title = 'Custom 3D Product';
$style = '';
include 'bootstrap.php';
?>

<body>
    <div class="container-fluid">
        <?php include("navbar.php") ?>
        <div class="row">
            <div class="col-6 my-auto">
                <img src="images/custom3Ddesigns.png" alt="">
            </div>
            <div class="col-6 my-auto">
                <h2>Bring your idea to life</h2>
                <p>Upload your design image, select a category and provide a short description</p>
                <input type="file" placeholder="Drag and drop your design image here" />
                <select class="form-select my-2">
                    <option>Jewelry</option>
                    <option>Action Figure</option>
                    <option>Household Items</option>
                    <option>Toys</option>
                    <option>Gadgets</option>
                    <option>Other</option>
                </select>
                <textarea class="form-control my-2" aria-label="With textarea" rows="5" placeholder="Add a description"></textarea>
                <div class="d-flex">
                    <a class="btn btn-secondary me-2 rounded-0" href="studio.php">Back</a>
                    <a class="btn btn-primary rounded-0" href="designVendorRecommendation.php">Submit</a>
                </div>
            </div>

        </div>
    </div>
</body>

</html>