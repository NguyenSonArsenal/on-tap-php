<?php

$arrHobbies = ['eat', 'play', 'code', 'sleep', 'music'];

?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/add.css">
</head>
<body onload="onloadEditUser()">
<div class="wrapper" id="wrapper">
    <div class="content">
        <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
                <div class="box box-primary">
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal tab-content" onsubmit="event.preventDefault(); return handleEditUser()" id="form_edit_user" action="#" method="POST">
                        <div class="">
                            <div class="form-group">
                                <label for="" class="col-md-3 control-label">Name:</label>
                                <div class="col-md-8">
                                    <input type="text" id="name" class="form-control"
                                           name="name" placeholder="Nguyen van son">
                                </div>
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-8">
                                    <span class="error error_for_name"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-3 control-label">Email:</label>
                                <div class="col-md-8">
                                    <input type="email" id="email" class="form-control"
                                           name="email" placeholder="vanson297.nguyen@gmail.com">
                                </div>
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-8">
                                    <span class="error error_for_email"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-3 control-label">Password: </label>
                                <div class="col-md-8">
                                    <input type="password" id="password" class="form-control"
                                           name="password" placeholder="12345678">
                                </div>
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-8">
                                    <span class="error error_for_password"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-3 control-label">Confirm Password: </label>
                                <div class="col-md-8">
                                    <input type="password" id="confirm_password" class="form-control"
                                           name="confirm_password" placeholder="12345678">
                                </div>
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-8">
                                    <span class="error error_for_confirm_password"></span>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="" class="col-md-3 control-label">Gender:</label>
                                <div class="col-md-8">
                                    <label class="radio-inline">
                                        <input type="radio" name="gender" value="1">Boy</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="gender" value="0">Girl</label>
                                </div>
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-8">
                                    <span class="error error_for_gender"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-3 control-label">Hobbies:</label>
                                <div class="col-md-9">
                                    <?php for ($i = 0; $i <  count($arrHobbies); $i++) { ?>
                                        <span>
                                            <input type="checkbox" name="hobbie[]" value="<?=$arrHobbies[$i]?>">
                                            <?=$arrHobbies[$i]?>
                                        </span>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3"></label>
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-save" aria-hidden="true"></i>
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- /.box-body -->
                </div>
                <!-- /. box -->
            </div>
            <!-- /.col -->
        </div>
    </div>

</div>

<script src="./helper.js"></script>
<script src="./handle.js"></script>


</body>
</html>
