<aside id="sidebar">
    <?php if (is_active_sidebar('main_sidebar')) {
        dynamic_sidebar('main_sidebar');
    } else { ?>

        <div class="widget">
            <h3 class="property_view_h"><?php _e('Buscar', 'freya'); ?></h3>
            <?php get_search_form() ?>
        </div>

        <?php } ?>
    </aside>