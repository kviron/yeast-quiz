<style>
    .yq-main-page{
        background-repeat: no-repeat;
        background-position: 100px center;
        background-color: <?php the_sub_field('home_page_quiz_bg_color');?>;
        background-size: 100% auto;
        background-image: url(<?php the_sub_field('home_page_quiz_bg');?>);
        color: <?php the_sub_field('color_text');?>;
    }
    .yq-main-page__body{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
    }
    .yq-footer, .yq-main-page h3{
        color: <?php the_sub_field('color_text');?>;;
    }
</style>


<div class="yq__page yq__main-page yq-main-page yq-active-page" id="yq-page-<?=$count_page?>">
    <div class="yq__page-body yq-main-page__body">
        <h3 class="yq-title-page">
            <?php the_sub_field('title_page');?>
        </h3>
        <p class="yq-subtitle-page">
            <?php the_sub_field('subtitle_page');?>
        </p>

        <div class="yq-button" id="yq-start">
            <?php the_sub_field('button_start');?>
        </div>
    </div>
</div>
