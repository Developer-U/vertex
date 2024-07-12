<?php ?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="/wp-content/themes/vertex/img/favicon.ico">
    <script src="https://api-maps.yandex.ru/2.1/?apikey=68f9a0ea-6fba-4a6e-9f0a-5a716b0b30d5&lang=ru_RU"
        type="text/javascript">
        </script>

    <title>Vertex - отель в Красной Поляне - официальный сайт</title>

    <?php wp_head(); ?>

    <!-- start TL head script -->
    <script type='text/javascript'>
        (function (w) {
            var lang = 'ru';
            if (window.location.pathname.indexOf('/en/') !== -1) lang = 'en';
            console.log(lang);
            var q = [
                ['setContext', 'TL-INT-vertexhotel', lang],
                ['embed', 'search-form', {
                    container: 'tl-search-form'
                }],
                ['embed', 'reputation-widget', { container: 'tl-reputation-widget' }]
            ];
            var h = ["ru-ibe.tlintegration.ru", "ibe.tlintegration.ru", "ibe.tlintegration.com"];
            var t = w.travelline = (w.travelline || {}),
                ti = t.integration = (t.integration || {});
            ti.__cq = ti.__cq ? ti.__cq.concat(q) : q;
            if (!ti.__loader) {
                ti.__loader = true;
                var d = w.document, c = d.getElementsByTagName("head")[0] || d.getElementsByTagName("body")[0];
                function e(s, f) { return function () { w.TL || (c.removeChild(s), f()) } }
                (function l(h) {
                    if (0 === h.length) return; var s = d.createElement("script");
                    s.type = "text/javascript"; s.async = !0; s.src = "https://" + h[0] + "/integration/loader.js";
                    s.onerror = s.onload = e(s, function () { l(h.slice(1, h.length)) }); c.appendChild(s)
                })(h);
            }
        })(window);
    </script>
    <!-- end TL head script -->
</head>

<body>
    <header class="header">
        <div class="container-fluid fluid1">
            <div class="row justify-content-between align-items-center">
                <div class="col-xxl-7 col-xl-10 col-lg-10 col-md-1 col-sm-1 col-3 header__top">

                    <?php
                    if (is_front_page()) {
                        $link_hash = '';
                        $link_slide = 'js-slideTo';
                    } else {
                        $link_hash = '/';
                        $link_slide = '';
                    }

                    if (get_locale() == 'en_US') {
                        ?>
                        <nav id="menu" class="menu header__menu">
                            <ul class="menu__list row row justify-content-between">
                                <li class="menu__item menu__item_mobile col-auto">
                                    <a href="/en" class="menu__link js-slideTo">main</a>
                                </li>

                                <li class="menu__item col-auto">
                                    <a href="<?php echo $link_hash; ?>#about"
                                        class="menu__link <?php echo $link_slide; ?>">about hotel</a>
                                </li>

                                <li class="menu__item col-auto">
                                    <a href="<?php echo $link_hash; ?>#appart"
                                        class="menu__link <?php echo $link_slide; ?>">rooms</a>
                                </li>

                                <li class="menu__item col-auto">
                                    <a href="<?php echo $link_hash; ?>#spa"
                                        class="menu__link <?php echo $link_slide; ?>">spa</a>
                                </li>

                                <li class="menu__item col-auto">
                                    <a href="<?php echo $link_hash; ?>#vip-spa"
                                        class="menu__link <?php echo $link_slide; ?>">vip spa</a>
                                </li>

                                <li class="menu__item col-auto">
                                    <a href="<?php echo $link_hash; ?>#restraunt"
                                        class="menu__link <?php echo $link_slide; ?>">restraunt</a>
                                </li>

                                <li class="menu__item col-auto">
                                    <a href="<?php echo $link_hash; ?>#reviews"
                                        class="menu__link <?php echo $link_slide; ?>">reviews</a>
                                </li>

                                <li class="menu__item col-auto">
                                    <a href="<?php echo $link_hash; ?>#contacts"
                                        class="menu__link <?php echo $link_slide; ?>">contacts</a>
                                </li>
                            </ul>
                        </nav>

                        <?php
                    } elseif (get_locale() == 'ru_RU') {
                        ?>

                        <nav id="menu" class="menu header__menu">
                            <ul class="menu__list row row justify-content-between">
                                <li class="menu__item menu__item_mobile col-auto">
                                    <a href="<?php echo $link_hash; ?>"
                                        class="menu__link <?php echo $link_slide; ?>">главная</a>
                                </li>

                                <li class="menu__item col-auto">
                                    <a href="<?php echo $link_hash; ?>#about"
                                        class="menu__link <?php echo $link_slide; ?>">об отеле</a>
                                </li>

                                <li class="menu__item col-auto">
                                    <a href="<?php echo $link_hash; ?>#appart"
                                        class="menu__link <?php echo $link_slide; ?>">номера</a>
                                </li>

                                <li class="menu__item col-auto">
                                    <a href="<?php echo $link_hash; ?>#spa"
                                        class="menu__link <?php echo $link_slide; ?>">spa</a>
                                </li>

                                <li class="menu__item col-auto">
                                    <a href="<?php echo $link_hash; ?>#vip-spa"
                                        class="menu__link <?php echo $link_slide; ?>">vip spa</a>
                                </li>

                                <li class="menu__item col-auto">
                                    <a href="<?php echo $link_hash; ?>#restraunt"
                                        class="menu__link <?php echo $link_slide; ?>">ресторан</a>
                                </li>

                                <li class="menu__item col-auto">
                                    <a href="<?php echo $link_hash; ?>#reviews"
                                        class="menu__link <?php echo $link_slide; ?>">отзывы</a>
                                </li>

                                <li class="menu__item col-auto">
                                    <a href="<?php echo $link_hash; ?>#contacts"
                                        class="menu__link <?php echo $link_slide; ?>">контакты</a>
                                </li>
                            </ul>
                        </nav>

                        <?php
                    }
                    ?>

                    <button id="burger" class="burger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>

                <address
                    class="address header__address row justify-content-between align-items-start col-xxl-5 col-xl-10 col-lg-10 col-md-10 col-sm-10 col-9">
                    <?php
                    if (get_locale() == 'en_US') {
                        ?>

                        <p class="address__geo">
                            <?php the_field('address_en', 'options'); ?>
                        </p>

                        <?php
                    } elseif (get_locale() == 'ru_RU') {
                        ?>

                        <p class="address__geo">
                            <?php the_field('адрес', 'options'); ?>
                        </p>

                        <?php
                    }
                    ?>

                    <a href="tel:<?php the_field('номер_телефона', 'options'); ?>"
                        class="address__phone"><?php the_field('номер_телефона', 'options'); ?></a>

                    <!-- <div class="address__flag">
                        <div class="switch-btn switch-on"></div>
                        <span class="winter-summer-heads">
                            <p class="col-auto">лето</p>
                            <p class="col-auto">зима</p>
                        </span>
                    </div> -->

                    <ul class="address__language d-flex justify-content-between">
                        <?php
                        $args = [
                            'display_names_as' => 'slug'
                        ];
                        pll_the_languages($args);
                        ;
                        ?>
                    </ul>
                </address>
            </div>
        </div>
    </header>

    <?php ?>