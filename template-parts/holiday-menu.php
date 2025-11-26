<?php
/**
 * Display Holyday Menu block
 * Отражает блок с Новогодним меню / картинка справа и слева
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
$block_holiday_view = get_field('block_holiday_view_ru');
if ($block_holiday_view == 'показать') {
    $plashka_title = get_field('plashka_title');
    ?>

    <section id="holyday_menu_ru" class="section services about two-columns grey">
        <div class="container">
            <h2 class="services__heading">
                <?php
                if (get_field('holyday_title_ru')) {
                    echo get_field('holyday_title_ru');
                } else {
                    echo 'Новый год с Vertex';
                }
                ?>
            </h2>

            <ul class="two-columns__list two-cols-list d-grid align-items-center">
                <?php
                if (have_rows('add_photo_block_ru')):
                    while (have_rows('add_photo_block_ru')):
                        the_row();
                        $gallery_content = get_sub_field('gallery_photo_content_ru');
                        ?>

                        <li class="gallery-tab-list__item">
                            <a class="gallery-tab-list__image" href="<?= $gallery_content['url']; ?>" data-fancybox="holyday">
                                <img src="<?= $gallery_content['url']; ?>" alt="<?= $gallery_content['alt']; ?>">
                            </a>
                        </li>

                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>

            <?php if ($plashka_title) { ?>
                <div class="plashka__title">
                    <?php echo $plashka_title; ?>
                </div>
            <?php } ?>
        </div>
    </section>

<?php }