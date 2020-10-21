<style>
    .yq-last-page{
        display: flex;
        margin-right: -30px;
    }
    .yq__col-6{
        width: 50%;
        margin-right: 30px;
    }
</style>


<div class="yq__page yq__last-page yq-last-page " id="yq-page-<?=$count_page?>">
    <div class="yq__col-6">
        <h3 class="yq-title-page">
            <?php the_sub_field('title_page');?>
        </h3>
        <p class="yq-subtitle-page">
            <?php the_sub_field('subtitle_page');?>
        </p>
    </div>
    <div class="yq__col-6">
        <?php get_template_part("inc/quiz/form/form-template"); //Выводим страницу вопроса?>
    </div>
</div>