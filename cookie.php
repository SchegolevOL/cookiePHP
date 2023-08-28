<?php
$email=$_POST['email'];
$password =$_POST['password'];
if (!isset($_COOKIE['email'])) {
    setcookie("email_",$email , time() + 60 * 60 * 24, "/", "", 0);
    setcookie("password_",$password , time() + 60 * 60 * 24, "/", "", 0);
    header('location:about.php');
    exit();
}
