<?php
require './Autoload.php';

use crud_mysql\Library\Session;
use crud_mysql\App\Controllers\Pagination;

$message_add    = Session::flash('add');
$message_delete = Session::flash('delete');
$message_update = Session::flash('update');

$currentPage    = Pagination::getCurrentPage();
$totalRecords   = Pagination::setTotalRecords($conn, 'hotel');
$recordOnPage   = Pagination::getRecordsEachPage($conn, 'hotel');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>app mysql</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link href="/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/pagination.css">

</head>
<body>

<div class="wrapper">
    <?php if (isset($message_add)): ?>
    <div class="notification" id="notification">
        <span class="notification_destroy pull-right"
              id="notification_destroy"
        >
        x
        </span>
        <span class="notification_content pull-left"><?=$message_add?></span>
        <div class="clearfix"></div>
    </div>
    <?php endif; ?>

    <?php if (isset($message_update)): ?>
        <div class="notification" id="notification">
        <span class="notification_destroy pull-right"
              id="notification_destroy"
        >
        x
        </span>
            <span class="notification_content pull-left"><?=$message_update?></span>
            <div class="clearfix"></div>
        </div>
    <?php endif; ?>

    <?php if (isset($message_delete)): ?>
        <div class="notification" id="notification">
        <span class="notification_destroy pull-right"
              id="notification_destroy"
        >
        x
        </span>
            <span class="notification_content pull-left"><?=$message_delete?></span>
            <div class="clearfix"></div>
        </div>
    <?php endif; ?>

    <div class="add_item">
        <a href="add.php" class="btn btn-primary pull-right btn_add_item" title="add hotel">Add</a>
    </div>
    <table class="table table-hover">
        <tr class="tr">
            <th class="th">STT</th>
            <th class="th">Name</th>
            <th class="th">Address</th>
            <th class="th">Star</th>
            <th class="th">Action</th>
        </tr>
        <?php $stt = 1; ?>
        <?php while($row = $recordOnPage->fetch_assoc()) : ?>
            <tr class="tr">
                <td class="td"><?php echo $stt++; ?></td>
                <td class="td"><?php echo $row['name'] ?></td>
                <td class="td"><?php echo $row['address'] ?></td>
                <td class="td"><?php echo $row['star'] ?></td>
                <td class="td td_action">
                    <a href="edit.php?id=<?=$row['id']?>"
                       class="btn btn-info btn-xs btn_edit">Edit</a>
                    <a href="delete.php?page=<?=$currentPage?>&&id=<?=$row['id']?>"
                       class="btn btn-danger btn-xs btn_delete"
                       onclick="return confirm('Are you sure?')"
                    >Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>

    <?php echo Pagination::render($totalRecords)?>

</div>

<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        function removeMessageNotification() {
            var nodeWrapper = document.getElementsByClassName('wrapper')[0];
            var nodeRemoveNotification = document.getElementById('notification_destroy');
            if (nodeRemoveNotification)
            {
                nodeRemoveNotification.addEventListener('click', function () {
                    nodeWrapper.removeChild(document.getElementById('notification'));
                })
            }
        }

        removeMessageNotification();
    });
</script>

</body>
</html>
