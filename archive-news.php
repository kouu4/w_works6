<?php get_header(); ?>

<div class="l-archive">
    <header class="l-archive__header">
        <h2 class="l-archive__ttl">
            <span class="p-archive__ttl">
                お知らせ-<?php post_type_archive_title(); ?>
            </span>
        </h2>
    </header>

    <?php if (have_posts()) : ?>
        <div class="l-archive__post">
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="p-archive">
                        <a href="<?php the_permalink(); ?>" class="p-archive__link">
                            <header class="p-archive__head">
                                <h2 class="p-archive__ttl">
                                    <?php the_title(); ?>
                                </h2>
                                <time datetime="<?php echo get_the_date('c'); ?>" class="p-archive__time">
                                    <?php echo get_the_date(); ?>
                                </time>
                            </header>
                            <div class="p-archive__summary">
                                <?php the_excerpt(); ?>
                            </div>
                        </a>
                        <!-- /.p-archive__summary -->
                    </div>
                    <!-- /.p-archive -->
                </article>
            <?php endwhile; ?>
        </div>
        <!-- /.l-archive__post -->
    <?php else : ?>
        <p>
            <?php _e('There are no posts to display.', 'news'); ?>
        </p>
    <?php endif; ?>
</div>
<!-- /.l-archive -->


<?php get_footer(); ?>