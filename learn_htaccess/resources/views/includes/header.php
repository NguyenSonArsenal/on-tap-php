

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

    <link rel="stylesheet" href="<?= asset('/assets/css/home.css') ?>">
    <link rel="stylesheet" href="<?= asset('/assets/css/detail.css') ?>">

    <style>
        .number_cart {
            position: relative;
            top: -9px;
            color: yellow;
            font-size: 15px;
            display: none;
        }
    </style>

</head>
<body>


<div class="wrapper">
    <div class="navbar">
        <div class="title">PHP final</div>
        <div class="infor">
            <a href="/cart" class="btn btn-sm btn-success">Cart
                <small class="number_cart">2</small>
            </a>
            <a href="" class="name_admin">name</a>
            <span> | </span>
            <a href="../../logout.php" class="logout">Logout</a>
        </div>
        <div class="clearfix"></div>
    </div>