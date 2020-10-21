<style>
    <?php if( have_rows('color_shema', 'option') ):
    while( have_rows('color_shema', 'option') ): the_row();?>
    .yq-button {
        background-color: <?php the_sub_field('color_bg_button'); ?>;
        color: <?php the_sub_field('color_text_button'); ?>;
        border-radius: <?php the_sub_field('yq-button-br'); ?>px;
    }
    #yq_progressbar{
        background-color: <?php the_sub_field('color_bg_button'); ?>;
    }

    <?php endwhile; ?>
    <?php endif; ?>

</style>
