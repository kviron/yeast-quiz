<div class="yq__page yq__quest-page yq-quest-page" id="yq-page-<?=$count_page?>">
<div class="yq__page-body">
    <h3 class="yq-title-page">
        <?php the_sub_field('title_page');?>
    </h3>
    <div class="yq__quest-body">
        <?php if( have_rows('response_to_question') ):?>
            <div name="quest-<?=$count_page?>" id="quest-<?=$count_page?>">
                
            <?php $count_answer = 1; // перебираем строки повторителя
            while ( have_rows('response_to_question') ) : the_row();?>
                <label>
                    <input type="radio" name="radio-input-<?=$count_page?>" id="radio-id-<?=$count_page?>-<?=$count_answer?>" value="<?php the_sub_field('answer');?>">
                    <?php the_sub_field('answer');?>
                </label>
            <?php
            $count_answer++;
            endwhile;?>
                
            </div>
        <?php endif;?>
    </div>
</div>
</div>