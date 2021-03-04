<!DOCTYPE html>
<html lang="en">

<?php
$title = 'My Cart';
$style = 'cart.css';
include 'bootstrap.php';
?>

<body>
    <div class="container-fluid">
        <?php include("navbar.php") ?>


        <div class="row justify-content-center mt-4">
            <div class="col-10">
                <form action="" method="post" id="registration">
                    <nav>
                        <div class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-link active" id="step1-tab" data-toggle="tab" href="#step1">My Cart</a>
                            <a class="nav-link" id="step2-tab" data-toggle="tab" href="#step2">Delivery</a>
                            <a class="nav-link" id="step3-tab" data-toggle="tab" href="#step3">Step 3</a>
                        </div>
                    </nav>
                    <div class="tab-content py-4" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="step1">
                            <table width="100%">
                                <tr>
                                    <td width="70%" style="vertical-align:top">
                                        <h4>My Cart</h4>
                                        <div class="d-flex align-items-center justify-content-start p-2 border border-muted me-2">
                                            <img class="me-2" src="https://placehold.it/100" alt="">
                                            <div>
                                                <h5 class="mb-0">Product Name</h5>
                                                <small>Product Description</small>
                                                <p>$49.50</p>
                                            </div>
                                            <div class="ms-auto d-flex flex-column align-items-bottom">
                                                <button class="btn btn-sm btn-danger mb-2">Remove</button>
                                                <input class="form-control" type="number" id="quantity" value="1" name="quantity" min="1" max="5">
                                            </div>
                                        </div>
                                    </td>
                                    <td width="30%" style="vertical-align:top">
                                        <h4>Summary</h4>
                                        <div>
                                            <h6>Enter Coupon Code</h6>
                                            <hr />
                                            <div class="d-flex justify-content-between">
                                                <p>Subtotal</p>
                                                <p>$99.00</p>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p>Delivery</p>
                                                <p>$00.00</p>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p>Discount</p>
                                                <p>$00.00</p>
                                            </div>
                                            <hr />
                                            <div class="d-flex justify-content-between">
                                                <h6>Subtotal</h6>
                                                <h6>$99.00</h6>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>

                        </div>
                        <div class="tab-pane fade" id="step2">
                            <table width="100%">
                                <tr>
                                    <td width="70%" style="vertical-align:top">
                                        <h4>Delivery Details</h4>
                                        <div class="me-2">
                                            <div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <input type="text" class="form-control mb-3" placeholder="First name" aria-label="First name">
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" class="form-control mb-3" placeholder="Last name" aria-label="Last name">
                                                    </div>
                                                    <div class="col-12">
                                                        <input type="text" class="form-control mb-3" placeholder="Address" aria-label="Address">
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" class="form-control mb-3" placeholder="Province" aria-label="Province">
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" class="form-control mb-3" placeholder="City" aria-label="City">
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" class="form-control mb-3" placeholder="Zip/ Postal Code" aria-label="Zip/ Postal Code">
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" class="form-control mb-3" placeholder="Phone Number" aria-label="Phone Number">
                                                    </div>
                                                </div>
                                                <div class="d-flex w-100">
                                                    <div class="d-flex align-items-center shadow border-0 me-2 p-4 w-50">
                                                        <input class="form-check-input me-2" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                                                        <div>
                                                            <h5>Genesis Delivery - $2</h5>
                                                            <small>within 24 hours from checkout</small>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center shadow border-0 p-4 w-50">
                                                        <input class="form-check-input me-2" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                                                        <div>
                                                            <h5>Vendor Delivery</h5>
                                                            <small>between 2 -5 working days</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td width="30%" style="vertical-align:top">
                                        <h4>Summary</h4>
                                        <div>
                                            <h6>Enter Coupon Code</h6>
                                            <hr />
                                            <div class="d-flex justify-content-between">
                                                <p>Subtotal</p>
                                                <p>$99.00</p>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p>Delivery</p>
                                                <p>$00.00</p>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p>Discount</p>
                                                <p>$00.00</p>
                                            </div>
                                            <hr />
                                            <div class="d-flex justify-content-between">
                                                <h6>Subtotal</h6>
                                                <h6>$99.00</h6>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="step3">
                            <table width="100%">
                                <tr>
                                    <td width="70%" style="vertical-align:top">
                                        <h4>Payment</h4>
                                        <div class="p-2 border border-muted me-2">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="p-4">
                                                        <div class="panel-heading">
                                                            <h3 class="font-weight-bold">
                                                                Payment Details
                                                            </h3>
                                                            <div class="checkbox float-right">
                                                                <label>
                                                                    <input type="checkbox" />
                                                                    Remember
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="my-2">
                                                            <form role="form">
                                                                <div class="form-group">
                                                                    <label for="cardNumber">
                                                                        CARD NUMBER</label>
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="cardNumber" placeholder="Valid Card Number" required autofocus />
                                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-xs-7 col-md-7">
                                                                        <div class="form-group">
                                                                            <label for="expityMonth">
                                                                                EXPIRY DATE</label>
                                                                            <div class="d-flex">
                                                                                <div class="me-2">
                                                                                    <input type="text" class="form-control" id="expityMonth" placeholder="MM" required />
                                                                                </div>
                                                                                <div>
                                                                                    <input type="text" class="form-control" id="expityYear" placeholder="YY" required />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-5 col-md-5 float-right">
                                                                        <div class="form-group">
                                                                            <label for="cvCode">
                                                                                CV CODE</label>
                                                                            <input type="password" class="form-control" id="cvCode" placeholder="CV" required />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td width="30%" style="vertical-align:top">
                                        <h4>Summary</h4>
                                        <div>
                                            <h6>Enter Coupon Code</h6>
                                            <hr />
                                            <div class="d-flex justify-content-between">
                                                <p>Subtotal</p>
                                                <p>$99.00</p>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p>Delivery</p>
                                                <p>$00.00</p>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p>Discount</p>
                                                <p>$00.00</p>
                                            </div>
                                            <hr />
                                            <div class="d-flex justify-content-between">
                                                <h6>Subtotal</h6>
                                                <h6>$99.00</h6>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-auto"><button type="button" class="btn btn-secondary" data-enchanter="previous">Previous</button></div>
                        <div class="col-auto">
                            <button type="button" class="btn btn-primary" data-enchanter="next">Next</button>
                            <a href="index.php" class="btn btn-primary" data-enchanter="finish">Finish</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
    <script src="cart.js"></script>
    <script>
        var registrationForm = $('#registration');
        var formValidate = registrationForm.validate({
            errorClass: 'is-invalid',
            errorPlacement: () => false
        });

        const wizard = new Enchanter('registration', {}, {
            onNext: () => {
                if (!registrationForm.valid()) {
                    formValidate.focusInvalid();
                    return false;
                }
            }
        });
    </script>

</body>

</html>