<?php
$menuActive = 'campaign';
?>
<!DOCTYPE html>
<html>
<head>
    <?php include 'include/inc_head.php' ?>
    <link rel="stylesheet" href="dist/css/campaign.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php include 'include/inc_header.php' ?>
    <?php include 'include/inc_sidebar.php' ?>

    <div class="content-wrapper">
        <section class="content-header">
            <h1 class="pull-left">Danh sách chiến dịch</h1>
            <a href="campaign_construction.php" class="btn btn-warning pull-right">
                <i class="fa fa-plus" aria-hidden="true"></i>
                Xây dựng chiến dịch</a>
            <div class="clearfix"></div>
        </section>

        <section class="content">
            <div class="row">
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
                                <div class="input-group marginRight">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control datepicker" placeholder="Ngày bắt đầu">
                                </div>
                                <div class="input-group marginRight">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control datepicker" placeholder="Ngày kết thúc">
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

                        <div class="box-body no-padding">
                            <div class="table-responsive mailbox-messages">
                                <table class="table table-hover table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Tên chiến dịch</th>
                                            <th>Thời gian</th>
                                            <th>Sản phẩm</th>
                                            <th>Ngày cập nhật</th>
                                            <th>Chi phí</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php for ($i = 0; $i < 10; $i++) { ?>
                                        <tr>
                                            <td><span class="name-campaign"> Tên chiến dịch</span></td>
                                            <td>(25/12/2017 - 06/01/2018)</td>
                                            <td>
                                                <img src="http://demo.ezimar.vn/public/upload/product/3383-ao-len-co-tron-han-quoc-1.jpg"
                                                     height="20px" width="20px" />
                                                <span>Z1237 - Áo len mùa đông</span>
                                            </td>
                                            <td>
                                                <div class="content-edit">
                                                    <small>25/12/2017 | 22:31</small>
                                                </div>
                                            </td>
                                            <td>500,000 VND / Ngày
                                            </td>
                                            <td>
                                                <a class="btn btn-primary btn-xs" href="campaign_construction.php">
                                                    <i class="fa-trash fa icon-delete"></i>
                                                    Chỉnh sửa
                                                </a>
                                                <button type="button" class="btn btn-info btn-xs"
                                                        data-toggle="modal" data-target="#modal-detail-campain">
                                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                                    Chi tiết
                                                </button>
                                                <a class="btn btn-danger btn-xs">
                                                    <i class="fa-trash fa icon-delete"></i>
                                                    Xóa
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.mail-box-messages -->

                            <!-- Paginate -->
                            <?php include 'include/inc_paginate.php' ?>
                            <!-- End paginate -->

                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /. box -->
                </div>
                <!-- /.col -->
            </div>
        </section>
    </div>
    <!-- ./wrapper -->

    <!-- Modal detail campain -->
    <?php include 'include/inc_modal_detail_campain.php' ?>
    <!-- End modal detail campain -->

    <!-- Modal detail campain -->
    <?php include 'include/inc_modal_edit_campain.php' ?>
    <!-- End modal detail campain -->

    <?php include 'include/inc_js.php' ?>
</div>
</body>
</html>
