<?php
/**
 * The template for displaying single services
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Lovely Locomotion
 * @since Lovely Locomotion 1.0
 */

get_header(); ?>

<div id="package" class="site-content">
		<?php while ( have_posts() ) : the_post();
			$rate = get_field('rate');
			$image_1 = get_field('image_1');
			$size = "full"; ?>

		 <article class="individual-service">
		 	<h2><?php the_title(); ?></h2>
		 	<div class="individual-service-icon">
				<?php if($image_1) { ?>
				<?php echo wp_get_attachment_image( $image_1, $size ); ?>
				<?php } ?>
			</div>
			<aside class="individual-service-sidebar">
				<?php the_content(); ?>
				<h3>Rate: <span class="rate">$<?php echo $rate; ?></span></h3>

			</aside>
		</article>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>