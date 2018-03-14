<?php

require './Autoload.php';

use crud_mysql\Library\Session;

function validate_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

$nameErr = $addressErr = "";
$name = $address = "";
$star = 1;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty(validate_input($_POST['name'])))
    {
        $nameErr = 'Name is required';
    }
    else
    {
        $name = validate_input($_POST['name']);
    }

    if (empty(validate_input($_POST['address'])))
    {
        $addressErr = 'Address is required';
    }
    else
    {
        $address = validate_input($_POST['address']);
    }

    $star = (int)(validate_input($_POST['star']));

    if (sizeof($name) > 0 && sizeof($address) > 0)
    {
        $sql = "INSERT INTO hotel (name, address, star) 
                VALUES ('$name', '$address', '$star')";

        $query = $conn->query($sql);

        if ($query)
        {
            Session::flash('add', 'Add successfully');
            header('Location: index.php');
        }
        else
            echo "Error: $conn->error";
    }
}

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

    <link rel="stylesheet" href="./assets/css/add.css">

</head>
<body>

<div class="wrapper">
    <div class="add_label">Add product</div>

    <form class="form_add_hotel" id="form_add_hotel"
          method="post"
          action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>"
    >
        <div class="form-group">
            <label class="lbl lbl_name">Name</label>
            <input type="text" class="form-control name" name="name"
                   value="<?=$name?>"
                   placeholder="name_hotel">
            <small id="show_errors"><?php echo $nameErr ?></small>
        </div>
        <div class="form-group">
            <label class="lbl lbl_address">Address</label>
            <input type="text" class="form-control address" name="address"
                   value="<?=$address?>"
                   placeholder="102 Thai Thinh, Ha Noi, Viet Nam">
            <small id="show_errors"><?php echo $addressErr ?></small>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Star</label>
            <select class="form-control" id="select_star" name="star">
                <option value="1" <?php if (isset($_POST['star']) && $_POST['star'] == '1') {echo 'selected';} ?>>1</option>
                <option value="2" <?php if (isset($_POST['star']) && $_POST['star'] == '2') {echo 'selected';} ?>>2</option>
                <option value="3" <?php if (isset($_POST['star']) && $_POST['star'] == '3') {echo 'selected';} ?>>3</option>
                <option value="4" <?php if (isset($_POST['star']) && $_POST['star'] == '4') {echo 'selected';} ?>>4</option>
                <option value="5" <?php if (isset($_POST['star']) && $_POST['star'] == '5') {echo 'selected';} ?>>5</option>
            </select>
        </div>
        <input type="submit" class="btn btn-primary" name="submit" value="Add">
    </form>

</div>

<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script>

    window.addEventListener('load', function() {

        document.getElementById('form_add_hotel').addEventListener('submit', function(evt){
           // evt.preventDefault();
        })

    })

</script>

</body>
</html>
