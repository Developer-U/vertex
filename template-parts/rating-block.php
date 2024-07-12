<?php
/**
 * Display Rating Block
 * Отображает блок Рейтинг
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
$rating_on = get_field('rating_on_' . get_locale(), 'options');

if( $rating_on !== 'скрыть') {
    if( get_locale() == 'ru_RU') { ?>
        <h2 class="ski__heading">
            Рейтинг отеля&nbsp;Vertex
            <?php
            echo '<pre>';
            print_r($rating_on);
            echo '<pre>';
            ?>
        </h2>

        <div class="col-12 top-actions__rating">
            <ul class="d-flex col-10 top-actions__list rating-list align-items-stretch justify-content-between">
                <li class="rating-list__item col-xl-auto col-sm-2 col-6">
                    <figure class="rating-list__image">
                        <img src="/wp-content/themes/vertex/img/rating1.png" alt="Рейтинг на Booking"
                            class="rating-list__img">

                        <figcaption class="rating-list__text">9,4 из 10</figcaption>
                    </figure>
                </li>

                <li class="rating-list__item col-xl-auto col-sm-2 col-6">
                    <figure class="rating-list__image">
                        <img src="/wp-content/themes/vertex/img/rating2.png" alt="Рейтинг на Tripadvisor"
                            class="rating-list__img">

                        <figcaption class="rating-list__text">30 из 58</figcaption>
                    </figure>
                </li>

                <li class="rating-list__item col-xl-auto col-sm-2 col-6">
                    <figure class="rating-list__image">
                        <img src="/wp-content/themes/vertex/img/rating3.png" alt="Рейтинг на Яндекс Карты"
                            class="rating-list__img">

                        <figcaption class="rating-list__text">5,0</figcaption>
                    </figure>
                </li>

                <li class="rating-list__item col-xl-auto col-sm-2 col-6">
                    <figure class="rating-list__image">
                        <img src="/wp-content/themes/vertex/img/rating4.png" alt="Рейтинг на 101 Hotels"
                            class="rating-list__img">

                        <figcaption class="rating-list__text">9,4 из 10</figcaption>
                    </figure>
                </li>

                <li class="rating-list__item col-xl-auto col-sm-2 col-6">
                    <figure class="rating-list__image">
                        <img src="/wp-content/themes/vertex/img/rating5.png" alt="Рейтинг на One Two Trip"
                            class="rating-list__img">

                        <figcaption class="rating-list__text">9,4 из 10</figcaption>
                    </figure>
                </li>
            </ul>
        </div>

    <?php } else { ?>
        <h2 class="ski__heading">
            Vertex Hotel Rating
        </h2>

        <div class="col-12 top-actions__rating">
            <ul class="row col-10 top-actions__list rating-list align-items-stretch justify-content-between">
                <li class="rating-list__item col-xl-auto col-sm-2 col-6">
                    <figure class="rating-list__image">
                        <img src="/wp-content/themes/vertex/img/rating1.png" alt="Рейтинг на Booking"
                            class="rating-list__img">

                        <figcaption class="rating-list__text">9,4 from 10</figcaption>
                    </figure>
                </li>

                <li class="rating-list__item col-xl-auto col-sm-2 col-6">
                    <figure class="rating-list__image">
                        <img src="/wp-content/themes/vertex/img/rating2.png" alt="Рейтинг на Tripadvisor"
                            class="rating-list__img">

                        <figcaption class="rating-list__text">30 from 58</figcaption>
                    </figure>
                </li>

                <li class="rating-list__item col-xl-auto col-sm-2 col-6">
                    <figure class="rating-list__image">
                        <img src="/wp-content/themes/vertex/img/rating3.png" alt="Рейтинг на Яндекс Карты"
                            class="rating-list__img">

                        <figcaption class="rating-list__text">5,0</figcaption>
                    </figure>
                </li>

                <li class="rating-list__item col-xl-auto col-sm-2 col-6">
                    <figure class="rating-list__image">
                        <img src="/wp-content/themes/vertex/img/rating4.png" alt="Рейтинг на 101 Hotels"
                            class="rating-list__img">

                        <figcaption class="rating-list__text">9,4 from 10</figcaption>
                    </figure>
                </li>

                <li class="rating-list__item col-xl-auto col-sm-2 col-6">
                    <figure class="rating-list__image">
                        <img src="/wp-content/themes/vertex/img/rating5.png" alt="Рейтинг на One Two Trip"
                            class="rating-list__img">

                        <figcaption class="rating-list__text">9,4 from 10</figcaption>
                    </figure>
                </li>
            </ul>
        </div>
    <?php }
}