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
<div id="homepage" class="site-content">
	<section id="cta" class="clearfix">
			<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
	</section><!-- .cta -->

	<section id="featured-work" class="clearfix">
		<h2>Featured Work</h2>
		<ul>
			<?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
				<?php while ( have_posts() ) : the_post(); 
					$image_1 = get_field("image_1");
					$size = "medium";
			?>
				<li class="homepage-featured-work">
					<figure class="featured-one-third">
						<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($image_1, $size); ?></a>
					</figure>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				</li>
			<?php endwhile; // end of the loop. ?>
			<?php wp_reset_query(); // resets the altered query back to the original ?>
		</ul>
	</section>

	<section id="featured-services" class="clearfix">
			<h2>Services</h2>
			<ul class="homepage-featured-service">
				<?php query_posts('posts_per_page=4&post_type=services'); ?>
				<?php while ( have_posts() ) : the_post(); 
					$image_1 = get_field("image_1");
					$size = "medium";
				?>
					<li  class="featured-one-fourth"> 
						<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($image_1, $size); ?></a>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					</li>
				<?php endwhile; // end of the loop. ?>
				<?php wp_reset_query(); // resets the altered query back to the original ?>
			</ul>
	</section> 

	<section id="featured-posts" class="clearfix">
			<h2>Recent Posts</h2>
			<?php query_posts('posts_per_page=3'); ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<article class="homepage-blog-post">
				<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => 'alignleft' ) ); ?></a>
 				<aside class="homepage-blog-excerpt">
	 				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<?php the_excerpt(); ?>
				</aside>
				<?php endwhile; // end of the loop. ?>
				<?php wp_reset_query(); // resets the altered query back to the original ?>
			</div>
	</section>
</div>


<?php get_footer(); ?>