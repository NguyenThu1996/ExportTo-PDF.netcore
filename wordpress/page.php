<?php

function get_cur_lang_url($url)
{
    $THEME_LANGUAGES = ['', 'en', 'ch'];
    $lang = THEME_DEFAULT_LANGUAGE;

    try {
        $path_name = explode(home_url('/'), $url)[1];
        $lang = explode('/', $path_name)[0];

        if (!in_array($lang, $THEME_LANGUAGES)) {
            $lang = THEME_DEFAULT_LANGUAGE;
        }
    } catch (Exception $e) {
    }
    return $lang;
}

global $wp;
$current_lang = get_cur_lang_url(home_url($wp->request));

get_header($current_lang); ?>

<?php if ( have_posts() ) : 
        while ( have_posts() ) : the_post();
            the_content();
        endwhile; ?>
<?php endif; ?>

<?php get_footer($current_lang); ?>
