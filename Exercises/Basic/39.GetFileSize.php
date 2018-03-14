<?php

echo " ? Write a PHP program to get file size";
echo "<br>";
echo "==============================";
echo "<br>";

$fileName = './'.basename(__FILE__);

function formatSizeUnits($bytes)
{
    if ($bytes >= 1073741824)
    {
        $bytes = number_format($bytes / 1073741824, 2) . ' GB';
    }
    elseif ($bytes >= 1048576)
    {
        $bytes = number_format($bytes / 1048576, 2) . ' MB';
    }
    elseif ($bytes >= 1024)
    {
        $bytes = number_format($bytes / 1024, 2) . ' KB';
    }
    elseif ($bytes > 1)
    {
        $bytes = $bytes . ' bytes';
    }
    elseif ($bytes == 1)
    {
        $bytes = $bytes . ' byte';
    }
    else
    {
        $bytes = '0 bytes';
    }
    
    return $bytes;
}

function getFileSize($file)
{
    if (file_exists($file))
    {
        return  formatSizeUnits(filesize($file));
    }
    else
    {
        return false;
    }
}

if (getFileSize($fileName) != false )
{
    $fileSize = getFileSize($fileName);
    echo "Size of file $fileName is " . $fileSize;
}
else
{
    echo 'File is not exit';
}

