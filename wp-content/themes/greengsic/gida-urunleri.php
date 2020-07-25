<?php

/**
 *  Template Name: Gıda Ürünleri
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
                        <img src="/wp-content/uploads/2020/07/seker-1.jpg">
                    </div>
                    <h4 class="text-uppercase text-center">
                        ŞEKER
                    </h4>
                    <p>
                    <ul style="text-align: left">
                        <li>
                            Ham Şeker
                        </li>
                        <li>
                            Beyaz Şeker
                        </li>
                    </ul>
                    </p>

                </div>
            </div>
            <div class="col-md-4">
                <div class="teaser with_border text-center">
                    <div class="teaser_icon highlight size_small">
                        <img src="/wp-content/uploads/2020/07/dairy.jpg">
                    </div>
                    <h4 class="text-uppercase text-center">
                        SÜT ÜRÜNLERİ
                    </h4>
                    <p>
                    <ul style="text-align: left">
                        <li>
                            AMF
                        </li>
                        <li>
                            Tereyağı
                        </li>
                        <li>
                            Süt Tozu
                        </li>
                    </ul>
                    </p>

                </div>
            </div>
            <div class="col-md-4">
                <div class="teaser with_border text-center">
                    <div class="teaser_icon highlight size_small">
                        <img src="/wp-content/uploads/2020/07/yag-1.png">
                    </div>
                    <h4 class="text-uppercase text-center">
                       Yemeklik Yağlar
                    </h4>
                    <p>
                    <ul style="text-align: left">
                        <li>
                            Palmiye Yağı
                        </li>
                        <li>
                            Ham Ayçiçek Yağı
                        </li>
                        <li>
                             Mısır Yağı
                        </li>
                        <li>
                            Soya Yağı
                        </li>
                    </ul>
                    </p>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="teaser with_border text-center">
                    <div class="teaser_icon highlight size_small">
                       <img src="/wp-content/uploads/2020/07/tane2.jpg">
                    </div>
                    <h4 class="text-uppercase text-center">
                        Taneler
                    </h4>
                    <p>
                    <ul style="text-align: left">
                        <li>
                            Pirinç
                        </li>
                        <li>
                            Buğday
                        </li>
                        <li>
                            Ay Çekirdeği
                        </li>
                        <li>
                            Soya Tohumları
                        </li>
                    </ul>
                    </p>

                </div>
            </div>
            <div class="col-md-4">
                <div class="teaser with_border text-center">
                    <div class="teaser_icon highlight size_small">
                        <img src="/wp-content/uploads/2020/07/cay-2.jpg">
                    </div>
                    <h4 class="text-uppercase text-center">
                        Çay (Çay Yaprakları ve Poşetleri)
                    </h4>

                </div>
            </div>
            <div class="col-md-4">
                <div class="teaser with_border text-center">
                    <div class="teaser_icon highlight size_small">
                        <img src="/wp-content/uploads/2020/07/hind-ceviz.jpg">
                    </div>
                    <h4 class="text-uppercase text-center">
                        Rendelenmiş Hindistan Cevizi Tozu
                    </h4>

                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-4">
                <div class="teaser with_border text-center">
                    <div class="teaser_icon highlight size_small">
                        <img src="/wp-content/uploads/2020/07/tuz.jpg">
                    </div>
                    <h4 class="text-uppercase text-center">
                        Tuz
                    </h4>

                </div>
            </div>
            <div class="col-md-4">
                <div class="teaser with_border text-center">
                    <div class="teaser_icon highlight size_small">
                        <img src="/wp-content/uploads/2020/07/choco2.jpg">
                    </div>
                    <h4 class="text-uppercase text-center">
                        Kakao
                    </h4>


                </div>
            </div>
            <div class="col-md-4">
                <div class="teaser with_border text-center">
                    <div class="teaser_icon highlight size_small">
                        <img src="/wp-content/uploads/2020/07/soya.png">
                    </div>
                    <h4 class="text-uppercase text-center">
                        Susam
                    </h4>
                    <p>
                    <ul style="text-align: left">
                        <li>
                            Sudan
                        </li>
                    </ul>
                    </p>

                </div>
            </div>

        </div>
    </div>

</section>
<?php include('section/world.php') ?>


<?php get_footer() ?>
