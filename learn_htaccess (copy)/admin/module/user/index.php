<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Do_an</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link href="/bower_components/bootstrap-4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--font awesome -->
    <link href="/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/assets/css/admin/module/user/index.css">

</head>
<body>

<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="side_bar">
                    <div class="item item_user">
                        <a href="">User</a>
                    </div>
                    <div class="item item_hobbies">
                        <a href="">Hobbeis</a>
                    </div>
                    <div class="item item_program">
                        <a href="">Program</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="main">
                    <div class="header">
                        <h1 class="content_header pull-left">Danh sach user</h1>
                        <a href="add.php" class="pull-right">Add</a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="content">
                        <table class="table">
                            <thead class="thead">
                                <tr class="tr">
                                    <th class="th">STT</th>
                                    <th class="th">Name</th>
                                    <th class="th">Hobbies</th>
                                    <th class="th">Program</th>
                                    <th class="th">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="tr">
                                    <td class="td">1</td>
                                    <td class="td">Nguyen Son</td>
                                    <td class="td">Code, sleep, eat</td>
                                    <td class="td">Php</td>
                                    <td class="td">
                                        <a class="btn btn-primary btn-xs">
                                            <i class="fa fa-edit fa-lg"></i>
                                            Chỉnh sửa
                                        </a>
                                        <a class="btn btn-danger btn-xs">
                                            <i class="fa-trash fa fa-lg"></i>
                                            Xóa
                                        </a>
                                    </td>
                                </tr>
                                <tr class="tr">
                                    <td class="td">1</td>
                                    <td class="td">Nguyen Son</td>
                                    <td class="td">Code, sleep, eat</td>
                                    <td class="td">Php</td>
                                    <td class="td">
                                        <a class="btn btn-primary btn-xs">
                                            <i class="fa fa-edit fa-lg"></i>
                                            Chỉnh sửa
                                        </a>
                                        <a class="btn btn-danger btn-xs">
                                            <i class="fa-trash fa fa-lg"></i>
                                            Xóa
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/bower_components/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
<script src="/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Select2 -->
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
</body>
</html>