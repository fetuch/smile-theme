<?php
$programs = new WP_Query(array(
    'post_type' => 'program',
    'posts_per_page' => -1,
    'orderby' => 'title',
    'order' => 'ASC',
));
?>

<section class="my-10">
    <h2 class="text-2xl lg:text-4xl text-center mb-4 font-bold uppercase">Od pierwszoklasisty<br />do licealisty</h2>

    <img src="<?php echo get_theme_file_uri('/images/programs.png'); ?>" alt="">

    <div class="bg-primary p-6 text-white font-medium text-xl">
        <div class="md:grid grid-cols-<?php echo $programs->found_posts; ?> md:divide-x text-center overflow-hidden divide-white">
            <?php
            while ($programs->have_posts()) {
                $programs->the_post();
            ?>
                <div class="mb-3 md:mb-0 px-3 flex justify-center items-center">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="flex flex-col justify-center space-y-2 hover:text-gray-100">
                        <span class="text-sm"><?php the_excerpt(); ?></span>
                        <span><?php the_title(); ?></span>
                    </a>
                </div>
            <?php }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>