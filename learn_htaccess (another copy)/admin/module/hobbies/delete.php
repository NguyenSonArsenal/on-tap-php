<?php

require '../../../bootstrap/Autoload.php';
use Library\Session;

$id = isset($_GET['id']) ? $_GET['id'] : '';

if ($id)
{
    $sql = "DELETE FROM hobbies WHERE id = $id";
    $query = $conn->query($sql);

    if(!$query)
    {
        echo "Error: " . $conn->error();
    }
    else
    {
        Session::flash('delete', 'delete successfuly');
        header('Location: index.php');
    }
}
else
{
    echo 'Khong ton tai';
}
