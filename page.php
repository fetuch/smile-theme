<?php get_header(); ?>

<div class="bg-white px-6 py-20 lg:px-8">

	<?php if (have_posts()) : ?>
		<?php
		while (have_posts()) :
			the_post();
		?>

			<?php get_template_part('template-parts/content', get_post_format()); ?>

		<?php endwhile; ?>

	<?php endif; ?>

</div>

<?php
get_footer();
