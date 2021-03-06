<?php
use Library\Session;

// neu chua dang nhap thi phai dang nhap
if(Session::get('admin_logged') == 0)
{
    return redirect('../../login');
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Do_an</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link href="<?= asset('bower_components/bootstrap-4.0.0/dist/css/bootstrap.min.css') ?>"
          rel="stylesheet">

    <link href="<?= asset('bower_components/select2/dist/css/select2.min.css') ?>"
          rel="stylesheet">
    <!--font awesome -->
    <link href="<?= asset('/bower_components/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">

    <link rel="stylesheet" href="<?= asset('/admin/views/assets/css/hobbies.css') ?>">
    <link rel="stylesheet" href="<?= asset('/assets/css/pagination.css') ?>">
    <link rel="stylesheet" href="<?= asset('/assets/css/searchbox.css') ?>">

</head>
<body>
<div class="wrapper">

    <div class="navbar">
        <div class="title">PHP final</div>
        <div class="infor">
            <?php if (Session::has('username')) : ?>
                <a href="" class="name_admin"><?=$_SESSION['username'] ?></a>
                <span> | </span>
                <a href="../../logout.php" class="logout">Logout</a>
            <?php endif; ?>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>