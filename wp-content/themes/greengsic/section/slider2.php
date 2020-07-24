<!-- Paradise Slider -->
<div id="fw_al_001" class="carousel slide ps_slide_y ps_indicators_y swipe_y ps_easeOutQuint" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2500">

    <!-- Indicators -->
    <?php
    $loop = new WP_Query( array(
            'post_type' => 'slider',
            'posts_per_page' => -1,
        )
    );
    $count = 0;
    ?>


    <!-- Wrapper For Slides -->
    <div class="carousel-inner" role="listbox">

        <!-- First Slide -->

        <?php
        $count = 0;
        while ($loop->have_posts()) : $loop->the_post();
            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
            ?>
            <div class="item <?php if ( $count == 0){ echo 'active';};?>" data-slide-number="<?php echo $count++;?>" style="background:url(<?php echo $thumb[0];?>) no-repeat center; background-size:cover;">

            <!-- Slide Background -->
            <img src="<?php echo $thumb['0'];?>" alt="fw_al_001_01" />

            <!-- Slide Text Layer -->
            <div class="fw_al_001_slide">
                <p style="color: white !important;" data-animation="animated fadeInUp"><?php the_content();?></p>

            </div>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>        <!-- End of Slide -->

    </div><!-- End of Wrapper For Slides -->

</div>
