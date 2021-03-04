<!DOCTYPE html>
<html lang="en">

<?php
$title = 'Design Vendor Recommendation';
$style = '';
include 'bootstrap.php';
?>

<body>
    <div class="container-fluid">
        <?php include("navbar.php") ?>
        <div class="row">
            <div class="col-4 my-auto">
                <h2>Based on your requirements we recommend</h2>
                <p>Give your design / product a name and choose a designer / vendor of your choice</p>
                <input type="text" class="form-control" placeholder="Design/ Product Name">
                <select class="form-select my-2">
                    <option>Design/ Vendor Name 1</option>
                    <option>Design/ Vendor Name 2</option>
                    <option>Design/ Vendor Name 3</option>
                    <option>Design/ Vendor Name 4</option>
                    <option>Design/ Vendor Name 5</option>
                    <option>Design/ Vendor Name 6</option>
                </select>
                <div class="d-flex mb-3">
                    <a class="btn btn-secondary me-2 rounded-0" href="studio.php">Back</a>
                    <a class="btn btn-primary rounded-0" href="profile.php">View Profile</a>
                </div>
                <a class="btn btn-primary rounded-0" href="index.php">Send Request</a>
            </div>
            <div class="col-8 my-auto">
                <img src="images/designersVendorRecommend.png" alt="">
            </div>

        </div>
    </div>
</body>

</html>