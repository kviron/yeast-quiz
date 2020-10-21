<?php
/**
 * Шорткод вывода формы
 *
 * @return string
 * @see https://wpruse.ru/?p=3224
 */

//Инициализация стией и скриптов квиза
add_action('wp_enqueue_scripts', 'yq_scripts', 20);
function yq_scripts()
{
    wp_enqueue_script('jquery');
    //Основной скрипт работы квиза
    wp_enqueue_script('yq-js', get_template_directory_uri() . '/inc/quiz/assets/js/index.min.js', false, '1.0', true);

    // Скрипт валидатор и обработчик формы
    wp_enqueue_script('yq-form-action', get_template_directory_uri() . '/inc/quiz/assets/js/form-action.js', false, '1.0', true);

    // Основные стили квиза
    wp_enqueue_style('yq-css', get_template_directory_uri() . '/inc/quiz/assets/css/yq-style.min.css', false, '1.0');
}

//Отображение настроек и полей квиза в меню
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Квиз',
        'menu_title'	=> 'Квиз',
        'menu_slug' 	=> 'quiz-settings',
        'capability'	=> 'edit_posts',
        'icon_url'	    => 'dashicons-feedback',
        'redirect'		=> false
    ));
}



//Создание шаблона квиза
add_shortcode( 'yeast-quiz', 'yeast_quiz' );

function yeast_quiz() {
    ob_start(); ?>
    <?php get_template_part("inc/quiz/settings");//Настройки квиза ?>
    <div class="yeast-quiz">
        <div class="yq__wrapper">
            <form class="yq-form" method="post" id="yq-form-quiz">
            <?php
            $count_page = 1;
            // проверяем есть ли данные в гибком содержании
            if( have_rows('pages_quiz', 'option') ):?>

            <?php while ( have_rows('pages_quiz', 'option') ) : the_row();?>

                   <?php set_query_var( 'count_page', $count_page ); //Передаем переменную счетчика в шаблоны?>

                   <?php if( get_row_layout() == 'home_quiz_page' ):?>
                       <?php get_template_part("inc/quiz/templates/main-page");//Выводим главную страницу квиза ?>
                   <?php endif;?>

                    <?php if( get_row_layout() == 'question_quiz_page' ):?>
                        <?php get_template_part("inc/quiz/templates/quest-page"); //Выводим страницу вопроса?>
                    <?php endif;?>

                    <?php if( get_row_layout() == 'last_quiz_page' ):?>
                        <?php get_template_part("inc/quiz/templates/last-page"); //Выводим последнюю страницу?>
                    <?php endif;?>

             <?php $count_page++;
             endwhile;
            endif; ?>
                <?php get_template_part("inc/quiz/templates/footer"); //Выводим последнюю страницу?>
            </form>
        </div>
    </div>
    <?php return ob_get_clean();
}

