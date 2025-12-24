<?php
/**
 * Display Block Hero slider
 * Вывод блока Слайдер на главной первый экран
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
$hero_video = get_field('hero_video', 'options');
?>

<div class="swiper hero-top hero-slider_<?php echo get_locale(); ?>">
    <?php
    if ($hero_video) { ?>
        <video autoplay loop disablepictureinpicture width="100%" height="100%">
            <source src="<?php echo esc_url($hero_video['url']); ?>" type="video/webm" />

            <source src="<?php echo esc_url($hero_video['url']); ?>" type="video/mp4" />
        </video>
    <?php } else { ?>
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
    <?php } ?>
</div>