<?php
require './Autoload.php';

use crud_mysql\Library\Session;
use crud_mysql\App\Controllers\Pagination;

define('LIMIT', 5);
$stt = 1;

$message_add    = Session::flash('add');
$message_delete = Session::flash('delete');
$message_update = Session::flash('update');

$sql = "SELECT id FROM hotel";

$result = $conn->query($sql);
//  total_page
if ($result)
{
    $total_records  = $conn->num_rows();
    $total_page     = ceil($total_records / LIMIT);
}
else
{
    die('Something in wrong');
}

$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
settype($current_page, 'int');
$from = ($current_page-1)*LIMIT;

// show hotels on each page
$sql = "SELECT * FROM hotel LIMIT $from, " . LIMIT;
$result = $conn->query($sql);

if (!$result)
    die('Something in wrong');

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
        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()) : ?>
                <tr class="tr">
                    <td class="td"><?php echo $stt++; ?></td>
                    <td class="td"><?php echo $row['name'] ?></td>
                    <td class="td"><?php echo $row['address'] ?></td>
                    <td class="td"><?php echo $row['star'] ?></td>
                    <td class="td td_action">
                        <a href="edit.php?id=<?=$row['id']?>"
                           class="btn btn-info btn-xs btn_edit">Edit</a>
                        <a href="delete.php?id=<?=$row['id']?>"
                           class="btn btn-danger btn-xs btn_delete"
                           onclick="return confirm('Are you sure?')"
                        >Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php endif; ?>
    </table>
    <?php echo Pagination::render()?>

<!--    <div class="paginate_page">-->
<!--        <div class="dataTables_info pull-left" id="example2_info" role="status" aria-live="polite">-->
<!--            Hiển thị <span>1</span> đến <span>10</span> của <span>100</span> bản ghi-->
<!--        </div>-->
<!--        <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">-->
<!--            <ul class="pagination pull-right">-->
<!--                <li class="paginate_button previous disabled" id="example2_previous">-->
<!--                    <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">-->
<!--                        Trước-->
<!--                    </a>-->
<!--                </li>-->
<!--                --><?php //for ($i=1; $i<$total_page+1; $i++):?>
<!--                    <li class="paginate_button">-->
<!--                        <a href="index.php?page=--><?//=$i?><!--" aria-controls="example2" data-dt-idx="1"-->
<!--                           tabindex="0">--><?//=$i?><!--</a>-->
<!--                    </li>-->
<!--                --><?php //endfor;?>
<!--                <li class="paginate_button next" id="example2_next">-->
<!--                    <a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Tiếp</a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
<!--        <div class="clearfix"></div>-->
<!--    </div>-->
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
        
        function deleteAHotel(id) {
            
        }

        removeMessageNotification();
        

    });
</script>

</body>
</html>
