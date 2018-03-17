<?php
$menuActive = 'configDomain';
?>

<!DOCTYPE html>
<html>
<head>
    <?php include 'include/inc_head.php' ?>

    <link rel="stylesheet" href="dist/css/configdomain.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php include 'include/inc_header.php' ?>
    <?php include 'include/inc_sidebar.php' ?>

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

        <!-- Modal chon kenh -->
        <div id="modal_add_route" class="modal fade" role="dialog">
            <div class="modal-dialog" style="width: 400px;">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="input-group input-group-sm" style="width: 100%">
                            <input type="text" name="" class="form-control" placeholder="Search">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="val-li" style="margin-bottom: 5px" data-content="facebook">
                            <a class="btn btn-block btn-social btn-facebook">
                                <i class="fa fa-facebook"></i> Facebook
                            </a>
                        </div>
                        <div class="val-li" style="margin-bottom: 5px" data-content="google">
                            <a class="btn btn-block btn-social btn-google">
                                <i class="fa fa-google-plus"></i> Google
                            </a>
                        </div>
                        <div class="val-li" style="margin-bottom: 5px" data-content="twitter">
                            <a class="btn btn-block btn-social btn-twitter">
                                <i class="fa fa-twitter"></i> Twitter
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End modal chon kenh -->

        <!-- Modal them san pham moi -->
        <?php include 'include/inc_modal_add_product.php' ?>
        <!-- End Modal them san pham moi -->

        <!-- Modal add customer goal-->
        <?php include 'include/inc_modal_add_customer_goal.php' ?>
        <!-- End modal add customer goal-->

        <!-- Modal them lich su khach hang muc tieu-->
        <?php include 'include/inc_modal_add_history_customer.php' ?>
        <!-- End Modal lich su them khach hang muc tieu-->

    </div>
    <!-- ./wrapper -->

    <?php include 'include/inc_js.php' ?>

</div>
</body>
</html>
