<section class="gallery">
    <div class="swiper gallery__slider">       
        <div class="swiper-wrapper">
            <?php if( have_rows('add_gallery_slider', 'options') ): ?>
            <?php while( have_rows('add_gallery_slider', 'options') ): the_row();
            $galSlideImage = get_sub_field('gallery_slide_image', 'options');
            ?>

                <div class="swiper-slide">  
                    <a class="gallery__one swiper-slide" data-fancybox="first-gallery" href="<?php echo esc_url($galSlideImage['url']); ?>">
                        <figure class="gallery__image">
                            <?php if( get_field('first-link-about') ): ?>
                                <img src="<?php echo esc_url($galSlideImage['url']); ?>" alt="<?php echo esc_attr($galSlideImage['alt']); ?>">
                            <?php endif; ?>                    
                        </figure>
                    </a>
                </div>

            <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <!-- navigation -->
        <div class="swiper-button-prev swiper-button-prev2"></div>
        <div class="swiper-button-next swiper-button-next2"></div>

    </div>
</section>