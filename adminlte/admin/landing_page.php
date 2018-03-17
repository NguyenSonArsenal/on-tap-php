<?php
$menuActive = 'landingPage';
?>

<!DOCTYPE html>
<html>
<head>
    <?php include 'include/inc_head.php' ?>
    <link rel="stylesheet" href="./dist/css/landing_page.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php include 'include/inc_header.php' ?>

    <?php include 'include/inc_sidebar.php' ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content-header">
            <h1 class="pull-left">Danh sách Landing page</h1>
            <a href="" class="btn btn-warning pull-right">
                <i class="fa fa-plus" aria-hidden="true"></i>
                Thiết kế Landing page
            </a>
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

                        <div class="box-body no-padding">
                            <div class="table-responsive mailbox-messages">
                                <table class="table table-hover table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" id="check-all-checkbox"></th>
                                            <th>Trạng thái</th>
                                            <th>Tên landing</th>
                                            <th>Chiến dịch tham gia</th>
                                            <th>Ngày tạo</th>
                                            <th>Ngày cập nhật</th>
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
                                                <input type="checkbox" checked data-toggle="toggle"
                                                       data-on="Đã xuất bản" data-off="Tạm khóa"
                                                       data-onstyle="primary" data-offstyle="danger"
                                                       data-size="mini"
                                                >
                                            </td>
                                            <td>
                                                <div class="content-param">
                                                    <label>
                                                        <b>xxx</b>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="content-campaign-statistics">
                                                    <div class="top">
                                                        <a href="javascript:void(0)">
                                                            1
                                                            <i class="fa fa-bullhorn color-back" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                    <div class="title-load-more">
                                                        <a href="">
                                                            Xem thêm
                                                            <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="content-edit">
                                                    <small>Đã cập nhật 26/12/2017 | 04:47</small>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="content-edit">
                                                    <small>Đã cập nhật 26/12/2017 | 04:47</small>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="btn btn-primary btn-xs">
                                                    <i class="fa fa-edit"></i>
                                                    Chỉnh sửa
                                                </a>
                                                <a class="btn btn-info btn-xs">
                                                    <i class="fa-copy fa"></i>
                                                    Copy
                                                </a>
                                                <a class="btn btn-danger btn-xs">
                                                    <i class="fa-trash fa"></i>
                                                    Xóa
                                                </a>
                                            </td>
                                        </tr>

                                        <?php for ($i = 0; $i < 10; $i++) { ?>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <label>
                                                            <input type="checkbox">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-xs"
                                                            data-toggle="modal" data-target="#modalForDraff">Nháp
                                                    </button>
                                                </td>
                                                <td>
                                                    <div class="content-param">
                                                        <label>
                                                            <b>xxx</b>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="content-campaign-statistics">
                                                        <span>Chưa tham gia chiến dịch</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="content-edit">
                                                        <small>Đã cập nhật 26/12/2017 | 04:47</small>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="content-edit">
                                                        <small>Đã cập nhật 26/12/2017 | 04:47</small>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                        Chỉnh sửa
                                                    </a>
                                                    <a class="btn btn-info btn-xs">
                                                        <i class="fa-copy fa"></i>
                                                        Copy
                                                    </a>
                                                    <a class="btn btn-danger btn-xs">
                                                        <i class="fa-trash fa"></i>
                                                        Xóa
                                                    </a>
                                                </td>
                                            </tr>

                                            <?php
                                        }
                                        ?>

                                    </tbody>
                                </table>
                                <!-- /.table -->
                            </div>
                            <!-- End mail-box-messages -->

                            <!-- Paginate -->
                            <?php include 'include/inc_paginate.php' ?>
                            <!-- End paginate -->

                        </div>
                        <!-- End box-body -->
                    </div>
                    <!-- /. box -->
                </div>
                <!-- /.col -->
            </div>
        </section>

    </div>
    <!-- /.content-wrapper -->

    <!-- Modal -->
    <div class="modal fade" id="modalForDraff" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><b>Xuất bản theo tên miền .ezimar</b></h4>
                </div>
                <div class="modal-body">
                    <div class="b_publish_title">
                        <i class="material-icons left">public</i>Xuất bản dưới tên miền ezimar.vn
                    </div>
                    <div class="input-subdomain">
                        <input type="text" name="publish_subdomain" class="i-subdomain"
                               placeholder="subdomain*">
                        <span>.ezimar.vn</span>
                        <br>
                    </div>
                    <small class="helper">* Trường thông tin bắt buộc</small>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-success" data-dismiss="modal">Xuất bản</button>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- ./wrapper -->
<?php include 'include/inc_js.php' ?>

</body>
</html>
