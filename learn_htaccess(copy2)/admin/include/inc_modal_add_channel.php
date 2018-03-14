<div class="modal fade" id="modal-add-channel" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><b>Thêm Kênh quảng cáo mới</b></h4>
            </div>
            <div class="row modal-body">
                <div class="col-md-4">
                    <div class="lbl-logo-channel"><b>Logo Kênh</b></div>
                    <div class="preview-image">
                        <button class="btn btn-default btn-file btn-xs" id="btn-to-up-file">
                            Browse <input type="file">
                        </button>
                    </div>
                </div>
                <div class="col-md-8">
                    <form action="">
                        <div class="form-group">
                            <label for="email">Tên kênh <strong>*</strong>:</label>
                            <input type="text" class="form-control" id="product_name">
                        </div>
                        <div class="form-inline">
                            <label>Loại kênh:</label>
                            <span class="radio-inline"><input type="radio" name="optradio" checked>Online</span>
                            <span class="radio-inline"><input type="radio" name="optradio">Offline</span>
                        </div>
                        <div class="form-group">
                            <label>Mô tả:</label>
                            <input type="text" class="form-control" id="provider">
                        </div>
                        <div class="form-group">
                            <label>Đường dẫn:</label>
                            <input type="text" class="form-control" id="description">
                        </div>
                    </form>
                </div>
            </div>
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