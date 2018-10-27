<?php get_header(); ?>

<div class="container-fluid">

    <div id="fullpage" class="row">

        <section id="construction-about" data-anchor="section-about" class="col-12 construction-about section">

            <div class="logo-wrapper d-none animated js-about-logo-wrapper">
                <img src="<?php bloginfo('template_url'); ?>/svg/logo_with_text.svg">
            </div>

            <div class="logo-wrapper d-md-none visibility-hidden animated js-about-logo-wrapper-mobile">
                <img src="<?php bloginfo('template_url'); ?>/svg/logotipas.svg">
            </div>

            <div class="menu-wrapper js-about-menu-wrapper d-none animated">
                <a href="#section-about">
                    <h4 class="pointer p-0 pb-1 active js-element">Apie</h4>
                </a>
                <a href="#section-products">
                    <h4 class="js-element p-0">Sėkmės istorijos</h4>
                </a>
                <a href="#section-contacts">
                    <h4 class="pointer js-element p-0">Kontaktai</h4>
                </a>
            </div>

            <div class="about-top-line js-about-top-line d-none visibility-hidden animated"></div>
            <div class="about-bottom-left-line js-about-bottom-left-line visibility-hidden animated"></div>

            <div class="row height-100">

                <div class="col-8 col-sm-10 col-md-6">
                    <div class="about-text-wrapper">
                        <div class="mt-1 visibility-hidden animated about-title-wrapper js-about-title-wrapper">
                            <h2 class="text-super-big text-bold text-red">Statybų ekspertai</h2>
                        </div>
                        <div class="row mt-sm-4 mt-lg-5">
                            <div class="col-1 text-left p-0 pt-2 pb-2 d-md-block">
                                <div class="about-text-beam visibility-hidden animated js-about-beam"></div>
                            </div>
                            <div class="col-11 p-0 visibility-hidden animated js-about-text-wrapper">
                                <p class="text-bigger text-red text-font-light fadeIn animated about-text m-0">Statybų ekspertų komanda kokybiškai įgyvendins Jūsų viziją nuo pamatų iki naudojimui pritaikytos erdvės. Teikiame įvairias su statybomis susiijusias paslaugas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-4 col-sm-2 col-md-6 offset-xl-1 col-xl-5">
                    <div id="about-house-animated" class="about-house-animated d-none animated"></div>
                    <div id="about-roof-animated" class="about-roof-animated visibility-hidden d-md-none"></div>
                </div>

                <div class="about-footer-wrapper js-about-footer-wrapper visibility-hidden animated">
                    <p class="p-0 m-0 text-bold d-none d-md-block">APIE</p>
                    <span class="p-0 m-0 d-md-none">
                        <p class="m-0">info@statybuekspertai.lt</p>
                        <p class="m-0">+37063811117</p>
                    </span>
                </div>
            </div>

        </section>

        <section id="construction-gallery" data-anchor="section-products" class="section construction-gallery snap mt-5 full-height">

            <div class="menu-wrapper js-gallery-menu-wrapper visibility-hidden animated">
                <a href="#section-about">
                    <h4 class="pointer pb-1 js-element p-0">Apie</h4>
                </a>
                <a href="#section-products">
                    <h4 class="js-element active p-0">Sėkmės istorijos</h4>
                </a>
                <a href="#section-contacts">
                    <h4 class="pointer js-element p-0">Kontaktai</h4>
                </a>
            </div>

            <?php if(have_posts()) : ?>
            <?php
                global $post;
                $args = ['category' => 'products'];
                $posts = get_posts($args);

                foreach($posts as $key=>$post): setup_postdata($post)
            ?>

                <div class="col-12 slide" data-loaded="false" data-anchor="sekmes-istorija-<?php echo $key ?>">

                        <div class="row height-100">

                            <div class="col-12 col-md-6 gallery-image-wrapper background-center js-gallery-image-wrapper visibility-hidden animated">
                                <div id="gallery-slideshow" class="gallery-image-slideshow-wrapper js-gallery-slideshow">
                                    <?php if( get_field('image1')): ?>
                                        <div class="gallery-image background-center" style="background-image: url(<?php the_field('image1'); ?>);"></div>
                                    <?php endif ?>
                                    <?php if( get_field('image2')): ?>
                                        <div class="gallery-image background-center" style="background-image: url(<?php the_field('image2'); ?>);"></div>
                                    <?php endif ?>
                                    <?php if( get_field('image3')): ?>
                                        <div class="gallery-image background-center" style="background-image: url(<?php the_field('image3'); ?>);"></div>
                                    <?php endif ?>
                                    <?php if( get_field('image4')): ?>
                                        <div class="gallery-image background-center" style="background-image: url(<?php the_field('image4'); ?>);"></div>
                                    <?php endif ?>
                                </div>

                                <img class="gallery-image-slash d-none d-md-block" src="<?php bloginfo('template_url'); ?>/svg/trikampis.svg">
                                <img class="gallery-image-slash-mobile d-md-none" src="<?php bloginfo('template_url'); ?>/svg/trikampis_mobile.svg">
                            </div>

                            <div class="col-12 col-md-6 gallery-right">

                                <div class="gallery-menu-top-line js-gallery-menu-top-line d-none animated"></div>

                                <div class="row">
                                    <div class="gallery-text-wrapper col-12 col-md-10">
                                        <h2 class="m-0 gallery-title text-red text-bold js-gallery-title visibility-hidden animated"><?php the_title(); ?></h2>
                                        <div class="row">
                                            <div class="col-8 col-md-10 gallery-text-inner-wrapper js-gallery-description visibility-hidden animated p-0">
                                                <p class="gallery-beam"></p>
                                                <span class="gallery-description text-red"><?php the_content() ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="next-story-wrapper pointer fp-next fp-controlArrow2">
                                    <p class="js-next-story visibility-hidden animated text-bold fp-next fp-controlArrow2 m-0">SEKANTIS</p>
                                </div>

                                <div class="next-story-line js-next-story-line visibility-hidden animated"></div>

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
                    <h4 class="pointer p-0">Apie</h4>
                </a>
                <a href="#section-products">
                    <h4 class="mr-md-3 p-0">Sėkmės istorijos</h4>
                </a>
                <a href="#section-contacts">
                    <h4 class="pointer pb-1 pb-0 active">Kontaktai</h4>
                </a>
            </div>

            <div class="contacts-top-line js-contacts-top-line d-none animated"></div>
            <div class="contacts-bottom-left-line js-contacts-bottom-left-line d-none animated"></div>

            <div class="row">

                <div class="contacts-left col-12 col-md-6 col-lg-7 col-xl-6">
                    <div class="contacts-text-wrapper">

                        <div class="contacts-title-wrapper text-center text-md-left js-contacts-title-wrapper visibility-hidden animated">
                            <h4 class="contacts-title text-bold text-red">Susisiekite su mumis!</h4>
                        </div>

                        <div class="contacts-form-wrapper js-contacts-form-wrapper visibility-hidden animated mt-md-3">
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

                <div class="contacts-right col-12 col-md-6 col-lg-5 col-xl-5 offset-xl-1">
                    <div class="contacts-icon-wrapper">
                        <div class="row">
                            <div class="col-12">
                                <div class="icon">
                                    <div class="animated js-email-icon visibility-hidden">
                                        <img src="<?php bloginfo('template_url'); ?>/svg/mail_icon.svg">
                                    </div>
                                </div>
                                <div class="text visibility-hidden animated js-phone-icon-text">
                                    <p class="pt-3 pt-md-2 pt-lg-3 pl-3 pl-lg-3">+3706 3811117</p>
                                </div>
                            </div>
                            <div class="col-12 mt-md-3">
                                <div class="icon">
                                    <div class="animated js-phone-icon visibility-hidden">
                                        <img src="<?php bloginfo('template_url'); ?>/svg/phone_icon.svg">
                                    </div>
                                </div>
                                <div class="text visibility-hidden animated js-email-icon-text">
                                    <p class="pt-3 pt-md-2 pt-lg-3 pl-3 pl-lg-3">info@statybuekspertai.lt</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="contacts-footer-wrapper js-contacts-footer-wrapper d-none animated">
                <p class="p-0 m-0 text-bold">KONTAKTAI</p>
            </div>

        </section>
    </div>
</div>

<div class="modal fade" id="modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body">
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>