<?php


require './Autoload.php';

use crud_mysql\Library\Session;

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = isset($_GET['id']) ? $_GET['id'] : '';

    if ($id)
    {
        $sql = "DELETE FROM hotel WHERE id = $id";

        $query = $conn->query($sql);

        if ($query)
        {
            Session::flash('delete', 'Delete successfully');
            header('Location: index.php');
        }
        else
            echo "Error: $conn->error";
    }
}