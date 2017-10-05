<?php
if( have_rows( 'card' ) ) {
    while( have_rows( 'card' ) ) : the_row();
        get_template_part('templates/components/cards/' . get_row_layout() );
    endwhile;
}
?>