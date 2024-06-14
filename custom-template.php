<?php
/*
Template Name: custom template
*/
?>

<main>


    <?php get_header(); ?>
    <div class="l-customTemplate">

        <div class="l-customTemplate__eyecatch">
            <div class="c-eyecatch">
                <figure class="c-eyecatch__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/counter.webp" alt="">
                </figure>
            </div>
            <!-- /.c-eyecatch -->
        </div>
        <!-- /.l-customTemplate__eyecatch -->

        <div class="l-customTemplate__content">
            <?php
            while (have_posts()) :
                the_post();
                the_content();
            endwhile;
            ?>
        </div>
        <!-- /.l-customTmeplate__container- -->

    </div>
    <!-- /.l-customTemplate -->

    <?php get_footer(); ?>


</main>