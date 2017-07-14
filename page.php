<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div style="background-image:linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.1)), url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>'); height:70vh; background-size:cover;
            background-attachment:fixed;">
        </div>
        <section class="container page-content">
            <div>
                <br>
                <h2 class="text-center"><?php the_title(); ?></h2>
                <hr><br>
                <p><?php the_content(); ?></p>
            </div>
        </section>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
