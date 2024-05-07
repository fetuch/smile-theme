<?php get_header(); ?>

<section class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-10">
	<div class="mx-auto max-w-2xl text-center mb-16">
		<h1 class="text-3xl font-medium tracking-tight text-primary sm:text-4xl mb-3">
			<?php echo single_cat_title(); ?>
		</h1>

		<div class="border border-secondary mx-auto w-20 text-center"></div>
	</div>

	<div class="mt-16 grid grid-cols-1 gap-x-20 lg:grid-cols-4">
		<section class="lg:col-span-3">
			<?php if (have_posts()) : ?>
				<div class="max-w-4xl space-y-8 lg:space-y-20">
					<?php
					while (have_posts()) :
						the_post();
					?>
						<?php get_template_part('template-parts/blog-post-list'); ?>
					<?php endwhile; ?>
				</div>

				<div class="mt-16">
					<?php echo mb_render_posts_pagination(); ?>
				</div>
			<?php endif; ?>
		</section>

		<?php get_sidebar('primary'); ?>
	</div>

</section>

<?php
get_footer();
