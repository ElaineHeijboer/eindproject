<?php
if( have_rows( 'component' ) ) {
    while( have_rows( 'component' ) ) : the_row();
        get_template_part('templates/components/' . get_row_layout() );
    endwhile;
}
?>


<?php the_content(); ?>
