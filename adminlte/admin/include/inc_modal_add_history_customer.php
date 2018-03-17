<div id="modal_history_customer_goal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Lịch sử khách hàng mục tiêu</h4>
            </div>
            <div class="modal-body">

                <div class="box-body no-padding">
                    <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped dataTable table-bordered">
                            <thead>
                                <tr>
                                    <th>Thông tin website</th>
                                    <th>Nhóm khách hàng</th>
                                    <th>Độ tuổi</th>
                                    <th>Vị trí địa lý</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php for($i=0; $i<5; $i++) { ?>
                                <tr>
                                    <td>
                                        <div class="text-data">
                                            <b>VnExpress</b>(123)
                                            <span>Kênh thông tin</span>
                                            <small>Đã cập nhật 24/12/2017 | 07:42</small>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="javascipt:void(0)">
                                            <i class="fa fa-bullhorn color-black" aria-hidden="true"></i>
                                        </a>
                                        <span class="not-bold">Chưa tham gia một chiến dịch</span>
                                    </td>
                                    <td>
                                        <a href="javascipt:void(0)">
                                            <i class="fa fa-venus-mars color-black" aria-hidden="true"></i>
                                        </a>
                                        <b>20-35</b>
                                    </td>
                                    <td>
                                        <a href="javascipt:void(0)">
                                            <i class="fa fa-map-marker color-black" aria-hidden="true"></i>
                                        </a>
                                        <b>Hà Nội, TP. Hồ Chí minh</b>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-xs">
                                            <i class="fa fa-edit"></i>
                                            Chỉnh sửa
                                        </a>
                                        <a class="btn btn-info btn-xs">
                                            <i class="fa-copy fa"></i>
                                            Chọn
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>

                            </tbody>
                        </table>
                        <!-- /.table -->
                    </div>
                    <!-- /.mail-box-messages -->
                </div>

                <!-- Paginate -->
                <?php include 'include/inc_paginate.php' ?>
                <!-- End paginate -->

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            </div>
        </div>

    </div>

</div>