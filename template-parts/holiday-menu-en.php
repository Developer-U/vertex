<?php
/**
 * Display Holyday Menu block EN
 * Отражает блок с Новогодним меню / картинка справа и слева
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
$block_holiday_view = get_field('block_holiday_view_en');
$plashka_title = get_field('plashka_title_en');
if ($block_holiday_view == 'view') {
    ?>

    <section id="holyday_menu_en" class="section services about two-columns grey">
        <div class="container">
            <h2 class="services__heading">
                <?php
                if (get_field('holyday_title_en')) {
                    echo get_field('holyday_title_en');
                } else {
                    echo 'New year width Vertex';
                }
                ?>
            </h2>

            <ul class="two-columns__list two-cols-list d-grid align-items-center">
                <?php
                if (have_rows('add_photo_block_en')):
                    while (have_rows('add_photo_block_en')):
                        the_row();
                        $gallery_content = get_sub_field('gallery_photo_content_en');
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