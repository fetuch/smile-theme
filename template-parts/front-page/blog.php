<section class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-10">
    <div class="mx-auto max-w-2xl text-center mb-16">
        <h2 class="text-3xl font-medium tracking-tight text-primary sm:text-4xl mb-3">Blog</h2>

        <div class="border border-secondary mx-auto w-20 text-center"></div>
    </div>

    <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:max-w-6xl lg:grid-cols-3 px-4 sm:px-6 lg:px-8 mb-16">
        <?php
        $recentPosts = new WP_Query(array(
            'posts_per_page' => 3
        ));

        while ($recentPosts->have_posts()) {
            $recentPosts->the_post();
        ?>
            <?php get_template_part('template-parts/blog-preview'); ?>
        <?php }
        wp_reset_postdata(); ?>
    </div>

    <p class="text-center"><a href="<?php echo home_url('/blog'); ?>" class="px-4 py-2 border border-secondary text-secondary hover:bg-secondary hover:text-white">Zobacz wszystkie wpisy</a></p>
</section>