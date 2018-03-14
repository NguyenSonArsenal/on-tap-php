<div id="modal-edit-product" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Chỉnh sửa sản phẩm</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div>Ảnh Sản phẩm</div>
                        <div class="preview-image">
                            <img src="./dist/img/avatar.png" alt="name image">
                        </div>
                        <div>
                            <button class="btn btn-default btn-file" id="btn-to-up-file">
                                Đổi ảnh <input type="file">
                            </button>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <form action="">
                            <div class="form-group">
                                <label for="email">Tên sản phẩm:</label>
                                <input type="text" class="form-control" id="product_name"
                                       value="Tên sản phẩm" >
                            </div>
                            <div class="form-group">
                                <label>Mã sản phẩm:</label>
                                <input type="text" class="form-control" id="product_id"
                                       value="Mã sản phẩm" >
                            </div>
                            <div class="form-group">
                                <label>Nhà cung cấp:</label>
                                <input type="text" class="form-control" id="provider"
                                       value="Nhà cung cấp">
                            </div>
                            <div class="form-group">
                                <label>Giá thành</label>
                                <div class="row">
                                    <div class="col-md-9">
                                        <input type="text" class="form-control pull-left" id="provider"
                                               value="200">
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control pull-right" id="sel1">
                                            <option>VND</option>
                                            <option>USD</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Mô tả:</label>
                                <input type="text" class="form-control" id="description"
                                       value="Một vài mô tả tại đây" >
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Lưu</button>
            </div>
        </div>
    </div>
</div>