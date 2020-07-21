<?php

/**
 *  Template Name: Tekstil
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
            <div class="col-md-12" style="text-align: center;">

                <p><?php the_content();?></p>
                <?php endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            </div>
        </div>
        <?php endif; ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="gallery-owl-carousel" class="owl-carousel dots-center with_background_items" data-dots="true" data-items="3" data-responsive-lg="3" data-responsive-md="2" data-responsive-sm="2" data-responsive-xs="1">

                    <?php
                    $loop = new WP_Query( array(
                            'post_type' => 'tekstil',
                            'posts_per_page' => -1
                        )
                    );
                    ?>

                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); ?>
                        <article class="vertical-item content-padding post format-standard with_border rounded text-center">

                            <div class="item-media">

                                <img style="height: 250px;" src="<?php echo $thumb['0'];?>" alt="">

                                <div class="media-links">
                                    <div class="links-wrap">
                                        <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="<?php echo $thumb['0'];?>"></a>
                                    </div>
                                </div>
                            </div>


                        </article>
                    <?php endwhile; wp_reset_query(); ?>


                </div>
            </div>


        </div>
    </div>

</section>


<?php get_footer() ?>
