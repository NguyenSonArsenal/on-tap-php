<?php

namespace session_and_cookie\app;
use session_and_cookie\app\Session as Session;
use session_and_cookie\app\Cookie as Cookie;

require './Session.php';
require './Cookie.php';

session_start();

$emailInit = 'vanson297.nguyen@gmail.com';
$passwordInit = '1';

if(isset($_POST['email']) && isset($_POST['password']))
{
    if ($_POST['email'] === $emailInit && $_POST['password'] === $passwordInit)
    {
        Session::put('email', $_POST['email']);
        Cookie::make('email', $_POST['email'], time()+31556926); // set a year variable cookie
        header("Location:index.php");

    }
    else
    {
        echo "<script>alert('Wrong login or password');</script>";
        echo "<noscript>Wrong login or password</noscript>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AppSessionCookie</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
          name="viewport">

    <link href="/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--font awesome -->
    <link href="/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="./assets/css/login.css">

</head>
<body>

<div class="wrapper">
    <div class="login">
        <div class="form_login">
            <h3>Login</h3>
            <form action="#" method="post" name="formLogin">
                <div class="key">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <input class="input_email" type="email" value="" name="email"
                           placeholder="vanson297.nguyen@gmail.com">
                    <div class="clearfix"></div>
                </div>
                <div class="key">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input class="input_password" type="password" value="" name="password">
                    <div class="clearfix"></div>
                </div>
                <input class="btnLogin" type="submit" value="Login" placeholder="123456">
            </form>
        </div>
        <div class="add_infor">
            <a href="#" class="add_left pull-left">Forgot Password</a>
            <a href="#" class="add_right pull-right">Register</a>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<script src=""></script>

</body>
</html>
