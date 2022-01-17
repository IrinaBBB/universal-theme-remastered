<form class="search-form" role="search" method="get" id="search-form" action="<?php echo home_url( '/' ) ?>" >
    <input type="text" value="<?php echo get_search_query() ?>" placeholder="Search" name="s" id="s" />
    <button id="search-submit" type="submit">
        <img src="<?php echo get_theme_file_uri() . '/assets/images/search.svg' ?>" alt="search logo">
    </button>
</form>