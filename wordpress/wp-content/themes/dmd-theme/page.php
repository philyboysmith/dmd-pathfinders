<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

<div class="space-bottom--l">
    <div class="c-strip">
        <div class="l-container">
			<?php custom_breadcrumbs(); ?>
			<h1 itemprop="headline"><?php the_field('hero_title'); ?></h1>
            <p><?php the_field('hero_body'); ?></p>
        </div>
    </div>
</div>

<div class="l-container  l-container--flex padding-bottom--xl">
	<div class="l-container__sidebar">
		<?php get_template_part('subnav'); ?>
	</div>
    <main class="l-container__main">
		<section itemprop="articleBody">

			<?php
                // the content (pretty self explanatory huh)
                the_content();

                wp_link_pages(array(
                    'before'      => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'bonestheme') . '</span>',
                    'after'       => '</div>',
                    'link_before' => '<span>',
                    'link_after'  => '</span>',
                ));
            ?>
		</section>    
	</main>
<<<<<<< HEAD
=======

    <div class="l-container__sidebar">
    <?php 

// vars
$pages = get_field('related_pages');



// check
if ($pages): ?>

	<?php foreach ($pages as $page): ?>

<a class="c-card" href="<?php echo get_permalink($page->ID); ?>">

<?php echo get_the_post_thumbnail($page->ID, 'small'); ?>
<div class="c-card__content">
    <h4><?php echo $page->post_title; ?></h4>
    <p><?php echo $page->post_excerpt; ?></p>
    <p>Read more</p>
</div>
</a>
<?php endforeach; ?>
<?php endif; ?>
</div>
>>>>>>> 179daf2f3256e39083f19551f72746ee7242d76e
    
</div>

</article>

<?php endwhile; endif; ?>

<<<<<<< HEAD
=======


>>>>>>> 179daf2f3256e39083f19551f72746ee7242d76e
<?php get_footer(); ?>
