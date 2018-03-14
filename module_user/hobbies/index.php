<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>module user</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link href="/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/hobbies/index.css">

</head>
<body>

<div class="wrapper">
    <div class="add_item">
        <a href="add.php" class="btn btn-primary pull-right btn_add_item" title="add hotel">Add</a>
    </div>
    <table class="table table-hover">
        <tr class="tr">
            <th class="th">STT</th>
            <th class="th">Hobbies</th>
            <th class="th">Created_at</th>
            <th class="th">Updated_at</th>
            <th class="th">Action</th>
        </tr>
        <tr class="tr">
            <td class="td">1</td>
            <td class="td">eat, drink beer, code, sleep</td>
            <td class="td">11:00</td>
            <td class="td">11:00</td>
            <td class="td td_action">
                <a href=""
                   class="btn btn-info btn-xs btn_edit">Edit</a>
                <a href=""
                   class="btn btn-danger btn-xs btn_delete"
                   onclick="return confirm('Are you sure?')"
                >Delete</a>
            </td>
        </tr>
    </table>

</div>

<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>
