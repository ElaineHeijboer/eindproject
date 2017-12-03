<div class="basic-card shadow">
    <div class="basic-card__card">
        <a href="<?php the_permalink(); ?>"><h2 class="basic-card__title"><?php the_title(); ?></h2></a>
        <p class="basic-card__content"><?php the_excerpt(); ?></p>
        <hr>
        <a href="<?php the_permalink(); ?>" class="basic-card__link"><?php the_permalink(); ?></a>
    </div>
</div>
