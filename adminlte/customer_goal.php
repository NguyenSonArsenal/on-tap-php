<?php
$menuActive = 'customerGoal';
?>

<!DOCTYPE html>
<html>
<head>
    <?php include 'include/inc_head.php' ?>
    <link rel="stylesheet" href="./dist/css/customer_goal.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php include 'include/inc_header.php' ?>

    <?php include 'include/inc_sidebar.php' ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content-header">
            <h1 class="pull-left">Danh sách khách hàng mục tiêu</h1>
            <button type="button" class="btn btn-warning pull-right"
                    data-toggle="modal" data-target="#modal-add-customer-goal">
                <i class="fa fa-plus" aria-hidden="true"></i>
                Thêm khách hàng mục tiêu</button>
            <div class="clearfix"></div>
        </section>

        <section class="content">
            <div class="row">
                <!-- /.col -->
                <div class="col-md-12">
                    <div class="box box-primary">

                        <!-- Search and Filter -->
                        <?php include 'include/inc_search_filter.php' ?>
                        <!-- End Search and Filter -->

                        <!-- data -->
                        <div class="box-body no-padding">
                            <div class="table-responsive mailbox-messages">
                                <table class="table table-hover table-striped dataTable table-bordered">
                                    <thead>
                                        <tr>
                                        <th><input type="checkbox" id="check-all-checkbox"></th>
                                        <th>Thông tin</th>
                                        <th>Nhóm khách hàng</th>
                                        <th>Độ tuổi</th>
                                        <th>Vị trí địa lý</th>
                                        <th>Thao tác</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div>
                                                    <label>
                                                        <input type="checkbox">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="info">
                                                    <b>VnExpress</b>(123)
                                                    <span>Kênh thông tin</span>
                                                    <small>Đã cập nhật 24/12/2017 | 07:42
                                                    </small>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascipt:void(0)">
                                                    <i class="fa fa-bullhorn color-back" aria-hidden="true"></i>
                                                </a>
                                                <span class="bold">Đã tham gia một chiến dịch</span>
                                            </td>
                                            <td>
                                                <a href="javascipt:void(0)">
                                                    <i class="fa fa-venus-mars color-back" aria-hidden="true"></i>
                                                </a>
                                                <b>20-35</b>
                                            </td>
                                            <td>
                                                <a href="javascipt:void(0)">
                                                    <i class="fa fa-map-marker color-back" aria-hidden="true"></i>
                                                </a>
                                                <b>Hà Nội, TP. Hồ Chí minh</b>
                                            </td>
                                            <td>
                                                <a class="btn btn-primary btn-xs">
                                                    <i class="fa fa-edit"></i>
                                                    Chỉnh sửa
                                                </a>
                                            </td>
                                        </tr>

                                        <?php for($i=0; $i<5; $i++) { ?>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <label>
                                                            <input type="checkbox">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="info">
                                                        <b>VnExpress</b>(123)
                                                        <span>Kênh thông tin</span>
                                                        <small>Đã cập nhật 24/12/2017 | 07:42
                                                        </small>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascipt:void(0)">
                                                        <i class="fa fa-bullhorn color-back" aria-hidden="true"></i>
                                                    </a>
                                                    <span class="not-bold">Chưa tham gia Chiến dịch</span>
                                                </td>
                                                <td>
                                                    <a href="javascipt:void(0)">
                                                        <i class="fa fa-venus-mars color-back" aria-hidden="true"></i>
                                                    </a>
                                                    <b>20-35</b>
                                                </td>
                                                <td>
                                                    <a href="javascipt:void(0)">
                                                        <i class="fa fa-map-marker color-back" aria-hidden="true"></i>
                                                    </a>
                                                    <b>Hà Nội, TP. Hồ Chí minh</b>
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                        Chỉnh sửa
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>

                                    </tbody>
                                </table>
                                <!-- /.table -->
                            </div>
                            <!-- /.mail-box-messages -->

                            <!-- Paginate -->
                            <?php include 'include/inc_paginate.php' ?>
                            <!-- End paginate -->

                        </div>
                        <!-- end data -->
                    </div>
                    <!-- /. box -->
                </div>
                <!-- /.col -->
            </div>
        </section>

    </div>
    <!-- /.content-wrapper -->

    <!-- Modal add customer goal-->
    <?php include 'include/inc_modal_add_customer_goal.php' ?>
    <!-- End modal add customer goal-->


</div>
<!-- ./wrapper -->

<?php include 'include/inc_js.php'?>

</body>
</html>
