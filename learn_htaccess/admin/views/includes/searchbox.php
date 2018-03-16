<form action="#" class="searchbox" method="get">
    <div class="form-inline">
        <input type="text" name="search"
               class=" form-control" placeholder="search"
               value="<?php echo isset($programs['keysearch']) ? $programs['keysearch'] : '' ?>"
        >
        <input type="submit" value="Search"
               class="btn btn-success btn-sm"
        >
    </div>
</form>