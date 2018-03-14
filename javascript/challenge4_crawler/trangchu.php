<?php

require 'config.php';

$sql = "SELECT * FROM restaurant";
$result = $conn->query($sql);

$restaurants = [];

if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc()) {
        array_push($restaurants, $row);
    }
}

$count = 1;

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Restaurants</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link href="/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--font awesome
    <link href="/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="./css/index.css">

    -->

</head>
<body>

<table  class="table table-bordered table-hover">

    <thead class="thead">
        <tr>
            <th class="text-center">STT</th>
            <th class="text-center">Name</th>
            <th class="text-center">City</th>
            <th class="text-center">District</th>
            <th class="text-center">Full</th>
            <th class="text-center">Phone</th>
            <th class="text-center">Website</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($restaurants as $key => $item) { ?>
            <tr>
                <td><?php echo $count ?></td>
                <td><?php echo $item['name']?></td>
                <td><?php echo $item['city']?></td>
                <td><?php echo $item['district']?></td>
                <td><?php echo $item['full']?></td>
                <td><?php echo $item['phoneNumber']?></td>
                <td><?php echo $item['website']?></td>
            </tr>
        <?php $count ++; } ?>
    </tbody>

</body>
</html>