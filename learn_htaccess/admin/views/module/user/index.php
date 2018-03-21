<?php
require '../../../../bootstrap/Autoload.php';

use admin\Controllers\Controller;
use admin\Controllers\UserController;
use admin\Controllers\ProgramController;
use admin\Controllers\HobbiesController;
use Library\Pagination;
use Library\Session;
use Library\Cookie;

$users  = UserController::listUser();

$from = Controller::getNumberFrom();

?>

<?php require '../../includes/header.php';?>

<div class="page_wrapper">

    <?php require '../../includes/sidebar.php';?>

    <div class="main pull-right">

        <?php require '../../includes/notification.php'; ?>

        <div class="main_head">
            <h2 class="title pull-left">List user</h2>
            <a href="add.php" role="button"
               class="link_add_hobbies pull-right btn btn-success btn-sm"
            >
                <i class="fa fa-plus"></i>
                Add</a>
            <div class="clearfix"></div>
        </div>

        <div class="main_content">

            <?php require '../../includes/searchbox.php';?>

            <?php if($users['keysearch'] && $users['total'] == 0) : ?>
                <p>Not found</p>
            <?php endif ; ?>

            <table class="table table-hover">
                <thead class="control">
                <tr class="tr">
                    <th class="td" style="width: 10%">#</th>
                    <th style="width: 20%">Name</th>
                    <th style="width: 30%">Program</th>
                    <th style="width: 30%">Hobbies</th>
                    <th class="text_right" width="10%">Action</th>
                </tr>
                </thead>

                <tbody class="control list_program">

                <?php foreach ($users['items'] as $user) : ?>
                    <tr class="tr">
                        <td><?=$from++?></td>
                        <td><?=$user['name']?></td>
                        <td>

                            <?php $listProgramOfUser = ProgramController::getListProgramsOfUser($user['id']); ?>

                            <?php foreach($listProgramOfUser as $program) : ?>
                                <a href="">
                                    <?=$program['name'] . ' - '?>
                                </a>
                            <?php endforeach ; ?>

                        </td>

                        <td>

                            <?php $listHobbiesOfUser = HobbiesController::getListHobbiesOfUser($user['id']); ?>

                            <?php foreach($listHobbiesOfUser as $hobby) : ?>
                                <a href="">
                                    <?=$hobby['name'] . ' - '?>
                                </a>
                            <?php endforeach ; ?>

                        </td>

                        <td class="text_right">
                            <a href="<?=$user['id']?>/edit&page=<?=$users['current_page']?>"
                               class="link_action link_edit btn btn-info">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="<?=$user['id']?>/delete&page=<?=$users['current_page']?>"
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

        <?php echo Pagination::renderLikeGoogle($users); ?>

    </div>

    <div class="clearfix"></div>
</div>

<?php require '../../includes/footer.php';?>



