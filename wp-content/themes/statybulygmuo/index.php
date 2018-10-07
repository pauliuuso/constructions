<?php get_header(); ?>

<div class="container-fluid">

    <div id="fullpage" class="row">

        <section id="construction-about" data-anchor="section-about" class="col-12 construction-about section">

            <div class="logo-wrapper d-none animated js-about-logo-wrapper">
                <img src="<?php bloginfo('template_url'); ?>/svg/logo_with_text.svg">
            </div>

            <div class="logo-wrapper d-md-none animated">
                <img src="<?php bloginfo('template_url'); ?>/svg/logotipas.svg">
            </div>

            <div class="menu-wrapper js-about-menu-wrapper d-none animated">
                <a href="#section-about">
                    <h4 class="mr-md-3 pointer pb-1 active js-element">Apie</h4>
                </a>
                <a href="#section-products">
                    <h4 class="mr-md-3 s-element">Sėkmės istorijos</h4>
                </a>
                <a href="#section-contacts">
                    <h4 class="pointer js-element">Kontaktai</h4>
                </a>
            </div>

            <div class="about-top-line js-about-top-line d-none visibility-hidden animated"></div>
            <div class="about-bottom-left-line js-about-bottom-left-line d-none animated"></div>

            <div class="row height-100">

                <div class="col-8 col-sm-10 col-lg-6">
                    <div class="about-text-wrapper">
                        <div class="mt-1 visibility-hidden animated about-title-wrapper js-about-title-wrapper">
                            <h2 class="text-super-big text-bold text-red">Statybų ekspertai</h2>
                        </div>
                        <div class="row">
                            <div class="offset-lg-1 col-12 col-lg-11 mt-2 mt-sm-5 visibility-hidden animated js-about-text-wrapper">
                                <p class="text-bigger text-red text-font-light fadeIn animated about-text m-0">Statybų ekspertų komanda kokybiškai įgyvendins Jūsų viziją nuo pamatų iki naudojimui pritaikytos erdvės. Teikiame įvairias su statybomis susiijusias paslaugas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-4 col-sm-2 col-lg-6">
                    <div id="about-house-animated" class="about-house-animated d-none animated"></div>
                    <div id="about-roof-animated" class="about-roof-animated visibility-hidden d-lg-none"></div>
                </div>

                <div class="about-footer-wrapper js-about-footer-wrapper d-none animated">
                    <p class="text-medium p-0 m-0 text-bold">APIE</p>
                </div>
            </div>

        </section>

        <section id="construction-gallery" data-anchor="section-products" class="section construction-gallery snap mt-5 full-height">

            <div class="menu-wrapper js-gallery-menu-wrapper visibility-hidden animated">
                <a href="#section-about">
                    <h4 class="mr-md-3 pointer pb-1 js-element">Apie</h4>
                </a>
                <a href="#section-products">
                    <h4 class="mr-md-3 js-element active">Sėkmės istorijos</h4>
                </a>
                <a href="#section-contacts">
                    <h4 class="pointer js-element">Kontaktai</h4>
                </a>
            </div>

            <?php if(have_posts()) : ?>
            <?php
                global $post;
                $args = ['category' => 'products'];
                $posts = get_posts($args);

                foreach($posts as $key=>$post): setup_postdata($post)
            ?>

                <div class="col-12 slide" data-anchor="sekmes-istorija-<?php echo $key ?>">

                        <div class="row height-100">

                            <div class="col-12 col-md-6 gallery-image-wrapper background-center js-gallery-image-wrapper visibility-hidden animated" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                                <img class="gallery-image-slash d-none d-md-block" src="<?php bloginfo('template_url'); ?>/svg/trikampis.svg">
                                <img class="gallery-image-slash-mobile d-md-none" src="<?php bloginfo('template_url'); ?>/svg/trikampis_mobile.svg">
                            </div>

                            <div class="col-12 col-md-6 gallery-right">

                                <div class="gallery-menu-top-line js-gallery-menu-top-line d-none animated"></div>

                                <div class="row">
                                    <div class="gallery-text-wrapper col-12 col-md-10">
                                        <h2 class="text-big text-red text-bold js-gallery-title text-center text-md-left visibility-hidden animated"><?php the_title(); ?></h2>
                                        <div class="row">
                                            <div class="col-8 offset-2 col-md-10 offset-md-0 gallery-text-inner-wrapper ml-lg-5 js-gallery-description visibility-hidden animated">
                                                <p class="gallery-beam mt-3 mt-md-5"></p>
                                                <span class="text-medium text-red"><?php the_excerpt() ?></span>
                                                <div class="gallery-date-wrapper ml-lg-5 js-gallery-next-year visibility-hidden animated">
                                                    <span class="text-medium text-red"><?php the_field('year') ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="next-story-wrapper js-next-story-wrapper d-none animated">
                                    <p class="text-medium text-bold">KITA ISTORIJA</p>
                                </div>

                                <div class="next-story-line js-next-story-line d-none animated"></div>

                            </div>
                        </div>

                </div>

            <?php endforeach; ?>
            <?php endif; ?>

        </section>

        <section id="construction-contacts" data-anchor="section-contacts" class="section col-12 construction-contacts full-height">

            <div class="logo-wrapper js-contacts-logo-wrapper d-none animated">
                <img src="<?php bloginfo('template_url'); ?>/svg/logo_with_text.svg">
            </div>

            <div class="menu-wrapper js-contacts-menu-wrapper d-none animated">
                <a href="#section-about">
                    <h4 class="mr-md-3 pointer pb-1">Apie</h4>
                </a>
                <a href="#section-products">
                    <h4 class="mr-md-3">Sėkmės istorijos</h4>
                </a>
                <a href="#section-contacts">
                    <h4 class="pointer active">Kontaktai</h4>
                </a>
            </div>

            <div class="contacts-top-line js-contacts-top-line d-none animated"></div>
            <div class="contacts-bottom-left-line js-contacts-bottom-left-line d-none animated"></div>

            <div class="row">

                <div class="contacts-left col-12 col-md-8 col-lg-6">
                    <div class="contacts-text-wrapper">

                        <div class="contacts-title-wrapper js-contacts-title-wrapper visibility-hidden animated">
                            <h4 class="text-super-big text-bold text-red">Susisiekite su mumis!</h4>
                        </div>

                        <div class="contacts-form-wrapper js-contacts-form-wrapper visibility-hidden animated">
                            <?php
                            $content_post = get_page_by_path( 'contacts' );
                            $content = $content_post->post_content;
                            $content = apply_filters('the_content', $content);
                            $content = str_replace(']]>', ']]&gt;', $content);
                            echo $content;
                            ?>
                        </div>

                    </div>
                </div>

                <div class="contacts-right col-12 col-md-4 col-lg-6 col-xl-5 offset-xl-1">
                    <div class="contacts-icon-wrapper">
                        <div class="row">
                            <div class="col-12">
                                <div class="icon">
                                    <div id="email-icon-animated" class="email-icon-animated"></div>
                                </div>
                                <div class="text visibility-hidden animated js-email-icon-text">
                                    <p class="text-bigger pt-2 pt-lg-4 pl-3 pl-md-0 pl-lg-3">info@statybuekspertai.lt</p>
                                </div>
                            </div>
                            <div class="col-12 mt-md-3">
                                <div class="icon">
                                    <div id="phone-icon-animated" class="phone-icon-animated"></div>
                                </div>
                                <div class="text visibility-hidden animated js-phone-icon-text">
                                    <p class="text-bigger pt-2 pt-lg-4 pl-3 pl-md-0 pl-lg-3">+3706 3000000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="contacts-footer-wrapper js-contacts-footer-wrapper d-none animated">
                <p class="text-medium p-0 m-0 text-bold">KONTAKTAI</p>
            </div>

        </section>
    </div>
</div>

<script>
    $('.slick-slider').slick({
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth: true,
        swipe: true,
        dots: true,
        arrows: true,
        centerMode: true,
        // prevArrow: "<button type='button' class='arrow-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
        // nextArrow: "<button type='button' class='arrow-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
        responsive:
            [{
                breakpoint: 992,
                settings:
                    {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        variableWidth: true,
                        arrows: true,
                        swipe: true,
                        centerMode: true
                    }
            },
                {
                    breakpoint: 768,
                    settings:
                        {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                            variableWidth: true,
                            swipe: true,
                            centerMode: true
                        }
                },
                {
                    breakpoint: 576,
                    settings:
                        {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                            variableWidth: true,
                            swipe: true,
                            centerMode: true
                        }
                }]
    });

</script>

<?php get_footer(); ?>