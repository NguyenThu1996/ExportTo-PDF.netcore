<?php
add_action('template_redirect', 'fb_ssl_template_redirect', 1);
function fb_ssl_template_redirect()
{
    $environments_ssl = array(
        'techinfo7-1',
        'techinfo7-2',
        'techinfo7-3',
        'contact'
    );

    if (is_page($environments_ssl) && !is_ssl()) {

        if (0 === strpos($_SERVER['REQUEST_URI'], 'http')) {
            wp_redirect(preg_replace('|^http://|', 'https://', $_SERVER['REQUEST_URI']), 301);
            exit();
        } else {
            wp_redirect('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], 301);
            exit();
        }
    }
}