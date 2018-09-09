<?php get_header(); ?>

<div class="container-fluid">

    <div class="row">

        <section id="construction-about" class="col-12 construction-about section">

            <div class="frame"></div>

            <div class="about-logo-wrapper pl-4">
                <img alt="statybu ekspertai logotipas" src="<?php bloginfo('template_url'); ?>/img/statybu_ekspertai_logo.png">
                <h2 class="text-big text-uppercase ml-4 mt-5 pr-4">Apie</h2>
            </div>

            <div class="about-menu-wrapper pl-3 pr-3">
                <h4 class="mr-3 pointer pb-1 active">Apie</h4>
                <h4 class="mr-3">Sėkmės istorijos</h4>
                <h4 class="pointer">Kontaktai</h4>
            </div>

            <div class="row">

                <div class="col-12 col-lg-6 about-text-wrapper pl-5">
                    <h4 class="text-bigger-2 text-font-light ml-3">Statybų ekspertų komanda kokybiškai įgyvendins Jūsų viziją nuo pamatų iki naudojimui pritaikytos erdvės. Teikiame įvairias su statybomis susiijusias paslaugas. Pagrindinės veiklos sritys –individualių namų statyba, visuomeninės, komercinės ir gamybinės paskirties pastatų statyba ir rekonstrukcija bei apdailos darbai.
                    </h4>
                </div>

                <div class="about-contacts-wrapper">
                    <p class="text-bigger pl-4 pr-4">
                        <span class="mr-5">+3706 000000</span>
                        <span>info@statybuekspertai.lt</span>
                    </p>
                </div>

                <div class="col-12 col-md-6 offset-lg-1 col-lg-5 pt-5 mt-5 mb-5 about-house-wrapper">
                    <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/about_background.png">
                </div>

            </div>

        </section>

        <section id="construction-gallery" class="col-12 construction-gallery snap">

            <div class="frame"></div>

            <div class="gallery-info-wrapper">
                <img class="pl-4 mr-5" src="<?php bloginfo('template_url'); ?>/img/statybu_ekspertai_logo.png">
                <h2 class="text-big text-uppercase mt-5 pr-4">Sėkmės istorijos</h2>
            </div>

            <div class="gallery-menu-wrapper pl-3 pr-3">
                <h4 class="mr-3 pointer">Apie</h4>
                <h4 class="mr-3 pb-1 active pointer">Sėkmės istorijos</h4>
                <h4 class="pointer">Kontaktai</h4>
            </div>

            <?php if(have_posts()) : ?>

                <div class="row gallery-main-wrapper">
                    <div class="slick-slider col-12">

                        <?php
                        global $post;
                        $args = ['category' => 'products'];
                        $posts = get_posts($args);

                        foreach($posts as $post): setup_postdata($post)
                            ?>

                            <div class="ml-4 mr-4 gallery-item-wrapper">
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

        </section>

        <section id="construction-contacts" class="col-12 construction-contacts snap">

            <div class="frame"></div>

            <div class="row contacts-form-wrapper mb-5">
                <div class="col-12 col-md-5 offset-md-1">
                    <h4 class="text-big">Susisiekite su mumis!</h4>
                    <?php echo do_shortcode( '[contact-form-7 id="22" title="Contact form 1"]' ); ?>
                </div>
                <div class="col-12 col-md-6">

                </div>
            </div>

            <div class="contacts-menu-wrapper pl-3 pr-3">
                <h4 class="mr-3 pointer">Apie</h4>
                <h4 class="mr-3 pb-1 pointer">Sėkmės istorijos</h4>
                <h4 class="pointer active">Kontaktai</h4>
            </div>

            <div class="contacts-info-wrapper">
                <img class="pl-4 mr-5" src="<?php bloginfo('template_url'); ?>/img/statybu_ekspertai_logo.png">
                <h2 class="text-big text-uppercase mt-5 pr-4">Kontaktai</h2>
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
                        dots: false,
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
                            dots: false,
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
                            dots: false,
                            swipe: true,
                            centerMode: true
                        }
                }]
    });

</script>

<?php get_footer(); ?>