<?php

class File
{

    public static function open($file, $model = 'r')
    {
        $file = @fopen($file, $model);

        var_dump($file);

        if ($file)
            return $file;

        return false;
    }


    public static function checkFileExist($file)
    {
        return file_exists($file);
    }


    public static function write($file, $data)
    {
        $file = self::open($file, 'w');
        fwrite($file, $data);
    }

    public static function append($file, $data)
    {
        $file = self::open($file, 'a');
        fwrite($file, $data);
    }

    public static function readFile($file)
    {
        if (self::checkFileExist($file))
        {
            $tmp = self::open($file, 'r');

            if (filesize($file) > 0)
                return fread($tmp, filesize($file));
            else
                echo 'File empty <br>';
        }
        else
        {
            echo 'File is not found';
            return false;
        }
    }

    public static function close($file)
    {
        fclose($file);
    }

    public static function isWritable($file)
    {
        if(self::checkFileExist($file))
            return is_writable($file);
        return false;
    }

    public static function getContent($file)
    {
        if (self::checkFileExist($file))
            return file_get_contents($file);
        return false;
    }

    public static function isDir($path)
    {
        return is_dir($path);
    }

    public static function rename($oldFile, $newFile)
    {
        if (self::checkFileExist($oldFile))
        {
            rename($oldFile, $newFile);
        }
    }

    public static function delete($file)
    {
        if (self::checkFileExist($file))
            unlink($file);
        return false;
    }
}