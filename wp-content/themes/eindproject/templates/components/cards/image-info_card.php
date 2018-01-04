<?php
$image = get_sub_field('image');
?>

<div class="row">
    <div class="col-sm-12 offset-md-1 col-md-10 col-lg-6 offset-lg-0">
        <div class="image-info-card">
            <div class="image-info-card__image">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            </div>
            <div class="image-info-card__info">
                <h2 class="image-info-card__title"><?= get_sub_field('title'); ?></h2>
                <p class="image-info-card__content"><?= get_sub_field('content'); ?></p>
            </div>
        </div>
    </div>
    <div class="col-sm-12 offset-md-1 col-md-10 col-lg-6 offset-lg-0">
        <div class="image-info-card shadow">
            <div class="image-info-card__image">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            </div>
            <div class="image-info-card__info">
                <h2 class="image-info-card__title"><?= get_sub_field('title'); ?></h2>
                <p class="image-info-card__content"><?= get_sub_field('content'); ?></p>
            </div>
        </div>
    </div>
</div>
