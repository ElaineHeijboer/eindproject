<?php use Roots\Sage\Titles; ?>
<div class="search-page">
    <div class="row">
        <div class="col-md-12">
            <h2><?= Titles\title(); ?></h2>

            <?php if (!have_posts()) : ?>
                <div class="alert alert-warning">
                    <?php _e('Sorry, no results were found.', 'sage'); ?>
                </div>
            <?php endif; ?>
            <div class="row">
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('templates/content', 'search'); ?>
                <?php endwhile; ?>
            </div>
            <?php the_posts_navigation(); ?>
        </div>
    </div>
</div>


