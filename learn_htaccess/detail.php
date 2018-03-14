<?php

$alias  = isset($_GET['alias']) ? $_GET['alias'] : -1;
$id     = isset($_GET['id']) ? $_GET['id'] : -1;
$page   = isset($_GET['page']) ? $_GET['page'] : -1;

echo 'Alias: ' . $alias . '<br>';
echo 'Id: ' . $id . '<br>';
echo 'Page: ' . $page . '<br>';