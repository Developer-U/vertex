<?php
get_header();

$villa_off = get_field('villa_off');

if (get_locale() == 'en_US') {
    ?>

    <section class="hero">
        <div class="hero__bg"></div>
        <div class="hero__video summer">       
            <?php get_template_part('template-parts/hero', 'slider'); ?>
        </div>

        <!-- Top Block -->
        <div class="hero__video vinter">            
            <?php get_template_part('template-parts/hero', 'slider'); ?>
        </div>

        <div class="container-fluid fluid1 hero__box">
            <div class="row justify-content-between">
                <div class="address__mobile"></div>

                <a href="/booking-en" class="gold-button hero__button col-auto">book a room</a>
            </div>

            <div class="hero__medium row justify-content-between">
                <div
                    class="col-xxl-5 col-xl-6 col-lg-7 col-md-8 col-sm-9 col-12 row justify-content-between hero__logo logo">
                    <a href="/" class="logo_img col-xl-7 col-6">
                        <img src="/wp-content/themes/vertex/img/logo.svg" alt="Логотип Vertex" class="logo__logo">
                    </a>

                    <div class="col-xl-5 col-6">
                        <h1 class="logo__descr">In the center of the resort infrastructure</h1>
                    </div>
                </div>
            </div>

            <div class="row hero__reserve cols-auto align-items-end justify-content-between">
                <div class="hero__icons col-xxl-2 col-xl-3 col-lg-3 col-md-3 col-sm-8 col-10">
                    <ul class="social hero__social row justify-content-between">
                        <!-- <li class="social__item col-auto">
                        <a href="#" class="social__link insta"></a>
                    </li> -->

                        <li class="social__item col-auto">
                            <a href="<?php the_field('whatsapp', 'options'); ?>" class="social__link whatsapp"
                                target="_blank"></a>
                        </li>

                        <!-- <li class="social__item col-auto">
                        <a href="#" class="social__link viber"></a>
                    </li> -->

                        <li class="social__item col-auto">
                            <a href="<?php the_field('telegram', 'options'); ?>" class="social__link telegram"
                                target="_blank"></a>
                        </li>
                    </ul>
                </div>

                <div class="col-xxl-8 col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12 hero__reserved">
                    <div id='block-search'>
                        <div id='tl-search-form' class='tl-container'>
                            <noindex><a href='http://www.travelline.ru/products/tl-hotel' rel='nofollow'>online booking
                                    system</a></noindex>
                        </div>
                    </div>
                    <script type='text/javascript'>
                        (function (w) {
                            var q = [
                                ['setContext', 'TL-INT-vertexhotel', 'en'],
                                ['embed', 'search-form', {
                                    container: 'tl-search-form'
                                }]
                            ];
                            var t = w.travelline = (w.travelline || {}),
                                ti = t.integration = (t.integration || {});
                            ti.__cq = ti.__cq ? ti.__cq.concat(q) : q;
                            if (!ti.__loader) {
                                ti.__loader = true;
                                var d = w.document,
                                    p = d.location.protocol,
                                    s = d.createElement('script');
                                s.type = 'text/javascript';
                                s.async = true;
                                s.src = (p == 'https:' ? p : 'http:') + '//ibe.tlintegration.com/integration/loader.js';
                                (d.getElementsByTagName('head')[0] || d.getElementsByTagName('body')[0]).appendChild(s);
                            }
                        })(window);
                    </script>
                </div>

                <div class="col-xxl-2 col-xl-0 col-lg-0 col-md-0 col-sm-0 col-0"></div>
            </div>
        </div>
    </section>

    <section id="about_en" class="section about">
        <div class="container-fluid fluid2">
            <div class="about__box row justify-content-between">
                <div class="col-lg-5 col-12 section__left section__left_about"></div>

                <div class="col-lg-7 col-12 section__right">                   
                    <figure class="about__image">
                        <img src="<?php echo get_field('about_image_en')['url']; ?>" alt="<?php echo get_field('about_image_en')['alt']; ?>">               
                    </figure>
                </div>
            </div>
        </div>

        <div class="container section-block about__block">
            <div class="row cols-auto">
                <div class="section-block__text col-lg-5 col-12">
                    <h2 class="section-block__heading">
                        <?php the_field('about_heading_en'); ?>
                    </h2>

                    <div class="section-block__descr">
                        <?php the_field('about_text_en'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('/template-parts/gallery'); ?>

    <section class="section more">
        <div class="container-fluid">
            <div class="section__box row justify-content-between">
                <div class="col-lg-5 col-12 section__left section__left_more">
                    <div class="section-more__text col-xxl-8 col-lg-10 col-12">
                        <h2 class="services__heading">
                            <?php the_field('more_heading_en'); ?>
                        </h2>

                        <ul class="col-xl-9 col-lg-11 vertex-list more__list">
                            <?php if (have_rows('add_more_list_item_en')): ?>
                                <?php while (have_rows('add_more_list_item_en')):
                                    the_row();
                                    $moreItem = get_sub_field('more_list_item_en');
                                    ?>

                                    <li class="vertex-list__item">
                                        <span class="vertex-list__one">
                                            <?= $moreItem; ?>
                                    </li>

                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-7 col-12 section__right section__right_more">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!4v1648043065277!6m8!1m7!1sCAoSLEFGMVFpcE1kLUt2YUpZTUtpd1lfUkpwa2RTbGY5VUE3ejBWRG12WGZrYWhK!2m2!1d43.68420771!2d40.25717352!3f314.37910206371083!4f28.2435577699721!5f0.4000000000000002"
                        style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                    <h3 class="more__subheading">
                        3D shooting of our hotel
                    </h3>

                    <div
                        class="col-xxl-9 col-sm-11 col-12 social-box row more__box justify-content-between align-items-center">
                        <div class="col-sm-5 col-12 social-box__left">
                            <h3 class="social-box__heading">
                                We are always in touch
                            </h3>
                        </div>

                        <div class="col-sm-7 col-12 social-box__block row justify-content-center">
                            <ul class="col-lg-11 col-12 socials social-box__list row justify-content-between cols-4">
                                <li class="socials__item col-auto">
                                    <a href="<?php the_field('whatsapp', 'options'); ?>" class="socials__link whatsapp"
                                        target="_blank"></a>

                                    <div class="socials__tooltip">
                                        Click to get into the chat
                                    </div>
                                </li>

                                <li class="socials__item col-auto">
                                    <a href="tel:<?php the_field('номер_телефона', 'options'); ?>"
                                        class="socials__link phone"></a>

                                    <div class="socials__tooltip socials__tooltip_down">
                                        Click to call
                                    </div>
                                </li>

                                <li class="socials__item col-auto">
                                    <a href="<?php the_field('telegram', 'options'); ?>" class="socials__link telegram"
                                        target="_blank"></a>

                                    <div class="socials__tooltip">
                                        Click to get into the chat
                                    </div>
                                </li>

                                <!-- <li class="socials__item col-auto">
                                <a href="#" class="socials__link insta"></a>

                                <div class="socials__tooltip socials__tooltip_down">
                                    Кликните, чтобы попасть&nbsp;в&nbsp;чат
                                </div>
                            </li>  -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 social-box-mobile row more__box justify-content-between align-items-center">
                <div class="col-sm-5 col-12 social-box__left">
                    <h3 class="social-box__heading">
                        We are always in touch
                    </h3>
                </div>

                <div class="col-sm-7 col-12 social-box__block row justify-content-center">
                    <ul class="col-lg-11 col-12 socials social-box__list row justify-content-between cols-4">
                        <li class="socials__item col-auto">
                            <a href="<?php the_field('whatsapp', 'options'); ?>" class="socials__link whatsapp"
                                target="_blank"></a>

                            <div class="socials__tooltip">
                                Click to get into the chat
                            </div>
                        </li>

                        <li class="socials__item col-auto">
                            <a href="tel:<?php the_field('номер_телефона', 'options'); ?>" class="socials__link phone"></a>

                            <div class="socials__tooltip socials__tooltip_down">
                                Click to call
                            </div>
                        </li>

                        <li class="socials__item col-auto">
                            <a href="<?php the_field('telegram', 'options'); ?>" class="socials__link telegram"
                                target="_blank"></a>

                            <div class="socials__tooltip">
                                Click to get into the chat
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <h2 class="services__heading">
                <?php the_field('services_heading_en'); ?>
            </h2>

            <ul class="row services-box services__list cols-lg-3 cols-md-2 cols-1">
                <li class="services-box__item col-auto">
                    <figure class="services-box__image image1">
                        <?php if (get_field('services_image1')): ?>
                            <img class="services-box__img" src="<?php the_field('services_image1'); ?>" />
                        <?php endif; ?>
                    </figure>

                    <a href="#appart" class="services-box__text js-slideTo">
                        <?php the_field('services_heading1_en'); ?>
                    </a>
                </li>


                <li class="services-box__item col-auto">
                    <figure class="services-box__image image2">
                        <?php if (get_field('services_image2')): ?>
                            <img class="services-box__img" src="<?php the_field('services_image2'); ?>" />
                        <?php endif; ?>
                    </figure>

                    <a href="#spa" class="services-box__text js-slideTo">
                        <?php the_field('services_heading2_en'); ?>
                    </a>
                </li>

                <li class="services-box__item item3 col-auto">
                    <figure class="services-box__image image3">
                        <?php if (get_field('services_image3')): ?>
                            <img class="services-box__img" src="<?php the_field('services_image3'); ?>" />
                        <?php endif; ?>
                    </figure>

                    <a href="#pool" class="services-box__text js-slideTo">
                        <?php the_field('services_heading3_en'); ?>
                    </a>
                </li>

                <li class="services-box__item item4 col-auto">
                    <figure class="services-box__image image4">
                        <?php if (get_field('services_image4')): ?>
                            <img class="services-box__img" src="<?php the_field('services_image4'); ?>" />
                        <?php endif; ?>
                    </figure>

                    <a href="#restraunt" class="services-box__text js-slideTo">
                        <?php the_field('services_heading4_en'); ?>
                    </a>
                </li>

                <li class="services-box__item item5 col-auto">
                    <figure class="services-box__image image5">
                        <?php if (get_field('services_image5')): ?>
                            <img class="services-box__img" src="<?php the_field('services_image5'); ?>" />
                        <?php endif; ?>
                    </figure>

                    <a href="#transfer" class="services-box__text js-slideTo">
                        <?php the_field('services_heading5_en'); ?>
                    </a>
                </li>

                <li class="services-box__item item6 col-auto">
                    <figure class="services-box__image image6">
                        <?php if (get_field('services_image6')): ?>
                            <img class="services-box__img" src="<?php the_field('services_image6'); ?>" />
                        <?php endif; ?>
                    </figure>

                    <a href="#ski" class="services-box__text js-slideTo">
                        <?php the_field('services_heading6_en'); ?>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <section id="appart" class="appart">
        <?php
        $mypost_Query2 = new WP_Query(
            array(
                'post_type' => 'number',                  # post, page, custom_post_type
                'post_status' => 'publish',                       # статус записи
                'posts_per_page' => 6,	                            # кол-во постов вывода/загрузки
    
            )
        );
        global $post;

        $id = get_the_ID();

        if ($mypost_Query2->have_posts()) {
            while ($mypost_Query2->have_posts()) {
                $mypost_Query2->the_post();
                ?>
                <article id="article1" class="article-one appart__article appart__article_first col-xxl-7 col-xl-8 col-12 row"
                    data-target="one<?php echo $id; ?>">
                    <div class="article__container col-xxl-9 col-xl-10 col-12">
                        <button data-path="one<?php echo $id; ?>" class="article-one__close"></button>

                        <!-- контейнер слайдера -->
                        <div id="swiper-app1" class="swiper swiper-appart">
                            <!-- враппер -->
                            <div class="swiper-wrapper">
                                <!-- слайды -->
                                <?php if (have_rows('room_galery_en', $id)): ?>
                                    <?php while (have_rows('room_galery_en', $id)):
                                        the_row();
                                        $imagesEn = get_sub_field('photo_gal_en', $id);

                                        ?>
                                        <div class="swiper-slide swiper-appart__slide">
                                            <figure class="swiper-appart__image">
                                                <img src="<?= $imagesEn; ?>" alt="Делюкс1" class="swiper-apart__img">
                                            </figure>
                                        </div>
                                    <?php endwhile;
                                endif;
                                ?>
                            </div>

                            <!-- кнопки для навигации -->
                            <div class="swiper-button-prev2"></div>
                            <div class="swiper-button-next2"></div>
                        </div>

                        <h2 class="article-one__heading">
                            <?php the_title(); ?>
                        </h2>
                        <?php
                        global $post;

                        $id = get_the_ID();

                        ?>
                        <p class="article-one__subheading">
                            Room size <?php the_field('number_size_en'); ?> sq. m .
                        </p>

                        <div class="row article-list article-one__list" data-simplebar>
                            <div class="article-list__list col-sm-6 col-12">
                                <?php the_field('content_room_en'); ?>
                            </div>
                        </div>

                        <div class="row article-one__descr align-items-center col-md-10 col-12 justify-content-between">
                            <p class="col-auto appart-box__men"><?php the_field('quality_en'); ?> human</p>
                            <p class="col-auto article-one__price">от <?php the_field('price_numb_en'); ?> р</p>
                            <p class="col-auto appart-box__old"><s><?php the_field('old_price_en'); ?> р</s></p>
                        </div>

                        <div class="row article-one__btn">
                            <a class="gold-button col-sm-4 col-8" href="/booking/en">to book</a>
                        </div>
                    </div>
                </article>
            <?php }
        } ?>

        <div class="container">
            <h2 class="appart__heading">
                Comfortable rooms
            </h2>

            <ul class="row appart-box appart__list cols-lg-3 cols-md-2 cols-1">
                <?php
                $mypost_Query = new WP_Query(
                    array(
                        'post_type' => 'number',                  # post, page, custom_post_type
                        'post_status' => 'publish',                       # статус записи
                        'posts_per_page' => 9,	                            # кол-во постов вывода/загрузки
            
                    )
                );

                if ($mypost_Query->have_posts()) {
                    while ($mypost_Query->have_posts()) {
                        $mypost_Query->the_post();
                        ?>
                        <li class="appart-box__item col-auto">
                            <figure class="appart-box__image">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="Двухместный номер Делюкс"
                                    class="appart-box__img">

                                <span class="appart__text">
                                    <p class="appart-box__subheading">
                                        <?php the_title(); ?>
                                    </p>
                                </span>
                            </figure>

                            <div class="row appart-box__descr align-items-center">
                                <p class="col-3 appart-box__men"><?= the_field('quality_en'); ?> men</p>
                                <p class="col-5 appart-box__price"><?= the_field('price_numb_en'); ?> rub</p>
                                <p class="col-4 appart-box__old"><s><?= the_field('old_price_en'); ?> rub</s></p>
                            </div>

                            <div class="row appart-box__buttons">
                                <a class="gold-button appart-box__button col-6" href="/booking/en">to book</a>
                                <?php
                                global $post;
                                $id = get_the_ID();
                                ?>
                                <button data-path="one<?php echo $id; ?>" class="appart-box__more col-5">more</button>
                            </div>
                        </li>
                        <?php
                    }
                } else {
                    echo ('<p>Sorry, no posts</p>');
                }
                wp_reset_postdata();
                ?>


            </ul>
        </div>
    </section>

    <?php
    if ($villa_off): ?>
        <section id="villa_en" class="villa">
            <div class="container">
                <div class="row villa__contain">
                    <div class="villa__left col-lg-6 col-12">
                        <h2 class="villa__heading">
                            <?php the_field('villa_head_en'); ?>
                        </h2>

                        <h3 class="villa__subheading">
                            <?php the_field('villa_subhead_en'); ?>
                        </h3>

                        <div class="villa__text">
                            <?php the_field('villa_text_en'); ?>
                        </div>

                        <a class="gold-button villa__button col-7" href="/booking-en">to book</a>
                    </div>

                    <!-- контейнер слайдера -->
                    <div class="col-lg-6 col-12 villa__right">
                        <div class="swiper swiper-villa villa__slider">
                            <!-- враппер -->
                            <div class="swiper-wrapper">

                                <?php if (have_rows('добавить_картинку_в_слайдере_вилла')): ?>
                                    <?php while (have_rows('добавить_картинку_в_слайдере_вилла')):
                                        the_row();
                                        $image = get_sub_field('картинка_слайдер');
                                        ?>

                                        <div class="swiper-slide swiper-villa__slide">
                                            <figure class="swiper-slide__image">
                                                <img src="<?= $image; ?>" class="swiper-apart__img" />
                                            </figure>
                                        </div>

                                        <?php
                                    endwhile;
                                endif; ?>
                            </div>

                            <!-- кнопки для навигации -->
                            <div class="swiper-button-prev2"></div>
                            <div class="swiper-button-next2"></div>

                            <div
                                class="col-12 row justify-content-between align-items-stretch cols-3 villa-cards swiper-villa__box">
                                <div class="col-auto align-self-end villa-cards-card1">
                                    <figure class="villa-cards__image">

                                        <?php if (get_field('картинка1_в_галлерее_вилла')): ?>
                                            <img src="<?php the_field('картинка1_в_галлерее_вилла'); ?>"
                                                class="swiper-apart__img" />
                                        <?php endif; ?>

                                        <!-- <img src="/wp-content/themes/vertex/img/villa1.jpg" class="swiper-apart__img"> -->
                                    </figure>
                                </div>

                                <div class="col-auto villa-cards-card2">
                                    <figure class="villa-cards__image">

                                        <?php if (get_field('картинка2_в_галлерее_вилла')): ?>
                                            <img src="<?php the_field('картинка2_в_галлерее_вилла'); ?>"
                                                class="swiper-apart__img" />
                                        <?php endif; ?>
                                        <!-- <img src="/wp-content/themes/vertex/img/villa3.jpg" class="swiper-apart__img"> -->
                                    </figure>
                                </div>

                                <div class="col-auto villa-cards-card3">
                                    <figure class="villa-cards__image">

                                        <?php if (get_field('картинка3_в_галлерее_вилла')): ?>
                                            <img src="<?php the_field('картинка3_в_галлерее_вилла'); ?>"
                                                class="swiper-apart__img" />
                                        <?php endif; ?>
                                        <!-- <img src="/wp-content/themes/vertex/img/villa2.jpg" class="swiper-apart__img"> -->
                                    </figure>
                                </div>
                            </div>
                        </div>

                        <a class="gold-button villa__button villa__button_mobile col-6" href="/booking/">to book</a>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <section id="spa_en" class="spa">
        <div class="container">
            <div class="row spa-box spa__box">
                <div class="spa-box__left col-lg-6 col-12">
                    <div class="spa-box__head col-12">
                        <h2 class="spa-box__heading">
                            <?php the_field('spa_head_en'); ?>
                        </h2>
                    </div>

                    <div class="spa-box__block">
                        <div class="swiper spa-box__swiper">
                            <!-- враппер -->
                            <div class="swiper-wrapper">

                                <?php if (have_rows('slide_spa')): ?>
                                    <?php while (have_rows('slide_spa')):
                                        the_row();
                                        $image = get_sub_field('spa_slide_new');
                                        ?>

                                        <!-- слайды -->
                                        <div class="swiper-slide spa-box__slide">
                                            <figure class="spa-box__image">
                                                <img src="<?= $image; ?>" class="swiper-apart__img">
                                            </figure>
                                        </div>

                                        <?php
                                    endwhile;
                                endif;
                                ?>

                            </div>

                            <!-- кнопки для навигации -->
                            <div class="swiper-button-prev2"></div>
                            <div class="swiper-button-next2"></div>
                        </div>

                        <?php
                        $spa_small_img_1_en = get_field('spa_small_img_1_en');
                        $spa_small_img_2_en = get_field('spa_small_img_2_en');
                        if($spa_small_img_1_en && $spa_small_img_2_en) { ?>

                            <div class="spa-box__images row col-10 justify-content-between">
                                <figure class="villa-cards__image villa-cards__image_spa col-auto">
                                    <img src="<?php echo $spa_small_img_1_en['url']; ?>" alt="<?php echo $spa_small_img_1_en['alt']; ?>" class="swiper-apart__img">
                                </figure>

                                <figure class="villa-cards__image villa-cards__image_spa col-auto">
                                    <img src="<?php echo $spa_small_img_2_en['url']; ?>" alt="<?php echo $spa_small_img_2_en['alt']; ?>" class="swiper-apart__img">
                                </figure>
                            </div>

                        <? } ?>
                    </div>

                    <button class="gold-button log-5 spa-box__button js-reserveOpen">
                        take advantage of the offer
                    </button>
                </div>

                <div class="spa-box__right col-lg-6 col-12">
                    <div class="spa-box__descr col-xl-10 col-12 justify-self-end">
                        <div class="spa-box__text">
                            <?php the_field('spa_text_en'); ?>
                        </div>

                        <h3 class="spa-box__subheading"><?php the_field('spa_about_text_en'); ?></h3>

                        <ul class="col-11 vertex-list spa-box__list">
                            <?php if (have_rows('add_spa_about_item_en')): ?>
                                <?php while (have_rows('add_spa_about_item_en')):
                                    the_row();
                                    $spaAboutItem = get_sub_field('spa_about_item_en');
                                    ?>
                                    <li class="vertex-list__item">
                                        <span class="vertex-list__one vertex-list__one_black">
                                            <?= $spaAboutItem; ?>
                                        </span>
                                    </li>

                                    <?php
                                endwhile;
                            endif;
                            ?>
                        </ul>
                    </div>

                    <ul class="spa-advantages spa-box__items row justify-content-between">
                        <li class="spa-advantages__item col-sm-3 col-6">
                            <span class="spa-advantages__img item1"></span>
                            <p class="spa-advantages__descr">
                                High-speed wi-fi
                            </p>
                        </li>

                        <li class="spa-advantages__item col-sm-3 col-6">
                            <span class="spa-advantages__img item2"></span>
                            <p class="spa-advantages__descr">
                                Convenient parking
                            </p>
                        </li>

                        <li class="spa-advantages__item col-sm-3 col-6">
                            <span class="spa-advantages__img item3"></span>
                            <p class="spa-advantages__descr">
                                Individual lockers
                            </p>
                        </li>

                        <li class="spa-advantages__item col-sm-3 col-6">
                            <span class="spa-advantages__img item4"></span>
                            <p class="spa-advantages__descr">
                                Comfortable shower cabins
                            </p>
                        </li>
                    </ul>
                </div>

                <div class="for-button spa-box__buttons">
                    <button class="gold-button log-5 for-button__button js-reserveOpen">
                        take advantage of the offer
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section id="vip-spa_en" class="vip-spa">
        <div class="container">
            <div class="row vip-spa__contain">
                <div class="vip-spa__left col-lg-6 col-12">
                    <div class="vip-spa__head col-12">
                        <h2 class="vip-spa__heading">
                            <?php the_field('vip_spa_head_en'); ?>
                        </h2>
                    </div>

                    <h3 class="vip-spa__subheading">
                        <?php the_field('vip_spa_subhead_en'); ?>
                    </h3>

                    <h3 class="vip-spa__subheading">
                        <?php the_field('vip_spa_subhead2_en'); ?>
                    </h3>

                    <div class="villa__text villa__text_white">
                        <?php the_field('vip_spa_text_en'); ?>
                    </div>

                    <div class="row col-11 vip-spa__buttons align-items-end justify-content-between">
                        <button class="vip-spa__price js-spaOpen">view<br>our<br>price</button>

                        <button class="gold-button vip-spa__button col-xl-9 col-8 js-vipSpaOpen">
                            take advantage of the offer
                        </button>
                    </div>
                </div>

                <!-- контейнер слайдера -->
                <div class="col-lg-6 col-12 vip-spa__right">
                    <div class="swiper swiper-vip vip__slider">
                        <!-- враппер -->
                        <div class="swiper-wrapper">

                            <?php if (have_rows('slide_vip_spa')): ?>
                                <?php while (have_rows('slide_vip_spa')):
                                    the_row();
                                    $image = get_sub_field('vip_spa_image');
                                    ?>

                                    <!-- слайды -->
                                    <div class="swiper-slide swiper-vip__slide">
                                        <figure class="swiper-slide__image">
                                            <img src="<?= $image; ?>" class="swiper-apart__img">
                                        </figure>
                                    </div>

                                    <?php
                                endwhile;
                            endif;
                            ?>
                        </div>

                        <!-- кнопки для навигации -->
                        <div class="swiper-button-prev2"></div>
                        <div class="swiper-button-next2"></div>
                    </div>

                    <div class="col-12 vip-block">
                        <?php 
                        $vip_spa_img1 = get_field('vip_spa_img1');
                        $vip_spa_img2 = get_field('vip_spa_img2');
                        $vip_spa_img3 = get_field('vip_spa_img3');
                        ?>
                        <div class="d-grid justify-content-between gap-2 vip-cards swiper-vip__box">
                            <?php if($vip_spa_img1) { ?>                               
                                <figure class="villa-cards__image">
                                    <img src="<?php echo $vip_spa_img1; ?>" class="swiper-apart__img"
                                        alt="Вип-сауна Vertex">
                                </figure>                               
                            <?php } 

                            if($vip_spa_img2) { ?>                         
                                <figure class="villa-cards__image">
                                    <img src="<?php echo $vip_spa_img2; ?>" class="swiper-apart__img"
                                        alt="Вип-сауна Vertex">
                                </figure>                             
                            <?php }

                            if($vip_spa_img3) { ?>                         
                                <figure class="villa-cards__image">
                                    <img src="<?php echo $vip_spa_img3; ?>" class="swiper-apart__img"
                                        alt="Вип-сауна Vertex">
                                </figure>                              
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div
                    class="row col-sm-11 col-12 vip-spa__buttons vip-spa__buttons_mobile align-items-end justify-content-between">
                    <button class="vip-spa__price js-spaOpen">view our price list</button>

                    <button class="gold-button vip-spa__button col-xl-9 col-sm-8 col-12 js-vipSpaOpen">
                        take advantage of the offer
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section id="pool_en" class="pool">
        <div class="container">
            <div class="pool__cont row align-items-start justify-content-between">
                <div class="row pool-box pool__box col-xl-6 col-lg-7 col-12">
                    <h2 class="pool__heading">
                        <?php the_field('pool_head_en'); ?>
                    </h2>

                    <p class="villa__text villa__text_regular">
                        <?php the_field('pool_subhead_en'); ?>
                    </p>

                    <div class="villa__text villa__text_regular">
                        <?php the_field('pool_text_en'); ?>
                    </div>

                    <ul class="spa-advantages pool-box__items row justify-content-between">
                        <li class="spa-advantages__item col-sm-3 col-6">
                            <span class="spa-advantages__img pool1"></span>
                            <p class="spa-advantages__descr">
                                <?php the_field('pool_item1_en'); ?>
                            </p>
                        </li>

                        <li class="spa-advantages__item col-sm-3 col-6">
                            <span class="spa-advantages__img pool2"></span>
                            <p class="spa-advantages__descr">
                                <?php the_field('pool_item2_en'); ?>
                            </p>
                        </li>

                        <li class="spa-advantages__item col-sm-3 col-6">
                            <span class="spa-advantages__img pool3"></span>
                            <p class="spa-advantages__descr">
                                <?php the_field('pool_item3_en'); ?>
                            </p>
                        </li>

                        <li class="spa-advantages__item col-sm-3 col-6">
                            <span class="spa-advantages__img pool4"></span>
                            <p class="spa-advantages__descr">
                                <?php the_field('pool_item4_en'); ?>
                            </p>
                        </li>
                    </ul>

                    <div class="row pool-box__button">
                        <a class="gold-button villa__button col-6" href="/booking-en">to book</a>
                    </div>
                </div>

                <?php if (get_field('attention_text_en', 'options')): ?>
                    <div class="attention col-xl-6 col-lg-5 col-12">
                        <div class="attention__heading">
                            <?php the_field('attention_text_en', 'options'); ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <div class="col-12 pool-mobile row">
                <a class="gold-button pool-mobile__button col-sm-7 col-12" href="/booking-en">book a room</a>
            </div>
        </div>
    </section>

    <section id="restraunt_en" class="restraunts">
        <div class="container">
            <h2 class="restraunts__heading">
                <?php the_field('rest_head_en'); ?>
            </h2>

            <ul class="row jusify-content-between restraunts-box restraunts__box">
                <li class="col-lg-4 col-12">
                    <div class="restraunts-box__item">
                        <div class="restraunts-box__img img1">
                            <h3 class="restraunts-box__heading">
                                <?php the_field('heading_rest1_en'); ?>
                            </h3>
                        </div>

                        <div class="restraunts-box__descr">
                            <div class="restraunts-box__top">
                                <p class="restraunts__text">
                                    <?php the_field('descr_rest1_en'); ?>
                                </p>

                                <p class="restraunts__time"><?php the_field('rest_time_one_en'); ?></p>
                            </div>

                            <a href="<?php the_field('rest_link_one'); ?>"
                                class="gold-button restraunts__button">more</a>
                        </div>
                    </div>
                </li>

                <li class="col-lg-4 col-12">
                    <div class="restraunts-box__item">
                        <div class="restraunts-box__img img2">
                            <h3 class="restraunts-box__heading">
                                <?php the_field('heading_rest2_en'); ?>
                            </h3>
                        </div>

                        <div class="restraunts-box__descr">
                            <div class="restraunts-box__top">
                                <p class="restraunts__text">
                                    <?php the_field('descr_rest2_en'); ?>
                                </p>

                                <p class="restraunts__time"><?php the_field('rest_time_two_en'); ?></p>
                            </div>

                            <a href="<?php the_field('rest_link_two'); ?>"
                                class="gold-button restraunts__button">more</a>
                        </div>
                    </div>
                </li>

                <li class="col-lg-4 col-12">
                    <div class="restraunts-box__item">
                        <div class="restraunts-box__img img3">
                            <h3 class="restraunts-box__heading">
                                <?php the_field('heading_rest3_en'); ?>
                            </h3>
                        </div>

                        <div class="restraunts-box__descr">
                            <div class="restraunts-box__top">
                                <p class="restraunts__text">
                                    <?php the_field('descr_rest3_en'); ?>
                                </p>

                                <p class="restraunts__time"><?php the_field('rest_time_three_en'); ?></p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <?php
    $transfer_head_en = get_field('transfer_head_en');
    if ($transfer_head_en) {
        ?>

        <section id="transfer_en" class="spa transfer">
            <div class="container">
                <div class="row spa-box spa__box">
                    <div class="spa-box__left col-lg-6 col-12">
                        <div class="spa-box__head col-12">
                            <h2 class="spa-box__heading spa-box__heading_transfer">
                                <?php echo $transfer_head_en; ?>
                            </h2>
                        </div>

                        <div class="spa-box__block spa-box__block_transfer">
                            <div class="swiper spa-box__swiper transfer__swiper">
                                <!-- враппер -->
                                <div class="swiper-wrapper">

                                    <?php if (have_rows('slide_transfer')): ?>
                                        <?php while (have_rows('slide_transfer')):
                                            the_row();
                                            $image = get_sub_field('new_slide_transfer');
                                            ?>

                                            <!-- слайды -->
                                            <div class="swiper-slide spa-box__slide">
                                                <figure class="spa-box__image">
                                                    <img src="<?= $image ?>" class="swiper-apart__img">
                                                </figure>
                                            </div>

                                            <?php
                                        endwhile;
                                    endif;
                                    ?>

                                </div>

                                <!-- кнопки для навигации -->
                                <div class="swiper-button-prev2"></div>
                                <div class="swiper-button-next2"></div>
                            </div>
                        </div>

                        <button class="gold-button col-xl-5 col-7 spa-box__button js-transferOpen">
                            learn more
                        </button>
                    </div>

                    <div class="spa-box__right spa-box__right_transfer col-lg-6 col-12">
                        <div class="spa-box__descr col-xl-10 col-12 justify-self-end">
                            <div class="spa-box__text">
                                <?php the_field('transfer_text_en'); ?>
                            </div>

                            <div class="col-12 transfer__image">
                                <img src="<?php the_field('transfer_img'); ?>" alt="Трансфер от Vertex" class="transfer__img">
                            </div>

                            <h3 class="spa-box__subheading"><?php the_field('transfer_about_text_en'); ?></h3>

                            <ul class="col-11 vertex-list spa-box__list">
                                <?php if (have_rows('add_transfer_item_en')): ?>
                                    <?php while (have_rows('add_transfer_item_en')):
                                        the_row();
                                        $transferItem = get_sub_field('transfer_item_en');
                                        ?>
                                        <li class="vertex-list__item">
                                            <span class="vertex-list__one vertex-list__one_black">
                                                <?= $transferItem; ?>
                                            </span>
                                        </li>

                                        <?php
                                    endwhile;
                                endif;
                                ?>
                            </ul>
                        </div>
                    </div>

                    <div class="for-button spa-box__buttons">
                        <button class="gold-button col-sm-5 col-12 for-button__button">
                            learn more
                        </button>
                    </div>
                </div>
            </div>
        </section>

    <?php } ?>

    <!-- Block Services -->
    <?php get_template_part('template-parts/service', 'block');

    if (have_rows('add_action_en')) { ?>
        <section class="actions">
            <div class="container actions__tops top-actions">
                <?php if (have_rows('add_action_en')): ?>
                    <h2 class="top-actions__heading">
                        Super offers
                    </h2>

                    <div class="swiper swiper-actions top-actions__slider">
                        <!-- враппер -->
                        <div class="swiper-wrapper">
                            <?php if (have_rows('add_action_en')): ?>
                                <?php while (have_rows('add_action_en')):
                                    the_row();
                                    $titleEn = get_sub_field('heading_action_en');
                                    $descrpEn = get_sub_field('text_action_en');
                                    $sale_rulesEn = get_sub_field('action_level_en');


                                    ?>
                                    <!-- слайды -->
                                    <div class="swiper-slide action__slide action__slide_actions col-auto">
                                        <h3 class="action__heading"><?= $titleEn; ?></h3>

                                        <p class="action__descr">
                                            <?= $descrpEn; ?>
                                        </p>

                                        <p class="action__text">
                                            <?= $sale_rulesEn; ?>
                                        </p>

                                        <button class="action__button gold-button">get a discount!</button>
                                    </div>
                                    <?php
                                endwhile;
                            endif;
                            ?>
                        </div>

                        <!-- кнопки для навигации -->
                        <!-- <div class="swiper-button-prev swiper-button-prev3"></div>
                    <div class="swiper-button-next swiper-button-next3"></div> -->
                    </div>
                <?php endif; ?>

                <!-- Block Rating -->
                <?php get_template_part('template-parts/rating', 'block'); ?>
            </div>
        </section>
    <?php }

    if (get_field('reviews_heading_en')) { ?>
        <section id="reviews_en" class="reviews">
            <div class="container">
                <h2 class="reviews__heading">
                    <?php the_field('reviews_heading_en'); ?>
                </h2>

                <div class="swiper swiper-reviews reviews__slider">
                    <!-- враппер -->
                    <div class="swiper-wrapper">

                        <?php if (have_rows('add_reviews_en')): ?>
                            <?php while (have_rows('add_reviews_en')):
                                the_row();
                                $imageEn = get_sub_field('photo_reviews_en');
                                $nameEn = get_sub_field('reviews_name_en');
                                $subtitleEn = get_sub_field('reviews_post_en');
                                $contentEn = get_sub_field('reviews_text_en');
                                $ppEn = get_sub_field('number_reviews_en');

                                ?>
                                <!-- слайды -->
                                <div class="swiper-slide reviews-slide swiper-reviews__slide col-auto">
                                    <figure class="reviews-slide__image">
                                        <img src="<?= $imageEn; ?>" alt="Фото отзыва" class="reviews-slide__img">
                                    </figure>

                                    <h3 class="reviews-slide__heading">
                                        <?= $nameEn; ?>
                                    </h3>

                                    <p class="reviews-slide__descr">
                                        <?= $subtitleEn; ?>
                                    </p>

                                    <div class="more-text">
                                        <p class="reviews-slide__text" data-text="one<?= $ppEn; ?>">
                                            <?= $contentEn; ?>
                                        </p>
                                    </div>

                                    <button class="reviews__more" data-path="one<?= $ppEn; ?>">Read completely</button>

                                    <button class="reviews__close" data-close="one<?= $ppEn; ?>">less</button>
                                </div>

                                <?php
                            endwhile;
                        endif; ?>
                    </div>

                    <!-- кнопки для навигации -->
                    <div class="swiper-button-prev swiper-button-prev3"></div>
                    <div class="swiper-button-next swiper-button-next3"></div>
                </div>
            </div>
        </section>
    <?php } ?>

    <section id="contacts_en" class="contact">
        <div class="container-fluid">
            <row class="contact__box row align-items-stretch justify-content-between">
                <div class="contact__map col-lg-5 col-12">
                    <div id="map" class="contact__one"></div>
                </div>

                <div class="contact__image col-lg-7 col-12">
                    <div class="contact__block col-sm-9 col-11">
                        <h2 class="contact__heading">
                            Book your dream room today!
                        </h2>

                        <a class="gold-button col-xl-6 col-sm-7 col-12" href="/booking-en">book a room</a>
                    </div>
                </div>
            </row>
        </div>
    </section>

    <?php
} elseif (get_locale() == 'ru_RU') {    
    ?>

    <section class="hero">
        <div class="hero__bg"></div>
        <div class="hero__video summer">       
            <?php get_template_part('template-parts/hero', 'slider'); ?>
        </div>

        <!-- Top Block -->
        <div class="hero__video vinter">            
            <?php get_template_part('template-parts/hero', 'slider'); ?>
        </div>

        <div class="container-fluid fluid1 hero__box">
            <div class="row justify-content-between">
                <div class="address__mobile"></div>

                <a href="/booking/" class="gold-button hero__button col-auto">забронировать номер</a>
            </div>

            <div class="hero__medium row justify-content-between">
                <div
                    class="col-xxl-5 col-xl-6 col-lg-7 col-md-8 col-sm-9 col-12 row justify-content-between hero__logo logo">
                    <a href="/" class="logo_img col-xl-7 col-6">
                        <img src="/wp-content/themes/vertex/img/logo.svg" alt="Логотип Vertex" class="logo__logo">
                    </a>

                    <div class="col-xl-5 col-6">
                        <h1 class="logo__descr">В&nbsp;центре курортной инфраструктуры</h1>
                    </div>
                </div>

                <!-- <article class="action col-xxl-4 col-xl-5 col-lg-5">
                <h2 class="visually-hidden">Спецпредложения</h2>
                <div class="swiper swiper-hero">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide action__slide">
                            <h3 class="action__heading">Autumn sale!</h3>

                            <p class="action__descr">
                                Забронируй номер на нашем сайте, и получи дополнительную скидку 10%! *
                            </p>

                            <p class="action__text">
                                Условия акции действуют с 08.11.2021 по 11.12.2021
                            </p>

                            <button class="action__button gold-button">получить скидку!</button>
                        </div>

                        <div class="swiper-slide action__slide">
                            <h3 class="action__heading">Autumn sale!</h3>

                            <p class="action__descr">
                                Забронируй номер на нашем сайте, и получи дополнительную скидку 10%! *
                            </p>

                            <p class="action__text">
                                Условия акции действуют с 08.11.2021 по 11.12.2021
                            </p>

                            <button class="action__button gold-button">получить скидку!</button>
                        </div>

                        <div class="swiper-slide action__slide">
                            <h3 class="action__heading">Autumn sale!</h3>

                            <p class="action__descr">
                                Забронируй номер на нашем сайте, и получи дополнительную скидку 10%! *
                            </p>

                            <p class="action__text">
                                Условия акции действуют с 08.11.2021 по 11.12.2021
                            </p>

                            <button class="action__button gold-button">получить скидку!</button>
                        </div>
                    </div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </article> -->
            </div>

            <div class="row hero__reserve cols-auto align-items-end justify-content-between">
                <div class="hero__icons col-xxl-2 col-xl-3 col-lg-3 col-md-3 col-sm-8 col-10">
                    <ul class="social hero__social row justify-content-between">
                        <!-- <li class="social__item col-auto">
                        <a href="#" class="social__link insta"></a>
                    </li> -->

                        <li class="social__item col-auto">
                            <a href="<?php the_field('whatsapp', 'options'); ?>" class="social__link whatsapp"
                                target="_blank"></a>
                        </li>

                        <!-- <li class="social__item col-auto">
                        <a href="#" class="social__link viber"></a>
                    </li> -->

                        <li class="social__item col-auto">
                            <a href="<?php the_field('telegram', 'options'); ?>" class="social__link telegram"
                                target="_blank"></a>
                        </li>
                    </ul>
                </div>

                <div class="col-xxl-8 col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12 hero__reserved">
                    <div id='block-search'>
                        <div id='tl-search-form' class='tl-container'>
                            <noindex><a href='http://www.travelline.ru/products/tl-hotel' rel='nofollow'>система
                                    онлайн-бронирования</a></noindex>
                        </div>
                    </div>
                    <script type='text/javascript'>
                        (function (w) {
                            var q = [
                                ['setContext', 'TL-INT-vertexhotel', 'ru'],
                                ['embed', 'search-form', {
                                    container: 'tl-search-form'
                                }]
                            ];
                            var t = w.travelline = (w.travelline || {}),
                                ti = t.integration = (t.integration || {});
                            ti.__cq = ti.__cq ? ti.__cq.concat(q) : q;
                            if (!ti.__loader) {
                                ti.__loader = true;
                                var d = w.document,
                                    p = d.location.protocol,
                                    s = d.createElement('script');
                                s.type = 'text/javascript';
                                s.async = true;
                                s.src = (p == 'https:' ? p : 'http:') + '//ibe.tlintegration.com/integration/loader.js';
                                (d.getElementsByTagName('head')[0] || d.getElementsByTagName('body')[0]).appendChild(s);
                            }
                        })(window);
                    </script>
                </div>

                <div class="col-xxl-2 col-xl-0 col-lg-0 col-md-0 col-sm-0 col-0"></div>
            </div>
        </div>
    </section>

    <section id="about" class="section about">
        <div class="container-fluid fluid2">
            <div class="about__box row justify-content-between">
                <div class="col-lg-5 col-12 section__left section__left_about"></div>

                <div class="col-lg-7 col-12 section__right">
                    <figure class="about__image">
                        <img src="<?php echo get_field('about_image')['url']; ?>" alt="<?php echo get_field('about_image')['alt']; ?>">               
                    </figure>
                </div>
            </div>
        </div>

        <div class="container section-block about__block">
            <div class="row cols-auto">
                <div class="section-block__text col-lg-5 col-12">
                    <h2 class="section-block__heading">
                        <?php the_field('about_heading'); ?>
                    </h2>

                    <div class="section-block__descr">
                        <?php the_field('about_text'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('/template-parts/gallery'); ?>

    <section class="section more">
        <div class="container-fluid">
            <div class="section__box row justify-content-between">
                <div class="col-lg-5 col-12 section__left section__left_more">
                    <div class="section-more__text col-xxl-8 col-lg-10 col-12">
                        <h2 class="services__heading">
                            <?php the_field('more_heading'); ?>
                        </h2>

                        <ul class="col-xl-9 col-lg-11 vertex-list more__list">
                            <?php if (have_rows('add_more_list_item')): ?>
                                <?php while (have_rows('add_more_list_item')):
                                    the_row();
                                    $moreItem = get_sub_field('more_list_item');
                                    ?>

                                    <li class="vertex-list__item">
                                        <span class="vertex-list__one">
                                            <?= $moreItem; ?>
                                    </li>

                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-7 col-12 section__right section__right_more">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!4v1648043065277!6m8!1m7!1sCAoSLEFGMVFpcE1kLUt2YUpZTUtpd1lfUkpwa2RTbGY5VUE3ejBWRG12WGZrYWhK!2m2!1d43.68420771!2d40.25717352!3f314.37910206371083!4f28.2435577699721!5f0.4000000000000002"
                        style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                    <h3 class="more__subheading">
                        3D - съемка нашего отеля
                    </h3>

                    <div
                        class="col-xxl-9 col-sm-11 col-12 social-box row more__box justify-content-between align-items-center">
                        <div class="col-sm-5 col-12 social-box__left">
                            <h3 class="social-box__heading">
                                Мы всегда на&nbsp;связи
                            </h3>
                        </div>

                        <div class="col-sm-7 col-12 social-box__block row justify-content-center">
                            <ul class="col-lg-11 col-12 socials social-box__list row justify-content-between cols-4">
                                <li class="socials__item col-auto">
                                    <a href="<?php the_field('whatsapp', 'options'); ?>" class="socials__link whatsapp"
                                        target="_blank"></a>

                                    <div class="socials__tooltip">
                                        Кликните, чтобы попасть&nbsp;в&nbsp;чат
                                    </div>
                                </li>

                                <li class="socials__item col-auto">
                                    <a href="tel:<?php the_field('номер_телефона', 'options'); ?>"
                                        class="socials__link phone"></a>

                                    <div class="socials__tooltip socials__tooltip_down">
                                        Кликните, чтобы позвонить
                                    </div>
                                </li>

                                <li class="socials__item col-auto">
                                    <a href="<?php the_field('telegram', 'options'); ?>" class="socials__link telegram"
                                        target="_blank"></a>

                                    <div class="socials__tooltip">
                                        Кликните, чтобы попасть&nbsp;в&nbsp;чат
                                    </div>
                                </li>

                                <!-- <li class="socials__item col-auto">
                                <a href="#" class="socials__link insta"></a>

                                <div class="socials__tooltip socials__tooltip_down">
                                    Кликните, чтобы попасть&nbsp;в&nbsp;чат
                                </div>
                            </li>  -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 social-box-mobile row more__box justify-content-between align-items-center">
                <div class="col-sm-5 col-12 social-box__left">
                    <h3 class="social-box__heading">
                        Мы всегда на&nbsp;связи
                    </h3>
                </div>

                <div class="col-sm-7 col-12 social-box__block row justify-content-center">
                    <ul class="col-lg-11 col-12 socials social-box__list row justify-content-between cols-4">
                        <li class="socials__item col-auto">
                            <a href="<?php the_field('whatsapp', 'options'); ?>" class="socials__link whatsapp"
                                target="_blank"></a>

                            <div class="socials__tooltip">
                                Кликните, чтобы попасть&nbsp;в&nbsp;чат
                            </div>
                        </li>

                        <li class="socials__item col-auto">
                            <a href="tel:<?php the_field('номер_телефона', 'options'); ?>" class="socials__link phone"></a>

                            <div class="socials__tooltip socials__tooltip_down">
                                Кликните, чтобы позвонить
                            </div>
                        </li>

                        <li class="socials__item col-auto">
                            <a href="<?php the_field('telegram', 'options'); ?>" class="socials__link telegram"
                                target="_blank"></a>

                            <div class="socials__tooltip">
                                Кликните, чтобы попасть&nbsp;в&nbsp;чат
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <h2 class="services__heading">
                <?php the_field('services_heading'); ?>
            </h2>

            <ul class="row services-box services__list cols-lg-3 cols-md-2 cols-1">
                <li class="services-box__item col-auto">
                    <figure class="services-box__image image1">
                        <?php if (get_field('services_image1')): ?>
                            <img class="services-box__img" src="<?php the_field('services_image1'); ?>" />
                        <?php endif; ?>
                    </figure>

                    <a href="#appart" class="services-box__text js-slideTo">
                        <?php the_field('services_heading1'); ?>
                    </a>
                </li>


                <li class="services-box__item col-auto">
                    <figure class="services-box__image image2">
                        <?php if (get_field('services_image2')): ?>
                            <img class="services-box__img" src="<?php the_field('services_image2'); ?>" />
                        <?php endif; ?>
                    </figure>

                    <a href="#spa" class="services-box__text js-slideTo">
                        <?php the_field('services_heading2'); ?>
                    </a>
                </li>

                <li class="services-box__item item3 col-auto">
                    <figure class="services-box__image image3">
                        <?php if (get_field('services_image3')): ?>
                            <img class="services-box__img" src="<?php the_field('services_image3'); ?>" />
                        <?php endif; ?>
                    </figure>

                    <a href="#pool" class="services-box__text js-slideTo">
                        <?php the_field('services_heading3'); ?>
                    </a>
                </li>

                <li class="services-box__item item4 col-auto">
                    <figure class="services-box__image image4">
                        <?php if (get_field('services_image4')): ?>
                            <img class="services-box__img" src="<?php the_field('services_image4'); ?>" />
                        <?php endif; ?>
                    </figure>

                    <a href="#restraunt" class="services-box__text js-slideTo">
                        <?php the_field('services_heading4'); ?>
                    </a>
                </li>

                <li class="services-box__item item5 col-auto">
                    <figure class="services-box__image image5">
                        <?php if (get_field('services_image5')): ?>
                            <img class="services-box__img" src="<?php the_field('services_image5'); ?>" />
                        <?php endif; ?>
                    </figure>

                    <a href="#transfer" class="services-box__text js-slideTo">
                        <?php the_field('services_heading5'); ?>
                    </a>
                </li>

                <li class="services-box__item item6 col-auto">
                    <figure class="services-box__image image6">
                        <?php if (get_field('services_image6')): ?>
                            <img class="services-box__img" src="<?php the_field('services_image6'); ?>" />
                        <?php endif; ?>
                    </figure>

                    <a href="#ski" class="services-box__text js-slideTo">
                        <?php the_field('services_heading6'); ?>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <section id="appart" class="appart">
        <?php
        $mypost_Query2 = new WP_Query(
            array(
                'post_type' => 'number',                  # post, page, custom_post_type
                'post_status' => 'publish',                       # статус записи
                'posts_per_page' => 6,	                            # кол-во постов вывода/загрузки
    
            )
        );
        global $post;

        $id = get_the_ID();

        if ($mypost_Query2->have_posts()) {
            while ($mypost_Query2->have_posts()) {
                $mypost_Query2->the_post();
                ?>
                <article id="article1" class="article-one appart__article appart__article_first col-xxl-7 col-xl-8 col-12 row"
                    data-target="one<?php echo $id; ?>">
                    <div class="article__container col-xxl-9 col-xl-10 col-12">
                        <button data-path="one<?php echo $id; ?>" class="article-one__close"></button>

                        <!-- контейнер слайдера -->
                        <div id="swiper-app1" class="swiper swiper-appart">
                            <!-- враппер -->
                            <div class="swiper-wrapper">
                                <!-- слайды -->
                                <?php if (have_rows('галерея_номера', $id)): ?>
                                    <?php while (have_rows('галерея_номера', $id)):
                                        the_row();
                                        $images = get_sub_field('фото', $id);

                                        ?>
                                        <div class="swiper-slide swiper-appart__slide">
                                            <figure class="swiper-appart__image">
                                                <img src="<?= $images; ?>" alt="Делюкс1" class="swiper-apart__img">
                                            </figure>
                                        </div>
                                    <?php endwhile;
                                endif;
                                ?>
                            </div>

                            <!-- кнопки для навигации -->
                            <div class="swiper-button-prev2"></div>
                            <div class="swiper-button-next2"></div>
                        </div>

                        <h2 class="article-one__heading">
                            <?php the_title(); ?>
                        </h2>
                        <?php
                        global $post;

                        $id = get_the_ID();

                        ?>
                        <p class="article-one__subheading">
                            Размер номера <?php the_field('размер_номера'); ?> кв. м.
                        </p>

                        <div class="row article-list article-one__list" data-simplebar>
                            <div class="article-list__list col-sm-6 col-12">
                                <?php the_field('контент'); ?>
                            </div>
                        </div>

                        <div class="row article-one__descr align-items-center col-md-10 col-12 justify-content-between">
                            <p class="col-auto appart-box__men"><?php the_field('кол-во'); ?> человека</p>
                            <p class="col-auto article-one__price">от <?php the_field('стоимость'); ?> р</p>
                            <p class="col-auto appart-box__old"><s><?php the_field('старая'); ?> р</s></p>
                        </div>

                        <div class="row article-one__btn">
                            <a class="gold-button col-sm-4 col-8" href="/booking/">забронировать</a>
                        </div>
                    </div>
                </article>
            <?php }
        } ?>


        <div class="container">
            <h2 class="appart__heading">
                Уютные номера
            </h2>

            <ul class="row appart-box appart__list cols-lg-3 cols-md-2 cols-1">
                <?php
                $mypost_Query = new WP_Query(
                    array(
                        'post_type' => 'number',                  # post, page, custom_post_type
                        'post_status' => 'publish',                       # статус записи
                        'posts_per_page' => 9,	                            # кол-во постов вывода/загрузки
            
                    )
                );

                if ($mypost_Query->have_posts()) {
                    while ($mypost_Query->have_posts()) {
                        $mypost_Query->the_post();
                        ?>
                        <li class="appart-box__item col-auto">
                            <figure class="appart-box__image">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="Двухместный номер Делюкс"
                                    class="appart-box__img">

                                <span class="appart__text">
                                    <p class="appart-box__subheading">
                                        <?php the_title(); ?>
                                    </p>
                                </span>
                            </figure>

                            <div class="row appart-box__descr align-items-center">
                                <p class="col-3 appart-box__men"><?= the_field('кол-во'); ?> чел.</p>
                                <p class="col-5 appart-box__price"><?= the_field('стоимость'); ?> р</p>
                                <p class="col-4 appart-box__old"><s><?= the_field('старая'); ?> р</s></p>
                            </div>

                            <div class="row appart-box__buttons">
                                <a class="gold-button appart-box__button col-6" href="/booking/">забронировать</a>
                                <?php
                                global $post;
                                $id = get_the_ID();
                                ?>
                                <button data-path="one<?php echo $id; ?>" class="appart-box__more col-5">подробнее</button>
                            </div>
                        </li>
                        <?php
                    }
                } else {
                    echo ('<p>Извините, нет записей.</p>');
                }
                wp_reset_postdata();
                ?>


            </ul>
        </div>
    </section>

    <?php
    if ($villa_off): ?>
        <section id="villa" class="villa">
            <div class="container">
                <div class="row villa__contain">
                    <div class="villa__left col-lg-6 col-12">
                        <h2 class="villa__heading">
                            <?php the_field('villa_head'); ?>
                        </h2>

                        <h3 class="villa__subheading">
                            <?php the_field('villa_subhead'); ?>
                        </h3>

                        <div class="villa__text">
                            <?php the_field('villa_text'); ?>
                        </div>

                        <a class="gold-button villa__button col-7" href="/booking/">забронировать</a>
                    </div>

                    <!-- контейнер слайдера -->
                    <div class="col-lg-6 col-12 villa__right">
                        <div class="swiper swiper-villa villa__slider">
                            <!-- враппер -->
                            <div class="swiper-wrapper">

                                <?php if (have_rows('добавить_картинку_в_слайдере_вилла')): ?>
                                    <?php while (have_rows('добавить_картинку_в_слайдере_вилла')):
                                        the_row();
                                        $image = get_sub_field('картинка_слайдер');
                                        ?>

                                        <div class="swiper-slide swiper-villa__slide">
                                            <figure class="swiper-slide__image">
                                                <img src="<?= $image; ?>" class="swiper-apart__img" />
                                            </figure>
                                        </div>

                                        <?php
                                    endwhile;
                                endif; ?>
                            </div>

                            <!-- кнопки для навигации -->
                            <div class="swiper-button-prev2"></div>
                            <div class="swiper-button-next2"></div>

                            <div
                                class="col-12 row justify-content-between align-items-stretch cols-3 villa-cards swiper-villa__box">
                                <div class="col-auto align-self-end villa-cards-card1">
                                    <figure class="villa-cards__image">

                                        <?php if (get_field('картинка1_в_галлерее_вилла')): ?>
                                            <img src="<?php the_field('картинка1_в_галлерее_вилла'); ?>"
                                                class="swiper-apart__img" />
                                        <?php endif; ?>

                                        <!-- <img src="/wp-content/themes/vertex/img/villa1.jpg" class="swiper-apart__img"> -->
                                    </figure>
                                </div>

                                <div class="col-auto villa-cards-card2">
                                    <figure class="villa-cards__image">

                                        <?php if (get_field('картинка2_в_галлерее_вилла')): ?>
                                            <img src="<?php the_field('картинка2_в_галлерее_вилла'); ?>"
                                                class="swiper-apart__img" />
                                        <?php endif; ?>
                                        <!-- <img src="/wp-content/themes/vertex/img/villa3.jpg" class="swiper-apart__img"> -->
                                    </figure>
                                </div>

                                <div class="col-auto villa-cards-card3">
                                    <figure class="villa-cards__image">

                                        <?php if (get_field('картинка3_в_галлерее_вилла')): ?>
                                            <img src="<?php the_field('картинка3_в_галлерее_вилла'); ?>"
                                                class="swiper-apart__img" />
                                        <?php endif; ?>
                                        <!-- <img src="/wp-content/themes/vertex/img/villa2.jpg" class="swiper-apart__img"> -->
                                    </figure>
                                </div>
                            </div>
                        </div>

                        <a class="gold-button villa__button villa__button_mobile col-6" href="/booking/">забронировать</a>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <section id="spa" class="spa">
        <div class="container">
            <div class="row spa-box spa__box">
                <div class="spa-box__left col-lg-6 col-12">
                    <div class="spa-box__head col-12">
                        <h2 class="spa-box__heading">
                            <?php the_field('spa_head'); ?>
                        </h2>
                    </div>

                    <div class="spa-box__block">
                        <div class="swiper spa-box__swiper">
                            <!-- враппер -->
                            <div class="swiper-wrapper">

                                <?php if (have_rows('slide_spa')): ?>
                                    <?php while (have_rows('slide_spa')):
                                        the_row();
                                        $image = get_sub_field('spa_slide_new');
                                        ?>

                                        <!-- слайды -->
                                        <div class="swiper-slide spa-box__slide">
                                            <figure class="spa-box__image">
                                                <img src="<?= $image; ?>" class="swiper-apart__img">
                                            </figure>
                                        </div>

                                        <?php
                                    endwhile;
                                endif;
                                ?>

                            </div>

                            <!-- кнопки для навигации -->
                            <div class="swiper-button-prev2"></div>
                            <div class="swiper-button-next2"></div>
                        </div>

                        <?php
                        $spa_small_img_1 = get_field('spa_small_img_1');
                        $spa_small_img_2 = get_field('spa_small_img_2');
                        if($spa_small_img_1 && $spa_small_img_2) { ?>

                            <div class="spa-box__images row col-10 justify-content-between">
                                <figure class="villa-cards__image villa-cards__image_spa col-auto">
                                    <img src="<?php echo $spa_small_img_1['url']; ?>" alt="<?php echo $spa_small_img_1['alt']; ?>" class="swiper-apart__img">
                                </figure>

                                <figure class="villa-cards__image villa-cards__image_spa col-auto">
                                    <img src="<?php echo $spa_small_img_2['url']; ?>" alt="<?php echo $spa_small_img_2['alt']; ?>" class="swiper-apart__img">
                                </figure>
                            </div>

                        <? } ?>
                    </div>

                    <button class="gold-button log-5 spa-box__button js-reserveOpen">
                        воспользоваться предложением
                    </button>
                </div>

                <div class="spa-box__right col-lg-6 col-12">
                    <div class="spa-box__descr col-xl-10 col-12 justify-self-end">
                        <div class="spa-box__text">
                            <?php the_field('spa_text'); ?>
                        </div>

                        <h3 class="spa-box__subheading"><?php the_field('spa_about_text'); ?></h3>

                        <ul class="col-11 vertex-list spa-box__list">
                            <?php if (have_rows('add_spa_about_item')): ?>
                                <?php while (have_rows('add_spa_about_item')):
                                    the_row();
                                    $spaAboutItem = get_sub_field('spa_about_item');
                                    ?>
                                    <li class="vertex-list__item">
                                        <span class="vertex-list__one vertex-list__one_black">
                                            <?= $spaAboutItem; ?>
                                        </span>
                                    </li>

                                    <?php
                                endwhile;
                            endif;
                            ?>
                        </ul>
                    </div>

                    <ul class="spa-advantages spa-box__items row justify-content-between">
                        <li class="spa-advantages__item col-sm-3 col-6">
                            <span class="spa-advantages__img item1"></span>
                            <p class="spa-advantages__descr">
                                Скоростной wi-fi
                            </p>
                        </li>

                        <li class="spa-advantages__item col-sm-3 col-6">
                            <span class="spa-advantages__img item2"></span>
                            <p class="spa-advantages__descr">
                                Удобная парковка
                            </p>
                        </li>

                        <li class="spa-advantages__item col-sm-3 col-6">
                            <span class="spa-advantages__img item3"></span>
                            <p class="spa-advantages__descr">
                                Индивидуальные шкафчики
                            </p>
                        </li>

                        <li class="spa-advantages__item col-sm-3 col-6">
                            <span class="spa-advantages__img item4"></span>
                            <p class="spa-advantages__descr">
                                Удобные душевые кабины
                            </p>
                        </li>
                    </ul>
                </div>

                <div class="for-button spa-box__buttons">
                    <button class="gold-button log-5 for-button__button js-reserveOpen">
                        воспользоваться предложением
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section id="vip-spa" class="vip-spa">
        <div class="container">
            <div class="row vip-spa__contain">
                <div class="vip-spa__left col-lg-6 col-12">
                    <div class="vip-spa__head col-12">
                        <h2 class="vip-spa__heading">
                            <?php the_field('vip_spa_head'); ?>
                        </h2>
                    </div>

                    <h3 class="vip-spa__subheading">
                        <?php the_field('vip_spa_subhead'); ?>
                    </h3>

                    <h3 class="vip-spa__subheading">
                        <?php the_field('vip_spa_subhead2'); ?>
                    </h3>

                    <div class="villa__text villa__text_white">
                        <?php the_field('vip_spa_text'); ?>
                    </div>

                    <div class="row col-11 vip-spa__buttons align-items-end justify-content-between">
                        <button class="vip-spa__price js-spaOpen">посмотреть<br>наш<br>прайс</button>

                        <button class="gold-button vip-spa__button col-xl-9 col-8 js-vipSpaOpen">
                            воспользоваться предложением
                        </button>
                    </div>
                </div>

                <!-- контейнер слайдера -->
                <div class="col-lg-6 col-12 vip-spa__right">
                    <div class="swiper swiper-vip vip__slider">
                        <!-- враппер -->
                        <div class="swiper-wrapper">

                            <?php if (have_rows('slide_vip_spa')): ?>
                                <?php while (have_rows('slide_vip_spa')):
                                    the_row();
                                    $image = get_sub_field('vip_spa_image');
                                    ?>

                                    <!-- слайды -->
                                    <div class="swiper-slide swiper-vip__slide">
                                        <figure class="swiper-slide__image">
                                            <img src="<?= $image; ?>" class="swiper-apart__img">
                                        </figure>
                                    </div>

                                    <?php
                                endwhile;
                            endif;
                            ?>
                        </div>

                        <!-- кнопки для навигации -->
                        <div class="swiper-button-prev2"></div>
                        <div class="swiper-button-next2"></div>
                    </div>

                    <div class="col-12 vip-block">
                        <?php 
                        $vip_spa_img1 = get_field('vip_spa_img1');
                        $vip_spa_img2 = get_field('vip_spa_img2');
                        $vip_spa_img3 = get_field('vip_spa_img3');
                        ?>
                        <div class="d-grid justify-content-between gap-2 vip-cards swiper-vip__box">
                            <?php if($vip_spa_img1) { ?>                               
                                <figure class="villa-cards__image">
                                    <img src="<?php echo $vip_spa_img1; ?>" class="swiper-apart__img"
                                        alt="Вип-сауна Vertex">
                                </figure>                              
                            <?php } 

                            if($vip_spa_img2) { ?>                              
                                <figure class="villa-cards__image">
                                    <img src="<?php echo $vip_spa_img2; ?>" class="swiper-apart__img"
                                        alt="Вип-сауна Vertex">
                                </figure>                            
                            <?php }

                            if($vip_spa_img3) { ?>                                
                                <figure class="villa-cards__image">
                                    <img src="<?php echo $vip_spa_img3; ?>" class="swiper-apart__img"
                                        alt="Вип-сауна Vertex">
                                </figure>                             
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div
                    class="row col-sm-11 col-12 vip-spa__buttons vip-spa__buttons_mobile align-items-end justify-content-between">
                    <button class="vip-spa__price js-spaOpen">посмотреть наш прайс</button>

                    <button class="gold-button vip-spa__button col-xl-9 col-sm-8 col-12 js-vipSpaOpen">
                        воспользоваться предложением
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section id="pool" class="pool">
        <div class="container">
            <div class="pool__cont row align-items-start justify-content-between">
                <div class="row pool-box pool__box col-xl-6 col-lg-7 col-12">
                    <h2 class="pool__heading">
                        <?php the_field('pool_head'); ?>
                    </h2>

                    <p class="villa__text villa__text_regular">
                        <?php the_field('pool_subhead'); ?>
                    </p>

                    <div class="villa__text villa__text_regular">
                        <?php the_field('pool_text'); ?>
                    </div>

                    <ul class="spa-advantages pool-box__items row justify-content-between">
                        <li class="spa-advantages__item col-sm-3 col-6">
                            <span class="spa-advantages__img pool1"></span>
                            <p class="spa-advantages__descr">
                                <?php the_field('pool_item1'); ?>
                            </p>
                        </li>

                        <li class="spa-advantages__item col-sm-3 col-6">
                            <span class="spa-advantages__img pool2"></span>
                            <p class="spa-advantages__descr">
                                <?php the_field('pool_item2'); ?>
                            </p>
                        </li>

                        <li class="spa-advantages__item col-sm-3 col-6">
                            <span class="spa-advantages__img pool3"></span>
                            <p class="spa-advantages__descr">
                                <?php the_field('pool_item3'); ?>
                            </p>
                        </li>

                        <li class="spa-advantages__item col-sm-3 col-6">
                            <span class="spa-advantages__img pool4"></span>
                            <p class="spa-advantages__descr">
                                <?php the_field('pool_item4'); ?>
                            </p>
                        </li>
                    </ul>

                    <div class="row pool-box__button">
                        <a class="gold-button villa__button col-6" href="/booking/">забронировать</a>
                    </div>
                </div>

                <?php if (get_field('attention_text', 'options')): ?>
                    <div class="attention col-xl-6 col-lg-5 col-12">
                        <div class="attention__heading">
                            <?php the_field('attention_text', 'options'); ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <div class="col-12 pool-mobile row">
                <a class="gold-button pool-mobile__button col-sm-7 col-12" href="/booking/">забронировать номер</a>
            </div>
        </div>
    </section>

    <section id="restraunt" class="restraunts">
        <div class="container">
            <h2 class="restraunts__heading">
                <?php the_field('rest_head'); ?>
            </h2>

            <ul class="row jusify-content-between restraunts-box restraunts__box">
                <li class="col-lg-4 col-12">
                    <div class="restraunts-box__item">
                        <div class="restraunts-box__img img1">
                            <h3 class="restraunts-box__heading">
                                <?php the_field('heading_rest1'); ?>
                            </h3>
                        </div>

                        <div class="restraunts-box__descr">
                            <div class="restraunts-box__top">
                                <p class="restraunts__text">
                                    <?php the_field('descr_rest1'); ?>
                                </p>

                                <p class="restraunts__time"><?php the_field('rest_time_one'); ?></p>
                            </div>

                            <a href="<?php the_field('rest_link_one'); ?>"
                                class="gold-button restraunts__button">подробнее</a>
                        </div>
                    </div>
                </li>

                <li class="col-lg-4 col-12">
                    <div class="restraunts-box__item">
                        <div class="restraunts-box__img img2">
                            <h3 class="restraunts-box__heading">
                                <?php the_field('heading_rest2'); ?>
                            </h3>
                        </div>

                        <div class="restraunts-box__descr">
                            <div class="restraunts-box__top">
                                <p class="restraunts__text">
                                    <?php the_field('descr_rest2'); ?>
                                </p>

                                <p class="restraunts__time"><?php the_field('rest_time_two'); ?></p>
                            </div>

                            <a href="<?php the_field('rest_link_two'); ?>"
                                class="gold-button restraunts__button">подробнее</a>
                        </div>
                    </div>
                </li>

                <li class="col-lg-4 col-12">
                    <div class="restraunts-box__item">
                        <div class="restraunts-box__img img3">
                            <h3 class="restraunts-box__heading">
                                <?php the_field('heading_rest3'); ?>
                            </h3>
                        </div>

                        <div class="restraunts-box__descr">
                            <div class="restraunts-box__top">
                                <p class="restraunts__text">
                                    <?php the_field('descr_rest3'); ?>
                                </p>

                                <p class="restraunts__time"><?php the_field('rest_time_three'); ?></p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <?php
    $transfer_head = get_field('transfer_head');
    if ($transfer_head) {
    ?>

        <section id="transfer" class="spa transfer">
            <div class="container">
                <div class="row spa-box spa__box">
                    <div class="spa-box__left col-lg-6 col-12">
                        <div class="spa-box__head col-12">
                            <h2 class="spa-box__heading spa-box__heading_transfer">
                                <?php the_field('transfer_head'); ?>
                            </h2>
                        </div>

                        <div class="spa-box__block spa-box__block_transfer">
                            <div class="swiper spa-box__swiper transfer__swiper">
                                <!-- враппер -->
                                <div class="swiper-wrapper">

                                    <?php if (have_rows('slide_transfer')): ?>
                                        <?php while (have_rows('slide_transfer')):
                                            the_row();
                                            $image = get_sub_field('new_slide_transfer');
                                            ?>

                                            <!-- слайды -->
                                            <div class="swiper-slide spa-box__slide">
                                                <figure class="spa-box__image">
                                                    <img src="<?= $image ?>" class="swiper-apart__img">
                                                </figure>
                                            </div>

                                            <?php
                                        endwhile;
                                    endif;
                                    ?>

                                </div>

                                <!-- кнопки для навигации -->
                                <div class="swiper-button-prev2"></div>
                                <div class="swiper-button-next2"></div>
                            </div>
                        </div>

                        <button class="gold-button col-xl-5 col-7 spa-box__button js-transferOpen">
                            узнать подробнее
                        </button>
                    </div>

                    <div class="spa-box__right spa-box__right_transfer col-lg-6 col-12">
                        <div class="spa-box__descr col-xl-10 col-12 justify-self-end">
                            <div class="spa-box__text">
                                <?php the_field('transfer_text'); ?>
                            </div>

                            <div class="col-12 transfer__image">
                                <img src="<?php the_field('transfer_img'); ?>" alt="Трансфер от Vertex" class="transfer__img">
                            </div>

                            <h3 class="spa-box__subheading"><?php the_field('transfer_about_text'); ?></h3>

                            <ul class="col-11 vertex-list spa-box__list">
                                <?php if (have_rows('add_transfer_item')): ?>
                                    <?php while (have_rows('add_transfer_item')):
                                        the_row();
                                        $transferItem = get_sub_field('transfer_item');
                                        ?>
                                        <li class="vertex-list__item">
                                            <span class="vertex-list__one vertex-list__one_black">
                                                <?= $transferItem; ?>
                                            </span>
                                        </li>

                                        <?php
                                    endwhile;
                                endif;
                                ?>
                            </ul>
                        </div>
                    </div>

                    <div class="for-button spa-box__buttons">
                        <button class="gold-button col-sm-5 col-12 for-button__button">
                            узнать подробнее
                        </button>
                    </div>
                </div>
            </div>
        </section>

    <?php } ?>

    <!-- Block Services -->
    <?php get_template_part('template-parts/service', 'block');

    if (have_rows('добавить_спецпредложение')) { ?>
        <section class="actions">
            <div class="container actions__tops top-actions">
                <?php if (have_rows('добавить_спецпредложение')): ?>
                    <h2 class="ski__heading">
                        Суперпредложения
                    </h2>

                    <div class="swiper swiper-actions top-actions__slider">
                        <!-- враппер -->
                        <div class="swiper-wrapper">
                            <?php if (have_rows('добавить_спецпредложение')): ?>
                                <?php while (have_rows('добавить_спецпредложение')):
                                    the_row();
                                    $title = get_sub_field('заголовок');
                                    $descrp = get_sub_field('текст');
                                    $sale_rules = get_sub_field('условия_акции');


                                    ?>
                                    <!-- слайды -->
                                    <div class="swiper-slide action__slide action__slide_actions col-auto">
                                        <h3 class="action__heading"><?= $title; ?></h3>

                                        <p class="action__descr">
                                            <?= $descrp; ?>
                                        </p>

                                        <p class="action__text">
                                            <?= $sale_rules; ?>
                                        </p>

                                        <button class="action__button gold-button">получить скидку!</button>
                                    </div>
                                    <?php
                                endwhile;
                            endif;
                            ?>
                        </div>

                        <!-- кнопки для навигации -->
                        <!-- <div class="swiper-button-prev swiper-button-prev3"></div>
                    <div class="swiper-button-next swiper-button-next3"></div> -->
                    </div>
                <?php endif; ?>
                
                <!-- Block Rating -->
                <?php get_template_part('template-parts/rating', 'block'); ?>
            </div>
        </section>
    <?php } 

    if(get_field('reviews_heading')) { ?>
        <section id="reviews" class="reviews">
            <div class="container">
                <h2 class="reviews__heading">
                    <?php the_field('reviews_heading'); ?>
                </h2>

                <div class="swiper swiper-reviews reviews__slider">
                    <!-- враппер -->
                    <div class="swiper-wrapper">

                        <?php if (have_rows('добавить_отзыв')): ?>
                            <?php while (have_rows('добавить_отзыв')):
                                the_row();
                                $image = get_sub_field('фото');
                                $name = get_sub_field('имя');
                                $subtitle = get_sub_field('подзаголовок');
                                $content = get_sub_field('текст_отзыва');
                                $pp = get_sub_field('номер_по_порядку');

                                ?>
                                <!-- слайды -->
                                <div class="swiper-slide reviews-slide swiper-reviews__slide col-auto">
                                    <figure class="reviews-slide__image">
                                        <img src="<?= $image; ?>" alt="Фото отзыва" class="reviews-slide__img">
                                    </figure>

                                    <h3 class="reviews-slide__heading">
                                        <?= $name; ?>
                                    </h3>

                                    <p class="reviews-slide__descr">
                                        <?= $subtitle; ?>
                                    </p>

                                    <div class="more-text">
                                        <p class="reviews-slide__text" data-text="one<?= $pp; ?>">
                                            <?= $content; ?>
                                        </p>
                                    </div>

                                    <button class="reviews__more" data-path="one<?= $pp; ?>">читать полностью</button>

                                    <button class="reviews__close" data-close="one<?= $pp; ?>">меньше</button>
                                </div>

                                <?php
                            endwhile;
                        endif; ?>
                    </div>

                    <!-- кнопки для навигации -->
                    <div class="swiper-button-prev swiper-button-prev3"></div>
                    <div class="swiper-button-next swiper-button-next3"></div>
                </div>
            </div>
        </section>
    <?php } ?>

    <section id="contacts" class="contact">
        <div class="container-fluid">
            <row class="contact__box row align-items-stretch justify-content-between">
                <div class="contact__map col-lg-5 col-12">
                    <div id="map" class="contact__one"></div>
                </div>

                <div class="contact__image col-lg-7 col-12">
                    <div class="contact__block col-sm-9 col-11">
                        <h2 class="contact__heading">
                            Забронируйте номер вашей&nbsp;мечты уже&nbsp;сегодня!
                        </h2>

                        <a class="gold-button col-xl-6 col-sm-7 col-12" href="/booking/">забронировать номер</a>
                    </div>
                </div>
            </row>
        </div>
    </section>

    <?php
}
?>

<?php get_footer();