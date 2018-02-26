<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="dist/css/index.css">
</head>
<body>
<div class="wrapper">
    <div class="header">
        <div class="row">
            <div class="col-md-2">
                <input type="text" class="form-control" placeholder="Tìm kiếm">
            </div>
            <div class="col-md-1">
                <button class="btn btn-success">
                    <i class="fa fa-search-minus" aria-hidden="true"></i>
                    Search</button>
            </div>
            <div class="col-md-1 pull-right btnAdd">
                <a class="btn btn-success" href="./add.php">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    Add user</a>
            </div>
        </div>
    </div>

    <div class="content">
        <table class="table table-hover table-striped table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Hobbies</th>
                <th>Programs</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php for ($i = 0; $i < 5; $i++) { ?>
                <tr>
                    <td>
                        <div>
                            <label>
                                1
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="content">
                            <label>
                                <span>Nguyen Van Son</span>
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="content">
                            <span>vanson297.nguyen@gmail.com</span>
                        </div>
                    </td>
                    <td>
                        <div class="content">
                            <span>eat, sleep, code, soccer</span>
                        </div>
                    </td>
                    <td>
                        <div class="content">
                            <span>Php, laravel, js</span>
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
    </div>
</div>
    <!-- ./wrapper -->

</div>
</body>
</html>
