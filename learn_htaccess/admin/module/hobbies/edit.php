<?php

require '../../../bootstrap/Autoload.php';
use Library\Session;

$id = isset($_GET['id']) ? $_GET['id'] : '';
$sql = "SELECT * FROM hobbies WHERE id = $id";
$query = $conn->query($sql);

if (!$query)
{
    echo "Error: " . $conn->error();
    die();
}
else
{
    $name = ($query->fetch_assoc())['name'];
}

$nameErr = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $name = "";

    if (empty(validate_input($_POST['name'])))
        $nameErr = 'Name is required';
    else
    {
        $name = validate_input($_POST['name']);

        $sql = "UPDATE hobbies
                SET name = '$name'
                 WHERE id = $id";

        $query = $conn->query($sql);

        if (!$query)
        {
            echo "Error: " . $conn->error();
        }
        else
        {
            Session::flash('update', 'update successfully');
            header('Location: index.php');
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Do_an</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1,
     maximum-scale=1, user-scalable=no" name="viewport">

    <link href="/bower_components/bootstrap-4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--font awesome -->
    <link href="/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- select2 -->
    <link rel="stylesheet" href="/bower_components/select2/dist/css/select2.min.css">

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
                        <h1 class="content_header">Them hobbies</h1>
                        <div class="clearfix"></div>
                    </div>
                    <div class="content">
                        <form action="#" method="post">
                            <div class="row form-group">
                                <label class="col-sm-2" for="">Name</label>
                                <input class="input input_name" type="text" name="name"
                                       value="<?=$name?>">
                                <span class="show_error"><?=$nameErr?></span>
                            </div>
                            <input type="submit" value="Add" name="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/bower_components/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Select2 -->
<script src="/bower_components/select2/dist/js/select2.full.min.js"></script>

<script>
    $(document).ready(function() {
        //select2
        $("#select2_program").select2();
        $("#select2_hobbies").select2();

    });
</script>
</body>
</html>