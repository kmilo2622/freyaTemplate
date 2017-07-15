<?php get_header(); ?>

<article>
    <div class="row">

        <div class="entry-header" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(<?php echo get_stylesheet_directory_uri() ?>/imagenes/freya.jpg);">
            <h1 class="text-center">Artículos</h1>
        </div>

        <br><br>

        <div class="container">

            <div class="col-md-12">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <div class="col-md-10">

                        <div class="col-md-5">
                            <div class="thumbnail">
                                <a href="<?php echo get_permalink() ?>">
                                    <div class="caption text-center">
                                        <h3><?php the_title() ?></h3>
                                    </div>
                                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="<?php the_title() ?>" style="width:100%">
                                </a>
                                <div class="caption">
                                    <p>
                                        <?php the_excerpt(); ?>
                                        <a href="<?php echo get_permalink() ?>">Leer Más...</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>


                <?php endwhile; ?>
            <?php endif; ?>

            <div class="col-md-2">
                <?php get_sidebar() ?>
            </div>
        </div>
    </div>
</div>
</article>
<?php get_footer(); ?>
