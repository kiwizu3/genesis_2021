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
                <img src="images/custom3Dproducts.png" alt="">
            </div>
            <div class="col-6 my-auto">
                <h2>Bring your idea to life</h2>
                <p>Upload your 3D design fileand choose your size, color and material</p>
                <input type="file" placeholder="Drag and drop your design image here" />
                <div class="d-flex my-2">
                    <input type="color" id="favcolor" name="favcolor" value="#0d6efd">
                    <input type="range" class="form-range ps-2" min="0" max="5" step="0.5" id="customRange3">
                
                </div>

                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Plastic - ABS
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Plastic - PLA
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                        <label class="form-check-label" for="flexRadioDefault3">
                            Nylon
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                        <label class="form-check-label" for="flexRadioDefault4">
                            HIPS
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                        <label class="form-check-label" for="flexRadioDefault5">
                            LayBrick
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
                        <label class="form-check-label" for="flexRadioDefault6">
                            LayWood
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
                        <label class="form-check-label" for="flexRadioDefault7">
                            T-Glase
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault8">
                        <label class="form-check-label" for="flexRadioDefault8">
                            Metal
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault9">
                        <label class="form-check-label" for="flexRadioDefault9">
                            Ceramics
                        </label>
                    </div>
                </div>

                <div class="d-flex">
                    <a class="btn btn-secondary me-2 rounded-0" href="studio.php">Back</a>
                    <a class="btn btn-primary rounded-0" href="designVendorRecommendation.php">Submit</a>
                </div>
            </div>

        </div>
    </div>
</body>

</html>