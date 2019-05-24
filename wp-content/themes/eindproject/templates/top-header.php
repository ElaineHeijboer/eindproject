<div class="top-header">
    <div class="top-header__title">
        <?php if ( is_search() ) {
            echo 'Search';
        } else {
            the_title();
        } ?>
    </div>
    <div class="top-header__menu toggle">
        <img src="<?php echo bloginfo('template_directory') . '/assets/images/dots-menu.svg'; ?>">
    </div>
    <div class="top-header__social">
        <?php if(!empty($twitter)):?>
            <a href="<?=$twitter; ?>"><img src="<?php echo bloginfo('template_directory') . '/assets/images/facebook-white.svg'; ?>"></a>
        <?php endif; ?>
        <?php if(!empty($facebook)):?>
            <a href="<?= $facebook;?>"><img src="<?php echo bloginfo('template_directory') . '/assets/images/twitter-white.svg'; ?>"></a>
        <?php endif; ?>
        <?php if(!empty($linkedin)):?>
            <a href="<?=$linkedin;?>"><img src="<?php echo bloginfo('template_directory') . '/assets/images/linkedin-white.svg'; ?>"></a>
        <?php endif; ?>
    </div>
</div>
<div class="searchbar">
    <?php get_search_form(); ?>
</div>