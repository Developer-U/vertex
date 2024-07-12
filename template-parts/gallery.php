<?php
/**
 * Display Galery Block
 * Отображает блок Галерея
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
$galery_on = get_field('galery_on_' . get_locale(), 'options');

if($galery_on !== 'скрыть') {
?>
<section class="gallery">
    <div class="swiper gallery__slider_<?php echo get_locale(); ?>">       
        <div class="swiper-wrapper">
            <?php if( have_rows('add_gallery_slider_' . get_locale(), 'options') ): ?>
            <?php while( have_rows('add_gallery_slider_' . get_locale(), 'options') ): the_row();
            $galSlideImage = get_sub_field('gallery_slide_image_' . get_locale(), 'options');
            ?>
                
                <a data-fancybox="gallery" class="swiper-slide gallery__one swiper-slide gallery__image" href="<?php echo $galSlideImage['url']; ?>">            
                    <img src="<?php echo $galSlideImage['url']; ?>" alt="<?php echo $galSlideImage['alt']; ?>">                      
                </a>              

            <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <!-- navigation -->
        <div class="swiper-button-prev swiper-button-prev2"></div>
        <div class="swiper-button-next swiper-button-next2"></div>

    </div>
</section>
<?php } 