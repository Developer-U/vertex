<?php
/*
 * Template Name: Страница документа
 */
get_header('other');

?>

<section class="documents">
    <div class="container section-block">
        <h1 class="document__title">
            <?php echo get_the_title(); ?>
        </h1>

        <article class="document__wrap document-wrap post">
            <?php echo get_the_content(); ?>
        </article>

        <div class="buttons-wrap d-flex gap-2">
            <a href="/documents" class="gold-button">К списку документов</a>

            <a href="/" class="gold-button">На главную</a>
        </div>
    </div>
</section>
