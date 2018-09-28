<?php get_header(); ?>

<div class="container-fluid">

    <div id="fullpage" class="row">

        <section id="construction-about" data-anchor="section-about" class="col-12 construction-about section">

            <div class="frame visibility-hidden animated">

                <div class="logo-wrapper d-none animated js-about-logo-wrapper">
                    <h2 class="text-bigger text-uppercase pl-4 mt-5 pr-4">Apie</h2>
                </div>

                <div class="menu-wrapper js-about-menu-wrapper pl-4 pr-4 d-none animated">
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

                <div class="row about-text-wrapper">
                    <div class="col-12">
                        <div id="logo-animated" class="logo-animated"></div>
                    </div>
                    <div class="col-12 mt-1 visibility-hidden animated js-about-title-wrapper">
                        <h2 class="text-super-big text-bold text-red">Statybų ekspertai</h2>
                    </div>
                    <div class="offset-lg-1 col-10 col-sm-5 col-md-5 mt-2 mt-sm-5 visibility-hidden animated js-about-text-wrapper">
                        <div class="about-text-beam mr-3 mt-2"></div>
                        <div>
                            <p class="text-bigger text-red text-font-light fadeIn animated m-0">Statybų ekspertų komanda kokybiškai įgyvendins Jūsų viziją nuo pamatų iki naudojimui pritaikytos erdvės. Teikiame įvairias su statybomis susiijusias paslaugas.
                            </p>
                        </div>
                    </div>
                </div>

                <div id="about-house-animated" class="about-house-animated d-none animated"></div>

                <div id="about-roof-animated" class="about-roof-animated visibility-hidden d-md-none"></div>

                <div class="about-contacts-wrapper js-about-contacts-wrapper text-center text-sm-left mt-4 d-none animated">
                    <p class="text-bigger p-0 m-0 pl-sm-4 pr-sm-4">
                        <span class="mr-3 mr-md-5 js-about-slide-up">+3706 000000</span>
                        <span class="js-about-slide-up">info@statybuekspertai.lt</span>
                    </p>
                </div>

                <div class="col-12 about-contacts-wrapper-mobile js-about-contacts-wrapper-mobile animated visibility-hidden d-lg-none">
                    <p>info@statybuekspertai.lt +3706 000000</p>
                </div>

            </div>

        </section>

        <section id="construction-gallery" data-anchor="section-products" class="section col-12 construction-gallery snap mt-5 full-height">

            <div class="frame">

                <div class="logo-wrapper pl-sm-4 d-none d-md-block">
                    <img src="<?php bloginfo('template_url'); ?>/img/statybu_ekspertai_logo.png">
                    <h2 class="text-big text-uppercase ml-2 ml-md-4 mt-5 pr-md-4">Sėkmės istorijos</h2>
                </div>

                <div class="menu-wrapper js-about-menu-wrapper pl-4 pr-4">
                    <a href="#section-about">
                        <h4 class="mr-md-3 pointer pb-1 animated visibility-hidden js-element">Apie</h4>
                    </a>
                    <a href="#section-products">
                        <h4 class="mr-md-3 animated visibility-hidden js-element active">Sėkmės istorijos</h4>
                    </a>
                    <a href="#section-contacts">
                        <h4 class="pointer animated visibility-hidden js-element">Kontaktai</h4>
                    </a>
                </div>

                <?php if(have_posts()) : ?>

                    <div class="gallery-main-wrapper">
                        <div class="col-12 slick-slider">
                            <?php
                            global $post;
                            $args = ['category' => 'products'];
                            $posts = get_posts($args);

                            foreach($posts as $post): setup_postdata($post)
                                ?>
                                <div class="ml-2 mr-2 ml-md-4 mr-md-4 gallery-item-wrapper">
                                    <div class="curtain"></div>

                                    <div class="gallery-item-image background-center" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
                                    <div class="gallery-item-info-wrapper">
                                        <h4 class="text-big text-uppercase text-bold mt-3"><?php the_title(); ?></h4>
                                        <div class="text-medium"><?php wp_strip_all_tags(the_excerpt()); ?></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>

            </div>


        </section>

        <section id="construction-contacts" data-anchor="section-contacts" class="section col-12 construction-contacts full-height">

            <div class="frame">
                <div class="row contacts-form-wrapper mb-5">
                    <div class="col-12 col-md-5 offset-md-1">
                        <h4 class="text-big">Susisiekite su mumis!</h4>
                        <?php
                            $content_post = get_page_by_path( 'contacts' );
                            $content = $content_post->post_content;
                            $content = apply_filters('the_content', $content);
                            $content = str_replace(']]>', ']]&gt;', $content);
                            echo $content;
                        ?>

                    </div>
                    <div class="col-12 col-md-6">

                    </div>
                </div>

                <div class="menu-wrapper pl-3 pr-3">
                    <h4 class="mr-3 pointer">Apie</h4>
                    <h4 class="mr-3 pb-1 pointer">Sėkmės istorijos</h4>
                    <h4 class="pointer active">Kontaktai</h4>
                </div>

                <div class="logo-wrapper d-none d-md-block">
                    <img class="pl-4 mr-5" src="<?php bloginfo('template_url'); ?>/img/statybu_ekspertai_logo.png">
                    <h2 class="text-big text-uppercase mt-5 pr-4">Kontaktai</h2>
                </div>
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