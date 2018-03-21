<?php
require '../../../../bootstrap/Autoload.php';

use admin\Controllers\ProgramController;
use admin\Controllers\Controller;
use Library\Session;
use Library\Pagination;

$programC = new ProgramController;
$programs = $programC->listProgram();

if ($programs['items'])
    $program = $programs['items'];

$from = Controller::getNumberFrom();

?>


<?php require '../../includes/header.php';?>

<div class="page_wrapper">

    <?php require '../../includes/sidebar.php';?>

    <div class="main pull-right">

        <?php require '../../includes/notification.php'; ?>

        <div class="main_head">
            <h2 class="title pull-left">List programs</h2>
            <a href="add.php" role="button"
               class="link_add_hobbies pull-right btn btn-success btn-sm"
            >
                <i class="fa fa-plus"></i>
                Add</a>
            <div class="clearfix"></div>
        </div>

        <div class="main_content">

            <?php require '../../includes/searchbox.php';?>

            <form action="#" method="get">

            </form>

            <?php if($programs['keysearch'] && $programs['total'] == 0) : ?>
                <p>Not found</p>
            <?php endif ; ?>

            <table class="table table-hover">
                <thead class="control">
                    <tr class="tr">
                        <th class="td" width="10%">#</th>
                        <th style="width: 40%">Programs</th>
                        <?php if(isset($program[0]['count_user'])) : ?>
                            <th style="width: 40%">Users_use</th>
                        <?php endif ; ?>
                        <th class="text_right" width="10%">Action</th>
                    </tr>
                </thead>

                <tbody class="control list_program">

                    <?php foreach ($programs['items'] as $program) : ?>
                        <tr class="tr">
                            <td><?=$from++?></td>
                            <td><?=$program['name']?></td>

                            <?php if(isset($program['count_user'])) : ?>
                                <td><?=$program['count_user']?></td>
                            <?php endif ; ?>

                            <td class="text_right">
                                <a href="edit.php?id=<?=$program['id']?>&page=<?=$programs['current_page']?>"
                                   class="link_action link_edit btn btn-info">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="delete.php?id=<?=$program['id']?>"
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

        <?php if(!isset($program['count_user'])) : ?>
            <?php echo Pagination::renderLikeGoogle($programs); ?>
        <?php endif ; ?>

    </div>

    <div class="clearfix"></div>
</div>

<?php require '../../includes/footer.php';?>



