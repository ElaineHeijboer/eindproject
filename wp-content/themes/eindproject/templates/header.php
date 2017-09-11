<header>
    <?php
    $logo = get_field('logo', 'options');
    $twitter = get_field('twitter', 'options');
    $facebook = get_field('facebook', 'options');
    $linkedin = get_field('linkedin', 'options');
    ?>

    <div class="mainnav">
        <div class="mainnav__top">
            <div class="mainnav__arrow toggle">
                <img src="<?php echo bloginfo('template_directory') . '/assets/images/arrow-menu.svg'; ?>">
            </div>

            <a class="mainnav__logo" href="<?php echo home_url(); ?>">
                <?php
                if (!empty($logo)): ?>
                    <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"/>
                <?php endif; ?>
            </a>
            <div class="mainnav__social">
                <?php if(!empty($twitter)):?>
                    <a href="<?=$twitter; ?>"><img src="<?php echo bloginfo('template_directory') . '/assets/images/facebook-light.svg'; ?>"></a>
                <?php endif; ?>
                <?php if(!empty($facebook)):?>
                    <a href="<?= $facebook;?>"><img src="<?php echo bloginfo('template_directory') . '/assets/images/linkedin-light.svg'; ?>"></a>
                <?php endif; ?>
                <?php if(!empty($linkedin)):?>
                    <a href="<?=$linkedin;?>"><img src="<?php echo bloginfo('template_directory') . '/assets/images/twitter-light.svg'; ?>"></a>
                <?php endif; ?>
            </div>
        </div>
        <div class="mainnav__row">
            <?php
            wp_nav_menu(array(
                'menu' => 'overview',
                'theme_location' => 'overview',
                'container' => '',
                'depth' => 1,
            ));
            ?>
        </div>
        <hr>
        <div class="mainnav__row">
            <?php
            wp_nav_menu(array(
                'menu' => 'basics',
                'theme_location' => 'basics',
                'container' => '',
                'depth' => 2,
            ));
            ?>
        </div>
        <hr>
        <div class="mainnav__row">
            <?php
            wp_nav_menu(array(
                'menu' => 'contact',
                'theme_location' => 'contact',
                'container' => '',
                'depth' => 1,
            ));
            ?>
        </div>
    </div>

    <div class="top-header">
        <div class="top-header__title">
            <?php the_title(); ?>
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
</header>