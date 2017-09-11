<?php
/**
 * default search form
 */
?>
<form role="search" method="get" id="menu-search"  class="menu-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="search-wrap">
        <!-- <label class="screen-reader-text" for="s"><?php _e( 'Search for:', 'presentation' ); ?></label>-->
        <input type="search" class="search" placeholder="Search..." name="s" id="search-input" value="<?php echo esc_attr( get_search_query() ); ?>" />
        <button type="submit"><img src="<?php echo bloginfo('template_directory') . '/assets/images/search-icon.svg'; ?>"></button>
        <!--<input class="screen-reader-text" type="submit" id="search-submit" value="Search"/> <i class="fa fa-search"></i>-->
    </div>
</form>

