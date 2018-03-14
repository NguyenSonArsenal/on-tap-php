<?php

require '../../../bootstrap/Autoload.php';

// get all hobbies
$sqlAllHobbies = "SELECT id, name FROM hobbies";
$selectAllHobbies = $conn->query($sqlAllHobbies);

//get list programs
$sqlAllPrograms = "SELECT id, name FROM program";
$selectAllPrograms = $conn->query($sqlAllPrograms);

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

$nameErr = $hobbiesErr = $programErr = "";
$name = $hobbies = $program = "";
$gender = 1;

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (empty($_POST['name']))
        $nameErr = 'Name is required';
    else
        $name = test_input($_POST['name']);

    if (empty($_POST['hobbies']))
        $hobbiesErr = 'Hobbies is required';
    else
    {
        $hobbies = $_POST['hobbies'];
    }

    if (empty($_POST['program']))
        $programErr = 'Program is required';
    else
    {
        $program = $_POST['program'];
    }

    $gender = test_input($_POST['gender']);

    if(sizeof($name) > 0 && $hobbies && $program)
    {
        $created_at = $update_at = date("Y-m-d H:i:s");
        $sql = "INSERT INTO user(name, gender, created_at)
                        VALUE ('$name', '$gender', '$created_at')";

        $query = $conn->query($sql);

        if ($query)
        {
            $last_id = $conn->getLastId();

        }
        else
        {
            echo "Error: " . $conn->error();
            die();
        }

        foreach ($hobbies as $hobbie_id)
        {
            $sql = "INSERT INTO tag_user (tag_id, user_id, type)
                             VALUE('$hobbie_id', '$last_id', '1')";

            $query = $conn->query($sql);

            if (!$query)
            {
                echo "Error: " . $conn->error();
                die();
            }
        }

        foreach ($program as $program_id)
        {
            $sql = "INSERT INTO tag_user (tag_id, user_id, type)
                             VALUE('$program_id', '$last_id', '2')";

            $query = $conn->query($sql);

            if (!$query)
            {
                echo "Error: " . $conn->error();
                die();
            }
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

    <link rel="stylesheet" href="/assets/css/admin/user/index.css">

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
                        <h1 class="content_header">Them user</h1>
                        <div class="clearfix"></div>
                    </div>
                    <div class="content">
                        <form action="#" method="post">
                            <div class="row form-group">
                                <label class="col-sm-2" for="">Name</label>
                                <input class="input input_name" type="text" name="name"
                                       value="<?=$name?>">
                                <span class="show_error"><?=$nameErr;?></>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2">Hobbies</label>
                                <select id="select2_hobbies" multiple="multiple"
                                        style="width:50%;" name="hobbies[]">
                                    <?php while($hobbie = $selectAllHobbies->fetch_assoc()) : ?>
                                        <option value="<?=$hobbie['id']?>"
                                                name="hobbies[]"
                                            <?php
                                            if (isset($_POST['hobbies']))
                                            {
                                                foreach ($_POST['hobbies'] as $item)
                                                {
                                                    if ($item == $hobbie['id'])
                                                        echo 'selected';
                                                }
                                            }
                                            ?>
                                        >
                                            <?php echo $hobbie['name'] ?>
                                        </option>
                                    <?php endwhile; ?>
                                </select>
                                <span class="show_error"><?=$hobbiesErr?></span>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2">Programs</label>
                                <select id="select2_program" multiple="multiple"
                                        style="width:50%;" name="program[]">
                                    <?php while($program = $selectAllPrograms->fetch_assoc()) : ?>
                                        <option value="<?php echo $program['id']?>"
                                                name="programs[]"
                                            <?php
                                            if (isset($_POST['program']))
                                            {
                                                foreach ($_POST['program'] as $item)
                                                {
                                                    if ($item == $program['id'])
                                                        echo 'selected';
                                                }
                                            }
                                            ?>
                                        >
                                            <?php echo $program['name'] ?>
                                        </option>
                                    <?php endwhile; ?>
                                </select>
                                <span class="show_error"><?=$programErr?></span>
                            </div>

                            <div class="row form-group">
                                <label class="col-sm-2">Gender</label>
                                <input type="radio" name="gender" checked
                                       value="1"
                                    <?php if (isset($_POST['gender']) && $_POST['gender'] == '1') {echo 'checked';} ?>
                                >Boy<br>
                                <input type="radio" name="gender"
                                       value="0"
                                    <?php if (isset($_POST['gender']) && $_POST['gender'] == '0') {echo 'checked';} ?>
                                > Girl<br>
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