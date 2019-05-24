<?php

$tab_title = array();
$tab_content = array();
$tab_copy = array();

if (have_rows('tabs')):

// loop through the rows of data
    while (have_rows('tabs')) : the_row();
        $active = '';
        if (get_sub_field('tab_active')) {
            $active = 'active';
        }

        $tab_title[] = '<li class="' . $active . '"><a href="#tab' . get_sub_field('tab_id') . '">' . get_sub_field('tab_title') . '</a></li>';
        $tab_content[] = '<div id="tab' . get_sub_field('tab_id') . '" class="tab ' . $active . '"><p>' . get_sub_field('tab_content') . '</p></div>';
        $tab_copy[] = '<div id="tab' . get_sub_field('tab_id') . '" class="tab ' . $active . '"><button class="btn" data-toggle="tooltip" data-placement="bottom" data-original-title="Copied!" aria-describedby="tooltip" data-clipboard-target="#tab' . get_sub_field('tab_id') . '">Copy code</button></div>';
    endwhile;

endif;
?>
<div class="row">
    <div class="col-md-12">
        <div class="tabs">
            <ul class="tab-links">
                <?php foreach ($tab_title as $title) {
                    echo $title;
                } ?>
            </ul>
            <div class="tab-content">

                <?php foreach ($tab_content as $content){
                    echo $content;
                } ?>
            </div>
            <div class="tab-button">

                <?php foreach ($tab_copy as $button){
                    echo $button;
                } ?>
            </div>
        </div>
    </div>
</div>