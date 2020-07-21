<section class="intro_section page_mainslider ds">
    <div class="flexslider" data-nav="false">
        <ul class="slides">

            <?php
            $loop = new WP_Query( array(
                    'post_type' => 'slider',
                    'posts_per_page' => -1
                )
            );
            ?>

            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); ?>

                <li>
                    <img src="<?php echo $thumb['0'];?>" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="slide_description_wrapper">
                                    <div class="slide_description">
                                        <div class="intro-layer" data-animation="fadeInUp">
                                            <h3 class="text-uppercase" style="background-color: #000080; font-size: 70px">
                                                <?php the_content();?>
                                            </h3>
                                        </div>
                                    </div>
                                    <!-- eof .slide_description -->
                                </div>
                                <!-- eof .slide_description_wrapper -->
                            </div>
                            <!-- eof .col-* -->
                        </div>
                        <!-- eof .row -->
                    </div>
                </li>

            <?php endwhile; wp_reset_query(); ?>


        </ul>
    </div>
    <!-- eof flexslider -->

</section>
