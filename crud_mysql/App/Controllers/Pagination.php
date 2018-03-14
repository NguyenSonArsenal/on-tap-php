<?php

namespace crud_mysql\App\Controllers;

class Pagination
{
    public static $totalRecords;
    public static $totalPage;
    public $currentPage;

    const LIMIT = 5;

    public static function getCurrentPage()
    {
        $self = new self();

        if (isset($_GET['page']) && is_numeric($_GET['page']))
            $self->currentPage = $_GET['page'];
        else
            $self->currentPage = 1;

        return round($self->currentPage);
    }


    // determines the total number of records in table
    public static function setTotalRecords($conn, $table)
    {
        $sql = "SELECT id from $table";

        $result = $conn->query($sql);

        if ($result)
        {
            self::$totalRecords = $result->num_rows;
            return self::$totalRecords;
        }
        else
        {
            return false;
        }

    }


    public static function getRecordsEachPage($conn, $table)
    {
        $currentPage    = self::getCurrentPage();
        $totalRecords   = self::setTotalRecords($conn, $table);

        $from = ($currentPage-1)*self::LIMIT;

        $sql = "SELECT * FROM $table LIMIT $from, " . self::LIMIT;
        $recordOnPage = $conn->query($sql);

        return $recordOnPage;
    }


    public static function render($totalRecords)
    {
        self::$totalPage = ceil($totalRecords/self::LIMIT);
        Pagination::renderPaginationHtml(self::$totalPage);
    }

    public static function renderPaginationHtml($totalPage)
    {
        echo "<div class = 'pagination'>";
            for ($i=1; $i<=$totalPage; $i++)
            {
                echo "<a href='index.php?page=$i' class='pagination_link'>$i</a>";
            }
        echo "</div>";
        echo "<div class='clearfix'></div>";
    }
}