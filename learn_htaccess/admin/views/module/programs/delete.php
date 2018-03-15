<?php

require '../../../../bootstrap/Autoload.php';
use Library\Session;
use Library\Database;
use admin\Controllers\ProgramController;

$db = new Database();

$id = isset($_GET['id']) ? (int)$_GET['id'] : '';

ProgramController::delete($id);


