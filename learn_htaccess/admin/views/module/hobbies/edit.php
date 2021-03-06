<?php

require '../../../../bootstrap/Autoload.php';
use admin\Controllers\HobbiesController;

$hobby = HobbiesController::findOneById();

if ($hobby)
    $hobby = $hobby[0]['name'];
else
{
    die('404.php');
}

// validate
$errors = [];

$errors = HobbiesController::update();

?>

<?php require '../../includes/header.php';?>

<div class="page_wrapper">
    <div class="sidebar pull-left">
        <div class="list_group_item active">
            <a class="link" href="">Trang chu</a>
        </div>
        <div class="list_group_item">
            <a class="link" href="">User</a>
        </div>
        <div class="list_group_item">
            <a class="link" href="">Hobbies</a>
        </div>
        <div class="list_group_item">
            <a class="link" href="">Program</a>
        </div>
    </div>
    <div class="main pull-right">

        <div class="main_head">
            <h2 class="title pull-left">Add hobbies</h2>
            <div class="clearfix"></div>
        </div>

        <div class="main_content">
            <form action="#" method="post" class="form">
                <div class="form-group row">
                    <div class="col-sm-2">
                        <label class="control-label ">Hobbies</label>
                    </div>
                    <div class="col-sm-6">
                            <input type="text" class="form-control input_hobbies"
                                   name="hobbies" value="<?=$hobby?>">
                            <?php if(isset($errors['hobbies'])) : ?>
                                <span class="error"><?=$errors['hobbies']?></span>
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

<?php require '../../includes/footer.php';?>