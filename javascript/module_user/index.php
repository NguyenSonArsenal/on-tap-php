<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="dist/css/index.css">
</head>
<body onload="onloadListUser()">
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
                <th>Gender</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody id="tbodyUser"></tbody>
        </table>
    </div>
</div>
</div>

<script src="./helper.js"></script>
<script src="./handle.js"></script>

</body>
</html>
