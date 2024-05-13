<?php get_header(); ?>

<div class="our-classes-container">
    <div class="mx-auto max-w-7xl text-center">
        <h1 class="my-16 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl text-primary">Nasze zajęcia</h1>
    </div>

    <div class="mx-auto my-16 px-3 grid max-w-7xl grid-cols-1 gap-x-8 gap-y-20 lg:grid-cols-4">
        <?php
        $events = new WP_Query(array(
            'paged' => get_query_var('paged', 1),
            'post_type' => 'event',
        ));

        while ($events->have_posts()) {
            $events->the_post(); ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <article class="flex flex-col items-start justify-between">
                    <div class="relative w-full">
                        <img src="<?php the_post_thumbnail_url(''); ?>" alt="" class="aspect-[1/1] w-full bg-gray-100 object-cover">
                    </div>

                    <div class="max-w-xl bg-gray-100 w-full px-3 py-2">
                        <div class="group relative">
                            <h3 class="text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                <?php the_title(); ?>
                            </h3>
                        </div>
                    </div>
                    <div class="max-w-xl bg-primary w-full px-3 py-2">
                        <div class="group relative text-center">
                            <span class="text-lg font-semibold leading-6 text-white">
                                ZOBACZ
                            </span>
                        </div>
                    </div>
                </article>
            </a>

        <?php } ?>

    </div>

    <div class="mx-auto my-16 px-3 max-w-2xl">
        <?php echo paginate_links(array(
            'total' => $events->max_num_pages
        )); ?>
    </div>
</div>

<?php
get_footer();
