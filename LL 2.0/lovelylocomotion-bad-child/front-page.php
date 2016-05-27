<?php
/**
 * The template for displaying the homepage
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
<section class="home-page">
	<div class="site-content">
		<div id="cta">
				<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
		</div>
				<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->

<section class="featured-work">
	<div class="site-content">
		<h2>Featured Work</h2>
			<ul class="homepage-featured-work">
			<?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
			<?php while ( have_posts() ) : the_post(); 
				$image_1 = get_field("image_1");
				$size = "medium";
			?>
				<li  class="featured-one-third"> 
					<figure>
						<?php echo wp_get_attachment_image($image_1, $size); ?>
					</figure>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				</li>
			<?php endwhile; // end of the loop. ?>
			<?php wp_reset_query(); // resets the altered query back to the original ?>
		</ul>
	</div>
</section> <!-- .featured-work -->

<section class="featured-services">
	<div class="site-content">
		<h2>Services</h2>
		<ul class="homepage-featured-service">
			<?php query_posts('posts_per_page=3&post_type=services'); ?>
			<?php while ( have_posts() ) : the_post(); 
				$image_1 = get_field("image_1");
				$size = "medium";
			?>
				<li  class="featured-one-third"> 
					<?php echo wp_get_attachment_image($image_1, $size); ?>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				</li>
			<?php endwhile; // end of the loop. ?>
			<?php wp_reset_query(); // resets the altered query back to the original ?>
		</ul>
	</div>
</section> <!-- .featured-work -->

<section class="recent-posts">
	<div class="site-content">
 		<div class="blog-post">
			<h2>Blog</h2>
			<?php query_posts('posts_per_page=3'); ?>
			<?php while ( have_posts() ) : the_post(); ?>
 				<h3><?php the_title(); ?></h3>
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>" class="read-more-link">Read More <span>&rsaquo;</span></a>
			<?php endwhile; // end of the loop. ?>
			<?php wp_reset_query(); // resets the altered query back to the original ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>