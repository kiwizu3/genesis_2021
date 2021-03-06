<!DOCTYPE html>
<html lang="en">

<?php
$title = 'Login';
$style = 'login.css';
include 'bootstrap.php';
?>

<body>
    <div class="container-fluid">
        <?php include("navbar.php") ?>

        <div class="row h-50">
            <div class="col bg-dark my-auto h-100">
                <div class="text-dark my-auto">
                    <h2>Genesis<br> Register Page</h2>
                    <p>Login or register from here to access.</p>
                </div>
            </div>

            <div class="col my-auto h-100">
                <div class="login-form my-auto">
                    <form>
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control" placeholder="User Name" value="admin">
                        </div>
                        <div class="form-group my-2">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Password" value="admin@mail.com">
                        </div>
                        <div class="form-group my-2">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" value="admin">
                        </div>
                        <div class="form-group my-2">
                            <label>Re-Password</label>
                            <input type="password" class="form-control" placeholder="Password" value="admin">
                        </div>
                        <div class="form-group my-2">
                            <label>User Role</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select User Role</option>
                                <option value="1">User</option>
                                <option value="2">Designer</option>
                                <option value="3">Vendor</option>
                            </select>
                        </div>
                        <a href="admin/index.php" type="submit" class="btn btn-black text-white rounded-0">Login</a>
                        <a href="register.php" type="button" class="btn btn-secondary rounded-0">Register</a>
                    </form>
                </div>
            </div>
        </div>

</body>

</html>