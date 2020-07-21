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

<section class="ls page_portfolio section section_padding_bottom_10 columns_padding_25 columns_margin_bottom_30">
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

    <div class="col-sm-12">

        <div class="isotope_container isotope row masonry-layout columns_margin_bottom_20" style="position: relative; height: 1652.11px;">

            <div class="isotope-item col-lg-3 col-md-6 col-sm-12" style="position: absolute; left: 0%; top: 0px;">

                <article class="vertical-item content-padding text-center with_border rounded">
                    <div class="item-media top_rounded overflow_hidden">
                        <img src="/wp-content/uploads/2020/07/08CAMPBELLS-facebookJumbo-v2.jpg" style="max-height: 140px" alt="">
                        <div class="media-links">
                            <a href="blog-single-right.html" class="abs-link"></a>
                        </div>
                    </div>
                    <div class="item-content">
                        <header class="entry-header">
                            <h5 class="entry-title">
                                <a href="blog-single-right.html">Gıda Ürünleri</a>
                            </h5>
                        </header>
                        <div class="entry-content">
                            <p>Consetur sadscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                        </div>
                    </div>
                    <footer class="entry-meta with_top_border darklinks">
                        <a class="btn btn-default btn-lg" href="#">Detaylı Bilgi</a>
                    </footer>
                </article>

            </div>

            <div class="isotope-item col-lg-3 col-md-6 col-sm-12" style="position: absolute; left: 33.3333%; top: 0px;">

                <article class="vertical-item content-padding text-center with_border rounded">
                    <div class="item-media top_rounded overflow_hidden">
                        <img src="/wp-content/uploads/2020/07/istockphoto-172402388-612x612.jpg" style="max-height: 140px" alt="">
                        <div class="media-links">
                            <a href="blog-single-right.html" class="abs-link"></a>
                        </div>
                    </div>
                    <div class="item-content">
                        <header class="entry-header">
                            <h5 class="entry-title">
                                <a href="blog-single-right.html">Diğer Gıda Ürünleri</a>
                            </h5>
                        </header>
                        <div class="entry-content">
                            <p>Consetur sadscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                        </div>
                    </div>
                    <footer class="entry-meta with_top_border darklinks">
                        <a class="btn btn-default btn-lg" href="#">Detaylı Bilgi</a>
                    </footer>
                </article>

            </div>

            <div class="isotope-item col-lg-3 col-md-6 col-sm-12" style="position: absolute; left: 66.6667%; top: 0px;">

                <article class="vertical-item content-padding text-center with_border rounded">
                    <div class="item-media top_rounded overflow_hidden">
                        <img src="/wp-content/uploads/2020/07/tarım.jpg" style="max-height: 140px" alt="">
                        <div class="media-links">
                            <a href="blog-single-right.html" class="abs-link"></a>
                        </div>
                    </div>
                    <div class="item-content">
                        <header class="entry-header">
                            <h5 class="entry-title">
                                <a href="blog-single-right.html">Tarım</a>
                            </h5>
                        </header>
                        <div class="entry-content">
                            <p>Consetur sadscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                        </div>
                    </div>
                    <footer class="entry-meta with_top_border darklinks">
                        <a class="btn btn-default btn-lg" href="#">Detaylı Bilgi</a>
                    </footer>
                </article>

            </div>
            <div class="isotope-item col-lg-3 col-md-6 col-sm-12" style="position: absolute; left: 66.6667%; top: 0px;">

                <article class="vertical-item content-padding text-center with_border rounded">
                    <div class="item-media top_rounded overflow_hidden">
                        <img src="/wp-content/uploads/2020/07/yatırım_danışmanığı.jpg" style="max-height: 140px" alt="">
                        <div class="media-links">
                            <a href="blog-single-right.html" class="abs-link"></a>
                        </div>
                    </div>
                    <div class="item-content">
                        <header class="entry-header">
                            <h5 class="entry-title">
                                <a href="blog-single-right.html">Yatırım Danışmanlığı</a>
                            </h5>
                        </header>
                        <div class="entry-content">
                            <p>Consetur sadscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                        </div>
                    </div>
                    <footer class="entry-meta with_top_border darklinks">
                        <a class="btn btn-default btn-lg" href="#">Detaylı Bilgi</a>
                    </footer>
                </article>

            </div>
            <div class="isotope-item col-lg-3 col-md-6 col-sm-12" style="position: absolute; left: 0%; top: 0px;">

                <article class="vertical-item content-padding text-center with_border rounded">
                    <div class="item-media top_rounded overflow_hidden">
                        <img src="/wp-content/uploads/2020/07/enerji.jpg" style="max-height: 140px" alt="">
                        <div class="media-links">
                            <a href="blog-single-right.html" class="abs-link"></a>
                        </div>
                    </div>
                    <div class="item-content">
                        <header class="entry-header">
                            <h5 class="entry-title">
                                <a href="blog-single-right.html">Enerji</a>
                            </h5>
                        </header>
                        <div class="entry-content">
                            <p>Consetur sadscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                        </div>
                    </div>
                    <footer class="entry-meta with_top_border darklinks">
                        <a class="btn btn-default btn-lg" href="#">Detaylı Bilgi</a>
                    </footer>
                </article>

            </div>

            <div class="isotope-item col-lg-3 col-md-6 col-sm-12" style="position: absolute; left: 33.3333%; top: 0px;">

                <article class="vertical-item content-padding text-center with_border rounded">
                    <div class="item-media top_rounded overflow_hidden">
                        <img src="/wp-content/uploads/2020/07/otomotiv.jpg" style="max-height: 140px" alt="">
                        <div class="media-links">
                            <a href="blog-single-right.html" class="abs-link"></a>
                        </div>
                    </div>
                    <div class="item-content">
                        <header class="entry-header">
                            <h5 class="entry-title">
                                <a href="blog-single-right.html">Otomotiv</a>
                            </h5>
                        </header>
                        <div class="entry-content">
                            <p>Consetur sadscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                        </div>
                    </div>
                    <footer class="entry-meta with_top_border darklinks">
                        <a class="btn btn-default btn-lg" href="#">Detaylı Bilgi</a>
                    </footer>
                </article>

            </div>

            <div class="isotope-item col-lg-3 col-md-6 col-sm-12" style="position: absolute; left: 66.6667%; top: 0px;">

                <article class="vertical-item content-padding text-center with_border rounded">
                    <div class="item-media top_rounded overflow_hidden">
                        <img src="/wp-content/uploads/2020/07/VOdSmNdjuj.jpg" style="max-height: 140px" alt="">
                        <div class="media-links">
                            <a href="blog-single-right.html" class="abs-link"></a>
                        </div>
                    </div>
                    <div class="item-content">
                        <header class="entry-header">
                            <h5 class="entry-title">
                                <a href="blog-single-right.html">İnşaat Altyapı</a>
                            </h5>
                        </header>
                        <div class="entry-content">
                            <p>Consetur sadscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                        </div>
                    </div>
                    <footer class="entry-meta with_top_border darklinks">
                        <a class="btn btn-default btn-lg" href="#">Detaylı Bilgi</a>
                    </footer>
                </article>

            </div>
            <div class="isotope-item col-lg-3 col-md-6 col-sm-12" style="position: absolute; left: 66.6667%; top: 0px;">

                <article class="vertical-item content-padding text-center with_border rounded">
                    <div class="item-media top_rounded overflow_hidden">
                        <img src="/wp-content/uploads/2020/07/sagIık.jpg" style="max-height: 140px" alt="">
                        <div class="media-links">
                            <a href="blog-single-right.html" class="abs-link"></a>
                        </div>
                    </div>
                    <div class="item-content">
                        <header class="entry-header">
                            <h5 class="entry-title">
                                <a href="blog-single-right.html">Sağlık Turizmi</a>
                            </h5>
                        </header>
                        <div class="entry-content">
                            <p>Consetur sadscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                        </div>
                    </div>
                    <footer class="entry-meta with_top_border darklinks">
                        <a class="btn btn-default btn-lg" href="#">Detaylı Bilgi</a>
                    </footer>
                </article>

            </div>
            <div class="isotope-item col-lg-3 col-md-6 col-sm-12" style="position: absolute; left: 0%; top: 0px;">

                <article class="vertical-item content-padding text-center with_border rounded">
                    <div class="item-media top_rounded overflow_hidden">
                        <img src="/wp-content/uploads/2020/07/egitim.jpg" style="max-height: 140px" alt="">
                        <div class="media-links">
                            <a href="blog-single-right.html" class="abs-link"></a>
                        </div>
                    </div>
                    <div class="item-content">
                        <header class="entry-header">
                            <h5 class="entry-title">
                                <a href="blog-single-right.html">Eğitim</a>
                            </h5>
                        </header>
                        <div class="entry-content">
                            <p>Consetur sadscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                        </div>
                    </div>
                    <footer class="entry-meta with_top_border darklinks">
                        <a class="btn btn-default btn-lg" href="#">Detaylı Bilgi</a>
                    </footer>
                </article>

            </div>

            <div class="isotope-item col-lg-3 col-md-6 col-sm-12" style="position: absolute; left: 33.3333%; top: 0px;">

                <article class="vertical-item content-padding text-center with_border rounded">
                    <div class="item-media top_rounded overflow_hidden">
                        <img src="/wp-content/uploads/2020/07/turizm.jpg" style="max-height: 140px" alt="">
                        <div class="media-links">
                            <a href="blog-single-right.html" class="abs-link"></a>
                        </div>
                    </div>
                    <div class="item-content">
                        <header class="entry-header">
                            <h5 class="entry-title">
                                <a href="blog-single-right.html">Turizm</a>
                            </h5>
                        </header>
                        <div class="entry-content">
                            <p>Consetur sadscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                        </div>
                    </div>
                    <footer class="entry-meta with_top_border darklinks">
                        <a class="btn btn-default btn-lg" href="#">Detaylı Bilgi</a>
                    </footer>
                </article>

            </div>

            <div class="isotope-item col-lg-3 col-md-6 col-sm-12" style="position: absolute; left: 66.6667%; top: 0px;">

                <article class="vertical-item content-padding text-center with_border rounded">
                    <div class="item-media top_rounded overflow_hidden">
                        <img src="/wp-content/uploads/2020/07/tekstiIe.jpg" style="max-height: 140px" alt="">
                        <div class="media-links">
                            <a href="blog-single-right.html" class="abs-link"></a>
                        </div>
                    </div>
                    <div class="item-content">
                        <header class="entry-header">
                            <h5 class="entry-title">
                                <a href="blog-single-right.html">Tekstil</a>
                            </h5>
                        </header>
                        <div class="entry-content">
                            <p>Consetur sadscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                        </div>
                    </div>
                    <footer class="entry-meta with_top_border darklinks">
                        <a class="btn btn-default btn-lg" href="#">Detaylı Bilgi</a>
                    </footer>
                </article>

            </div>
            <div class="isotope-item col-lg-3 col-md-6 col-sm-12" style="position: absolute; left: 66.6667%; top: 0px;">

                <article class="vertical-item content-padding text-center with_border rounded">
                    <div class="item-media top_rounded overflow_hidden">
                        <img src="/wp-content/uploads/2020/07/Iojistik.jpg" style="max-height: 140px" alt="">
                        <div class="media-links">
                            <a href="blog-single-right.html" class="abs-link"></a>
                        </div>
                    </div>
                    <div class="item-content">
                        <header class="entry-header">
                            <h5 class="entry-title">
                                <a href="blog-single-right.html">Lojistic</a>
                            </h5>
                        </header>
                        <div class="entry-content">
                            <p>Consetur sadscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                        </div>
                    </div>
                    <footer class="entry-meta with_top_border darklinks">
                        <a class="btn btn-default btn-lg" href="#">Detaylı Bilgi</a>
                    </footer>
                </article>

            </div>

        </div>
        <!-- eof .isotope_container.row -->

        <div class="row">
            <div class="col-sm-12 text-center">
                <img src="img/loading.png" alt="" class="fa-spin">
            </div>
        </div>

    </div>

</section>


<?php get_footer() ?>
