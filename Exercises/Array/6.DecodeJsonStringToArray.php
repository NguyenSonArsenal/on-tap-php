<?php

$json = '{
    "Title": "The Cuckoos Calling",
    "Author": "Robert Galbraith",
    "Detail": {
        "Publisher": "Little Brown"
    }
}';

$arr = json_decode($json, true);
// option: true: array quan he
// default: false =< stdClass object

foreach ($arr as $key => $value)
{
    if ($key != 'Detail')
    {
        echo $key . ' : ' . $value . '<br>';
    }
    else
    {
        foreach ($arr[$key] as $k => $v)
        {
            echo $k . ' : ' . $v;
        }
    }
}

echo '<br>';
echo '====================';
echo '<br>';

// Cach 2
function showKeyValue($key, $value)
{
    echo $key . ' : ' . $value . '<br>';
}

array_walk_recursive($arr, "showKeyValue");
