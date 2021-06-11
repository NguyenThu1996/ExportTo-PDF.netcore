<?php

class Theme extends WDG
{
    public static function init()
    {
        parent::init();

        // setup admin
        if (is_admin()) {
            self::setup_admin_styles();
            self::setup_editor();
            self::setup_fields();
        }

        // setup theme
        self::setup_image_sizes();
        self::setup_styles();
        self::setup_scripts();
        self::setup_menus();
        self::setup_sidebars();
        self::setup_post_types();
        self::setup_taxonomies();
        self::setup_shortcodes();
        self::setup_widgets();
        self::setup_api();
        self::setup_cli();
        self::setup_yoast_seo();

        // custom filters and actions
        self::setup_actions();
        self::setup_filters();

        //custom
        self::setup_ajax_actions();
    }

    public static function setup_editor()
    {
        Theme_Editor::init();
    }

    public static function setup_image_sizes()
    {
    }

    public static function setup_admin_styles()
    {
        // handle admin styles
        // add_action('admin_enqueue_scripts', function () {
        //     wp_enqueue_style('admin', THEME_DIST_URI . '/admin.css', false, self::filemtime(THEME_DIST_PATH . '/admin.css'));
        // });
    }

    public static function setup_styles()
    {
        // register styles
        self::register_style('bootstrap_style', THEME_VENDOR_URI . '/bootstrap/bootstrap.min.css', null, null, 'all');
        self::register_style('site', THEME_DIST_URI . '/app.min.css', array('bootstrap_style'), null, null, 'all');

        // enqueue styles
        self::enqueue_style('site');
    }

    public static function setup_scripts()
    {
        // deregister WordPress' jQuery
        self::deregister_wordpress_jquery();

        // register scripts
        self::register_script('jquery', THEME_VENDOR_URI . '/jquery/jquery.min.js');
        self::register_script('jquery_lazy', THEME_VENDOR_URI . '/jquery/jquery.lazy.min.js');
        self::register_script('jquery_lazy_iframe', THEME_VENDOR_URI . '/jquery/jquery.lazy.iframe.min.js');

        // enqueue scripts
        self::enqueue_script('jquery');
        self::enqueue_script('jquery_lazy');
        self::enqueue_script('jquery_lazy_iframe');
    }

    public static function setup_menus()
    {
        // register menus
        self::register_nav_menu('primary');
        self::register_nav_menu('footer-main');
        self::register_nav_menu('footer-sub');
        self::register_nav_menu('footer-bottom');

        // register menus en
        self::register_nav_menu('primary-en');
        self::register_nav_menu('footer-main-en');
        self::register_nav_menu('footer-sub-en');
        self::register_nav_menu('footer-bottom-en');
        
        // register menus en
        self::register_nav_menu('primary-ch');
        self::register_nav_menu('footer-main-ch');
        self::register_nav_menu('footer-sub-ch');
        self::register_nav_menu('footer-bottom-ch');
    }

    public static function setup_sidebars()
    {
        // register sidebars
        self::register_sidebar('sidebar');
    }

    public static function setup_post_types()
    {
        // register post types
        // Theme_Post_Type::register( 'custom-post-type' );
        Theme_Post_Type::register('blog',  $args = array(
            'labels' => array(
                'name' => _x('Blogs', 'plural'),
                'singular_name' => _x('Blogs', 'singular'),
                'menu_name' => _x('Blogs', 'admin menu'),
                'name_admin_bar' => _x('Blogs', 'admin bar'),
                'add_new' => _x('Add New', 'add new'),
                'add_new_item' => __('Add New Blog'),
                'new_item' => __('New Blog'),
                'edit_item' => __('Edit Blog'),
                'view_item' => __('View Blog'),
                'all_items' => __('All Blogs'),
                'search_items' => __('Search Blog'),
                'not_found' => __('No Blog Found.'),
            ),
            'menu_position' => 5
        ));

        Theme_Post_Type::register('info',  $args = array(
            'labels' => array(
                'name' => _x('Infos', 'plural'),
                'singular_name' => _x('Infos', 'singular'),
                'menu_name' => _x('Infos', 'admin menu'),
                'name_admin_bar' => _x('Infos', 'admin bar'),
                'add_new' => _x('Add New', 'add new'),
                'add_new_item' => __('Add New Info'),
                'new_item' => __('New Info'),
                'edit_item' => __('Edit Info'),
                'view_item' => __('View Info'),
                'all_items' => __('All Infos'),
                'search_items' => __('Search Info'),
                'not_found' => __('No Info Found.'),
            ),
            'menu_position' => 5
        ));

        // Theme_Post_Type::register( 'job2',  array(
        //     'supports' => array(
        //         'title'
        //     ),
        //     'labels' => array(
        //         'name' => _x('Jobs', 'plural'),
        //         'singular_name' => _x('Job', 'singular'),
        //         'menu_name' => _x('Jobs', 'admin menu'),
        //         'name_admin_bar' => _x('Jobs', 'admin bar'),
        //         'add_new' => _x('Add New', 'add new'),
        //         'add_new_item' => __('Add New Job'),
        //         'new_item' => __('New Job'),
        //         'edit_item' => __('Edit Job'),
        //         'view_item' => __('View Job'),
        //         'all_items' => __('All Jobs'),
        //         'search_items' => __('Search Job'),
        //         'not_found' => __('No Job Found.'),
        //     ),
        //     'menu_position' => 5
        // ));
    }

    public static function setup_taxonomies()
    {
        // register taxonomies
        // Theme_Taxonomy::register( 'custom-taxonomy', 'custom-post-type' );
        Theme_Taxonomy::register('info-categories', 'info', $args = array(
            'hierarchical' => true
        ));
    }

    public static function setup_shortcodes()
    {
        // intiialize your short codes w/ shortcake support classes here
        // any file inside the shortcodes folder that matches class-theme-shortcode-name.php will be autoloaded
        // example new Theme_Shortcode_Example(); will autoload theme-path/includes/shortcodes/class-theme-shortcode-example.php

        // new Theme_Shortcode_Example();  
        new Theme_ShortCode_Breadcrumb();
        new Theme_Shortcode_Page_Title();
        new Theme_Shortcode_Blow_Course_Booking();
    }

    public static function setup_widgets()
    {
        // include and intiialize your widget classes here
    }

    public static function setup_fields()
    {
        // include and initialize your custom fields classes here
    }

    public static function setup_api()
    {
        // include and initialize your WP API classes here
    }

    public static function setup_cli()
    {
        if (!defined('WP_CLI')) {
            return;
        }

        // include and initialize your CLI classes here
    }

    // move Yoast SEO plugin's metabox to the end of the edit post screen
    public static function setup_yoast_seo()
    {
        add_filter('wpseo_metabox_prio', function () {
            return 'low';
        });
    }

    public static function setup_actions()
    {
        // add all actions
        add_action('init', array('Theme_Visual_Grid', 'init'));
        add_action('after_setup_theme', array('Theme_Authors', 'after_setup_theme'));
    }

    public static function setup_filters()
    {
        function add_query_vars_filter($vars)
        {
            $vars[] .= "y";
            $vars[] .= "id";
            return $vars;
        }

        //Add custom query vars
        add_filter('query_vars', 'add_query_vars_filter', 10, 1);

        // add all filters
        add_filter('wpcf7_validate_text*', array(__CLASS__, 'custom_required_validation_filter_wpcf7'), 5, 2);
        add_filter('wpcf7_validate_text', array(__CLASS__, 'custom_invalid_kana_validation_filter_wpcf7'), 5, 2);
        add_filter('wpcf7_validate_textarea*', array(__CLASS__, 'custom_required_validation_filter_wpcf7'), 5, 2);

        add_filter('wpcf7_validate_tel*', array(__CLASS__, 'custom_tel_validation_filter_wpcf7'), 5, 2);

        add_filter('wpcf7_validate_email', array(__CLASS__, 'custom_email_validation_filter_wpcf7'), 5, 2);
        add_filter('wpcf7_validate_email*', array(__CLASS__, 'custom_email_validation_filter_wpcf7'), 5, 2);

        add_filter('wpcf7_validate_url', array(__CLASS__, 'custom_url_validation_filter_wpcf7'), 5, 2);

        add_filter('wpcf7_messages', array(__CLASS__, 'custom_wpcf7_text_messages'));
    }

    public static function custom_wpcf7_text_messages($messages)
    {
        return array_merge($messages, array(
            'invalid_kana' => array(
                'description' => __("Invalid Katakana", 'contact-form-7'),
                'default' => __('Please input in Katakana.', 'contact-form-7')
            ),
            'invalid_tel' => array(
                'description' => __("Phone number that the sender entered is invalid", 'contact-form-7'),
                'default' => __('The phone number is invalid.', 'contact-form-7')
            ),
            'invalid_email' => array(
                'description' => __("Email address that the sender entered is invalid", 'contact-form-7'),
                'default' => __('The e-mail address is invalid.', 'contact-form-7')
            ),
            'invalid_url' => array(
                'description' => __("URL that the sender entered is invalid", 'contact-form-7'),
                'default' => __('The URL is invalid.', 'contact-form-7')
            ),
            'email_not_match' => array(
                'description' => __("The e-mail confirmation that the sender entered does not match the email", 'contact-form-7'),
                'default' => __('The e-mail confirmation does not match the email', 'contact-form-7')
            ),
            'required_company_name' => array(
                'description' => __("The company name that the sender not fill in", 'contact-form-7'),
                'default' => __('The company name is required.', 'contact-form-7')
            ),
            'required_full_name' => array(
                'description' => __("The full name that the sender not fill in", 'contact-form-7'),
                'default' => __('The full name is required.', 'contact-form-7')
            ),
            'required_phone_number' => array(
                'description' => __("The phone number that the sender not fill in", 'contact-form-7'),
                'default' => __('The phone number is required.', 'contact-form-7')
            ),
            'required_address' => array(
                'description' => __("The address that the sender not fill in", 'contact-form-7'),
                'default' => __('The address is required.', 'contact-form-7')
            ),
            'required_email' => array(
                'description' => __("The email address that the sender not fill in", 'contact-form-7'),
                'default' => __('The email address is required.', 'contact-form-7')
            ),
            'required_inquiry_content' => array(
                'description' => __("The inquiry content that the sender not fill in", 'contact-form-7'),
                'default' => __('The inquiry content is required.', 'contact-form-7')
            ),
        ));
    }

    public static function custom_required_validation_filter_wpcf7($result, $tag)
    {
        $tag = new WPCF7_Shortcode($tag);

        $name = $tag->name;
        $value = isset($_POST[$name]) ? trim(wp_unslash((string) $_POST[$name])) : '';

        if (empty($value)) {
            $result->invalidate($tag, wpcf7_get_message('required_' . $name));
        }

        return $result;
    }

    public static function custom_invalid_kana_validation_filter_wpcf7($result, $tag)
    {
        $tag = new WPCF7_Shortcode($tag);

        $name = $tag->name;
        $value = isset($_POST[$name]) ? trim(wp_unslash((string) $_POST[$name])) : '';

        if ($name == 'full_name_kana') {
            if (!empty($value) && !preg_match("/^[ァ-ン\ｧ-ﾝﾞﾟ\{０-９}\{0-9}\{　}\{ }\{ぁ-んァ-ン}\{\r\n}]+$/", $value)) {
                $result->invalidate($tag, wpcf7_get_message('invalid_kana'));
            }
        }

        return $result;
    }

    public static function custom_email_validation_filter_wpcf7($result, $tag)
    {
        $tag = new WPCF7_Shortcode($tag);

        $name = $tag->name;
        $value = isset($_POST[$name]) ? trim(wp_unslash((string) $_POST[$name])) : '';

        if ($tag->is_required() && empty($value)) {
            $result->invalidate($tag, wpcf7_get_message('required_email'));
        }

        if (!empty($value) && !preg_match("/^[0-9a-z_\.\-]+@[0-9a-z_\-\.]+$/i", $value)) {
            $result->invalidate($tag, wpcf7_get_message('invalid_email'));
        }

        if ($name == 'email_confirm') {
            $email = isset($_POST['email']) ? trim(wp_unslash((string) $_POST['email'])) : '';
            $email_confirm = isset($_POST['email_confirm']) ? trim(wp_unslash((string) $_POST['email_confirm'])) : '';

            if (!empty($email_confirm) && $email != $email_confirm) {
                $result->invalidate($tag, wpcf7_get_message('email_not_match'));
            }
        }
        return $result;
    }

    public static function custom_tel_validation_filter_wpcf7($result, $tag)
    {
        $tag = new WPCF7_Shortcode($tag);

        $name = $tag->name;
        $value = isset($_POST[$name]) ? trim(wp_unslash((string) $_POST[$name])) : '';

        if ($tag->is_required() && empty($value)) {
            $result->invalidate($tag, wpcf7_get_message('required_' . $name));
        }

        if (!empty($value) && !preg_match("/^[0-9_\-\(\)]*$/", $value)) {
            $result->invalidate($tag, wpcf7_get_message('invalid_tel'));
        }

        return $result;
    }

    public static function custom_url_validation_filter_wpcf7($result, $tag)
    {
        $tag = new WPCF7_Shortcode($tag);

        $name = $tag->name;
        $value = isset($_POST[$name]) ? trim(wp_unslash((string) $_POST[$name])) : '';

        if (!empty($value) && !preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $value)) {
            $result->invalidate($tag, wpcf7_get_message('invalid_url'));
        }

        return $result;
    }

    public static function setup_ajax_actions()
    {
        function get_current_lang($url)
        {
            $THEME_LANGUAGES = ['', 'en', 'ch'];
            $lang = '';

            try {
                $path_name = explode(home_url('/'), $url)[1];
                $lang = explode('/', $path_name)[0];

                if (!in_array($lang, $THEME_LANGUAGES)) {
                    $lang = '';
                }
            } catch (Exception $e) {
            }

            return $lang;
        }


        function change_language()
        {
            $next_lang = $_POST['lang'] === THEME_DEFAULT_LANGUAGE ? '' : $_POST['lang'];
            $current_url = $_POST['url'];
            $current_lang = get_current_lang($current_url);

            $next_url = str_replace(home_url('/' . $current_lang . ($current_lang === '' ? '' : '/')), home_url('/' . $next_lang . ($next_lang === '' ? '' : '/')), $current_url);
            $next_path = str_replace(home_url('/'), '', $next_url);
            $page = get_page_by_path($next_path);
            if ($page) {
                wp_send_json_success(esc_attr($next_url));
            } else {
                wp_send_json_success(home_url('/' . $next_lang));
            }

            die();
        }
        add_action('wp_ajax_change_language', 'change_language');
        add_action('wp_ajax_nopriv_change_language', 'change_language');
    }
}
