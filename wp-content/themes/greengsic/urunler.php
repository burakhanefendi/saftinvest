<?php

/**
 *  Template Name: Ürünler
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

<section class="ls page_portfolio section section_padding_bottom_10 columns_padding_25 columns_margin_bottom_30" style="margin-top: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-push-6">
                <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); ?>
                <img src="<?php echo $thumb['0'];?>" alt="">
            </div>
            <div class="col-md-6 col-md-pull-6">
                <h2 class="section_header thin">
                    <?php the_title();?>
                </h2>
                <p><?php the_content();?></p>
                <?php endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>

    <?php include('section/world.php') ?>

<section class="ls page_portfolio section section_padding_bottom_10 columns_padding_25 columns_margin_bottom_30">
    <div class="container">
        <div class="col-sm-12">

            <div class="isotope_container isotope row masonry-layout columns_margin_bottom_20" style="position: relative; height: 1652.11px;">

                <div class="isotope-item col-lg-3 col-md-6 col-sm-12" style="position: absolute; left: 0%; top: 0px;">

                    <article class="vertical-item content-padding text-center with_border rounded">
                        <div class="item-media top_rounded overflow_hidden">
                            <img src="/wp-content/uploads/2020/07/istockphoto-172402388-612x612.jpg" style="max-height: 140px" alt="">
                            <div class="media-links">
                                <a href="/gida" class="abs-link"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <header class="entry-header">
                                <h5 class="entry-title">
                                    <a href="/gida">Gıda Ürünleri</a>
                                </h5>
                            </header>
                            <div class="entry-content">
                                <p>Dünyanın dört bir yanından satın alınan geniş kaliteli ürün yelpazemizden birini seçin.</p>
                            </div>
                        </div>
                        <footer class="entry-meta with_top_border darklinks">
                            <a class="btn btn-default btn-lg" href="/gida">Detaylı Bilgi</a>
                        </footer>
                    </article>

                </div>

                <div class="isotope-item col-lg-3 col-md-6 col-sm-12" style="position: absolute; left: 66.6667%; top: 0px;">

                    <article class="vertical-item content-padding text-center with_border rounded">
                        <div class="item-media top_rounded overflow_hidden">
                            <img src="/wp-content/uploads/2020/07/tarım.jpg" style="max-height: 140px" alt="">
                            <div class="media-links">
                                <a href="/tarim/" class="abs-link"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <header class="entry-header">
                                <h5 class="entry-title">
                                    <a href="/tarim/">Tarım</a>
                                </h5>
                            </header>
                            <div class="entry-content">
                                <p>Verimli topraklardan, kalitesinden ödün mermeden tedarik ediyoruz.
                                </p>
                            </div>
                        </div>
                        <footer class="entry-meta with_top_border darklinks">
                            <a class="btn btn-default btn-lg" href="/tarim/">Detaylı Bilgi</a>
                        </footer>
                    </article>

                </div>
                <div class="isotope-item col-lg-3 col-md-6 col-sm-12" style="position: absolute; left: 66.6667%; top: 0px;">

                    <article class="vertical-item content-padding text-center with_border rounded">
                        <div class="item-media top_rounded overflow_hidden">
                            <img src="/wp-content/uploads/2020/07/yatirim-danismanligi-1.jpg" style="max-height: 140px" alt="">
                            <div class="media-links">
                                <a href="/yatirim-danismanligi/" class="abs-link"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <header class="entry-header">
                                <h5 class="entry-title">
                                    <a href="/yatirim-danismanligi/">Yatırım Danışmanlığı</a>
                                </h5>
                            </header>
                            <div class="entry-content">
                                <p>Yatırımlarınızı doğru yerlerde değerlendirerek, kazançlarınızı büyütüyoruz.
                                </p>
                            </div>
                        </div>
                        <footer class="entry-meta with_top_border darklinks">
                            <a class="btn btn-default btn-lg" href="/yatirim-danismanligi/">Detaylı Bilgi</a>
                        </footer>
                    </article>

                </div>
                <div class="isotope-item col-lg-3 col-md-6 col-sm-12" style="position: absolute; left: 0%; top: 0px;">

                    <article class="vertical-item content-padding text-center with_border rounded">
                        <div class="item-media top_rounded overflow_hidden">
                            <img src="/wp-content/uploads/2020/07/enerji.jpg" style="max-height: 140px" alt="">
                            <div class="media-links">
                                <a href="/enerji-2/" class="abs-link"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <header class="entry-header">
                                <h5 class="entry-title">
                                    <a href="/enerji-2/">Sanayi</a>
                                </h5>
                            </header>
                            <div class="entry-content">
                                <p>Sürdürülebilir enerjide dünyanın en verimli kaynakarını sizin için sunuyoruz.
                                </p>
                            </div>
                        </div>
                        <footer class="entry-meta with_top_border darklinks">
                            <a class="btn btn-default btn-lg" href="/enerji-2/">Detaylı Bilgi</a>
                        </footer>
                    </article>

                </div>

                <div class="isotope-item col-lg-3 col-md-6 col-sm-12" style="position: absolute; left: 33.3333%; top: 0px;">

                    <article class="vertical-item content-padding text-center with_border rounded">
                        <div class="item-media top_rounded overflow_hidden">
                            <img src="/wp-content/uploads/2020/07/hayvncilik2-1.jpg" style="max-height: 140px" alt="">
                            <div class="media-links">
                                <a href="/hayvancilik-2/" class="abs-link"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <header class="entry-header">
                                <h5 class="entry-title">
                                    <a href="/hayvancilik-2/">Hayvancılık</a>
                                </h5>
                            </header>
                            <div class="entry-content">
                                <p>Çiftlik hayvanları, canlı hayvan ithalat ve ihracatını birçok ülkeye gerçekleştirmekteyiz</p>
                            </div>
                        </div>
                        <footer class="entry-meta with_top_border darklinks">
                            <a class="btn btn-default btn-lg" href="/hayvancilik-2/">Detaylı Bilgi</a>
                        </footer>
                    </article>

                </div>

                <div class="isotope-item col-lg-3 col-md-6 col-sm-12" style="position: absolute; left: 66.6667%; top: 0px;">

                    <article class="vertical-item content-padding text-center with_border rounded">
                        <div class="item-media top_rounded overflow_hidden">
                            <img src="/wp-content/uploads/2020/07/VOdSmNdjuj.jpg" style="max-height: 140px" alt="">
                            <div class="media-links">
                                <a href="/insaat-altyapi/" class="abs-link"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <header class="entry-header">
                                <h5 class="entry-title">
                                    <a href="/insaat-altyapi/">İnşaat Üst ve Altyapı</a>
                                </h5>
                            </header>
                            <div class="entry-content">
                                <p>İnşaat Üstyapı ve Altyapı hizmetlerinde ekonomik<br> çözüm ve imkan.
                                </p>
                            </div>
                        </div>
                        <footer class="entry-meta with_top_border darklinks">
                            <a class="btn btn-default btn-lg" href="/insaat-altyapi/">Detaylı Bilgi</a>
                        </footer>
                    </article>

                </div>
                <div class="isotope-item col-lg-3 col-md-6 col-sm-12" style="position: absolute; left: 66.6667%; top: 0px;">

                    <article class="vertical-item content-padding text-center with_border rounded">
                        <div class="item-media top_rounded overflow_hidden">
                            <img src="/wp-content/uploads/2020/07/sagIık.jpg" style="max-height: 140px" alt="">
                            <div class="media-links">
                                <a href="/saglik-turizmi/" class="abs-link"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <header class="entry-header">
                                <h5 class="entry-title">
                                    <a href="/saglik-turizmi/">Sağlık Turizmi</a>
                                </h5>
                            </header>
                            <div class="entry-content">
                                <p>Dünyanın en gelişmiş, sağlık alanındaki tüm olanakarı sizin için buluyoruz
                                </p>
                            </div>
                        </div>
                        <footer class="entry-meta with_top_border darklinks">
                            <a class="btn btn-default btn-lg" href="/saglik-turizmi/">Detaylı Bilgi</a>
                        </footer>
                    </article>

                </div>
                <div class="isotope-item col-lg-3 col-md-6 col-sm-12" style="position: absolute; left: 0%; top: 0px;">

                    <article class="vertical-item content-padding text-center with_border rounded">
                        <div class="item-media top_rounded overflow_hidden">
                            <img src="/wp-content/uploads/2020/07/egitim.jpg" style="max-height: 140px" alt="">
                            <div class="media-links">
                                <a href="/egitim-2/" class="abs-link"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <header class="entry-header">
                                <h5 class="entry-title">
                                    <a href="/egitim-2/">Eğitim</a>
                                </h5>
                            </header>
                            <div class="entry-content">
                                <p>Eğitim konusunda, yurt dışı öğrenci değişimleri ve vize işlemlerinizde çözüm sunuyoruz.</p>
                            </div>
                        </div>
                        <footer class="entry-meta with_top_border darklinks">
                            <a class="btn btn-default btn-lg" href="/egitim-2/">Detaylı Bilgi</a>
                        </footer>
                    </article>

                </div>

                <div class="isotope-item col-lg-3 col-md-6 col-sm-12" style="position: absolute; left: 66.6667%; top: 0px;">

                    <article class="vertical-item content-padding text-center with_border rounded">
                        <div class="item-media top_rounded overflow_hidden">
                            <img src="/wp-content/uploads/2020/07/O1CN01R2q0TW24GImhHv1Hb_6000000007363-0-tbvideo.jpg" style="max-height: 140px" alt="">
                            <div class="media-links">
                                <a href="/maden-dogal-tas/" class="abs-link"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <header class="entry-header">
                                <h5 class="entry-title">
                                    <a href="/maden-dogal-tas/">Doğal Taş</a>
                                </h5>
                            </header>
                            <div class="entry-content">
                                <p>Tarihin güzelliklerini doğal taşlar üzerinde şekillendirerek, dünya pazarına sunuyoruz.</p>
                            </div>
                        </div>
                        <footer class="entry-meta with_top_border darklinks">
                            <a class="btn btn-default btn-lg" href="/maden-dogal-tas/">Detaylı Bilgi</a>
                        </footer>
                    </article>

                </div>

                <div class="isotope-item col-lg-3 col-md-6 col-sm-12" style="position: absolute; left: 66.6667%; top: 0px;">

                    <article class="vertical-item content-padding text-center with_border rounded">
                        <div class="item-media top_rounded overflow_hidden">
                            <img src="/wp-content/uploads/2020/07/tekstiIe.jpg" style="max-height: 140px" alt="">
                            <div class="media-links">
                                <a href="/tekstil/" class="abs-link"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <header class="entry-header">
                                <h5 class="entry-title">
                                    <a href="/tekstil/">Tekstil</a>
                                </h5>
                            </header>
                            <div class="entry-content">
                                <p>Geniş ürün gamı ve ürün yelpazesiyle tekstilde birçok noktada sizin yanınızdayız.</p>
                            </div>
                        </div>
                        <footer class="entry-meta with_top_border darklinks">
                            <a class="btn btn-default btn-lg" href="/tekstil/">Detaylı Bilgi</a>
                        </footer>
                    </article>

                </div>
                <div class="isotope-item col-lg-3 col-md-6 col-sm-12" style="position: absolute; left: 66.6667%; top: 0px;">

                    <article class="vertical-item content-padding text-center with_border rounded">
                        <div class="item-media top_rounded overflow_hidden">
                            <img src="/wp-content/uploads/2020/07/Iojistik.jpg" style="max-height: 140px" alt="">
                            <div class="media-links">
                                <a href="/tesisler-2/" class="abs-link"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <header class="entry-header">
                                <h5 class="entry-title">
                                    <a href="/tesisler-2/">Lojistik Tesisler</a>
                                </h5>
                            </header>
                            <div class="entry-content">
                                <p>Dünyanın her noktasına, kara, hava ve deniz lojistik hizmet ve noktalarımızla hizmetinizdeyiz.</p>
                            </div>
                        </div>
                        <footer class="entry-meta with_top_border darklinks">
                            <a class="btn btn-default btn-lg" href="/tesisler-2">Detaylı Bilgi</a>
                        </footer>
                    </article>

                </div>

            </div>
            <?php include('section/brand.php') ?>


        </div>
    </div>



</section>




<?php get_footer() ?>
