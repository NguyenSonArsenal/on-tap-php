<?php

namespace Library;
use Library\Database;

class Pagination
{
    public static function renderLikeGoogle($items)
    {

        $search = isset($_GET['search']) ? $_GET['search'] : '';

        $currentPage = $items['current_page'];
        $total = $items['total']; // co 5 records
        $limit = $items['limit']; // limit =10
        $totalPage = ceil($total / $limit); // tong page = 3

        if ($totalPage > 0)
        {
            echo 'totalPages = ' . $totalPage . '<br>';

            echo 'current page: ' . $currentPage ;

            $space = 2;

            $start_tmp  = $currentPage - $space;
            $end_tmp    = $currentPage + $space;

            if ($start_tmp <=0 )
            {
                $end_tmp -= ($start_tmp -1);
                $start_tmp = 1;
            }

            if ($end_tmp >= $totalPage)
            {
                $start_tmp = $totalPage - 2*$space;
                $end_tmp = $totalPage;
            }

            echo "Start: $start_tmp --- End: $end_tmp <br>";

            echo "<div class = 'pagination'>";

            if ($currentPage > 1 && $currentPage <= $totalPage) {
                $prev_page = $currentPage - 1;
                echo "<a href='index.php?page=$prev_page&search=$search' 
            class='pagination_link'><<</a>";
            }

            for ($i = $start_tmp; $i <= $end_tmp; $i++) {
                if ($i == $currentPage)
                    echo "<a href='index.php?page=$i&search=$search' 
                class='pagination_link active'>$i</a>";
                else
                    echo "<a href='index.php?page=$i&search=$search' 
                class='pagination_link'>$i</a>";
            }

            if ($currentPage != $totalPage) {
                $next_page = $currentPage + 1;
                echo "<a href='index.php?page=$next_page&search=$search'
             class='pagination_link'>>></a>";
            }

            echo "</div>";
            echo "<div class='clearfix'></div>";
        }
    }


    public static function render($items)
    {
        $currentPage = $items['current_page']; // page = 3
        $total = $items['total']; // co 110 records
        $limit = $items['limit']; // limit =10
        $totalPage = ceil($total / $limit); // tong page = 6

        $space = 2;
        $limitDisplayQuanityPage = 5;

        $start_tmp = ($currentPage - $space) > 0 ? $currentPage - $space : 1;
        $end_tmp = ($currentPage + $space) < $totalPage ?
            $currentPage + $space : $totalPage;

        if ($end_tmp == $totalPage)
            $start_tmp = $totalPage - ($limitDisplayQuanityPage);

        $html = "<div class = 'pagination'>";

        $html .= self::renderPrePage($currentPage, $totalPage);

        if ($start_tmp >= 1 && $start_tmp < $space) {
            $end_tmp = ($totalPage > $limitDisplayQuanityPage)
                ? $limitDisplayQuanityPage + 1
                : $totalPage;

            $html .= self::renderMiddle($start_tmp, $end_tmp, $currentPage, $html);

            $html .= "<span class='dots'>..</span>";
            $html .= "<a href='index.php?page=$totalPage' class='pagination_link'>$totalPage</a>";
        }

        if ($start_tmp >= $space && $end_tmp <= ($totalPage - $space)) {
            $html .= "<a href='index.php?page=1' class='pagination_link'>1</a>";
            $html .= "<span class='dots'>..</span>";

            $html .= self::renderMiddle($start_tmp, $end_tmp, $currentPage, $html);

            $html .= "<span class='dots'>..</span>";
            $html .= "<a href='index.php?page=$totalPage' class='pagination_link'>$totalPage</a>";
        }

        if ($end_tmp <= $totalPage && $end_tmp > $totalPage - $space) {
            $html .= "<a href='index.php?page=1' class='pagination_link'>1</a>";
            $html .= "<span class='dots'>..</span>";

            $html .= self::renderMiddle($start_tmp, $end_tmp, $currentPage, $html);
        }

        $html .= self::renderNextPage($currentPage, $totalPage);

        $html .= "</div>";
        $html .= "<div class='clearfix'></div>";

        return $html;

    }

    public static function renderPrePage($currentPage, $totalPage)
    {
        if ($currentPage > 1 && $currentPage <= $totalPage) {
            $prev_page = $currentPage - 1;
            $html = "<a href='index.php?page=$prev_page' class='pagination_link'><<</a>";
            return $html;
        } else {
            return '';
        }
    }


    public static function renderNextPage($currentPage, $totalPage)
    {
        if ($currentPage != $totalPage) {
            $next_page = $currentPage + 1;
            $html = "<a href='index.php?page=$next_page' class='pagination_link'>>></a>";
            return $html;
        } else {
            return '';
        }
    }

    public static function renderMiddle($start, $end, $currentPage, &$html)
    {
        for ($i = $start; $i <= $end; $i++) {
            if ($i == $currentPage)
                $html .= "<a href='index.php?page=$i' class='pagination_link active'>$i</a>";
            else
                $html .= "<a href='index.php?page=$i' class='pagination_link'>$i</a>";
        }
    }
}

