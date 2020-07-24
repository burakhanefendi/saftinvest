<?php

/**
 *  Template Name: İletişim
 */

get_header(); ?>

<section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3008.3547758890595!2d28.990926115415746!3d41.06123707929552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab703dc855957%3A0xb2e5f5f8ed0049ec!2zMTkgTWF5xLFzLCBEci4gSMO8c27DvCDEsHNtZXQgw5Z6dMO8cmsgU2suIE5vOjksIDM0MzYwIMWeacWfbGkvxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1595546698236!5m2!1str!2str" width="1920" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</section>

<section class="ls columns_padding_25 section_padding_top_75 section_padding_bottom_100">
    <div class="container">
        <div class="row">

            <div class="col-md-8 to_animate" data-animation="scaleAppear">

                <h3 class="text-capitalize">İletişim Formu</h3>

                <form class="contact-form row columns_padding_10" method="post" action="./">
                    <div class="col-sm-6">
                        <div class="contact-form-name">
                            <label for="name">Full Name
                                <span class="required">*</span>
                            </label>
                            <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="contact-form-subject">
                            <label for="subject">Subject
                                <span class="required">*</span>
                            </label>
                            <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Subject">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="contact-form-phone">
                            <label for="phone">Phone
                                <span class="required">*</span>
                            </label>
                            <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="contact-form-email">
                            <label for="email">Email address
                                <span class="required">*</span>
                            </label>
                            <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email Address">
                        </div>
                    </div>
                    <div class="col-sm-12">

                        <div class="contact-form-message">
                            <label for="message">Message</label>
                            <textarea aria-required="true" rows="5" cols="45" name="message" id="message" class="form-control" placeholder="Message..."></textarea>
                        </div>
                    </div>

                    <div class="col-sm-12">

                        <div class="contact-form-submit topmargin_10">
                            <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button color1 wide_button">Send Message</button>
                        </div>
                    </div>


                </form>
            </div>
            <!--.col-* -->

            <div class="col-md-4 to_animate" data-animation="scaleAppear">

                <h3 class="text-capitalize">İletişim Bilgilerimiz</h3>

                <p>
                    <i class="fa fa-map-marker highlight rightpadding_5" aria-hidden="true"></i> 19 Mayıs Mh. Dr. Hüsnü İsmet Öztürk Sk. No: 9 Şişli-İstanbul - Türkiye
                </p>
                <p>
                    <i class="fa fa-phone highlight rightpadding_5" aria-hidden="true"></i>  0(212) 295 85 98
                </p>
                <p class="greylinks">
                    <i class="fa fa-envelope highlight rightpadding_5" aria-hidden="true"></i> <a href="mailto:info@saffinvest.com">info@saffinvest.com</a>
                </p>

            </div>
            <!--.col-* -->

        </div>
        <!--.row -->

    </div>
    <!--.container -->

</section>


<?php get_footer() ?>
