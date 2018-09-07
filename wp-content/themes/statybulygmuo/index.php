<?php get_header(); ?>

<div class="container-fluid">

    <div class="row">

        <section id="construction-about" class="col-12 construction-about section">
            <div class="row">
                <div class="col-12">
                    <img alt="statybu ekspertai logotipas" src="<?php bloginfo('template_url'); ?>/img/logo.png">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 col-lg-7 about-text-wrapper">
                    <h4 class="text-big text-font-light">Statybų ekspertai – daugiau nei 15 metų sėkmingai dirbanti statybos bendrovė. Pagrindinės veiklos sritys – visuomeninės, komercinės ir gamybinės paskirties pastatų statyba ir rekonstrukcija, bei individualių namų statyba.
                    </h4>
                </div>
                <div class="about-contacts-wrapper">
                    <p class="text-medium text-font-bold mr-5">
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

            <?php if(have_posts()) : ?>

                <?php
                    global $post;
                    $args = ['category' => 'products'];
                    $posts = get_posts($args);

                    foreach($posts as $post): setup_postdata($post)
                ?>
                    <div class="col-4">
                        <div>
                            <?php if(has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid">
                            <?php endif; ?>
                        </div>
                        <div>
                            <?php the_title(); ?>
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                <?php endforeach; ?>

            <?php endif; ?>

        </section>

        <section id="construction-contacts" class="col-12 construction-contacts snap">
            <p class="scroll-top pointer" onclick="ScrollTo('#main-menu');">UP</p>
            <h2 class="mt-5">Contacts</h2>
        </section>

    </div>

</div>

<?php get_footer(); ?>