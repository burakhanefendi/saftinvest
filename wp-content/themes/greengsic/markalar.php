<?php

/**
 *  Template Name: Markalar
 */

get_header(); ?>

<style>
    .page_breadcrumbs.parallax {
        background-image: url("<?php echo get_post_meta($post->ID, "banner_img", true); ?>");
    }
</style>

<section class="page_breadcrumbs cs gradient2 parallax section_padding_top_50 section_padding_bottom_50" style="height: 200px">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2><?php the_title();?></h2>
            </div>
        </div>
    </div>
</section>

<section class="ls page_portfolio section section_padding_bottom_10 columns_padding_25 columns_margin_bottom_30">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <p><?php the_content();?></p>
                <?php endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            </div>
        </div>
        <?php endif; ?>
    </div>
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <div class="teaser with_border text-center">
                    <div class="teaser_icon highlight size_small">
                        <img src="/wp-content/uploads/2020/07/yag.png">
                    </div>
                    <h4 class="text-uppercase text-center">
                        Sıvı Yağlar ve Katı Yağlar
                    </h4>

                </div>
            </div>
            <div class="col-md-4">
                <div class="teaser with_border text-center">
                    <div class="teaser_icon highlight size_small">
                        <img src="/wp-content/uploads/2020/07/kompostooo.jpg">
                    </div>
                    <h4 class="text-uppercase text-center">
                        Komposto ve Meyve Suları
                    </h4>


                </div>
            </div>
            <div class="col-md-4">
                <div class="teaser with_border text-center">
                    <div class="teaser_icon highlight size_small">
                        <img src="/wp-content/uploads/2020/07/makarnaaaaa.jpg">
                    </div>
                    <h4 class="text-uppercase text-center">
                        Makarna
                    </h4>


                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="teaser with_border text-center">
                    <div class="teaser_icon highlight size_small">
                        <img src="/wp-content/uploads/2020/07/princ-1.jpg">
                    </div>
                    <h4 class="text-uppercase text-center">
                        Pirinç
                    </h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="teaser with_border text-center">
                    <div class="teaser_icon highlight size_small">
                        <img src="/wp-content/uploads/2020/07/seker-2.jpg">
                    </div>
                    <h4 class="text-uppercase text-center">
                        Şeker
                    </h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="teaser with_border text-center">
                    <div class="teaser_icon highlight size_small">
                        <img src="/wp-content/uploads/2020/07/cay.jpg">
                    </div>
                    <h4 class="text-uppercase text-center">
                        Çay
                    </h4>
                </div>
            </div>
    </div><div class="row">
            <div class="col-md-4">
                <div class="teaser with_border text-center">
                    <div class="teaser_icon highlight size_small">
                        <img src="/wp-content/uploads/2020/07/salca-1.png">
                    </div>
                    <h4 class="text-uppercase text-center">
                        Salça
                    </h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="teaser with_border text-center">
                    <div class="teaser_icon highlight size_small">
                        <img src="/wp-content/uploads/2020/07/konserve_08-1.jpg">
                    </div>
                    <h4 class="text-uppercase text-center">
                        Konserve
                    </h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="teaser with_border text-center">
                    <div class="teaser_icon highlight size_small">
                        <img src="/wp-content/uploads/2020/07/akasyasu.jpg">
                    </div>
                    <h4 class="text-uppercase text-center">
                        Su
                    </h4>
                </div>
            </div>
        </div>
    </div>

</section>


<?php get_footer() ?>
