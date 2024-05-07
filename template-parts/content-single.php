<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header mb-4">
		<p class="text-base font-semibold leading-7 text-secondary"><?php echo get_the_category_list(', '); ?></p>
		<?php the_title(sprintf('<h1 class="entry-title my-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h1>'); ?>
		<time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" class="text-sm text-gray-700"><?php echo get_the_date(); ?></time>
	</header>

	<?php if (has_post_thumbnail()) : ?>
		<?php the_post_thumbnail('blogPostShow', array('class' => 'w-full h-auto rounded-2xl mb-6 lg:mb-10')); ?>
	<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'tailpress') . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __('Page', 'tailpress') . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			)
		);
		?>
	</div>

</article>