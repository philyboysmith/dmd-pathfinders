<?php get_header(); ?>

	<div class="space-bottom--l">
		<div class="c-hero">
			<div class="hero__image">
				<?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('hero');
                } ?>
			</div>
			<div class="c-hero__container-wrapper">
				<div class="c-hero__container">
					<h1>
						<span class="text-ruled"><?php the_field('hero_title'); ?></span>
					</h1>

					<p>
						<?php the_field('hero_body'); ?>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="l-container  l-container--flex padding-bottom--xl">
		<main class="l-container__main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
			<div class="c-news">
				<header class="c-news__header">
					<h2>News</h2>
				</header>
				<section>
					<?php 
                    
                    $args = array(
                        'posts_per_page' => 3,
                    
                    );
                    query_posts($args);
                    
                    if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article class="c-news__post  c-news__post--excerpt">
						
							<?php
                            if (has_post_thumbnail()) {
                                echo '<div class="c-news__post-thumbnail">';
                                the_post_thumbnail('medium');
                                echo '</div>';
                            } ?>
						<div class="c-news__post-content">
							<h3 class="c-news__post-title">
								<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
							</h3>
							<p class="c-news__post-meta"><time class="updated entry-time" datetime="<?php echo get_the_time('Y-m-d'); ?>" itemprop="datePublished"><?php get_the_time(get_option('date_format')); ?></time></p>
							<?php the_excerpt(); ?>
						</div>
					</article>
					<?php 
                        endwhile; endif;
                        wp_reset_query();
                    ?>
				</section>
			</div>    
		</main>
		<div class="l-container__sidebar">
			<?php get_sidebar(); ?>    
		</div>
	</div>

<?php get_footer(); ?>