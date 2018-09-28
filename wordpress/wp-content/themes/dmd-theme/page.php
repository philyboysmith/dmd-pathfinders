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
    
</div>

</article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
