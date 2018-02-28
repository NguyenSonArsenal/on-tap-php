<?php
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 3;

$totalPage = ceil(20 / $limit);

echo 'Current page: ' . $currentPage . '<br>';
echo 'Total page: ' . $totalPage;

// Giới hạn current_page trong khoảng 1 đến total_page
if ($currentPage > $totalPage)
    $currentPage = $totalPage;
else if ($currentPage < 1)
    $currentPage = 1;

// Tim start
$start = ($currentPage - 1) * $limit;

?>

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
            <div class="col-md-3">
                <input type="text" class="form-control" onkeyup="searchUser()"
                       placeholder="Tìm kiếm" id="keyToSearch" >
            </div>
            <div class="col-md-1 btnAllUsers" onclick="fetchListTodos()">
                <a class="btn btn-primary">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    All user</a>
            </div>
            <div class="col-md-1 pull-right btnAdd">
                <a class="btn btn-primary" href="./add.php">
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

        <!-- Paginate -->
        <?php include './inc_paginate.php' ?>
        <!-- End paginate -->
    </div>
</div>
</div>

<script src="./helper.js"></script>
<script src="./handle.js"></script>

</body>
</html>
