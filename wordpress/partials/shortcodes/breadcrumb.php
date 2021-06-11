<?php

if(!function_exists('get_current_lang_from_url')) {
    function get_current_lang_from_url($url)
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
}

if(!function_exists('get_home_uri')) {
    function get_home_uri()
    {
        global $wp;
        $current_lang = get_current_lang_from_url(home_url($wp->request));
    
        $home_uris = ['jp' => '/', 'en' => '/en', 'ch' => '/ch'];
    
        return $home_uris[$current_lang];
    }
}

if(!function_exists('get_home_title')) {
    function get_home_title()
    {
        global $wp;
        $current_lang = get_current_lang_from_url(home_url($wp->request));
    
        $home_titles = ['jp' => 'ホーム', 'en' => 'Home', 'ch' => '首页'];
    
        return $home_titles[$current_lang];
    }
}

$menu_items = explode(',', $items);

if (!empty($menu_items))
    $last_index = count($menu_items) - 1;
?>

<nav class="nav-breadcrumb">
    <ul class="nav-breadcrumb__list">
        <li class="nav-breadcrumb__list-item">
            <a class="nav-breadcrumb__link" href="<?php echo home_url(get_home_uri())  ?>">
                <?php echo get_home_title() ?>
            </a>
        </li>
        <?php foreach ($menu_items as $item_index => $item) : ?>
            <?php
            $item_value = explode('|', $item);
            $title = isset($item_value[0]) ? $item_value[0] : NULL;
            $permalink = isset($item_value[1]) ? $item_value[1] : NULL;
            ?>
            <?php if ($item_index === $last_index || empty($permalink)) : ?>
                <li class="nav-breadcrumb__list-item">
                    <span class="nav-breadcrumb__list-item"><?php echo $title; ?></span>
                </li>
            <?php else : ?>
                <li class="nav-breadcrumb__list-item">
                    <a class="nav-breadcrumb__link" href="<?php echo home_url($permalink); ?>"><?php echo $title; ?></a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</nav>