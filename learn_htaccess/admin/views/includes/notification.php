<?php
use Library\Session;

$message_add    = Session::flash('add');
$message_update = Session::flash('update');
$message_delete = Session::flash('delete');
?>

<?php if(isset($message_add)) : ?>
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert"
                aria-label="Close" <span aria-hidden="true">&times;</span>
        </button>
        <?=$message_add;?>
    </div>
<?php endif ; ?>

<?php if(isset($message_update)) : ?>
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert"
                aria-label="Close" <span aria-hidden="true">&times;</span>
        </button>
        <?=$message_update;?>
    </div>
<?php endif ; ?>

<?php if(isset($message_delete)) : ?>
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert"
                aria-label="Close" <span aria-hidden="true">&times;</span>
        </button>
        <?=$message_delete;?>
    </div>
<?php endif ; ?>