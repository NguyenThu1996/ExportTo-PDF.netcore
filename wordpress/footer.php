        </div><!-- end .wrap -->
    </div><!-- end .main-container -->
    <p id="pageTop"><a></a></p>
    <p id="btnContact"><a href="<?php echo home_url('/contact')?>"></a></p>
    <footer id="colophon" class="site-footer mb-0 fadeInUp">
        <div class="footer-container">
            <div class="footer-main-menu">
                <div class="footer-left-menu">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer-main',
                            'container'         => 'div',
                            'container_class'      => 'footer-main-container',
                            'container_aria_label' => '',
                            'menu_class'           => 'footer-menu',
                            'fallback_cb'          => 'wp_page_menu',
                            'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'item_spacing'         => 'preserve',
                        )
                    );
                    ?>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer-sub',
                            'container'         => 'div',
                            'container_class'      => 'footer-sub-container',
                            'container_aria_label' => '',
                            'menu_class'           => 'footer-menu',
                            'fallback_cb'          => 'wp_page_menu',
                            'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'item_spacing'         => 'preserve',
                        )
                    );
                    ?>
                </div>
                <div class="footer-right-menu">
                    <a class="button-primary" href="<?php echo THEME_FILES_URI . '/brochers-jp.pdf' ?>" target="_blank">
                        <div class="button-primary__text button-primary__text-lg center">
                            <i class="button-primary__icon pdf"></i>
                            カタログダウンロード
                        </div>
                        <i class="button-primary__icon arrow-right"></i>
                    </a>
                    <a class="button-primary button-second" href="<?php echo THEME_FILES_URI . '/brochers-en.pdf' ?>" target="_blank">
                        <div class="button-primary__text button-primary__text-md center">
                            <i class="button-primary__icon pdf"></i>
                            Download our brochers here
                        </div>
                        <i class="button-primary__icon arrow-right"></i>
                    </a>
                    <a class="button-primary button-third" href="<?php echo home_url('/contact')?>">
                        <div class="button-primary__text button-primary__text-lg">
                            <div>お問い合わせ・サポート</div>
                            <div class="button-primary__text-sm">技術や製品へのお問い合わせ</div>
                        </div>
                        <i class="button-primary__icon arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="footer-bottom-menu">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-bottom',
                        'container'         => 'div',
                        'menu_class'           => 'footer-menu',
                        'fallback_cb'          => 'wp_page_menu',
                        'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'item_spacing'         => 'preserve',
                    )
                );
                ?>
            </div>
        </div>
        <div class="copyright">COPYRIGHT © TAHARA MACHINERY　LTD., ALL RIGHTS RESERVED.</div>
    </footer>
    <script>
        var adminAjaxUrl = '<?php echo admin_url('admin-ajax.php'); ?>';
        var isHomePage = '<?php echo (is_page_template('index.php') || is_page_template('index-ch.php') || is_page_template('index-en.php')) ?>';
    </script>
    <?php wp_footer(); ?>
    <?php if(is_page_template('index.php')) {?>
            <script type="text/javascript" src="<?php echo THEME_VENDOR_URI . '/slick/slick.min.js'?> "></script>
    <?php }?>
<script type="text/javascript" src="<?php echo THEME_DIST_URI . '/app.min.js'?> "></script>
</body>
</html>