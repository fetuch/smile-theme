<?php
function mb_render_posts_pagination($pages = '', $range = 2)
{
    global $wp_query;
    global $paged;


    $showitems = ($range * 2) + 1;
    if (empty($paged)) {
        $paged = 1;
    }

    $pages = $wp_query->max_num_pages;
    if ($pages == '' || !$pages) {
        $pages = 1;
    }

    // Show the pagination section if we have more than one page
    if (1 != $pages) {
        echo '<nav aria-label="pagination" class="flex items-center justify-center space-x-4 px-4 sm:px-0">';

        // first page
        if ($paged > 2 && $paged > $range + 1 && $showitems < $pages) { ?>
            <div class="">
                <a href="<?php echo get_pagenum_link(1); ?>" class="inline-flex items-center mr-3 pt-4 text-sm font-medium text-primary hover:text-secondary">
                    Pierwszy
                </a>
            </div>
        <?php }

        // previous page
        if ($paged > 1 && $showitems < $pages) { ?>
            <div class="">
                <a href="<?php echo get_pagenum_link($paged - 1); ?>" class="inline-flex items-center border-t-2 border-transparent pr-1 pt-4 text-sm font-medium text-primary">
                    &lsaquo;
                </a>
            </div>
            <?php }

        echo "<div class='hidden md:flex'>";

        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                if ($paged == $i) { ?>
                    <span class="inline-flex items-center px-4 pt-4 text-sm font-medium text-secondary" aria-current="page">
                        <span class="page-link"><?php echo $i; ?></span>
                    </span>
                <?php } else { ?>
                    <a href="<?php echo get_pagenum_link($i); ?>" class="inline-flex items-center px-4 pt-4 text-sm font-medium text-primary"><?php echo $i; ?></a>
            <?php }
            }
        }
        echo "</div>";

        // next page
        if ($paged < $pages && $showitems < $pages) { ?>
            <div class="">
                <a href="<?php echo get_pagenum_link($paged + 1); ?>" class="inline-flex items-center border-t-2 border-transparent pr-1 pt-4 text-sm font-medium text-primary">
                    &rsaquo;
                </a>
            </div>
        <?php }

        // last page
        if ($paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages) { ?>
            <div class="">
                <a href="<?php echo get_pagenum_link($pages); ?>" class="inline-flex items-center pt-4 text-sm font-medium text-primary hover:text-secondary">
                    Ostatni
                </a>
            </div>
<?php }
        echo "</nav>";
    }
}
