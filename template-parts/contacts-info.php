<?php
/**
 * Display Contacts info Block
 * Отражает блок с контактной информацией
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
$contacts_info_title = get_field('contacts_info_title_' . get_locale());
$phone_2 = get_field('phone_2', 'options');
if ($contacts_info_title) {
    ?>

    <div class="contact-info">
        <div class="container">
            <?php if ($contacts_info_title) {
                echo '<h2 class="restraunts__heading">' . $contacts_info_title . '</h2>';
            } ?>

            <ul class="contact-info__list d-grid">
                <li class="contact-info__block conts-info-block phones col-auto">
                    <h3 class="spa-box__subheading">
                        <?php
                        if (get_locale() == 'en_US') {
                            echo 'Booking by&nbsp;phone:';
                        } else {
                            echo 'Бронирование по&nbsp;телефону:';
                        } ?>
                    </h3>
                    <a href="tel:<?php the_field('номер_телефона', 'options'); ?>"
                        class="spa-box__item phone"><?php the_field('номер_телефона', 'options'); ?>
                    </a>
                    <?php
                    if ($phone_2) { ?>
                        <a href="tel:<?php echo $phone_2; ?>" class="spa-box__item phone"><?php echo $phone_2; ?>
                        </a>
                    <?php } ?>
                </li>

                <li class="contact-info__block conts-info-block mail col-auto">
                    <h3 class="spa-box__subheading">
                        <?php
                        if (get_locale() == 'en_US') {
                            echo 'Our email:';
                        } else {
                            echo 'Наша почта:';
                        } ?>
                    </h3>
                    <a href="mailto:<?php the_field('email', 'options'); ?>"
                        class="spa-box__item mail"><?php the_field('email', 'options'); ?>
                    </a>
                </li>

                <li class="contact-info__block conts-info-block address col-auto">
                    <h3 class="spa-box__subheading">
                        <?php
                        if (get_locale() == 'en_US') {
                            echo 'Our address:';
                        } else {
                            echo 'Наш адрес:';
                        } ?>
                    </h3>

                    <?php
                    if (get_locale() == 'en_US') {
                        ?>

                        <p class="spa-box__item address">
                            <?php the_field('address_en', 'options'); ?>
                        </p>

                        <?php
                    } elseif (get_locale() == 'ru_RU') {
                        ?>

                        <p class="spa-box__item address">
                            <?php the_field('адрес', 'options'); ?>
                        </p>

                        <?php
                    }
                    ?>
                </li>

                <li class="contact-info__block conts-info-block contact-social col-auto">
                    <h3 class="spa-box__subheading">
                        <?php
                        if (get_locale() == 'en_US') {
                            echo 'Our social network:';
                        } else {
                            echo 'Наши социальные сети:';
                        } ?>
                    </h3>

                    <ul class="contact-social__list contact-social-list d-flex">
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
                </li>
            </ul>
        </div>
    </div>

<?php } ?>