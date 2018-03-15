<?php

require '../../../../bootstrap/Autoload.php';
use admin\Controllers\ProgramController;

$id = isset($_GET['id']) ? (int)$_GET['id'] : '';

$selectProgram = ProgramController::selectById($id);

$program = $selectProgram[0]['name'];

// validate
$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $program = isset($_POST['program']) ? validate_input($_POST['program']) : '';

    if ($program == '')
        $errors['hobbies'] = 'Hobbies is required';

    if (empty($errors))
    {
        ProgramController::update($id, $program);
    }
}

?>

<?php require '../../includes/header.php';?>

<div class="wrapper">
    <div class="navbar">
        <span class="title">PHP final</span>
    </div>
    <div class="page_wrapper">

        <?php require '../../includes/sidebar.php';?>

        <div class="main pull-right">

            <div class="main_head">
                <h2 class="title pull-left">Add program</h2>
                <div class="clearfix"></div>
            </div>

            <div class="main_content">
                <form action="#" method="post" class="form">
                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label class="control-label ">Program</label>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control input_hobbies"
                                   name="program" value="<?=$program?>">
                            <?php if(isset($errors['program'])) : ?>
                                <span class="error"><?=$errors['program']?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-6">
                            <input type="submit" value="Add"
                                   name="submit" class="btn btn-success btn-sm">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>


<?php require '../../includes/footer.php';?>