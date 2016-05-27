<?php
/**
 * The template for displaying all packages
 *
 * This is the template that displays all packages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Lovely Locomotion  
 * @since Lovely Locomotion 1.0
 */

get_header(); ?>
<div id="individual-package">
	<?php while ( have_posts() ) : the_post();
		$image_1 = get_field('image_1');
		$description = get_field('description');
		$included_services = get_field('included_services');
		$client_deliverables = get_field('client_deliverables');
		$project_timeline = get_field('project_timeline');
		$price = get_field('price');
		$size = "full"; ?>

		<article>
			<h2><?php the_title(); ?></h2>
			<aside class="package-thumbnail">
				<?php if($image_1) { ?>
				<?php echo wp_get_attachment_image( $image_1, $size ); ?>
				<?php } ?>
			</aside>
			<div class="package-description">
				<p><?php echo $description; ?></p>
				<h3>What You Get</h3>
				<p><?php echo $included_services; ?></p>
				<h3>What I Need From You</h3>
				<p><?php echo $client_deliverables; ?></p>	
				<h3>Stages</h3>
					<?php the_content(); ?>
				<h3><?php echo $project_timeline; ?></h3>
				<h3>$<?php echo $price; ?></h3>
			</div>
		</article>

	<?php endwhile; // end of the loop. ?>

</div><!-- #individual packages -->

<?php get_footer(); ?>