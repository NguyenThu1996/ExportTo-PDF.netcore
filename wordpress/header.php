<!doctype html>
<html lang="ja" class="no-js">

<head>
    <?php  global $wp;?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" hreflang="ja" href="<?php echo home_url( $wp->request )?>">

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
        $description = "";
        $keyword = "";
        switch($template){
            case '':
                $title = "株式会社タハラ「」｜電動ブロー成形機のトップメーカー";
                $description = "タハラは電動ブロー成形機のトップメーカー。細かい要望に対応する電動ブロー成形機は国内外で高く評価されています。多層成形機は生産200台を突破。タハラの技術を駆使した多層成形機はアジアから中南米までグローバルに展開しています。";
                $keyword = "タハラ,,電動ブロー成形機,多層成形機,地球に優しいものづくり";
            break;
            case 'info':
                $title = "新着情報 &#8211; 株式会社タハラ「」｜電動ブロー成形機のトップメーカー";
                $description = "電動ブロー成形機のトップメーカー タハラの新着情報のページです。";
                $keyword = "タハラ,,電動ブロー成形機,多層成形機,地球に優しいものづくり,新着情報";
            break;
            case 'products1':
                $title = "用途別成形機例 &#8211; 製品情報｜株式会社タハラ「」｜電動ブロー成形機のトップメーカー";
                $description = "電動ブロー成形機のトップメーカー タハラの製品情報 用途別成形機例のページです。";
                $keyword = "タハラ,,電動ブロー成形機,多層成形機,地球に優しいものづくり,用途別成形機例";
            break;
            case 'products2':
                $title = "製品情報 &#8211; 容量別成形機例｜株式会社タハラ「」｜電動ブロー成形機のトップメーカー";
                $description = "電動ブロー成形機のトップメーカー タハラの製品情報 容量別成形機例のページです。";
                $keyword = "タハラ,,電動ブロー成形機,多層成形機,地球に優しいものづくり,容量別成形機例";
            break;
            case 'products3':
                $title = "周辺機器 &#8211; 製品情報｜株式会社タハラ「」｜電動ブロー成形機のトップメーカー";
                $description = "電動ブロー成形機のトップメーカー タハラの製品情報 周辺機器のページです。";
                $keyword = "タハラ,,電動ブロー成形機,多層成形機,地球に優しいものづくり,周辺機器";
            break;
            case 'techinfo1':
                $title = "ダイレクトブローとは &#8211; 技術情報｜株式会社タハラ「」｜電動ブロー成形機のトップメーカー";
                $description = "電動ブロー成形機のトップメーカー タハラの技術情報 ダイレクトブローとはのページです。";
                $keyword = "タハラ,,電動ブロー成形機,多層成形機,地球に優しいものづくり,ダイレクトブローとは";
            break;
            case 'techinfo2':
                $title = "導入事例 &#8211; 技術情報｜株式会社タハラ「」｜電動ブロー成形機のトップメーカー";
                $description = "電動ブロー成形機のトップメーカー タハラの技術情報 導入事例のページです。";
                $keyword = "タハラ,,電動ブロー成形機,多層成形機,地球に優しいものづくり,導入事例";
            break;
            case 'techinfo3':
                $title = "テスト設備 &#8211; 技術情報｜株式会社タハラ「」｜電動ブロー成形機のトップメーカー";
                $description = "電動ブロー成形機のトップメーカー タハラの技術情報 テスト設備のページです。";
                $keyword = "タハラ,,電動ブロー成形機,多層成形機,地球に優しいものづくり,テスト設備";
            break;
            case 'techinfo4':
                $title = "サービス体制 &#8211; 技術情報｜株式会社タハラ「」｜電動ブロー成形機のトップメーカー";
                $description = "電動ブロー成形機のトップメーカー タハラの技術情報 サービス体制のページです。";
                $keyword = "タハラ,,電動ブロー成形機,多層成形機,地球に優しいものづくり,サービス体制";
            break;
            case 'techinfo5':
                $title = "タハラの強み &#8211; 技術情報｜株式会社タハラ「」｜電動ブロー成形機のトップメーカー";
                $description = "電動ブロー成形機のトップメーカー タハラの技術情報 タハラの強みのページです。";
                $keyword = "タハラ,,電動ブロー成形機,多層成形機,地球に優しいものづくり,タハラの強み";
            break;
            case 'techinfo6':
                $title = "タハラ全電動ブロー成形機のメリット &#8211; 技術情報｜株式会社タハラ「」｜電動ブロー成形機のトップメーカー";
                $description = "電動ブロー成形機のトップメーカー タハラの技術情報 タハラ全電動ブロー成形機のメリットのページです。";
                $keyword = "タハラ,,電動ブロー成形機,多層成形機,地球に優しいものづくり,タハラ,,電動ブロー成形機,多層成形機,地球に優しいものづくり,ブロースクール";
            break;
            case 'techinfo7':
                $title = "ブロースクール &#8211; 技術情報｜株式会社タハラ「」｜電動ブロー成形機のトップメーカー";
                $description = "電動ブロー成形機のトップメーカー タハラの技術情報 ブロースクールのページです。";
                $keyword = "タハラ,,電動ブロー成形機,多層成形機,地球に優しいものづくり,ブロースクール";
            break;
            case 'techinfo7-1':
                $title = "お申し込みフォーム &#8211; ブロースクール &#8211; 技術情報｜株式会社タハラ「」｜電動ブロー成形機のトップメーカー";
                $description = "電動ブロー成形機のトップメーカー タハラの技術情報 ブロースクールのページです。";
                $keyword = "タハラ,,電動ブロー成形機,多層成形機,地球に優しいものづくり,ブロースクール";
            break;
            case 'techinfo7-2':
                $title = "お申し込みフォーム &#8211; ブロースクール &#8211; 技術情報｜株式会社タハラ「」｜電動ブロー成形機のトップメーカー";
                $description = "電動ブロー成形機のトップメーカー タハラの技術情報 ブロースクールのページです。";
                $keyword = "タハラ,,電動ブロー成形機,多層成形機,地球に優しいものづくり,ブロースクール";
            break;
            case 'techinfo7-3':
                $title = "お申し込みフォーム &#8211; ブロースクール &#8211; 技術情報｜株式会社タハラ「」｜電動ブロー成形機のトップメーカー";
                $description = "電動ブロー成形機のトップメーカー タハラの技術情報 ブロースクールのページです。";
                $keyword = "タハラ,,電動ブロー成形機,多層成形機,地球に優しいものづくり,ブロースクール";
            break;
            case 'about1':
                $title = "トップメッセージ &#8211; 会社情報｜株式会社タハラ「」｜電動ブロー成形機のトップメーカー";
                $description = "電動ブロー成形機のトップメーカー タハラの会社情報 トップメッセージのページです。";
                $keyword = "タハラ,,電動ブロー成形機,多層成形機,地球に優しいものづくり,トップメッセージ";
            break;
            case 'about2':
                $title = "会社概要 &#8211; 会社情報｜株式会社タハラ「」｜電動ブロー成形機のトップメーカー";
                $description = "電動ブロー成形機のトップメーカー タハラの会社情報 トップメッセージのページです。";
                $keyword = "タハラ,,電動ブロー成形機,多層成形機,地球に優しいものづくり,会社概要";
            break;
            case 'about3':
                $title = "沿革 &#8211; 会社情報｜ 株式会社タハラ「」｜電動ブロー成形機のトップメーカー";
                $description = "電動ブロー成形機のトップメーカー タハラの会社情報 沿革のページです。";
                $keyword = "タハラ,,電動ブロー成形機,多層成形機,地球に優しいものづくり,沿革";
            break;
            case 'job1':
                $title = "募集要項 &#8211; 採用情報｜株式会社タハラ「」｜電動ブロー成形機のトップメーカー";
                $description = "電動ブロー成形機のトップメーカー タハラの採用情報 募集要項のページです。";
                $keyword = "タハラ,,電動ブロー成形機,多層成形機,地球に優しいものづくり,募集要項";
            break;
            case 'job2':
                $title = "仕事紹介一覧 &#8211; 採用情報｜株式会社タハラ「」｜電動ブロー成形機のトップメーカー";
                $description = "電動ブロー成形機のトップメーカー タハラの採用情報 仕事紹介一覧のページです。";
                $keyword = "タハラ,,電動ブロー成形機,多層成形機,地球に優しいものづくり,仕事紹介一覧";
            break;
            case 'job3':
                $title = "社員ブログ &#8211; 採用情報｜株式会社タハラ「」｜電動ブロー成形機のトップメーカー";
                $description = "電動ブロー成形機のトップメーカー タハラの採用情報 社員ブログのページです。";
                $keyword = "タハラ,,電動ブロー成形機,多層成形機,地球に優しいものづくり,社員ブログ";
            break;
            case 'job4':
                $title = "社内アルバム &#8211; 採用情報｜株式会社タハラ「」｜電動ブロー成形機のトップメーカー";
                $description = "電動ブロー成形機のトップメーカー タハラの採用情報 社内アルバムのページです。";
                $keyword = "タハラ,,電動ブロー成形機,多層成形機,地球に優しいものづくり,社内アルバム";
            break;
            case 'sales':
                $title = "購買先募集｜株式会社タハラ「」｜電動ブロー成形機のトップメーカー";
                $description = "電動ブロー成形機のトップメーカー タハラの購買先募集のページです。";
                $keyword = "タハラ,,電動ブロー成形機,多層成形機,地球に優しいものづくり,購買先募集";
            break;
            case 'contact':
                $title = "お問い合わせ｜株式会社タハラ「」｜電動ブロー成形機のトップメーカー";
                $description = "電動ブロー成形機のトップメーカー タハラのお問い合わせのページです。";
                $keyword = "タハラ,,電動ブロー成形機,多層成形機,地球に優しいものづくり,お問い合わせ";
            break;
            case 'sitepolicy':
                $title = "サイトポリシー｜株式会社タハラ「」｜電動ブロー成形機のトップメーカー";
                $description = "電動ブロー成形機のトップメーカー タハラのサイトポリシーのページです。";
                $keyword = "タハラ,,電動ブロー成形機,多層成形機,地球に優しいものづくり,サイトポリシー";
            break;
            case 'privacypolicy':
                $title = "プライバシーポリシー｜株式会社タハラ「」｜電動ブロー成形機のトップメーカー";
                $description = "電動ブロー成形機のトップメーカー タハラのプライバシーポリシーのページです。";
                $keyword = "タハラ,,電動ブロー成形機,多層成形機,地球に優しいものづくり,プライバシーポリシー";
            break;
            default:
                if($post_type == 'info'){
                    $title = "新着情報 &#8211; 株式会社タハラ「」｜電動ブロー成形機のトップメーカー";
                    $description = "電動ブロー成形機のトップメーカー タハラの新着情報のページです。";
                    $keyword = "タハラ,,電動ブロー成形機,多層成形機,地球に優しいものづくり,新着情報";
                } else{
                    $title = "404 Not Found｜株式会社タハラ「」｜電動ブロー成形機のトップメーカー";
                    $description = "タハラは電動ブロー成形機のトップメーカー。細かい要望に対応する電動ブロー成形機は国内外で高く評価されています。多層成形機は生産200台を突破。タハラの技術を駆使した多層成形機はアジアから中南米までグローバルに展開しています。";
                    $keyword = "タハラ,,電動ブロー成形機,多層成形機,地球に優しいものづくり";
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
    <?php if(is_page_template('index.php')) {?>
        <link rel="stylesheet" href="<?php echo THEME_VENDOR_URI . '/slick/slick.min.css'?> " type="text/css" media="all ">
    <?php } ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="header-nav">
            <div class="top-header">
                <div class="top-lang">
                    <div data-lang="jp" class="top-lang__item top-lang__item--selected">JP</div>
                    <div data-lang="en" class="top-lang__item">EN</div>
                    <div data-lang="ch" class="top-lang__item">CN</div>
                </div>
                <a href="<?php echo home_url('/contact') ?>" class="button-contact">
                    <i class="button-contact__mail-icon"></i>
                    <span class="button-contact__text">お問い合わせ</span>
                    <i class="button-contact__arrow-right-icon"></i>
                </a>
            </div>
            <div class="logo-header">
                <a href="<?php echo home_url() ?>">
                    <img class="logo-image" src="<?php echo THEME_IMG_URI . '/common/logo.png' ?>" alt="">
                </a>
                <div class="logo-text">電動ブロー成形機のトップメーカー</div>
            </div>
            <div class="header-menu">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
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
                <a href="<?php echo home_url() ?>">
                    <img class="logo-image" src="<?php echo THEME_IMG_URI . '/common/logo.png' ?>" alt="">
                </a>
                <div class="logo-text">電動ブロー成形機のトップメーカー</div>
            </div>
            <div class="top-lang">
                <a class="top-lang-button">JP</a>
                <div class="top-lang-selectbox">
                    <div data-lang="jp" class="top-lang__item top-lang__item--selected">JP</div>
                    <div data-lang="en" class="top-lang__item">EN</div>
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
                        'theme_location' => 'primary',
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