<div class="row">
<div class="<?php if (is_page('buttons')) { ?>col-md-9 <?php }else{ ?> col-md-10 <?php } ?>">
<?php
if( have_rows( 'component' ) ) {
    while( have_rows( 'component' ) ) : the_row();
        get_template_part('templates/components/' . get_row_layout() );
    endwhile;
}
?>
<?php the_content(); ?>
</div>
    <?php if (is_page('buttons')) { ?>
<div class="col-md-3">
    <?php get_template_part('templates/sidebar'); ?>
</div>
    <?php }?>
</div>



