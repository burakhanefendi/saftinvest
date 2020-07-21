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
				</div>
                <?php endif; ?>
			</section>
<?=get_footer(); ?>
