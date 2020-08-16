<?php

/**
 *  Template Name: Nasıl Çalışıyoruz
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
                        <i class="rt-icon2-directions_ferry"  style="font-size: 60px"></i>
                    </div>
                    <h4 class="text-uppercase text-center">
                        Tedarik Sağlama
                    </h4>
                    <p>
                        <ul style="text-align: left">
                        <li>
                            GÜVENİLİR: Tedarik kaynaklarımız tüm dünyaya yayılmaktadır. Böylece müşterilerimiz rahatlayabilir ve kendinden emin olabilirler.
                        </li>
                        <li>
                            DENEYİMLİ: Küresel ticarette uzun yıllar boyunca, metaların etkili bir şekilde tedarik edilmesi yoluyla iyi niyet elde ettik.
                        </li>
                        <li>
                            WIN-WIN İÇİNDEKİLER: Güçlü tedarikçi ve müşteri tabanının birleşimi, bizi Orta Doğu ve BDT ülkelerinde yenilmemiş bir kaynak haline getiriyor.
                        </li>
                    </ul>
                    </p>

                </div>
            </div>
            <div class="col-md-4">
                <div class="teaser with_border text-center">
                    <div class="teaser_icon highlight size_small">
                        <i class="rt-icon2-chart-bar-outline" style="font-size: 60px"></i>
                    </div>
                    <h4 class="text-uppercase text-center">
                        Strateji
                    </h4>
                    <p>
                        <ul style="text-align: left">
                        <li>
                            Güvenilir ortaklarımız ve ortaklarımızla gücümüzün bölgeleri içerisinde pazarlamak ve ticaret yapmak.
                        </li>
                        <li>
                            Paydaşlarının gelişiminin her aşamasında hizmet verdiğimiz ve desteklediğimiz pazarlarda güvenilir ve rekabetçi bir ortak olmaya çalışın.
                        </li>
                        <li>
                            Yıllar boyunca güç ve uzmanlığın elde edildiği ürünlere odaklanın. Müşterilerimize pazar desteği ve hizmetleri sağlamak ve uzun vadeli karşılıklı fayda sağlamak için onlarla uyum sağlamak.
                        </li>
                    </ul>
                    </p>

                </div>
            </div>
            <div class="col-md-4">
                <div class="teaser with_border text-center">
                    <div class="teaser_icon highlight size_small">
                        <i class="rt-icon2-group"  style="font-size: 60px"></i>
                    </div>
                    <h4 class="text-uppercase text-center">
                        Kuvvet
                    </h4>
                    <p>
                        <ul style="text-align: left">
                        <li>
                            Kaliteye özel önem veren, tutarlı tedarik sağlayan özel ve profesyonel personel.
                        </li>
                        <li>
                            Eşsiz ve Eşsiz Lojistik Sistemi. Faaliyet gösterdiği bölgelerde depolama ve depolama düzenlemelerine sahip olmak.
                        </li>
                        <li>
                            Bölgesel pazarlarda yılların deneyimi.
                        </li>
                        <li>
                            Müşteri memnuniyetine dayalı güvenilir pazar payı.
                        </li>
                        <li>
                            Faaliyet gösterdiği alanlarda müşterileri ile güçlü ortaklık ve işbirliği.
                        </li>
                    </ul>
                    </p>

                </div>
            </div>

        </div>
    </div>

</section>


<?php get_footer() ?>
