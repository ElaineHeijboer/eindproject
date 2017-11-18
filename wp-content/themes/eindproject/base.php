<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>
<!--[if IE]>
<div class="alert alert-warning">
    <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your
    browser</a> to improve your experience.', 'sage'); ?>
</div>
<![endif]-->
<?php
do_action('get_header');
get_template_part('templates/header');
?>
<div class="offset">
    <?php get_template_part('templates/top-header'); ?>
    <div class="wrap container-fluid" role="document">
        <?php if (is_front_page()){ ?>
            <?php include Wrapper\template_path(); ?>
        <?php } else { ?>
            <div class="content">
                <main class="main">
                    <div class="container-fluid padding-container">
                        <?php include Wrapper\template_path(); ?>
                    </div>
                </main><!-- /.main -->
            </div>
        <?php } ?>

    </div><!-- /.wrap -->
</div>

<?php
do_action('get_footer');
get_template_part('templates/footer');
wp_footer();
?>
</body>
</html>
