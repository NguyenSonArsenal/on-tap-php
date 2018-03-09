<?php
require './autoload/Autoload.php';
require './autoload/connect.php';


$count = 1;

    $sql = "SELECT * FROM hotel";
    $result = $conn->query($sql);
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

</head>
<body>

<div class="wrapper">
    <div class="notification" id="notification">
        <span class="notification_destroy pull-right"
              onclick="remove_notification()"
              id="notification_destroy"
               >
        x
        </span>
        <span class="notification_content pull-left">Them mot san pham thanh cong</span>
        <div class="clearfix"></div>
    </div>
    <div class="add_item">
        <a href="add.php" class="btn btn-primary pull-right btn_add_item" title="add hotel">Add</a>
    </div>
    <div style="clear:both;"></div>
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
                    <td class="td"><?php echo $count++; ?></td>
                    <td class="td"><?php echo $row['name'] ?></td>
                    <td class="td"><?php echo $row['address'] ?></td>
                    <td class="td"><?php echo $row['star'] ?></td>
                    <td class="td td_action">
                        <button class="btn btn-info btn-xs btn_edit">Edit</button>
                        <button class="btn btn-danger btn-xs btn_delete">Delete</button>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php endif; ?>
    </table>

</div>

<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {
//        function remove_notification() {
//            console.log('click to remove notification');
//        }

        var nodeWrapper = document.getElementsByClassName('wrapper')[0];

        document.getElementById('notification_destroy').addEventListener('click', function () {
            nodeWrapper.removeChild(document.getElementById('notification'));
        })
    });
</script>

</body>
</html>