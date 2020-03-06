<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Inspirational_By_Marie
 */
require_once( get_template_directory() . '/template-parts/template-functions.php' );
get_header();
?>

	<div id="primary" class="content-area">
		<main id="home" class="site-main">

		<?php
		while ( have_posts() ) :
            the_post();
            the_content();
		endwhile; // End of the loop.
		?>
		<div id="intro">
			<div id="box"></div>
			<div id="motto">
				<p><span id="be-1">Be</span> <span id="in">Inspired.</span></p>
				<p><span id="be-2">Be</span> <span id="enc">Encouraged.</span></p>
				<p><span id="be-3">Be</span> <span id="bless">Blessed.</span></p>
			</div>
			<div id="images">
				<img src="<?php echo bloginfo('url'); ?>/wp-content/themes/inspirational-by-marie/public/imgs/pic-1.png" />
				<img src="<?php echo bloginfo('url'); ?>/wp-content/themes/inspirational-by-marie/public/imgs/pic-2.png" />
				<img src="<?php echo bloginfo('url'); ?>/wp-content/themes/inspirational-by-marie/public/imgs/pic-3.png" />
			</div>
		</div>
		<div id="banner">
			<a href="<?php echo bloginfo('url'); ?>/shop">Shop here</a>
		</div>
		<div id="qoftd">
			<div id="quote">
				<div class="quote">
					<img src="<?php echo bloginfo('url'); ?>/wp-content/themes/inspirational-by-marie/public/imgs/quotes.svg" />
				</div>
				<?php
					$args = array(
						'category_name' => 'qotd',
						'post_per_page' => 1,
						'order_by' => 'ASC'
					);
					$query = new WP_Query($args);
					if ($query->have_posts()) {
						while ($query->have_posts()) {
							$query->the_post();
							echo the_content();
						}
					}
					wp_reset_postdata();
				?>
				<div class="quote">
					<img src="<?php echo bloginfo('url'); ?>/wp-content/themes/inspirational-by-marie/public/imgs/quotes.svg" />
				</div>
			</div>
			<span>- quote of the day.</span>
		</div>
		<div id="post">
			<div class="post-wrapper">
				<?php
					$query = new WP_Query(array(
						'category_name' => 'community',
						'post_per_page' => 3,
						'order_by' => 'ASC'
					));
				?>
				<?php if ($query->have_posts()) :?>
						<?php while($query->have_posts()) :?>
							<?php $query->the_post(); ?>
							<?php if (has_post_thumbnail()) :?>
								<div class="frontpage-post">
									<a href="<?php echo get_the_permalink(); ?>">
										<?php the_post_thumbnail();?>
										<?php echo marie_excerpt_count(get_the_excerpt()); ?>
									</a>
								</div>
							<?php endif; ?>
						<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
			</div>
		</div>
		<div class="radio">
			<?php
				$query = new WP_Query(array(
					'category_name' => 'radio-info',
					'post_per_page' => 1
				));
			?>
			<?php if ($query->have_posts()) :?>
					<?php while($query->have_posts()) :?>
						<?php $query->the_post(); ?>
						<div class="img">
							<?php the_post_thumbnail();?>
						</div>
						<?php echo the_content(); ?>
					<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();