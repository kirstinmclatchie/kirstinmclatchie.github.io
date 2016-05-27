<?php
/**
 * The template for displaying all case studies
 *
 * This is the template that displays all case studies by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Lovely Locomotion 
 * @since Lovely Locomotion 1.0
 */

get_header(); ?>

<section id="gallery">
	<div class="one-third">
			<?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
			<?php while ( have_posts() ) : the_post(); 
				$image_1 = get_field("image_1");
				$size = "medium";
				$services = get_field('services');
			?>

			<figure class="featured-one-third"> 
				<?php echo wp_get_attachment_image($image_1, $size); ?>
			</figure>

			<div class="overlay">
				<div class="overlay-text">
					<h3><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h3>
					<p><?php echo $services; ?></p>
				</div>
			</div>

			<?php endwhile; // end of the loop. ?>
			<?php wp_reset_query(); // resets the altered query back to the original ?>

	</div>
</section> <!-- .featured-work -->

<?php get_footer(); ?>