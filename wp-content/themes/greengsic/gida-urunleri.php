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
                        <img src="/wp-content/uploads/2020/07/sugar.jpg">
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
                        <i class="fa fa-thumbs-o-up"  style="font-size: 60px"></i>
                    </div>
                    <h4 class="text-uppercase text-center">
                       Yemeklik Yağlar
                    </h4>
                    <p>
                    <ul style="text-align: left">
                        <li>
                            RBD Palmiye Yağı
                        </li>
                        <li>
                            Ham Ayçiçek Yağı
                        </li>
                        <li>
                            Ham Degummed Mısır Yağı
                        </li>
                        <li>
                            Soya Yağı
                        </li>
                    </ul>
                    </p>

                </div>
            </div>
            <div class="col-md-4">
                <div class="teaser with_border text-center">
                    <div class="teaser_icon highlight size_small">
                        <i class="fa fa-thumbs-o-up"  style="font-size: 60px"></i>
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
                        <i class="fa fa-thumbs-o-up"  style="font-size: 60px"></i>
                    </div>
                    <h4 class="text-uppercase text-center">
                        Çay (Çay Taprakları ve Poşetleri)
                    </h4>
                    <p>
                    <ul style="text-align: left">
                        <li>
                            Hindistan
                        </li>
                        <li>
                            Sri-Lanka
                        </li>
                    </ul>
                    </p>

                </div>
            </div>
            <div class="col-md-4">
                <div class="teaser with_border text-center">
                    <div class="teaser_icon highlight size_small">
                        <i class="fa fa-thumbs-o-up"  style="font-size: 60px"></i>
                    </div>
                    <h4 class="text-uppercase text-center">
                        Rendelenmiş Hindistan Cevizi Tozu
                    </h4>
                    <p>
                    <ul style="text-align: left">
                        <li>
                            Sri-Lanka
                        </li>
                    </ul>
                    </p>

                </div>
            </div>
            <div class="col-md-4">
                <div class="teaser with_border text-center">
                    <div class="teaser_icon highlight size_small">
                        <i class="fa fa-thumbs-o-up"  style="font-size: 60px"></i>
                    </div>
                    <h4 class="text-uppercase text-center">
                        Tuz
                    </h4>
                    <p>
                    <ul style="text-align: left">
                        <li>
                            Pakistan
                        </li>
                    </ul>
                    </p>

                </div>
            </div>
            <div class="col-md-4">
                <div class="teaser with_border text-center">
                    <div class="teaser_icon highlight size_small">
                        <i class="fa fa-thumbs-o-up"  style="font-size: 60px"></i>
                    </div>
                    <h4 class="text-uppercase text-center">
                        Ultra Choco
                    </h4>
                    <p>
                    <ul style="text-align: left">
                        <li>
                            Malezya
                        </li>
                        <li>
                            Endonezya
                        </li>
                        <li>
                            Ukrayna
                        </li>
                    </ul>
                    </p>

                </div>
            </div>
            <div class="col-md-4">
                <div class="teaser with_border text-center">
                    <div class="teaser_icon highlight size_small">
                        <i class="fa fa-thumbs-o-up"  style="font-size: 60px"></i>
                    </div>
                    <h4 class="text-uppercase text-center">
                        Soya Unu
                    </h4>
                    <p>
                    <ul style="text-align: left">
                        <li>
                            Brezilya
                        </li>
                        <li>
                            Arjantin
                        </li>
                    </ul>
                    </p>

                </div>
            </div>

        </div>
    </div>

</section>


<?php get_footer() ?>
