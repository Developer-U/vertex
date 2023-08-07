<?php
    if (get_locale() == 'en_US') {
?>      
    
    <footer class="footer">
        <div class="container">
            <div class="row footer__box justify-content-between">
                <a href="/en" class="footer__cont col-lg-3 col-sm-4 col-12">
                    <img src="/wp-content/themes/vertex/img/logo.svg" alt="Логотип Vertex" class="footer__logo">
                </a>

                <ul class="menu-list footer__list col-lg-2 col-sm-4 col-12">
                    <li class="menu-list__item">
                        <a href="#about" class="menu-list__link js-slideTo">about hotel</a>
                    </li>

                    <li class="menu-list__item">
                        <a href="#appart" class="menu-list__link js-slideTo">rooms</a>
                    </li>

                    <li class="menu-list__item">
                        <a href="#villa" class="menu-list__link js-slideTo">villa</a>
                    </li>

                    <li class="menu-list__item">
                        <a href="#spa" class="menu-list__link js-slideTo">spa</a>
                    </li>

                    <li class="menu-list__item">
                        <a href="#vip-spa" class="menu-list__link js-slideTo">vip spa</a>
                    </li>

                    <li class="menu-list__item">
                        <a href="#restraunt" class="menu-list__link js-slideTo">restraunts</a>
                    </li>

                    <li class="menu-list__item">
                        <a href="#reviews" class="menu-list__link js-slideTo">reviews</a>
                    </li>

                    <li class="menu-list__item">
                        <a href="#contacts" class="menu-list__link js-slideTo">contacts</a>
                    </li>
                </ul>

                <ul class="menu-list footer__list col-lg-3 col-sm-4 col-12">
                    <li class="menu-list__item">
                        <a href="#pool" class="menu-list__link js-slideTo">swimming pool</a>
                    </li>

                    <li class="menu-list__item">
                        <a href="#transfer" class="menu-list__link js-slideTo">transfer</a>
                    </li>

                    <li class="menu-list__item">
                        <a href="#ski" class="menu-list__link js-slideTo">ski services</a>
                    </li>                   
                </ul>

                <ul class="footer__social col-lg-3 col-12 row justify-content-between">
                    <!-- <li class="social__item col-auto">
                        <a href="#" class="social__link insta"></a>
                    </li> -->

                    <li class="social__item col-auto">
                        <a href="<?php the_field('whatsapp', 'options'); ?>" class="social__link whatsapp" target="_blank"></a>
                    </li>

                    <!-- <li class="social__item col-auto">
                        <a href="#" class="social__link viber"></a>
                    </li> -->

                    <li class="social__item col-auto">
                        <a href="<?php the_field('telegram', 'options'); ?>" class="social__link telegram" target="_blank"></a>
                    </li>
                </ul>
            </div>

            <div class="row copyright footer__copyright">
                <p class="copyright col-lg-6 col-12">
                    © Vertex 2021. All rights reserved. <a class="copyright__link" href="/privacy-en">Privacy policy</a>
                </p>

                <p class="copyright col-lg-6 col-12">
                    Website development: <a class="copyright__link" href="https://sim-site.ru"> "Symbol style" web studio</a>
                </p>
            </div>
        </div>
    </footer>

    <div class="to-top"></div>

    <!--Попап забронировать SPA-->
    <div id="reserve" class="blackContainer application js-reserve">
        <div class="application__box col-xl-6 col-sm-8 col-11">
            <button type="submit" class="application__close js-reserveClose"></button>

            <h3 class="villa__subheading">Leave a request and we will contact you within 15 minutes</h3>

            <?php echo do_shortcode('[contact-form-7 id="18" title="Контактная форма попап Забронировать SPA"]'); ?>
        </div>
    </div>

    <!--Попап забронировать VIP SPA-->
    <div id="vipSpa" class="blackContainer application js-vipSpaContainer">
        <div class="application__box col-xl-6 col-sm-8 col-11">
            <button type="submit" class="application__close js-vipSpaClose"></button>

            <h3 class="villa__subheading">Leave a request and we will contact you within 15 minutes</h3>

            <?php echo do_shortcode('[contact-form-7 id="22" title="Контактная форма попап Забронировать VIP-SPA"]'); ?>
        </div>
    </div>

    <!--Попап Узнать про трансфер-->
     <div id="transfer" class="blackContainer application js-transferContainer">
        <div class="application__box col-xl-6 col-sm-8 col-11">
            <button type="submit" class="application__close js-transferClose"></button>

            <h3 class="villa__subheading">Leave a request and we will contact you within 15 minutes</h3>

            <?php echo do_shortcode('[contact-form-7 id="23" title="Узнать про трансфер"]'); ?>
        </div>
    </div>

     <!--Попап Прайс-->
    <div class="vip-spa__container">
        <button type="submit" class="vip-spa__close js-priceClose"></button>
        <div class="swiper swiper-price container vip-spa__slider">
            <!-- враппер -->
            <div class="swiper-wrapper">

                <?php if( have_rows('add_price') ): ?>
                <?php while( have_rows('add_price') ): the_row();
                    $image = get_sub_field('new_price');
                ?>

                <!-- слайды -->
                <div class="swiper-slide swiper-vip__slide">
                    <figure class="swiper-price__image">
                        <img src="<?= $image; ?>" class="swiper-price__img">
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

    <?php
        } elseif(get_locale() == 'ru_RU') {
    ?>

    <footer class="footer">
        <div class="container">
            <div class="row footer__box justify-content-between">
                <a href="/" class="footer__cont col-lg-3 col-sm-4 col-12">
                    <img src="/wp-content/themes/vertex/img/logo.svg" alt="Логотип Vertex" class="footer__logo">
                </a>

                <ul class="menu-list footer__list col-lg-2 col-sm-4 col-12">
                    <li class="menu-list__item">
                        <a href="https://vertexhotel.ru/#about" class="menu-list__link js-slideTo">об отеле</a>
                    </li>

                    <li class="menu-list__item">
                        <a href="#appart" class="menu-list__link js-slideTo">номера</a>
                    </li>

                    <li class="menu-list__item">
                        <a href="#villa" class="menu-list__link js-slideTo">вилла</a>
                    </li>

                    <li class="menu-list__item">
                        <a href="#spa" class="menu-list__link js-slideTo">spa</a>
                    </li>

                    <li class="menu-list__item">
                        <a href="#vip-spa" class="menu-list__link js-slideTo">vip spa</a>
                    </li>

                    <li class="menu-list__item">
                        <a href="#restraunt" class="menu-list__link js-slideTo">ресторан</a>
                    </li>

                    <li class="menu-list__item">
                        <a href="#reviews" class="menu-list__link js-slideTo">отзывы</a>
                    </li>

                    <li class="menu-list__item">
                        <a href="#contacts" class="menu-list__link js-slideTo">контакты</a>
                    </li>
                </ul>

                <ul class="menu-list footer__list col-lg-3 col-sm-4 col-12">
                    <li class="menu-list__item">
                        <a href="#pool" class="menu-list__link js-slideTo">бассейн</a>
                    </li>

                    <li class="menu-list__item">
                        <a href="#transfer" class="menu-list__link js-slideTo">трансфер</a>
                    </li>

                    <li class="menu-list__item">
                        <a href="#ski" class="menu-list__link js-slideTo">горнолыжные услуги</a>
                    </li>                   
                </ul>

                <ul class="footer__social col-lg-3 col-12 row justify-content-between">
                    <!-- <li class="social__item col-auto">
                        <a href="#" class="social__link insta"></a>
                    </li> -->

                    <li class="social__item col-auto">
                        <a href="<?php the_field('whatsapp', 'options'); ?>" class="social__link whatsapp" target="_blank"></a>
                    </li>

                    <!-- <li class="social__item col-auto">
                        <a href="#" class="social__link viber"></a>
                    </li> -->

                    <li class="social__item col-auto">
                        <a href="<?php the_field('telegram', 'options'); ?>" class="social__link telegram" target="_blank"></a>
                    </li>
                </ul>
            </div>

            <div class="row copyright footer__copyright">
                <p class="copyright col-lg-6 col-12">
                    © Vertex 2021. All rights reserved. <a class="copyright__link" href="/privacy/">Политика конфиденциальности</a>
                </p>

                <p class="copyright col-lg-6 col-12">
                    Разработка сайта: <a class="copyright__link" href="https://sim-site.ru"> веб-студия «Символ стиля»</a>
                </p>
            </div>
        </div>
    </footer>

    <div class="to-top"></div>

    <!--Попап забронировать SPA-->
    <div id="reserve" class="blackContainer application js-reserve">
        <div class="application__box col-xl-6 col-sm-8 col-11">
            <button type="submit" class="application__close js-reserveClose"></button>

            <h3 class="villa__subheading">Оставьте заявку и&nbsp;мы&nbsp;свяжемся с&nbsp;вами в&nbsp;течение 15&nbsp;минут</h3>

            <?php echo do_shortcode('[contact-form-7 id="18" title="Контактная форма попап Забронировать SPA"]'); ?>
        </div>
    </div>

    <!--Попап забронировать VIP SPA-->
    <div id="vipSpa" class="blackContainer application js-vipSpaContainer">
        <div class="application__box col-xl-6 col-sm-8 col-11">
            <button type="submit" class="application__close js-vipSpaClose"></button>

            <h3 class="villa__subheading">Оставьте заявку и&nbsp;мы&nbsp;свяжемся с&nbsp;вами в&nbsp;течение 15&nbsp;минут</h3>

            <?php echo do_shortcode('[contact-form-7 id="22" title="Контактная форма попап Забронировать VIP-SPA"]'); ?>
        </div>
    </div>

    <!--Попап Узнать про трансфер-->
     <div id="transfer" class="blackContainer application js-transferContainer">
        <div class="application__box col-xl-6 col-sm-8 col-11">
            <button type="submit" class="application__close js-transferClose"></button>

            <h3 class="villa__subheading">Оставьте заявку и&nbsp;мы&nbsp;свяжемся с&nbsp;вами в&nbsp;течение 15&nbsp;минут</h3>

            <?php echo do_shortcode('[contact-form-7 id="23" title="Узнать про трансфер"]'); ?>
        </div>
    </div>

     <!--Попап Прайс-->
    <div class="vip-spa__container">
        <button type="submit" class="vip-spa__close js-priceClose"></button>
        <div class="swiper swiper-price container vip-spa__slider">
            <!-- враппер -->
            <div class="swiper-wrapper">

                <?php if( have_rows('add_price') ): ?>
                <?php while( have_rows('add_price') ): the_row();
                    $image = get_sub_field('new_price');
                ?>

                <!-- слайды -->
                <div class="swiper-slide swiper-vip__slide">
                    <figure class="swiper-price__image">
                        <img src="<?= $image; ?>" class="swiper-price__img">
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

    <?php
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.js"></script>
    <script type="text/javascript">
	    document.addEventListener( 'wpcf7mailsent', function( event ) {      
        
        setTimeout(function() {         
            window.location.replace("/spasibo/");                         
        }, 100);  

        } ); 
    </script>  

    <?php wp_footer(); ?>

    </body>






</html>