<?php

class Four {
    static $var = 'a static property';

    static function aMethod() {
        return self::$var;
    }
}

echo Four::$var;
echo Four::aMethod();


