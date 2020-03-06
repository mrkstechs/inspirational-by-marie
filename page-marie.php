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

get_header();
?>

	<div id="primary" class="content-area">
		<main id="about" class="site-main">
            <?php
            while ( have_posts() ) :
                the_post();

                get_template_part( 'template-parts/content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>
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
