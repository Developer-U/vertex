<?php
/**
 * Display Block Hero slider
 * Вывод блока Слайдер на главной первый экран
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>

<div class="swiper hero-slider_<?php echo get_locale(); ?>">
    <div class="swiper-wrapper">

        <?php if (have_rows('new_hero_slide_' . get_locale(), 'options')): ?>
            <?php while (have_rows('new_hero_slide_' . get_locale(), 'options')):
                the_row();
                $hero_slide_image = get_sub_field('hero_slide_image_' . get_locale(), 'options');
                ?>

                <article class="swiper-slide hero-slider__slide"
                    style="<?php if ($hero_slide_image): ?>background-image: url(<?php echo $hero_slide_image['url']; ?> ) <?php else: ?>background: #1C2540;<?php endif; ?>">
                </article>

            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <!-- <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div> -->
</div>