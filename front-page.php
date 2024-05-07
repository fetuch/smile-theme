<?php get_header(); ?>

<div class="mx-auto max-w-7xl px-3">

    <?php if (have_posts()) : ?>
        <?php
        while (have_posts()) :
            the_post();
        ?>

            <?php the_content(); ?>

        <?php endwhile; ?>

    <?php endif; ?>

</div>

<?php
get_footer();
