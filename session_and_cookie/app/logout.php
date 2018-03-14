<?php
namespace session_and_cookie\app;
use session_and_cookie\app\Session as Session ;
use session_and_cookie\app\Cookie as Cookie ;

require 'Session.php';
require 'Cookie.php';

session_start();

if (isset($_SESSION['email']))
    Session::forget('email');

if (isset($_COOKIE['email']))
    Cookie::forget('email');

header("Location:index.php");