<?php

include 'File.php';

class Log extends File
{
    public static function log_info($file, $message = 'welcome log')
    {
        $date = date('d/m/Y H:i:s');

        $log = $date . ' : ' . $message . "\n";

        $file = parent::append($file, $log);

        return $file;
    }
}
$file = 'data.txt';
Log::log_info($file);
echo (File::readFile($file));
