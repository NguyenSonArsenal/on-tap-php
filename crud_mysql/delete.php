<?php
require './Autoload.php';

use crud_mysql\Library\Session;
use crud_mysql\App\Controllers\Pagination;


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $currentPage    = Pagination::getCurrentPage();

    if ($id)
    {
        $sql = "DELETE FROM hotel WHERE id = $id";

        $query = $conn->query($sql);

        if ($query)
        {
            Session::flash('delete', 'Delete successfully');
            header("Location: index.php?page=$currentPage");
        }
        else
            echo "Error: $conn->error";
    }
}