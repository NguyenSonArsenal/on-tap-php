<?php
require '../../../bootstrap/Autoload.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?=asset('bower_components/bootstrap/dist/css/bootstrap.min.css')?>">
    <link href="/bower_components/bootstrap/dist/css/bootstrap.min.css'">
    <!-- Font Awesome -->
<!--    <link rel="stylesheet" href="--><?//=asset('bower_components/font-awesome/css/font-awesome.min.css')?><!--">-->
<!--    <!-- Theme style -->-->
<!--    <link rel="stylesheet" href="--><?//=asset('assets/css/AdminLTE.min.css')?><!--">-->
<!---->
<!--    <link rel="stylesheet" href="--><?//=asset('bower_components/select2/dist/css/select2.min.css')?><!--">-->
<!--    <!-- Style inc -->-->
<!--<!--    <link rel="stylesheet" href="-->--><?////=asset('assets/css/inc_.css')?><!--<!--">-->-->
<!--    <link rel="stylesheet" href="../../../assets/css/inc_.css'">-->
<!--    <link rel="stylesheet" href="--><?//=asset('assets/css/admin/module/programs/index.css') ?><!--">-->
<!--</head>-->

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


    <div class="content-wrapper" style="min-height: 1036px;">
        <section class="content-header">
            <h1 class="pull-left">Cấu hình domain</h1>
            <div class="clearfix"></div>
        </section>

        <section class="content">
            <div class="row">
                <!-- /.col -->
                <div class="col-md-12">
                    <div class="box box-primary">
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="" class="col-md-3 control-label">Website:</label>
                                    <div class="col-md-8">
                                        <div class="col-md-11">

                                            <div class="input-group" id="input-add-domain-default">
                                                <select name="" id="" class="form-control">
                                                    <option value="0">Chọn tên domain</option>
                                                </select>
                                            </div>

                                            <div class="input-group" id="input-add-domain">
                                                <span class="input-group-addon">http://</span>
                                                <input type="text" name="website" value="" class="form-control"
                                                       placeholder="Địa chỉ Website">
                                                <span class="btn-process-domain">
                                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                    <i class="fa fa-times-circle" id="remove-add-domain" aria-hidden="true"></i>
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </span>
                                            </div>

                                        </div>
                                        <div class="col-md-1">
                                            <a id="btn-process-add-domain" href="">
                                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-3 control-label">Email:</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" placeholder="Địa chỉ email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-3 control-label">ID Facebook Pixel:</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" placeholder="ID Facebook Pixel">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-3 control-label">ID Google Analytics:</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" placeholder="ID Google Analytics">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-3 control-label">
                                        Chọn landing mặc định khi vào domain của bạn:</label>
                                    <div class="col-md-8">
                                        <select class="form-control" id="sel1">
                                            <option value="0">-- Chọn landing mặc định --</option>
                                            <option value="1">xxx</option>
                                            <option value="2">18+</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <!-- footer modal -->
                            <div class="box-footer">
                                <div class="row">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-8">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-save" aria-hidden="true"></i>
                                            Cập nhật
                                        </button>
                                    </div>
                                </div>

                            </div>
                            <!-- End footer modal -->
                        </form>
                        <!-- /.box-body -->
                    </div>
                    <!-- /. box -->
                </div>
                <!-- /.col -->
            </div>
        </section>

    </div>
    <!-- ./wrapper -->

    <?php include asset('admin/include/inc_js.php') ?>

</div>
</body>
</html>
