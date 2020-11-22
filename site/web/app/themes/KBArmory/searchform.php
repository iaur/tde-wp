<!-- Structure: searchform.php controls the structure of our search functionality -->

<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url('/'); ?>">
    <div class="type">
        <label class="screen-reader-text"></label>
        <input type="text" value="" name="s" id="s" placeholder="type here..">
        <button type="submit" class="search-submit"><i class="material-icons">search</i></button>

    </div>
</form>