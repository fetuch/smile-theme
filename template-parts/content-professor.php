<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header mb-4">
		<h1 class="entry-title my-2 text-3xl font-bold tracking-tight text-primary sm:text-4xl"><?php the_title(); ?></h1>
	</header>

	<div class="max-w-7xl mx-auto entry-content flex flex-col gap-6 lg:flex-row">
		<div class="flex-auto text-lg">
			<?php the_content(); ?>
		</div>

		<img class="aspect-[1/1] w-52 flex-none rounded-2xl object-cover" src="<?php the_post_thumbnail_url(''); ?>" alt="">
	</div>

	<div class="my-10">
		<a class="rounded-md bg-primary px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary" href="<?php echo site_url('/nasz-zespol') ?>">WRÓĆ</a>
	</div>

</article>