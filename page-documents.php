<?php
/*
 * Template Name: Documents
 */

 get_header('other');
?>

<section>
    <div class="container section-block">
        <h2 class="documents__title">
            <?php echo get_the_title(); ?>
        </h2>

        <?php if (have_rows('new_document', 'options')) { ?>
            <ul class="documents__list document-list d-flex">
                <?php if (have_rows('new_document', 'options')) {
                    while (have_rows('new_document', 'options')) {
                        the_row();
                        $document_name = get_sub_field('document_name', 'options');
                        $document_link = get_sub_field('document_link', 'options');
                        ?>

                        <li class="document-list__item doc-list-item">
                            <a href="<?php echo $document_link; ?>" class="doc-list-item__link">
                                <?php echo $document_name; ?>
                            </a>
                        </li>

                        <?php
                    }
                } ?>
            </ul>

        <?php } ?>
    </div>
</section>