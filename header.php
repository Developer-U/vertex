<?php ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css">  
    <link rel="shortcut icon" href="/wp-content/themes/vertex/img/favicon.ico">
    <script src="https://api-maps.yandex.ru/2.1/?apikey=68f9a0ea-6fba-4a6e-9f0a-5a716b0b30d5&lang=ru_RU" type="text/javascript">
    </script>
    
    <title>Vertex - отель в Красной Поляне</title>

    <?php wp_head(); ?>
</head>

<body>
<?php ?>

    <header class="header">
        <div class="container-fluid fluid1">
            <div class="row justify-content-between align-items-center">
                <div class="col-xxl-7 col-xl-10 col-lg-10 col-md-1 col-sm-1 col-3 header__top">

                <?php
                if (get_locale() == 'en_US') {
                ?>
                    <nav id="menu" class="menu header__menu">
                        <ul class="menu__list row row justify-content-between">
                            <li class="menu__item menu__item_mobile col-auto">
                                <a href="/en" class="menu__link js-slideTo">main</a>
                            </li>

                            <li class="menu__item col-auto">
                                <a href="#about" class="menu__link js-slideTo">about hotel</a>
                            </li>
    
                            <li class="menu__item col-auto">
                                <a href="#appart" class="menu__link js-slideTo">rooms</a>
                            </li>
    
                            <li class="menu__item col-auto">
                                <a href="#villa" class="menu__link js-slideTo">villa</a>
                            </li>
    
                            <li class="menu__item col-auto">
                                <a href="#spa" class="menu__link js-slideTo">spa</a>
                            </li>
    
                            <li class="menu__item col-auto">
                                <a href="#vip-spa" class="menu__link js-slideTo">vip spa</a>
                            </li>
    
                            <li class="menu__item col-auto">
                                <a href="#restraunt" class="menu__link js-slideTo">restraunt</a>
                            </li>
    
                            <li class="menu__item col-auto">
                                <a href="#reviews" class="menu__link js-slideTo">reviews</a>
                            </li>
    
                            <li class="menu__item col-auto">
                                <a href="#contacts" class="menu__link js-slideTo">contacts</a>
                            </li>
                        </ul>
                    </nav>

                <?php
                } elseif(get_locale() == 'ru_RU') {
                ?>

                    <nav id="menu" class="menu header__menu">
                        <ul class="menu__list row row justify-content-between">
                            <li class="menu__item menu__item_mobile col-auto">
                                <a href="/" class="menu__link js-slideTo">главная</a>
                            </li>

                            <li class="menu__item col-auto">
                                <a href="#about" class="menu__link js-slideTo">об отеле</a>
                            </li>
    
                            <li class="menu__item col-auto">
                                <a href="#appart" class="menu__link js-slideTo">номера</a>
                            </li>
    
                            <li class="menu__item col-auto">
                                <a href="#villa" class="menu__link js-slideTo">вилла</a>
                            </li>
    
                            <li class="menu__item col-auto">
                                <a href="#spa" class="menu__link js-slideTo">spa</a>
                            </li>
    
                            <li class="menu__item col-auto">
                                <a href="#vip-spa" class="menu__link js-slideTo">vip spa</a>
                            </li>
    
                            <li class="menu__item col-auto">
                                <a href="#restraunt" class="menu__link js-slideTo">ресторан</a>
                            </li>
    
                            <li class="menu__item col-auto">
                                <a href="#reviews" class="menu__link js-slideTo">отзывы</a>
                            </li>
    
                            <li class="menu__item col-auto">
                                <a href="#contacts" class="menu__link js-slideTo">контакты</a>
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

                <address class="address header__address row justify-content-between align-items-start col-xxl-5 col-xl-10 col-lg-10 col-md-10 col-sm-10 col-9">
                    <?php
                    if (get_locale() == 'en_US') {
                    ?>

                    <p class="address__geo">
                        <?php the_field('address_en', 'options'); ?>
                    </p>

                    <?php
                    } elseif(get_locale() == 'ru_RU') {
                    ?>

                    <p class="address__geo">
                        <?php the_field('адрес', 'options'); ?>
                    </p>

                    <?php
                        }
                    ?>

                    <a href="tel:<?php the_field('номер_телефона', 'options'); ?>" class="address__phone"><?php the_field('номер_телефона', 'options'); ?></a>

                    <div class="address__flag">
                        <div class="switch-btn switch-on"></div>
                        <span class="winter-summer-heads">
                            <p class="col-auto">лето</p>
                            <p class="col-auto">зима</p>
                        </span>
                    </div>
                    

                    <?php
                    if (get_locale() == 'en_US') {
                    ?>

                    <div class="address__language row justify-content-between">
                        <a class="address__one address__one_left col-auto" href="/">ru&nbsp;</a>
                        <a class="address__one address__one_right col-auto" style="color: #960" href="/en">en</a>
                    </div>

                    <?php
                    } elseif(get_locale() == 'ru_RU') {
                    ?>

                    <div class="address__language row justify-content-between">
                        <a class="address__one address__one_left col-auto" style="color: #960" href="/">ru&nbsp;</a>
                        <a class="address__one address__one_right col-auto" href="/en">en</a>
                    </div>

                    <?php
                        }
                    ?>
                </address>
            </div>
        </div>
    </header>

<?php  ?>