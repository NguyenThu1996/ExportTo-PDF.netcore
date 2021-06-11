<?php

/**
 * Template Name: index
 * Template Post Type: page
 */
get_header();
?>

<div class="top-page">
    <?php 
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $args = array(
        'post_type'=> 'info',
        'orderby'    => 'date',
        'post_status' => 'publish',
        'order'    => 'DESC',
        'paged' => $paged,
        'posts_per_page' => 4, // this will retrive all the post that is published 
        'info-categories' => 'jp',
        );
        $result = new WP_Query( $args );
    ?>

    <div class="slide-container">
        <div id="slider">
            <?php
            $job_sub_images = get_field('slide_image');
            
            if ($job_sub_images) : ?>
                <?php
                $index = 1;
                foreach ($job_sub_images as $image) : ?>
                    <div class="slide-image <?php if($index++ == 1) { echo 'slick-now1'; }?>" style="background-image: url(<?php echo esc_url($image['sizes']['large']); ?>)">
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <h2 class="slide-content-container">
            <div class="slide-content">
                <div class="slide-text text-jp">
                    <?php the_field('slide_text_1') ?><span class="text-yellow"><?php the_field('slide_text_2') ?></span><?php the_field('slide_text_3') ?>
                </div>
                <div class="slide-text text-jp">
                    <span>
                        <?php the_field('slide_text_4') ?>
                    </span>
                </div>
            </div>
        </h2>
    </div>

    <div class="top-main-container">
        <!-- NEW -->
        <div class="p-t-40 p-b-40">
            <div class="news">
                <div class="row mx-0 info-border">
                    <div class="column-left col-sm-12 col-md-6 col-xl-4 p-l-50">
                        <div class="m-l-20">
                            <div class="m-t-40 m-b-40 view-new-pc">
                                <h1>NEWS</h1>
                                <span>新着情報</span>
                            </div>
                            <div class="container-button view-new-pc">
                                <a class="button-primary button-line" href="<?php echo home_url('/info')?>">VIEW MORE</a>
                            </div>
                        </div>
                    </div>

                    <div class="column-right col-sm-12 col-md-6 col-xl-8">
                        <div class="view-new-sp">
                            <h1>NEWS</h1>
                            <p>新着情報</p>
                        </div>
                        <?php if ( $result-> have_posts() ) : ?>
                            <?php while ( $result->have_posts() ) : $result->the_post(); ?>
                            <div class="column-row row">
                                <div class="col-sm-12 col-md-12 col-xl-4">
                                    <span><?php echo get_the_date('Y年m月d日');?></span>
                                </div>
                                <div class="col-sm-12 col-md-12 col-xl-8">
                                    <span > <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
                                </div>
                            </div>
                            <hr>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="view-new-sp m-t-40">
                        <div class="d-flex center">
                            <a class="button-primary button-line" href="<?php echo home_url('/info')?>">VIEW MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- PRODUCT -->
        <div class="product bg-c-grey fadeInUp">
            <div class="pro-title p-t-50">
                <h4 class="text-heading text-heading-type3">PRODUCT</h4>
                <span>製品情報</span>
            </div>
            <div class="content-title p-t-30 p-l-30 p-r-30 fadeInUp">
                <h5>
                    <span class="pro-header">-</span> 用途別成形機例
                </h5>
                <div class="row product-row">
                    <div class="col-6 col-sm-4 col-md-3 col-xl-2 m-b-15 product-item">
                        <a href="<?php echo home_url('/products1/?title=food-seasoning');?>">
                            <img class="images lazy" alt="" data-src="<?php echo THEME_IMG_URI . '/top-page/1.png' ?>" />
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-xl-2 m-b-15 product-item">
                        <a href="<?php echo home_url('/products1/?title=consumer-dailypackaging');?>">
                            <img class="images lazy" alt="" data-src="<?php echo THEME_IMG_URI . '/top-page/2.png' ?>" />
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-xl-2 m-b-15 product-item">
                    <a href="<?php echo home_url('/products1/?title=printing');?>">
                        <img class="images lazy" alt="" data-src="<?php echo THEME_IMG_URI . '/top-page/3.png' ?>" />
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-xl-2 m-b-15 product-item">
                        <a href="<?php echo home_url('/products1/?title=industrial-packaging');?>">
                            <img class="images lazy" alt="" data-src="<?php echo THEME_IMG_URI . '/top-page/4.png' ?>" />
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-xl-2 product-item">
                        <a href="<?php echo home_url('/products1/?title=pharmaceutical-sanitation');?>">
                            <img class="images lazy" alt="" data-src="<?php echo THEME_IMG_URI . '/top-page/5.png' ?>" /> 
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-xl-2 product-item ">
                        <a href="<?php echo home_url('/products1/?title=automobile-motorcycle');?>">
                            <img class="images lazy" alt="" data-src="<?php echo THEME_IMG_URI . '/top-page/6.png' ?>" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="content-title p-l-30 p-r-30 fadeInUp">
                <h5> <span class="pro-header">-</span> 容量別成形機例</h5>
                <div class="row product-row">
                    <div class="col-6 col-sm-4 col-md-3 col-xl-2 product-item">
                    <a href="<?php echo home_url('/products2/?title=100ml');?>">
                        <img class="images lazy" alt="" data-src="<?php echo THEME_IMG_URI . '/top-page/7.png' ?>" />
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-xl-2 product-item">
                        <a href="<?php echo home_url('/products2/?title=100mL-1l');?>">
                            <img class="images lazy" alt="" data-src="<?php echo THEME_IMG_URI . '/top-page/8.png' ?>" />
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-xl-2 product-item">
                        <a href="<?php echo home_url('/products2/?title=2l-5l');?>">
                            <img class="images lazy" alt="" data-src="<?php echo THEME_IMG_URI . '/top-page/9.png' ?>" />
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-xl-2 product-item">
                        <a href="<?php echo home_url('/products2/?title=10l-20l');?>">
                            <img class="images lazy" alt="" data-src="<?php echo THEME_IMG_URI . '/top-page/10.png' ?>" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="content-title p-l-30 p-r-30 fadeInUp">
                <h5> <span class="pro-header">-</span> 周辺機器</h5>
                <div class="row view-img-pc product-row">
                    <div class="col-6 col-sm-4 col-md-3 col-xl-2 product-item">
                        <a href="<?php echo home_url('/products3');?>">
                            <img class="images lazy" alt="" data-src="<?php echo THEME_IMG_URI . '/top-page/12.png' ?>" />
                        </a>
                    </div>
                </div>
                <div class="row view-img-sm">
                    <div class="col-12">
                        <a href="<?php echo home_url('/products3');?>">
                            <img class="images lazy" alt="" data-src="<?php echo THEME_IMG_URI . '/top-page/12-1.svg' ?>" />
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <?php  if( my_wp_is_mobile()){  ?>
            <!-- SCHOOL IN MOBILE -->
            <div class="school m-t-50 m-b-50 fadeInUp">
                <div class="row school-wrapper">
                    <div class="center col-sm-12 col-lg-6 fadeInUp">
                        <a href="<?php echo home_url('/techinfo7');?>">
                            <img class="lazy" data-src="<?php echo THEME_IMG_URI . '/top-page/school-sm.png' ?>" alt="Northern Lights">
                        </a>
                    </div>
                    <div class="blog center col-sm-12 col-lg-6 fadeInUp">
                        <a href="<?php echo home_url('/job3');?>">
                            <img class="lazy" data-src="<?php echo THEME_IMG_URI . '/top-page/blog-sm.png'?>" alt="Northern Lights">
                        </a>
                    </div>
                </div> 
            </div> 

            <!-- PICK UP IN MOBILE-->
            <div class="pick-up m-t-50 bg-c-grey fadeInUp">
                <div class="pro-title p-t-50">
                    <h4 class="text-heading text-heading-type3">PICK UP</h4>
                    <span>ピックアップ</span>
                </div>
                <div class="row pick-up__content">
                    <div class="col-4 gallery gallery1">
                        <a href="<?php echo home_url('/about2')?>">
                            <div class="gallery__image-block">
                                <img class="lazy" data-src="<?php echo THEME_IMG_URI . '/top-page/pickup1-sm.png' ?>" alt="Cinque Terre" >
                                <span class="gallery__text">会社情報</span>
                            </div>
                            <div>
                                <button class="btn-view button-line-view">
                                    <span>VIEW MORE</span>
                                    <i></i>
                                </button>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 gallery gallery2">
                    <a href="<?php echo home_url('/techinfo1')?>">
                        <div class="gallery__image-block">
                            <img class="lazy" data-src="<?php echo THEME_IMG_URI . '/top-page/pickup2-sm.png' ?>" alt="Cinque Terre" >
                            <span class="gallery__text">ダイレクトブローとは</span>
                        </div>
                        <div>
                            <button class="btn-view button-line-view">
                                <span>VIEW MORE</span>
                                <i></i>
                            </button>
                        </div>
                        </a>
                    </div>
                    <div class="col-4 gallery gallery3">
                        <a href="<?php echo home_url('/job1')?>">
                            <div class="gallery__image-block">
                                <img class="lazy" data-src="<?php echo THEME_IMG_URI . '/top-page/pickup3-sm.png' ?>" alt="Cinque Terre" >
                                <span class="gallery__text">採用情報</span>
                            </div>
                            <div>
                                <button class="btn-view button-line-view">
                                    <span>VIEW MORE</span>
                                    <i></i>
                                </button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        <?php } else { ?>
            <!-- SCHOOL IN PC-->
            <div class="school m-t-50 m-b-50 fadeInUp">
                <div class="row school-wrapper">
                    <div class="center col-sm-12 col-lg-6 fadeInUp">
                        <a href="<?php echo home_url('/techinfo7');?>">
                            <img class="lazy" data-src="<?php echo THEME_IMG_URI . '/top-page/school.jpg' ?>" alt="Northern Lights">
                        </a>
                    </div>
                    <div class="blog center col-sm-12 col-lg-6 fadeInUp">
                        <a href="<?php echo home_url('/job3');?>">
                            <img class="lazy" data-src="<?php echo THEME_IMG_URI . '/top-page/blog.jpg'?>" alt="Northern Lights">
                        </a>
                    </div>
                </div> 
            </div> 
            <!-- PICK UP IN PC-->
            <div class="pick-up m-t-50 bg-c-grey fadeInUp">
                <div class="pro-title p-t-50">
                    <h4 class="text-heading text-heading-type3">PICK UP</h4>
                    <span>ピックアップ</span>
                </div>
                <div class="row pick-up__content">
                    <div class="col-4 gallery gallery1">
                        <a href="<?php echo home_url('/about2')?>">
                            <div class="gallery__image-block">
                                <img class="lazy" data-src="<?php echo THEME_IMG_URI . '/top-page/pickup1.jpg' ?>" alt="Cinque Terre" >
                                <span class="gallery__text">会社情報</span>
                            </div>
                            <div>
                                <button class="btn-view button-line-view">
                                    <span>VIEW MORE</span>
                                    <i></i>
                                </button>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 gallery gallery2">
                    <a href="<?php echo home_url('/techinfo1')?>">
                        <div class="gallery__image-block">
                            <img class="lazy" data-src="<?php echo THEME_IMG_URI . '/top-page/pickup2.jpg' ?>" alt="Cinque Terre" >
                            <span class="gallery__text">ダイレクトブローとは</span>
                        </div>
                        <div>
                            <button class="btn-view button-line-view">
                                <span>VIEW MORE</span>
                                <i></i>
                            </button>
                        </div>
                        </a>
                    </div>
                    <div class="col-4 gallery gallery3">
                        <a href="<?php echo home_url('/job1')?>">
                            <div class="gallery__image-block">
                                <img class="lazy" data-src="<?php echo THEME_IMG_URI . '/top-page/pickup3.jpg' ?>" alt="Cinque Terre" >
                                <span class="gallery__text">採用情報</span>
                            </div>
                            <div>
                                <button class="btn-view button-line-view">
                                    <span>VIEW MORE</span>
                                    <i></i>
                                </button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        <?php  } ?>
    </div>
</div>
<?php get_footer(); ?> 