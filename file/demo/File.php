<?php

class File
{

    public static function open($file, $model = 'r')
    {
        if (self::checkFileExist($file))
        {
            $file = @fopen($file, $model);

            if ($file)
                return $file;
        }
        else
            return false;
    }


    public static function checkFileExist($file)
    {
        return file_exists($file);
    }


    public static function write($file, $data)
    {
        if (self::checkFileExist($file))
        {
            $file = self::open($file, 'w');
            fwrite($file, $data);
        }
    }

    public static function append($file, $data)
    {
        if (self::checkFileExist($file))
        {
            $file = self::open($file, 'a');
            fwrite($file, $data);
        }
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

$path = 'demo.txt';
$data = 'anh yeu e mat oy, that day, k dua dau. A iu ao loai';
echo 'Read file <br>';
echo File::readFile($path);

echo '<br>==========<br>';

echo 'After write file <br>';
File::write($path, $data);
echo File::readFile($path);

echo '<br>==========<br>';
File::append($path, $data);
echo File::readFile($path);

echo '<br>==========<br>';

echo 'Check file ' . $path . ' is_writeable: ';
var_dump(File::isWritable('demo.txt'));

echo '<br>==========<br>';

echo 'File get content <br>';
echo File::getContent($path);

echo '<br>==========<br>';
echo 'Check foder exits: ';
var_dump(File::isDir('./file'));

File::rename('demo.txt', 'xxx.txt');

if(File::delete('demo.txt'))
{
    echo 'Xoa thanh cong file';
}
else
{
    echo 'Khong xoa duoc';
}
