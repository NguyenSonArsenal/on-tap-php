<?php
require '../../bootstrap/Autoload.php';

use admin\Controllers\AuthAdminController;

$auth = AuthAdminController::login();

$errors = [];
if(isset($auth['errors']))
    $errors = $auth['errors'];
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Do_an | Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
          name="viewport">

    <link href="/bower_components/bootstrap-4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--font awesome -->
    <link href="/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/assets/css/login.css">

</head>
<body>

<div class="wrapper">
    <div class="login">
        <div class="form_login">
            <h3>Login</h3>
            <form action="#" method="post" name="formLogin">
                <div class="key">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input class="input_password" type="text"
                           name="username" placeholder="username"
                           value="<?php echo isset($auth['username']) ? $auth['username'] : '' ?>">
                    <div class="clearfix"></div>
                </div>
                <p class="show_errors"><?php echo isset($errors['username']) ? $errors['username'] : '' ; ?></p>
                <div class="key">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <input class="input_email" type="email" name="email"
                           placeholder="vanson297.nguyen@gmail.com"
                           value="<?php echo isset($auth['email']) ? $auth['email'] : '' ?>">
                    <div class="clearfix"></div>
                </div>
                <p class="show_errors"><?php echo isset($errors['email']) ? $errors['email'] : '' ; ?></p>
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
