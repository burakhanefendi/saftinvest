<!--[if lt IE 9]>
<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
<![endif]-->

<div class="preloader">
    <div class="preloader_image"></div>
</div>

<!-- search modal -->

<!-- Unyson messages modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
    <div class="fw-messages-wrap ls with_padding">
        <!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
        <!--
    <ul class="list-unstyled">
        <li>Message To User</li>
    </ul>
    -->

    </div>
</div>
<!-- eof .modal -->

<!-- wrappers for visual page editor and boxed version of template -->
<div id="canvas">
    <div id="box_wrapper">

        <!-- template sections -->

        <section class="page_topline ds darkblue parallax table_section table_section_sm section_padding_bottom_10 section_padding_top_10">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4 text-center text-sm-left">
                        <div class="inline-content darklinks">
								<span style="color: #ffffff;">
									<i class="fa fa-phone highlight rightpadding_5" aria-hidden="true"></i>
									0(212) 295 85 98
								</span>
                            <span class="small-text">
									<i class="fa fa-envelope highlight rightpadding_5" aria-hidden="true"></i>
									<a style="text-transform: lowercase" href="#">info@saffinvest.com</a>
								</span>
                        </div>
                    </div>
                    <div class="col-sm-4 text-center">
                        <div>
                            <a class="social-icon color-icon soc-facebook" href="#" title="Facebook"></a>
                            <a class="social-icon color-icon soc-twitter" href="#" title="Twitter"></a>
                            <a class="social-icon color-icon soc-youtube" href="#" title="Youtube"></a>
                            <a class="social-icon color-icon soc-linkedin" href="#" title="Youtube"></a>
                            <a class="social-icon color-icon soc-instagraö" href="#" title="Youtube"></a>

                        </div>
                    </div>
                    <div class="col-sm-4 text-center">
                        <!-- Example single danger button -->
                        <select class="selectpicker" data-width="fit" style="color: #ffffff;">
                            <option data-content='<span class="flag-icon flag-icon-us"></span> English'>Türkçe</option>
                            <option  data-content='<span class="flag-icon flag-icon-mx"></span> Español'>İngilizce</option>
                            <option  data-content='<span class="flag-icon flag-icon-mx"></span> Español'>Arapça</option>

                        </select>
                    </div>

                </div>
            </div>
        </section>
<header class="page_header header_white toggler_xs_right section_padding_15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 display_table">
                <div class="header_left_logo display_table_cell">
                    <a href="/" class="logo top_logo">
                        <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
                        echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="">'; ?>
                    </a>
                </div>

                <div class="header_mainmenu display_table_cell text-center">
                    <!-- main nav start -->
                    <nav class="mainmenu_wrapper">
                        <ul class="mainmenu nav sf-menu">
                            <li>
                                <a href="/">Anasayfa</a>
                            </li>

                            <li>
                                <a href="#">Hakkımızda</a>
                                <ul>
                                    <li>
                                        <a href="/biz-kimiz">Biz Kimiz</a>
                                    </li>
                                    <li>
                                        <a href="/finansal-bilgi">Finansal Bilgi</a>
                                    </li>

                                    <li>
                                        <a href="/sistemler-ve-uyeler">Sistemler ve Üyeler</a>
                                    </li>

                                    <li>
                                        <a href="/nasil-calisiyoruz">Nasıl Çalışıyoruz</a>
                                    </li>
                                    <li>
                                        <a href="/grup-sirketlerimiz/">Grup Şirketlerimiz</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- eof pages -->

                            <li>
                                <a href="#">Ürünler</a>
                                <ul>
                                    <li>
                                        <a href="/urunlere-genel-bakis/">Ürünlere Genel Bakış</a>
                                    </li>
                                    <li>
                                        <a href="/gida">Gıda Ürünleri</a>
                                    </li>
                                    <li>
                                        <a href="/diger-gida-urunleri/">Diğer Gıda Ürünler</a>
                                    </li>
                                    <li>
                                        <a href="/tarim">Tarım</a>
                                    </li>

                                    <li>
                                        <a href="/yatirim-danismanligi">Yatırım Danışmanlığı</a>
                                    </li>

                                    <li>
                                        <a href="/enerji-2">Enerji</a>
                                    </li>
                                    <li>
                                        <a href="/maden-dogal-tas">Maden - Doğal Taş</a>
                                    </li>
                                    <li>
                                        <a href="/insaat-altyapi">İnşaat ve Altyapı</a>
                                    </li>
                                    <li>
                                        <a href="/saglik-turizmi">Sağlık Turizmi</a>
                                    </li>
                                    <li>
                                        <a href="/egitim-2">Eğitim</a>
                                    </li>
                                    <li>
                                        <a href="/hayvancilik-2/">Hayvancılık</a>
                                    </li>
                                    <li>
                                        <a href="/tekstil">Tekstil</a>
                                    </li>
                                    <li>
                                        <a href="/lojistik">Lojistic</a>
                                    </li>
                                </ul>

                            </li>
                            <!-- eof features -->


                            <!-- gallery -->
                            <li>
                                <a href="#">Markalar</a>
                            </li>
                            <!-- eof Gallery -->

                            <!-- blog -->
                            <li>
                                <a href="/tesisler-2/">Tesisler</a>
                            </li>
                            <!-- eof blog -->

                            <!-- contacts -->
                            <li>
                                <a href="/iletisim">Bize Ulaşın</a>
                            </li>
                            <!-- eof contacts -->
                        </ul>
                    </nav>
                    <!-- eof main nav -->
                    <!-- header toggler -->
                    <span class="toggle_menu">
									<span></span>
								</span>
                </div>
            </div>
        </div>
    </div>
</header>
        <script>
            $(function(){
                $('.selectpicker').selectpicker();
            });
            </script>
