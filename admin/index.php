<?php

include 'session.php';
$user = $login_session;
$path = chop($user, "@mail.com");
if ($path == "admin") {
    header('Location: dashboard.php');
}
if ($path == "user") {
    header('Location: notifications.php');
}
?>