</main>

<?php do_action('tailpress_content_end'); ?>

</div>

<?php do_action('tailpress_content_after'); ?>

<footer class="bg-primary" aria-labelledby="footer">
	<?php do_action('tailpress_footer'); ?>

	<h2 id="footer-heading" class="sr-only">Footer</h2>

	<div class="mx-auto max-w-7xl py-8 px-4 lg:px-8"">
		<div class=" space-y-8 sm:space-y-0 sm:grid sm:grid-cols-2 gap-10 lg:grid-cols-4">
		<div>
			<p class="text-sm leading-6 text-white">
				Naszą misją jest pokazać młodym ludziom, że nauka języka może być miła i przyjemna. W naszej szkole uczeń jest najważniejszy. Budujemy relacje oparte na szacunku, zaufaniu i partnerstwie.
			</p>
		</div>

		<div class="sm:pl-6">
			<h3 class="text-sm font-semibold leading-6 text-white"><?php echo wp_get_nav_menu_name('footer-1'); ?></h3>
			<?php
			wp_nav_menu(array(
				'theme_location' => 'footer-1',
				'walker' => new Footer_Menu_Walker,
				'container' => 'ul',
				'items_wrap' => '<ul id="%1$s" role="list" class="mt-6 space-y-4">%3$s</ul>',
			));
			?>
		</div>

		<div>
			<h3 class="text-sm font-semibold leading-6 text-white"><?php echo wp_get_nav_menu_name('footer-2'); ?></h3>
			<?php
			wp_nav_menu(array(
				'theme_location' => 'footer-2',
				'walker' => new Footer_Menu_Walker,
				'container' => 'ul',
				'items_wrap' => '<ul id="%1$s" role="list" class="mt-6 space-y-4">%3$s</ul>',
			));
			?>
		</div>

		<div class="space-y-8">
			<h3 class="text-sm font-semibold leading-6 text-white">Kontakt</h3>

			<ul role="list" class="mt-6 space-y-4">
				<li>
					<p class="text-sm text-white">
						AGNIESZKA PAWLAK
					</p>
				</li>
				<li>
					<span class="text-sm text-white">Tel: 504-145-708</span>
				</li>
				<li>
					<div class="flex items-center space-x-4">
						<a href="mailto:AGNIESZKA.PAWLAK@SMILE.EDU.PL" title="" class="rounded-full bg-gray-600 p-2 text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
								<path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
							</svg>

						</a>

						<a href="https://www.instagram.com/szkola_jezykow_obcych_smile/" target="_blank" title="Instagram smile.edu.pl" class="rounded-full bg-gray-600 p-2 text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
								<path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
							</svg>
						</a>

						<a href="https://www.facebook.com/smilelodz/" target="_blank" title="Facebook smile.edu.pl" class="rounded-full bg-gray-600 p-2 text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
								<path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
							</svg>
						</a>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<div class="mt-8 border-t border-white pt-8 sm:mt-12">
		<p class="text-xs leading-5 text-white">
			&copy; <?php echo date_i18n('Y'); ?> - <?php echo get_bloginfo('name'); ?>.</p>
	</div>
	</div>
</footer>

</div>

<?php wp_footer(); ?>

</body>

</html>