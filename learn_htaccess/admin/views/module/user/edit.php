<?php

require '../../../../bootstrap/Autoload.php';
use admin\Controllers\UserController;
use admin\Controllers\ProgramController;
use admin\Controllers\HobbiesController;

$users = UserController::findOneById();
$user = $users[0];

$allProgramUser = ProgramController::getListProgramsOfUser();
$allHobbiesUser = HobbiesController::getListHobbiesOfUser();

$programs = ProgramController::selectListAll();
$hobbies  = HobbiesController::selectlistAll();

$errors = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $user = UserController::update();
    $errors = $user['errors'];
}

?>

<?php require '../../includes/header.php';?>

<div class="page_wrapper">

    <?php require '../../includes/sidebar.php';?>

    <div class="main pull-right">

        <div class="main_head">
            <h2 class="title pull-left">Update info user</h2>
            <div class="clearfix"></div>
        </div>

        <div class="main_content">
            <form action="#" method="post" class="form">
                <div class="form-group row">
                    <div class="col-sm-2">
                        <label class="control-label ">Name</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control input_hobbies"
                               name="name" value="<?=$user['name']?>">
                        <?php if(isset($errors['name'])) : ?>
                            <span class="error"><?=$errors['name']?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-2">
                        <label class="control-label ">Email</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="email" class="form-control input_hobbies"
                               name="email" value="<?=$user['email']?>">
                        <?php if(isset($errors['email'])) : ?>
                            <span class="error"><?=$errors['email']?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-2">
                        <label class="control-label ">Phone number</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control input_hobbies"
                               name="phone" value="<?=$user['phone']?>">
                        <?php if(isset($errors['phone'])) : ?>
                            <span class="error"><?=$errors['phone']?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-2">
                        <label class="control-label ">Hobbies</label>
                    </div>

                    <div class="col-sm-6">
                        <select id="select2_hobbies" multiple="multiple"
                                style="width:100%;" name="hobbies[]">

                            <?php foreach ($hobbies as $hobby) :?>
                                <option value="<?=$hobby['id']?>"

                                    <?php
                                        getSelected($hobby, $allHobbiesUser, 'id');
                                    ?>
                                >
                                    <?=$hobby['name']?>
                                </option>
                            <?php endforeach;?>

                        </select>
                        <span class="error">
                            <?=isset($errors['hobbies']) ? $errors['hobbies'] : ''; ?>
                        </span>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-2">
                        <label class="control-label ">Program</label>
                    </div>
                    <div class="col-sm-6">
                        <select name="program[]" id="select2_program"
                                multiple="multiple" style="width: 100% !important;">

                            <?php foreach ($programs as $program) :?>
                                <option value="<?=$program['id']?>"

                                    <?php
                                        getSelected($program, $allProgramUser, 'id');
                                    ?>
                                >
                                    <?=$program['name']?>
                                </option>
                            <?php endforeach;?>

                        </select>

                        <span class="error">
                            <?=isset($errors['program']) ? $errors['program'] : '';?>
                        </span>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-2">
                        <label class="control-label ">Gender</label>
                    </div>
                    <div class="col-sm-6 form-inline">
                        <input type="radio" name="gender" checked value="1"
                            <?php if (isset($user['gender'])
                                && $user['gender'] == 1) echo 'checked'?>
                        >Boy<br>
                        <input type="radio" name="gender" value="0"
                            <?php if (isset($user['gender'])
                                && $user['gender'] == 0) echo 'checked'?>
                        >Girl<br>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-6">
                        <input type="submit" value="Update"
                               name="submit" class="btn btn-success btn-sm">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="clearfix"></div>
</div>


<?php require '../../includes/footer.php';?>

<script>

    $(document).ready(function() {
        $('#select2_hobbies').select2();
        $('#select2_program').select2();
    });

</script>
