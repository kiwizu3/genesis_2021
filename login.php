<!DOCTYPE html>
<html lang="en">

<?php
$title = 'Login';
$style = 'login.css';
include 'bootstrap.php';

include 'config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 

    $name = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $sql = "SELECT id FROM users WHERE email = '$name' and password = '$password'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $active = $row['active'];
    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {
        // session_register("name");
        $_SESSION['login_user'] = $name;
         header("location: admin/index.php");
    } else {
        $error = "Your Login Name or Password is invalid";
    }
}


?>

<body>
    <div class="container-fluid">
        <?php include("navbar.php") ?>

        <div class="row h-50">
            <div class="col bg-dark my-auto h-100">
                <div class="login-main-text my-auto">
                    <h2>Genesis<br> Login Page</h2>
                    <p>Login or register from here to access.</p>
                </div>
            </div>

            <div class="col my-auto h-100">
                <div class="login-form my-auto">
                    <form action="" method="post">
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control" placeholder="User Name" name="username">
                        </div>
                        <div class="form-group my-2">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <input type="submit" class="btn btn-black text-white rounded-0"/>
                        <a href="register.php" type="button" class="btn btn-secondary rounded-0">Register</a>
                    </form>
                </div>
            </div>
        </div>

</body>

</html>