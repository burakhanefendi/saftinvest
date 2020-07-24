<?php

/**
 *  Template Name: Tesisler
 */

?>

<?=get_header(); ?>


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

<section class="ls page_portfolio section section_padding_bottom_10 columns_padding_25 columns_margin_bottom_30" style="margin-top: 20px">
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
    </div>
    <?php endif; ?>
</section>
<div class="container">
    <h3 style="text-align: center">DÜNYANIN BİR UCUNDAN DİĞER UCUNA SORUNSUZ ÇÖZÜMLER</h3>
    <div class="row">

        <div class="col-md-4">
            <div class="teaser with_border text-center">
                <div class="teaser_icon highlight size_small">
                    <img src="/wp-content/uploads/2020/07/kontrol.jpg">
                </div>
                <h4 class="text-uppercase text-center">
                    MUAYENE HİZMETLERİ
                </h4>
                <p>
                    Menşei ülkeden varış ülkesine malların kalitesini ve miktarını kontrol etme

                </p>

            </div>
        </div>
        <div class="col-md-4">
            <div class="teaser with_border text-center">
                <div class="teaser_icon highlight size_small">
                    <img src="/wp-content/uploads/2020/07/denistasimaciligi.jpg">
                </div>
                <h4 class="text-uppercase text-center">
                    TOPLU GEMİ VE KONTEYNER TAŞIMA
                </h4>
                <p>
                    Sevk ülkesinden boşaltım ülkesine dökme gemiler ve konteynırların düzenlenmesi
                </p>


            </div>
        </div>
        <div class="col-md-4">
            <div class="teaser with_border text-center">
                <div class="teaser_icon highlight size_small">
                    <img src="/wp-content/uploads/2020/07/karatasimaciligi.jpg">
                </div>
                <h4 class="text-uppercase text-center">
                    BOŞALTMA İŞLEMLERİ
                </h4>
                <p>
                    Malların deşarjının izlenmesi ve kolaylaştırılması
                </p>


            </div>
        </div>

    </div>
</div>
<?=get_footer(); ?>
