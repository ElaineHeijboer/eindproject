<?php
if( have_rows( 'input' ) ) {
    while( have_rows( 'input' ) ) : the_row();
        get_template_part('templates/components/input/' . get_row_layout() );
    endwhile;
}
?>