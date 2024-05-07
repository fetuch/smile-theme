<article class="flex flex-col items-start justify-between">
    <div class="relative w-full">
        <img src="<?php the_post_thumbnail_url('blogPostList'); ?>" alt="" class="aspect-[16/9] w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
        <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
    </div>
    <div class="max-w-xl h-full">
        <div class="mt-8 flex items-center gap-x-4 text-xs">
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

        <div class="group relative">
            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                <a href="<?php the_permalink(); ?>">
                    <span class="absolute inset-0"></span>
                    <?php the_title(); ?>
                </a>
            </h3>
            <div class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">
                <?php the_excerpt(); ?>
            </div>
        </div>
    </div>
</article>