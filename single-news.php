<?php get_header(); ?>

<div class="l-single">
    <main class="l-single__main">

        <?php
        // WordPressのループ開始
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="l-single__head">
                        <?php
                        if (is_singular()) :
                            the_title('<h2 class="l-single__ttl">', '</h2>');
                        else :
                            the_title('<h2 class="l-single__ttl"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
                        endif;

                        if ('news' === get_post_type()) :
                        ?>
                            <div class="l-single__entryMeta">
                                <?php
                                the_time('Y年m月d日');
                                ?>
                            </div><!-- .l-single__entryMeta -->
                        <?php endif; ?>
                    </div><!-- .l-single__head -->

                    <div class="l-single__content">
                        <?php
                        the_content();

                        wp_link_pages(
                            array(
                                'before' => '<div class="page-links">' . __('Pages:', 'your-theme-textdomain'),
                                'after'  => '</div>',
                            )
                        );
                        ?>
                    </div><!-- .l-single__content -->

                </article><!-- #post-<?php the_ID(); ?> -->

            <?php
            endwhile;
        endif;
        ?>

    </main>
</div><!-- l-single -->

<?php get_footer(); ?>