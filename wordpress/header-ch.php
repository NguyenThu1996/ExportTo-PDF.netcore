<!doctype html>
<html lang="zh" class="no-js">

<head>
    <?php global $wp; ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel=”alternate” hreflang=”zh” href=”<?php echo home_url( $wp->request )?>”>

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
        $description = "Tahara是电动式吹塑成型机的先驱。与仔细的需求相应的电动式吹塑成型机被赞赏国内外。多层成型机打破100生产。充分利用Tahara技术的多层成型机在全球性展开从亚洲到中南美洲。";
        switch($template){
            case 'ch':
                $title = "TAHARA｜电动式吹塑成型机的先驱";
                $keyword = "TAHARA,电动式吹塑成型机";
            break;
            case 'info':
                $title = "新到信息｜TAHARA｜电动式吹塑成型机的先驱";
                $keyword = "TAHARA,电动式吹塑成型机,新到信息";
            break;
            case 'products1':
                $title = "不同用途成形機例｜TAHARA｜电动式吹塑成型机的先驱";
                $keyword = "TAHARA,电动式吹塑成型机,不同用途成形機例";
            break;
            case 'products2':
                $title = "不同容量成型機例｜TAHARA｜电动式吹塑成型机的先驱";
                $keyword = "TAHARA,电动式吹塑成型机,不同容量成型機例";
            break;
            case 'products3':
                $title = "周辺機器｜TAHARA｜电动式吹塑成型机的先驱";
                $keyword = "TAHARA,电动式吹塑成型机,周辺機器";
            break;
            case 'techinfo1':
                $title = "什么是“直接吹塑”｜TAHARA｜电动式吹塑成型机的先驱";
                $keyword = "TAHARA,电动式吹塑成型机,什么是“直接吹塑”";
            break;
            case 'techinfo2':
                $title = "引进事例｜TAHARA｜电动式吹塑成型机的先驱";
                $keyword = "TAHARA,电动式吹塑成型机,引进事例";
            break;
            case 'techinfo3':
                $title = "测试设备｜TAHARA｜电动式吹塑成型机的先驱";
                $keyword = "TAHARA,电动式吹塑成型机,测试设备";
            break;
            case 'techinfo4':
                $title = "服务体制｜TAHARA｜电动式吹塑成型机的先驱";
                $keyword = "TAHARA,电动式吹塑成型机,多层成型机,服务体制";
            break;
            case 'techinfo5':
                $title = "TAHARA公司的优势｜TAHARA｜电动式吹塑成型机的先驱";
                $keyword = "TAHARA,电动式吹塑成型机,多层成型机,TAHARA公司的优势";
            break;
            case 'techinfo6':
                $title = "TAHARA全电动成型机的优点｜TAHARA｜电动式吹塑成型机的先驱";
                $keyword = "TAHARA,电动式吹塑成型机,多层成型机,TAHARA全电动成型机的优点";
            break;
            case 'about1':
                $title = "总经理致辞｜TAHARA｜电动式吹塑成型机的先驱";
                $keyword = "TAHARA,电动式吹塑成型机,多层成型机,致辞";
            break;
            case 'about2':
                $title = "公司简介｜TAHARA｜电动式吹塑成型机的先驱";
                $keyword = "TAHARA,电动式吹塑成型机,多层成型机,简介";
            break;
            case 'about3':
                $title = "沿革｜TAHARA｜电动式吹塑成型机的先驱";
                $keyword = "TAHARA,电动式吹塑成型机,多层成型机,沿革";
            break;
            case 'sales':
                $title = "征集供应商｜TAHARA｜电动式吹塑成型机的先驱";
                $keyword = "TAHARA,电动式吹塑成型机,多层成型机,供应商";
            break;
            case 'contact':
                $title = "咨询形式｜TAHARA｜电动式吹塑成型机的先驱";
                $keyword = "TAHARA,电动式吹塑成型机,多层成型机,咨询";
            break;
            case 'sitepolicy':
                $title = "网站方针｜TAHARA｜电动式吹塑成型机的先驱";
                $keyword = "TAHARA,电动式吹塑成型机,多层成型机,policy";
            break;
            case 'privacypolicy':
                $title = "隐私保密方针｜TAHARA｜电动式吹塑成型机的先驱";
                $keyword = "TAHARA,电动式吹塑成型机,多层成型机,policy";
            break;
            default:
                if($post_type == 'info'){
                    $title = "新到信息｜TAHARA｜电动式吹塑成型机的先驱";
                    $keyword = "TAHARA,电动式吹塑成型机,新到信息";
                } else{
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
    <?php if(is_page_template('index-ch.php')) {?>
        <link rel="stylesheet" href="<?php echo THEME_VENDOR_URI . '/slick/slick.min.css'?> " type="text/css" media="all">
    <?php } ?>
</head>

<body class="lang-zh" <?php body_class(); ?>>
    <header class="site-header">
        <div class="header-nav">
            <div class="top-header">
                <div class="top-lang">
                    <div data-lang="jp" class="top-lang__item ">JP</div>
                    <div data-lang="en" class="top-lang__item">EN</div>
                    <div data-lang="ch" class="top-lang__item top-lang__item--selected">CN</div>
                </div>
                <a href="<?php echo home_url('/ch/contact') ?>" class="button-contact">
                    <i class="button-contact__mail-icon"></i>
                    <span class="button-contact__text">咨询</span>
                    <i class="button-contact__arrow-right-icon"></i>
                </a>
            </div>
            <div class="logo-header">
                <a href="<?php echo home_url('/ch') ?>">
                    <img class="logo-image" src="<?php echo THEME_IMG_URI . '/common/logo.png' ?>" alt="">
                </a>
                <div class="logo-text">电动式吹塑成型机的先驱</div>
            </div>
            <div class="header-menu">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary-ch',
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
                <a href="<?php echo home_url('/ch') ?>">
                    <img class="logo-image" src="<?php echo THEME_IMG_URI . '/common/logo.png' ?>" alt="">
                </a>
                <div class="logo-text">电动式吹塑成型机的先驱</div>
            </div>
            <div class="top-lang">
                <a class="top-lang-button">CN</a>
                <div class="top-lang-selectbox">
                    <div data-lang="jp" class="top-lang__item">JP</div>
                    <div data-lang="en" class="top-lang__item">EN</div>
                    <div data-lang="ch" class="top-lang__item top-lang__item--selected">CN</div>
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
                        'theme_location' => 'primary-ch',
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