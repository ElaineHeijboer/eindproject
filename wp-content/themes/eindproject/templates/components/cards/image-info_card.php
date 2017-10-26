<?php
$image = get_sub_field('image');
?>

<div class="row">
    <div class="col-md-6">
        <div class="image-info-card">
            <img class="image-info-card__image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            <div class="image-info-card__info">
                <h2 class="image-info-card__title"><?= get_sub_field('title'); ?></h2>
                <p class="image-info-card__content"><?= get_sub_field('content'); ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="image-info-card shadow">
            <img class="image-info-card__image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            <div class="image-info-card__info">
                <h2 class="image-info-card__title"><?= get_sub_field('title'); ?></h2>
                <p class="image-info-card__content"><?= get_sub_field('content'); ?></p>
            </div>
        </div>
    </div>
</div>
