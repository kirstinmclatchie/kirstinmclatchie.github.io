<?php
/**
 * The template for displaying all case studies
 *
 * This is the template that displays all case studies by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Lovely Locomotion	
 */

get_header(); ?>

<div id="packages-services" class="site-content">
	<section id="packages" class="clearfix">
		<h2>Packages</h2>
		<p>Choose from my most popular packages or contact me to customize one for your specific needs.</p>
		<?php query_posts('posts_per_page=3&post_type=packages'); ?>
				<?php while ( have_posts() ) : the_post(); 
					$short_description = get_field("short_description");
					$included_services = get_field("included_services");
					$image_1 = get_field("image_1");
					$size = "medium";
			?>

			<article class="package">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<aside class="package-sidebar">
					<p><?php echo $short_description; ?></p>
					<h4>What You Get</h4>
					<p><?php echo $included_services; ?></p>	
				</aside>
				<div class="package-icon">
					<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($image_1, $size); ?></a>
				</div>
			</article>

			<?php endwhile; // end of the loop. ?>
			<?php wp_reset_query(); // resets the altered query back to the original ?>
		
	</section>

	<section id="services">
		<h2>Services</h2>	
		<p>Services can be purchased as a package add on or a la cart.</p>

		<?php query_posts('posts_per_page=12&post_type=services'); ?>
				<?php while ( have_posts() ) : the_post(); 
					$image_1 = get_field("image_1");
					$size = "medium";
			?>
			<article class="individual-service">
					<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($image_1, $size); ?></a>
				<aside>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				</aside>
			</article>

			<?php endwhile; // end of the loop. ?>
			<?php wp_reset_query(); // resets the altered query back to the original ?>
		
	</section>
</div>

<?php get_footer(); ?>