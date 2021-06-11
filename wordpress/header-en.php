<!doctype html>
<html lang="en" class="no-js">

<head>
    <?php global $wp;?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel=”alternate” hreflang=”en” href=”<?php echo home_url( $wp->request )?>”>

    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo THEME_IMG_URI . '/favicon/apple-touch-icon.png' ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo THEME_IMG_URI . '/favicon/favicon-32x32.png' ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo THEME_IMG_URI . '/favicon/favicon-16x16.png' ?>">
    <link rel="mask-icon" href="<?php echo THEME_IMG_URI . '/favicon/safari-pinned-tab.svg' ?>" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <?php
        $post_type = get_query_var('post_type');
        $template = get_query_var('pagename');
        $title = "";
        $keyword = "";
        $description = "The electric blow molding machine and the electric multi-layer molding machine of Tahara are appreciated in the world.";
        
        switch($template){
            case 'en':
                $title = "TAHARA｜The World Leader of Electric Extrusion Blow Molding Machine";
                $keyword = "TAHARA,Electric Blow Molding Machine,Multi-layer Molding Machine,Environment-friendly manufacturing";
            break;
            case 'info':
                $title = "What&#039;s New｜TAHARA｜The World Leader of Electric Extrusion Blow Molding Machine";
                $keyword = "TAHARA,Electric Blow Molding Machine,Multi-layer Molding Machine,What&#039;s New";
            break;
            case 'products1':
                $title = "Fully electric blow molding machine by USE｜TAHARA｜The World Leader of Electric Extrusion Blow Molding Machine";
                $keyword = "TAHARA,Electric Blow Molding Machine,Multi-layer Molding Machine,Fully electric blow molding machine by USE";
            break;
            case 'products2':
                $title = "Fully electric blow molding machine by CAPACITY｜TAHARA｜The World Leader of Electric Extrusion Blow Molding Machine";
                $keyword = "TAHARA,Electric Blow Molding Machine,Multi-layer Molding Machine,Fully electric blow molding machine by CAPACITY";
            break;
            case 'products3':
                $title = "Auxiliary｜TAHARA｜The World Leader of Electric Extrusion Blow Molding Machine";
                $keyword = "TAHARA,Electric Blow Molding Machine,Multi-layer Molding Machine,Auxiliary";
            break;
            case 'techinfo1':
                $title = "Direct Blow Molding｜TAHARA｜The World Leader of Electric Extrusion Blow Molding Machine";
                $keyword = "TAHARA,Electric Blow Molding Machine,Multi-layer Molding Machine,Direct Blow Molding";
            break;
            case 'techinfo2':
                $title = "Case study｜TAHARA｜The World Leader of Electric Extrusion Blow Molding Machine";
                $keyword = "TAHARA,Electric Blow Molding Machine,Multi-layer Molding Machine,Case study";
            break;
            case 'techinfo3':
                $title = "Testing Facility｜TAHARA｜The World Leader of Electric Extrusion Blow Molding Machine";
                $keyword = "TAHARA,Electric Blow Molding Machine,Multi-layer Molding Machine,Testing Facility";
            break;
            case 'techinfo4':
                $title = "Customer Support｜TAHARA｜The World Leader of Electric Extrusion Blow Molding Machine";
                $keyword = "TAHARA,Electric Blow Molding Machine,Multi-layer Molding Machine,Customer Support";
            break;
            case 'techinfo5':
                $title = "Our Specialty｜TAHARA｜The World Leader of Electric Extrusion Blow Molding Machine";
                $keyword = "TAHARA,Electric Blow Molding Machine,Multi-layer Molding Machine,Our Specialty";
            break;
            case 'techinfo6':
                $title = "Advantage of Our All-Electric Blow Molding Machine｜TAHARA｜The World Leader of Electric Extrusion Blow Molding Machine";
                $keyword = "TAHARA,Electric Blow Molding Machine,Multi-layer Molding Machine,Advantage of Our All-Electric Blow Molding Machine";
            break;
            case 'techinfo7':
                $title = "TAHARA News｜TAHARA｜The World Leader of Electric Extrusion Blow Molding Machine";
                $keyword = "TAHARA,Electric Blow Molding Machine,Multi-layer Molding Machine,News,TAHARA News";
            break;
            case 'about1':
                $title = "Message from the President｜TAHARA｜The World Leader of Electric Extrusion Blow Molding Machine";
                $keyword = "TAHARA,Electric Blow Molding Machine,Multi-layer Molding Machine,Message from the President";
            break;
            case 'about2':
                $title = "Corporate Profile｜TAHARA｜The World Leader of Electric Extrusion Blow Molding Machine";
                $keyword = "TAHARA,Electric Blow Molding Machine,Multi-layer Molding Machine,Profile";
            break;
            case 'about3':
                $title = "History｜TAHARA｜The World Leader of Electric Extrusion Blow Molding Machine";
                $keyword = "TAHARA,Electric Blow Molding Machine,Multi-layer Molding Machine,History";
            break;
            case 'sales':
                $title = "From Procurement Department｜TAHARA｜The World Leader of Electric Extrusion Blow Molding Machine";
                $keyword = "TAHARA,Electric Blow Molding Machine,Multi-layer Molding Machine,From Procurement Department";
            break;
            case 'contact':
                $title = "Inquiry｜TAHARA｜The World Leader of Electric Extrusion Blow Molding Machine";
                $keyword = "TAHARA,Electric Blow Molding Machine,Multi-layer Molding Machine,Contact";
            break;
            case 'sitepolicy':
                $title = "Terms of Use｜TAHARA｜The World Leader of Electric Extrusion Blow Molding Machine";
                $keyword = "TAHARA,Electric Blow Molding Machine,Multi-layer Molding Machine,Policy,Terms of Use";
            break;
            case 'privacypolicy':
                $title = "Privacy policy｜TAHARA｜The World Leader of Electric Extrusion Blow Molding Machine";
                $keyword = "TAHARA,Electric Blow Molding Machine,Multi-layer Molding Machine,Policy";
            break;
            default:
                if($post_type == 'info'){
                    $title = "What&#039;s New｜TAHARA｜The World Leader of Electric Extrusion Blow Molding Machine";
                    $keyword = "TAHARA,Electric Blow Molding Machine,Multi-layer Molding Machine,What&#039;s New";
                } else {
                    $title = "404 Not Found｜株式会社タハラ「TAHARA」｜電動ブロー成形機のトップメーカー";
                    $description = "タハラは電動ブロー成形機のトップメーカー。細かい要望に対応する電動ブロー成形機は国内外で高く評価されています。多層成形機は生産200台を突破。タハラの技術を駆使した多層成形機はアジアから中南米までグローバルに展開しています。";
                    $keyword = "タハラ,TAHARA,電動ブロー成形機,多層成形機,地球に優しいものづくり";
                }
        }
    ?>

    <title><?php echo $title ?></title>
    <meta name="title" content="<?php echo $title ?>">
    <meta name="description" content="<?php echo $description ?>">
    <meta name="keyword" content="<?php echo $keyword ?>">
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-24759802-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-24759802-1');
    </script>
	<?php wp_head(); ?>
    <?php if(is_page_template('index-en.php')) {?>
        <link rel="stylesheet" href="<?php echo THEME_VENDOR_URI . '/slick/slick.min.css'?> " type="text/css" media="all">
    <?php } ?>
</head>

<body class="lang-en" <?php body_class(); ?>>
    <header class="site-header">
        <div class="header-nav">
            <div class="top-header">
                <div class="top-lang">
                    <div data-lang="jp" class="top-lang__item">JP</div>
                    <div data-lang="en" class="top-lang__item top-lang__item--selected">EN</div>
                    <div data-lang="ch" class="top-lang__item">CN</div>
                </div>
                <a href="<?php echo home_url('/en/contact') ?>" class="button-contact">
                    <i class="button-contact__mail-icon"></i>
                    <span class="button-contact__text">Contact us</span>
                    <i class="button-contact__arrow-right-icon"></i>
                </a>
            </div>
            <div class="logo-header">
                <a href="<?php echo home_url('/en') ?>">
                    <img class="logo-image" src="<?php echo THEME_IMG_URI . '/common/logo.png' ?>" alt="">
                </a>
                <div class="logo-text">The World Leader of Electric Extrusion Blow Molding Machine</div>
            </div>
            <div class="header-menu">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary-en',
                        'container'         => 'div',
                        'container_class'      => 'primary-menu-container',
                        'container_aria_label' => '',
                        'menu_class'           => 'primary-menu',
                        'fallback_cb'          => 'wp_page_menu',
                        'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'item_spacing'         => 'preserve',
                    )
                );
                ?>
            </div>

        </div>
        <div class="header-mobile-nav">
            <div class="logo-header">
                <a href="<?php echo home_url('/en') ?>">
                    <img class="logo-image" src="<?php echo THEME_IMG_URI . '/common/logo.png' ?>" alt="">
                </a>
                <div class="logo-text">The World Leader of Electric Extrusion Blow Molding Machine</div>
            </div>
            <div class="top-lang">
                <a class="top-lang-button">EN</a>
                <div class="top-lang-selectbox">
                    <div data-lang="jp" class="top-lang__item">JP</div>
                    <div data-lang="en" class="top-lang__item top-lang__item--selected">EN</div>
                    <div data-lang="ch" class="top-lang__item">CN</div>
                </div>
            </div>
            <div class="nav-toggle">
                <div class="nav-toggle-bar"></div>
                <div class="nav-toggle-text">メニュー</div>
            </div>
            <nav id="mobile-nav" class="mobile-nav-content">
                <div class="mobile-nav-header">メニュー</div>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary-en',
                        'container'         => 'div',
                        'container_class'      => 'primary-menu-container',
                        'container_aria_label' => '',
                        'menu_class'           => 'primary-menu',
                        'fallback_cb'          => 'wp_page_menu',
                        'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'item_spacing'         => 'preserve',
                    )
                );
                ?>
            </nav>
        </div>
    </header>
    <div class="main-container">
        <div class="main-container__wrap wrap">