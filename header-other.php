<?php ?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="/wp-content/themes/vertex/img/favicon.ico">
    <script src="https://api-maps.yandex.ru/2.1/?apikey=68f9a0ea-6fba-4a6e-9f0a-5a716b0b30d5&lang=ru_RU"
        type="text/javascript">
        </script>

    <script>
        window.addEventListener('DOMContentLoaded', function () {
            // Бургерное меню

            // Создаём плавность анимации появления мобильного меню
            // Сначала объявим функцию FadeIn

            const fadeIn = (el, timeout, display) => {
                el.style.opacity = 0;
                el.style.display = display || 'block';
                el.style.transition = `opacity ${timeout}ms`;
                setTimeout(() => {
                    el.style.opacity = 1;
                }, 10);
            }

            // Объявим функцию FadeOut

            const fadeOut = (el, timeout) => {
                el.style.opacity = 1;
                el.style.transition = `opacity ${timeout}ms`;
                el.style.opacity = 0;

                setTimeout(() => {
                    el.style.display = 'none';
                }, timeout);
            };

            var menu = document.querySelector('#menu-other')
                , burger = document.querySelector('.burger')
                , burgerClose = document.querySelector('.burger.open')
                , flag = false;            

            burger.addEventListener('click', function () {
                if (!flag) {
                    fadeIn(menu, 1000, 'flex');
                    flag = true;
                } else {
                    fadeOut(menu, 1000);
                    flag = false;
                }

                burger.classList.toggle('open');

                // Скрытие меню при нажатии на один из пунктов меню

                document.querySelectorAll('.menu__link').forEach(function (oneItem) {
                    oneItem.addEventListener('click', function () {

                        fadeOut(menu, 1500);
                        flag = false;

                        burger.classList.remove('open');
                    });
                });

                burgerClose.addEventListener('click', function () {
                    fadeOut(menu, 1500);
                    flag = false;

                    burger.classList.remove('open');
                });
            });
        });
    </script>

    <title>Vertex - отель в Красной Поляне - официальный сайт</title>
    <?php wp_head(); ?>
</head>

<header class="header">
    <div class="container-fluid fluid1">
        <div class="row justify-content-between align-items-center">
            <div
                class="col-xxl-7 col-xl-10 col-lg-10 col-md-1 col-sm-1 col-3 header__top d-flex align-items-center gap-2">
                <a href="/" class="header__logo d-block">
                    <img src="/wp-content/themes/vertex/img/logo.svg" alt="Логотип Vertex" class="logo__logo">
                </a>

                <nav id="menu-other" class="menu header__menu">
                    <ul class="menu__list d-flex">
                        <li class="menu__item menu__item_mobile col-auto">
                            <a href="/" class="menu__link">главная</a>
                        </li>

                        <li class="menu__item col-auto">
                            <a href="/#about" class="menu__link">об
                                отеле</a>
                        </li>

                        <li class="menu__item col-auto">
                            <a href="/#spa" class="menu__link">spa</a>
                        </li>

                        <li class="menu__item col-auto">
                            <a href="/#services" class="menu__link">услуги</a>
                        </li>

                        <li class="menu__item col-auto">
                            <a href="/#restraunt" class="menu__link">ресторан</a>
                        </li>

                        <li class="menu__item col-auto">
                            <a href="/#contacts" class="menu__link">контакты</a>
                        </li>

                        <li class="menu__item col-auto">
                            <a href="/documents" class="menu__link">документы</a>
                        </li>
                    </ul>
                </nav>

                <button id="burger" class="burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>

            <address
                class="address header__address row justify-content-between align-items-start col-xxl-5 col-xl-10 col-lg-10 col-md-10 col-sm-10 col-9">
                <p class="address__geo">
                    <?php the_field('адрес', 'options'); ?>
                </p>

                <div class="hero__icons col-auto">
                    <?php if (get_field('номер_телефона', 'options')) { ?>
                        <a href="tel:<?php the_field('номер_телефона', 'options'); ?>" class="address__phone">
                            <?php the_field('номер_телефона', 'options'); ?>
                        </a>
                    <?php }
                    if (get_field('phone_2', 'options')) { ?>
                        <a href="tel:<?php the_field('phone_2', 'options'); ?>" class="address__phone">
                            <?php the_field('phone_2', 'options'); ?>
                        </a>
                    <?php } ?>
                </div>

                <ul class="address__language d-flex justify-content-between">
                </ul>
            </address>
        </div>
    </div>
</header>