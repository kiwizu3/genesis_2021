<?php
function active($currect_page)
{
    $url_array =  explode('/', $_SERVER['REQUEST_URI']);
    $url = end($url_array);
    if ($currect_page == $url) {
        echo 'active'; //class name in css 
    }
}
?>
<style>
    .active {
        font-weight: bold;
    }
</style>

<div class="row">
    <div class="col-12 px-0">
        <header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-body border-bottom shadow-sm">
            <p class="h5 my-0 me-md-auto fw-normal">
                <a class="navbar-brand text-dark font-weight-bold" href="index.php">Genesis</a>
            </p>
            <nav class="my-2 my-md-0 me-md-3">
                <a class="px-2 btn-sm text-dark text-decoration-none <?php active('products.php'); ?>" href="products.php">3D Products</a>
                <a class="px-2 btn-sm text-dark text-decoration-none <?php active('designs.php'); ?>" href="designs.php">3D Designs</a>
                <a class="px-2 btn-sm text-dark text-decoration-none <?php active('education.php'); ?>" href="education.php">Get Educated</a>
                <a class="px-2 btn-sm text-dark text-decoration-none <?php active('studio.php'); ?>" href="studio.php">3D Studio</a>
            </nav>
            <a class="btn btn-dark btn-sm rounded-0" href="login.php">Login</a>
        </header>
    </div>
</div>