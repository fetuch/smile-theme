<?php
get_header();
?>

<?php get_template_part('template-parts/front-page/slider'); ?>

<div class="mx-auto max-w-7xl">
    <?php get_template_part('template-parts/front-page/program'); ?>
</div>

<div class="mx-auto max-w-4xl py-6 md:py-20">
    <div class="md:grid grid-cols-2">
        <div class="flex flex-col justify-center px-6 mb-10 items-center md:items-start text-xl lg:text-2xl font-bold">
            <div>Szkoła <span class="text-primary">SMILE</span> to całe moje życie.</div>
            <div>PASJA do nauczania.</div>
            <div>MIŁOŚĆ do języka.</div>
            <div>INSPIRACJA dzieci i młodzieży.</div>
        </div>

        <div class="flex flex-col justify-center items-center">
            <img class="rounded-full mb-6" src="<?php echo get_theme_file_uri('/images/katarzyna-synder-tamborska.jpg'); ?>" alt="">

            <div class="flex flex-col justify-center items-center">
                <span class="text-primary text-xl">lektor, dyrektor metodyczny</span>
                <strong class="text-xl font-bold">Katarzyna Synder-Tamborska</strong>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>