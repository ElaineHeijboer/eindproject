<?php
$image_1 = get_sub_field('button_1_image');
$image_2 = get_sub_field('button_2_image');
$image_3 = get_sub_field('button_3_image');
?>

<div class="row">
    <div class="col-sm-12 col-md-10 buttons-row">
        <div class="button-flat">
            <button type="button"><?= get_sub_field('button_1'); ?></button>
        </div>

        <div class="button-flat__round">
            <button type="button"><img src="<?php echo $image_1['url']; ?>" alt="<?php echo $image_1['alt']; ?>"/>
            </button>
        </div>

        <div class="button-flat__disabled">
            <button type="button" disabled><?= get_sub_field('button_2'); ?></button>
        </div>

        <div class="button-flat__disabled-round">
            <button type="button" disabled><img src="<?php echo $image_2['url']; ?>"
                                                alt="<?php echo $image_2['alt']; ?>"/></button>
        </div>

        <div class="button-flat__submit">
            <button type="button"><?= get_sub_field('button_3'); ?><img src="<?php echo $image_3['url']; ?>" alt="<?php echo $image_3['alt']; ?>"/>
            </button>
        </div>

        <div class="button-flat__submit-round">
            <button type="button"><img src="<?php echo $image_3['url']; ?>" alt="<?php echo $image_3['alt']; ?>"/>
            </button>
        </div>
    </div>
</div>
