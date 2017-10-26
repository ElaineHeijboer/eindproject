<div class="row">
    <div class="col-md-10">
        <div class="text-columns">
            <?php if(get_sub_field( 'titel' )){ ?>
                <h2><?= get_sub_field( 'titel' );?></h2>
            <?php } ?>
            <p><?= get_sub_field('text_content');?></p>
        </div>
    </div>
</div>

