<?php
/**
 * Display Services Block
 * Отображает блок Услуги
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
$services_on = get_field('services_on_' . get_locale());
if (have_rows('add_service_' . get_locale()) && $services_on !== 'скрыть'):
?>

<section id="ski" class="services ski">
    <div class="container">
        <h2 class="ski__heading">
            <?php the_field('services_block_title_' . get_locale()); ?>
        </h2>

        <div class="row justify-content-between align-items-stretch ski__box ski-box">
            <ul class="ski-box__list col-md-4 col-12 align-items-stretch">

                <?php if (have_rows('add_service_' . get_locale())): ?>
                    <?php $i = 0;
                    while (have_rows('add_service_' . get_locale())):
                        the_row();
                        $service_title = get_sub_field('service_title_' . get_locale());
                        $index = $i++; // Создаём счётчик
                        ?>

                        <li class="ski-box__item">
                            <button class="ski-box__button" data-way="ski-<?php echo $index; ?>">
                                <?php echo $service_title; ?>
                            </button>
                        </li>

                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>

            <div class="col-md-8 col-12 ski-articles ski-box__article">
                <?php if (have_rows('add_service_target_' . get_locale())): ?>
                    <?php $i = 0;
                    while (have_rows('add_service_target_' . get_locale())):
                        the_row();
                        $service_target = get_sub_field('service_target_title_' . get_locale());
                        $service_target_image = get_sub_field('service_target_image_' . get_locale());
                        $index = $i++; // Создаём счётчик
                        ?>

                        <article class="ski-articles__article <?php if($index === 0) {?>active<?php } ?>"
                            data-target="ski-<?php echo $index; ?>"
                            style="background-image: url( <?php echo $service_target_image['url']; ?> )"
                        >
                            <h4 class="ski-articles__heading">
                                <?php echo $service_target; ?>
                            </h4>

                            <div class="ski-gradient"></div>
                        </article>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>