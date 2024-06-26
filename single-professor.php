<?php get_header(); ?>

<div class="container my-8 mx-auto max-w-7xl  py-8 px-4 lg:px-8"">

    <?php if (have_posts()) : ?>

        <?php
        while (have_posts()) :
            the_post();
        ?>

            <?php get_template_part('template-parts/content', 'professor'); ?>

            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            // if ( comments_open() || get_comments_number() ) :
            // 	comments_template();
            // endif;
            ?>

        <?php endwhile; ?>

    <?php endif; ?>

</div>

<?php
get_footer();
