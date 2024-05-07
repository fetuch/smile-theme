<article class="relative isolate flex flex-col gap-8 lg:flex-row">
    <div class="relative aspect-[16/9] sm:aspect-[2/1] lg:aspect-square lg:w-64 lg:shrink-0">
        <img src="<?php the_post_thumbnail_url('blogPostList'); ?>" alt="" class="absolute inset-0 h-full w-full rounded-2xl bg-gray-50 object-cover">
        <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
    </div>
    <div>
        <div class="flex items-center gap-x-4 text-xs">
            <time datetime="<?php the_time('Y-m-d'); ?>" class="text-gray-500"><?php the_time('d F'); ?></time>
            <?php
            $categories = get_the_category();

            foreach ($categories as $category) {
            ?>
                <a href="<?php echo get_category_link($category); ?>" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">
                    <?php echo $category->name; ?>
                </a>
            <?php } ?>
        </div>

        <div class="group relative max-w-xl">
            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                <a href="<?php the_permalink(); ?>">
                    <span class="absolute inset-0"></span>
                    <?php the_title(); ?>
                </a>
            </h3>
            <p class="mt-5 text-sm leading-6 text-gray-600">
                <?php the_excerpt(); ?>
            </p>
        </div>
    </div>
</article>