<?php

namespace Library;
use Library\Database;

class Pagination
{
    public static function render($items)
    {
        $current_page   =   $items['current_page']; // page = 3
        $total          =   $items['total']; // co 110 records
        $limit          =   $items['limit']; // limit =10
        $totalPage      =   ceil($total/$limit); // tong page = 6

        $space = 2;
        $limit_display_quanity_page = 5;

        $start_tmp  =   $current_page - $space;
        $end_tmp    =   $current_page + $space;

        if ($start_tmp <=0)
        {
            $start_tmp = 1;
            $end_tmp = ($totalPage >= $limit_display_quanity_page ) ?
                        $limit_display_quanity_page :
                        $totalPage;
        }

        if ($end_tmp >= $totalPage)
        {
            $end_tmp = $totalPage;
            $start_tmp = $totalPage - ($limit_display_quanity_page - 1);
        }

        echo "Start: $start_tmp --- End: $end_tmp <br>";

        echo "<div class = 'pagination'>";

        if ($current_page > 1 && $current_page <= $totalPage )
        {
            $prev_page = $current_page - 1;
            echo "<a href='index.php?page=$prev_page' class='pagination_link'><<</a>";
        }

        for ($i=$start_tmp; $i<=$end_tmp; $i++)
        {
            if ($i == $current_page)
                echo "<a href='index.php?page=$i' class='pagination_link active'>$i</a>";
            else
                echo "<a href='index.php?page=$i' class='pagination_link'>$i</a>";
        }

        if ($current_page != $totalPage)
        {
            $next_page = $current_page + 1;
            echo "<a href='index.php?page=$next_page' class='pagination_link'>>></a>";
        }

        echo "</div>";
        echo "<div class='clearfix'></div>";

    }
}