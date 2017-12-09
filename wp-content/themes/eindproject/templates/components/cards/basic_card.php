<div class="row">
    <div class="col-md-6">
        <div class="basic-card">
            <div class="basic-card__card">
                <h2 class="basic-card__title"><?= get_sub_field('title');?></h2>
                <p class="basic-card__content"><?= get_sub_field('content');?></p>
                <hr>
                <?php
                if( have_rows('url') ):
                    while ( have_rows('url') ) : the_row(); ?>

                    <a href="<?= get_sub_field('link');?>" class="basic-card__link"><?= get_sub_field('link_text');?></a>

                    <?php  endwhile;
                else :
                endif;
                ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="basic-card shadow">
            <div class="basic-card__card">
                <h2 class="basic-card__title"><?= get_sub_field('title');?></h2>
                <p class="basic-card__content"><?= get_sub_field('content');?></p>
                <hr>
                <?php
                if( have_rows('url') ):
                    while ( have_rows('url') ) : the_row(); ?>

                        <a href="<?= get_sub_field('link');?>" class="basic-card__link"><?= get_sub_field('link_text');?></a>

                    <?php  endwhile;
                else :
                endif;
                ?>
            </div>
        </div>
    </div>
</div>
