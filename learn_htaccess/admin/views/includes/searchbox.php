<form action="#" class="searchbox" method="get">
    <div class="form-inline">
        <input type="text" name="search"
               class=" form-control" placeholder="search"
               value="<?php echo isset($programs['keysearch']) ? $programs['keysearch'] : '' ?>"
        >
        <input type="submit" value="Search"
               class="btn btn-success btn-sm"
               style="margin-right: 30px"
        >
        <input type="submit" class="btn btn-success btn-sm"
               name="topDESC5" value="Top 5 nhieu user dung nhat">
        <input type="submit" class="btn btn-danger btn-sm"
               name="topASC5" value="Top 5 dung it nhat">
    </div>
</form>