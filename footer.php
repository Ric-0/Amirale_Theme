    </div>
    <footer>
        <?php if(has_custom_logo()) : ?>
            <?php the_custom_logo(); ?>
        <?php else : ?>
            <!--<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>-->
        <?php endif; ?>
        <div class="footer">
            <div class="site-map">
                <h2><?= wp_get_nav_menu_name('footer') ?></h2>
                <?php
                wp_nav_menu([
                    'theme_location' => 'footer',
                    'container' => false,
                    'menu_class' => 'navbar-nav mr-auto'
                ])
                ?>
            </div>
            <div class="link">
                <h2><?= wp_get_nav_menu_name('bieres') ?></h2>
                <?php
                wp_nav_menu([
                    'theme_location' => 'bieres',
                    'container' => false,
                    'menu_class' => 'navbar-nav mr-auto'
                ])
                ?>
            </div>
            <div class="social">
                <h2><?= wp_get_nav_menu_name('social') ?></h2>
                <?php
                wp_nav_menu([
                    'theme_location' => 'social',
                    'container' => false,
                    'menu_class' => 'navbar-nav mr-auto'
                ])
                ?>
            </div>
        </div>
    </footer>
    <?php wp_footer() ?>
</body>
</html>