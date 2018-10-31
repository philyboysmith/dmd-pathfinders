<?php
if (! defined('ABSPATH')) {
    exit;
} // Exit if accessed directly

get_header('knowledgebase');

// load the style and script
wp_enqueue_style('kbe_theme_style');
if (KBE_SEARCH_SETTING == 1) {
    wp_enqueue_script('kbe_live_search');
}

// Classes For main content div
if (KBE_SIDEBAR_INNER == 0) {
    $kbe_content_class = 'class="kbe_content_full"';
} elseif (KBE_SIDEBAR_INNER == 1) {
    $kbe_content_class = 'class="kbe_content_right"';
} elseif (KBE_SIDEBAR_INNER == 2) {
    $kbe_content_class = 'class="kbe_content_left"';
}

// Classes For sidebar div
if (KBE_SIDEBAR_INNER == 0) {
    $kbe_sidebar_class = 'kbe_aside_none';
} elseif (KBE_SIDEBAR_INNER == 1) {
    $kbe_sidebar_class = 'kbe_aside_left';
} elseif (KBE_SIDEBAR_INNER == 2) {
    $kbe_sidebar_class = 'kbe_aside_right';
}
?>

<?php

while (have_posts()) :
    the_post();

    //  Never ever delete it !!!
    kbe_set_post_views(get_the_ID());

    ?>

<div class="space-bottom--l">
    <div class="c-strip">
        <div class="l-container">
            <div class="kbe_breadcrum">
                <?php kbe_breadcrumbs(); ?>	
            </div>		
            <h1 itemprop="headline" class="align-center"><?php the_title(); ?></h1>
        </div>
    </div>
</div>

<div class="l-container l-container--narrow">
    
    <div id="kbe_content" <?php echo $kbe_content_class; ?>>
        <!--Content Body-->
        <div class="kbe_leftcol  content" ><?php

                the_content();

                include 'kbe_comments.php';


        ?></div>
        <!--/Content Body-->

    </div>

    <!--aside-->
    <div class="kbe_aside <?php echo $kbe_sidebar_class; ?>"><?php
        if ((KBE_SIDEBAR_INNER == 2) || (KBE_SIDEBAR_INNER == 1)) {
            dynamic_sidebar('kbe_cat_widget');
        }
    ?></div>

</div><?php
            endwhile;

get_footer('knowledgebase');
