<?php

require '../bootstrap/Autoload.php';

use admin\Controllers\AuthController;
use app\controllers\HomeController;
use app\controllers\Controller;


(new HomeController())->viewHome();

