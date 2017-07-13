<?php get_header(); ?>
<!-- <div class="header-picture"> </div> -->
<div class="page_wrapper" data-stellar-background-ratio=".5" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>');">
    
    <section class="text1">
        <div id="text1">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>

                <?php endwhile; ?>

            <?php endif; ?>
        </div>
    </section>

    <?php get_footer(); ?>
