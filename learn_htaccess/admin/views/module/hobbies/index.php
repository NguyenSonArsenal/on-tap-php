<?php
require '../../../../bootstrap/Autoload.php';

use admin\Controllers\HobbiesController;
use admin\Controllers\Controller;
use Library\Session;
use Library\Pagination;

$hobbiesC = new HobbiesController;
$hobbies = $hobbiesC->listHobbies();

if ($hobbies['items'])
    $hobby = $hobbies['items'];

$from = Controller::getNumberFrom();

?>

<?php require '../../includes/header.php';?>

<div class="page_wrapper">

    <?php require '../../includes/sidebar.php';?>

    <div class="main pull-right">

        <?php require '../../includes/notification.php'; ?>

        <div class="main_head">
            <h2 class="title pull-left">List hobbies</h2>
            <a href="add.php" role="button"
               class="link_add_hobbies pull-right btn btn-success btn-sm"
               >
                <i class="fa fa-plus"></i>
                Add</a>
            <div class="clearfix"></div>
        </div>

        <div class="main_content">

            <?php require '../../includes/searchbox.php';?>

            <?php if($hobbies['keysearch'] && $hobbies['total'] == 0)  : ?>
                <p>Not found</p>
            <?php endif ; ?>

            <table class="table table-hover">
                <thead class="control">
                    <tr class="tr">
                        <th class="td" width="10%">#</th>
                        <th style="width: 40%">Hobbies</th>
                        <?php if(isset($hobby[0]['count_user'])) : ?>
                            <th style="width: 40%">Users_use</th>
                        <?php endif ; ?>
                        <th class="text_right" width="10%">Action</th>
                    </tr>
                </thead>

                <tbody class="control">

                    <?php foreach ($hobbies['items'] as $hobby) : ?>

                        <tr class="tr">
                            <td><?=$from++?></td>
                            <td><?=$hobby['name']?></td>

                            <?php if(isset($hobby['count_user'])) : ?>
                                <td><?=$hobby['count_user']?></td>
                            <?php endif ; ?>

                            <td class="text_right">
                                <a href="edit.php?id=<?=$hobby['id']?>&page=<?=$hobbies['current_page']?>"
                                   class="link_action link_edit btn btn-info">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="delete.php?id=<?=$hobby['id']?>&page=<?=$hobbies['current_page']?>"
                                   class="link_action link_trash btn btn-danger"
                                   onclick="return confirm('Are you sure')"
                                >
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>
        </div>

        <?php if(!isset($hobby['count_user'])) : ?>
            <?php echo Pagination::renderLikeGoogle($hobbies); ?>
        <?php endif ; ?>

    </div>
    <div class="clearfix"></div>
</div>

<?php require '../../includes/footer.php';?>

