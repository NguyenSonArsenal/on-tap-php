<?php

$arrHobbies = ['eat', 'play', 'code', 'sleep', 'music'];

?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bower_components/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="dist/css/add.css">
</head>
<body>
<div class="wrapper">
    <div class="content">
        <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
                <div class="box box-primary">
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal tab-content" onsubmit="event.preventDefault(); return eventHandleAddUser()" id="form_add_user" action="#" method="POST">
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
                            <div class="form-group div_select2">
                                <label for="" class="col-md-3 control-label">Programs:</label>
                                <div class="col-md-8 lbl-address">
                                    <select id="select2Language" multiple="multiple" style="width:100%;">
                                        <option>C</option>
                                        <option>C++</option>
                                        <option>PHP</option>
                                        <option>Java</option>
                                        <option>javascript</option>
                                    </select>
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
                                <label for="" class="col-md-3 control-label">Redirect:</label>
                                <div class="col-md-9">
                                    <span>
                                        <input type="checkbox" name="redirect" id="redirect"> Redirect to home page
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3"></label>
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-save" aria-hidden="true"></i>
                                        Add user
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

<script src="/bower_components/jquery/dist/jquery.min.js"></script>

<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="/bower_components/select2/dist/js/select2.full.min.js"></script>

<script src="./add.js"></script>


</body>
</html>
