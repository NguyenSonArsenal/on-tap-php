<?php

require '../../../bootstrap/Autoload.php';
use Library\Session;
use Library\Hobbies;
use Library\Database;

$db = new Database();

$id = isset($_GET['id']) ? $_GET['id'] : '';

Hobbies::delete($id);


