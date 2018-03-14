<div class="modal fade" id="modal-add-customer-goal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><b>Thêm Khách hàng mục tiêu mới</b></h4>
            </div>

            <!-- Modal body-->
            <div class="modal-body">
                <div class="form-group">
                    <label for="" class="lbl-fix">Tên sản phẩm:</label>
                    <input type="text" class="form-control" name="">
                </div>
                <div class="form-group div_select2">
                    <label for="">Vị trí địa lý :</label>
                    <div class="lbl-address">
                        <select id="e1" multiple="multiple" style="width:100%;">
                            <option>Alabama</option>
                            <option>Alaska</option>
                            <option>California</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Giới tính :</label>
                    <div>
                        <span class="radio-inline"><input type="radio" name="optradio" checked>Tất cả</span>
                        <span class="radio-inline"><input type="radio" name="optradio">Nam</span>
                        <span class="radio-inline"><input type="radio" name="optradio">Nữ</span>
                        <span class="radio-inline"><input type="radio" name="optradio">Khác</span>
                    </div>
                </div>
                <div class="form-group form-margin">
                    <label for="">Độ tuổi :</label>
                    <div class="slider">
                        <div type="text" class="form-control" id="slider-age" name="description"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="lbl-fix">Đặc điểm nổi bật:</label>
                    <input type="text" class="form-control" name="">
                </div>
            </div>
            <!--End modal body-->

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    <i class="fa fa-remove" aria-hidden="true"></i>
                    Hủy
                </button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    Lưu
                </button>
            </div>
        </div>

    </div>
</div>