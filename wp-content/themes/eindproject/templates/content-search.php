<div class="col-md-6">
    <div class="basic-card shadow">
        <div class="basic-card__card">
            <a href="<?php the_permalink(); ?>"><h3 class="basic-card__title"><?php the_title(); ?></h3></a>
            <p class="basic-card__content"><?= get_the_excerpt(); ?></p>
            <hr>
            <a href="<?php the_permalink(); ?>" class="basic-card__link">Go to: <?php the_title(); ?></a>
        </div>
    </div>
</div>
