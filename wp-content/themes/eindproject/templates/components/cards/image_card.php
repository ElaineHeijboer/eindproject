<?php
$image = get_sub_field('image');
?>
<div class="row">
    <div class="col-md-6">
        <div class="image-card">
            <div class="image-card__image" style="background-image: url(<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>)">
                <h2 class="image-card__title"><?= get_sub_field('title');?></h2>
            </div>
            <p class="image-card__content"><?= get_sub_field('content');?></p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="image-card shadow">
            <div class="image-card__image " style="background-image: url(<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>)">
                <h2 class="image-card__title"><?= get_sub_field('title');?></h2>
            </div>
                <p class="image-card__content"><?= get_sub_field('content');?></p>
        </div>
    </div>
</div>
