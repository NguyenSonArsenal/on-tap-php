<?php
$menuActive = 'channel';
?>
<!DOCTYPE html>
<html>
<head>
    <?php include 'include/inc_head.php' ?>
    <link rel="stylesheet" href="./dist/css/channel.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php include 'include/inc_header.php' ?>

    <?php include 'include/inc_sidebar.php' ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content-header">
            <h1 class="pull-left">Danh sách kênh quảng cáo</h1>
            <button type="button" class="btn btn-warning pull-right"
                    data-toggle="modal" data-target="#modal-add-channel">
                <i class="fa fa-plus" aria-hidden="true"></i>
                Thêm kênh quảng cáo</button>
            <div class="clearfix"></div>
        </section>

        <section class="content">
            <div class="row">
                <!-- /.col -->
                <div class="col-md-12">
                    <div class="box box-primary">

                        <!-- Search and Filter -->
                        <div class="box-header with-border">
                            <div class="search-filter">
                                <div class="searchbox marginRight">
                                     <input type="text" class="form-control" placeholder="Tìm kiếm">
                                </div>
                                <div class="sort marginRight">
                                    <select class="form-control" id="sel1">
                                        <option>Sắp xếp theo mới nhất</option>
                                        <option>Sắp xếp theo cũ nhất</option>
                                        <option>Sắp xếp theo Tỉ lệ chuyển đổi</option>
                                    </select>
                                </div>
                                <div class="status marginRight">
                                    <select class="form-control" id="sel1">
                                        <option>Tất cả</option>
                                        <option>Online</option>
                                        <option>Offline</option>
                                    </select>
                                </div>
                                <div class="search marginRight">
                                    <button class="btn btn-primary">
                                        <i class="fa fa-search-minus" aria-hidden="true"></i>
                                        Tìm kiếm
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- End Search and Filter -->

                        <!-- data -->
                        <div class="box-body no-padding">
                            <div class="table-responsive mailbox-messages">
                                <table class="table table-hover table-striped dataTable table-bordered">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" id="check-all-checkbox"></th>
                                            <th>Ảnh đại diện</th>
                                            <th>Tên landing</th>
                                            <th>Mẫu quảng cáo</th>
                                            <th>Tỉ lệ chuyển đổi kênh quảng cáo</th>
                                            <th>Trạng thái</th>
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
                                            <img src="./dist/img/user4-128x128.jpg" height="40" width="40" alt="name image">
                                        </td>
                                        <td>
                                            <div class="channel-info">
                                                <b>VnExpress</b>(123)
                                                <span>Kênh thông tin</span>
                                                <small>Đã cập nhật 24/12/2017 | 07:42
                                                </small>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="load-more">
                                                <div class="top">
                                                    <a href="javascript:void(0)">
                                                        1
                                                        <i class="fa fa-file-text" aria-hidden="true"></i>
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
                                            <div class="conversion-rate">
                                                <a href="javascript:void(0)">
                                                    0
                                                    <i class="fa fa-refresh" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status">
                                                <b>Online</b>
                                                <br>
                                                <small class="no-link-web">Chưa nhập đường dẫn kênh</small>
                                            </div>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-xs">
                                                <i class="fa fa-edit"></i>
                                                Chỉnh sửa
                                            </a>
                                            <a class="btn btn-danger btn-xs">
                                                <i class="fa-trash fa"></i>
                                                Xóa
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
                                                    <img src="./dist/img/user4-128x128.jpg" height="40" width="40" alt="name image">
                                                </td>
                                                <td>
                                                    <div class="channel-info">
                                                        <b>VnExpress</b>(123)
                                                        <span>Kênh thông tin</span>
                                                        <small>Đã cập nhật 24/12/2017 | 07:42</small>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="load-more">
                                                        <div class="top">
                                                            <a href="javascript:void(0)">
                                                                1
                                                                <i class="fa fa-file-text" aria-hidden="true"></i>
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
                                                    <div class="conversion-rate">
                                                        <a href="javascript:void(0)">
                                                            0
                                                            <i class="fa fa-refresh" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="status">
                                                        <b>Online</b>
                                                        <br>
                                                        <small class="link-web">xxx.18+</small>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                        Chỉnh sửa
                                                    </a>
                                                    <a class="btn btn-danger btn-xs">
                                                        <i class="fa-trash fa"></i>
                                                        Xóa
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

    <!-- Modal add channel-->
    <?php include 'include/inc_modal_add_channel.php' ?>
    <!-- End modal add channel-->


</div>
<!-- ./wrapper -->
<?php include 'include/inc_js.php'?>

</body>
</html>
