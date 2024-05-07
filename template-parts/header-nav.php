<nav class="bg-white  shadow-[0_3px_10px_rgb(0,0,0,0.2)] z-10 relative">
    <div class="mx-auto max-w-7xl">
        <div class="flex justify-between">
            <div class="flex w-full justify-between">
                <div class="flex flex-shrink-0 items-center">
                    <?php
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

                    ?>
                    <a href="<?php echo home_url(); ?>">
                        <img class="block h-20 lg:h-24 w-auto" src="<?php echo esc_url($logo[0]); ?>" alt="<?php echo get_bloginfo('name'); ?>">
                    </a>
                </div>

                <?php
                wp_nav_menu(array(
                    'theme_location' => 'headerMenuLocation'
                ));
                ?>
            </div>
        </div>
    </div>
</nav>