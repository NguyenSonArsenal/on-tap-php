<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 20/03/18
 * Time: 12:34
 */

namespace app\controllers;


class Controller
{
    public function view($page, $param = null)
    {
        if ($param != null)
            extract($param);

        require ROOT . '/resources/views/'.$page.'.php';
    }
}