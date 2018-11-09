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
    <?php 

$image = get_field('hero_image');
$size = 'hero'; // (thumbnail, medium, large, full or custom size)

if( $image ) { ?>

<div class="hero__image">
	<?php echo wp_get_attachment_image( $image, $size);?>
</div>

<?php }

?>
<style>
    .hero__image img {
        width: 100%;
    }
</style>
    <div class="space-bottom--l">
		<div class="c-hero">
			<div class="hero__image">
				<?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('hero');
                } ?>
			</div>
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

    <?php 

// vars
$pages = get_field('related_pages');



// check
if ($pages): ?>
    <div class="l-container__sidebar">

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
</div>

<?php endif; ?>
    
</div>

</article>

<?php endwhile; endif; ?>



<?php get_footer(); ?>
