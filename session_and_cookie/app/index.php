<?php
namespace session_and_cookie\app;

session_start();

use session_and_cookie\app\Session as Session;
use session_and_cookie\app\Cookie as Cookie;

require './Session.php';
require './Cookie.php';
echo 'Cookie: ';
var_dump($_COOKIE);
echo 'Session: ';
var_dump($_SESSION);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AppSessionCookie</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link href="/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--font awesome -->
    <link href="/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="./assets/css/index.css">

</head>
<body>

<div class="wrapper">

    <a class="link_logout" href="logout.php">Đăng xuat</a>

    <?php if (isset($_SESSION['email']) || isset($_COOKIE['email'])) { ?>
        <a class="link_login" href="#"><?php echo Cookie::get('email'); ?></a>
    <?php }  else { ?>
        <a class="link_login" href="login.php">Đăng nhập</a>
    <?php } ?>

    <div style="clear:both;"></div>

    <div class="show_img">
        <img src="./assets/images/giay.jpeg" alt="image_name">
    </div>

    <button class="btn btn-success btn_mua_hang">Mua hàng</button>
</div>

<script src=""></script>

</body>
</html>