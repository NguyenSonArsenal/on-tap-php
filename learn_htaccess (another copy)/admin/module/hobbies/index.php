<?php
require '../../../bootstrap/Autoload.php';

$sql = "SELECT * FROM hobbies";
$query = $conn->query($sql);

if (!$query)
{
    echo 'Error: ' . $conn->error();
    die();
}
?>

<?php require '../../includes/header.php';?>

<div class="wrapper">
    <div class="container">
        <div class="row">
            <?php require '../../includes/sidebar.php'?>
            <div class="col-sm-9">
                <div class="main">
                    <div class="header">
                        <h1 class="content_header pull-left">List hobbies</h1>
                        <a href="add.php" class="pull-right btn btn-success btn-sm" role="button">
                            <i class="fa fa-plus"></i>
                            Add
                        </a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="content">
                        <table class="table">
                            <thead class="thead">
                            <tr class="tr">
                                <th class="th">STT</th>
                                <th width="80%" class="th">Hobbies</th>
                                <th class="th">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php $stt = 1; ?>
                                <?php while($hobbie = $query->fetch_assoc()) : ?>
                                <tr class="tr">
                                    <td class="td"><?=$stt++?></td>
                                    <td class="td"><?=$hobbie['name']?></td>
                                    <td class="td">
                                        <a class="btn btn-primary btn-sm"
                                           href="edit.php?id=<?=$hobbie['id']?>">
                                            <i class="fa fa-edit fa-lg"></i>

                                        </a>
                                        <a class="btn btn-danger btn-sm"
                                           href="delete.php?id=<?=$hobbie['id']?>"
                                           onclick="return confirm('Are you sure')"
                                        >
                                            <i class="fa-trash fa fa-lg"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php endWhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require '../../includes/footer.php';?>