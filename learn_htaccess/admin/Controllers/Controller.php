<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 15/03/18
 * Time: 17:38
 */

namespace admin\Controllers;


class Controller
{
    const LIMIT = 4;


    public static function getNumberFrom()
    {
        $limit = self::LIMIT;

        $from   = (isset($_GET['page'])  && $_GET['page'] >= 0)  ?
            (int)$_GET['page']    :  1;


        if ($from != 1)
            $from   =   $from * $limit - ($limit - 1);

        return $from;
    }
}