<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header mb-4">
		<p class="text-base font-semibold leading-7 text-secondary"><?php echo get_the_category_list(', '); ?></p>
		<?php the_title(sprintf('<h1 class="entry-title my-2 text-3xl font-bold tracking-tight text-primary sm:text-4xl"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h1>'); ?>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>

	<div class="my-10">
		<a class="rounded-md bg-primary px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary" href="<?php echo site_url('/nasz-zespol') ?>">WRÓĆ</a>
	</div>

</article>