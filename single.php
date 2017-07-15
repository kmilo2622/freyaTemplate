<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <article>
            <div class="row">
                <div class="entry-header" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>);">
                    <h1 class="text-center"><?php the_title(); ?></h1>
                </div>
                <div class="container page-content">
                    <div class="col-md-12">
                        <div class="col-md-10">
                            <br>
                            <h2 class="text-center"><?php the_title(); ?></h2>
                            <hr><br>
                            <p><?php the_content(); ?></p>
                        </div>
                        <div class="col-md-2">
                            <?php get_sidebar(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </article>

    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
