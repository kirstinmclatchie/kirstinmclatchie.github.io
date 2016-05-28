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

<div id="case-studies" class="site-content">
		<h2>Work</h2>
		<?php query_posts('posts_per_page=12&post_type=case_studies'); ?>
				<?php while ( have_posts() ) : the_post(); 
					$image_1 = get_field("image_1");
					$size = "medium";
			?>

		<section id="gallery" class="clearfix">

			<article class="individual-case-study">
						<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($image_1, $size); ?></a>
				<aside>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				</aside>
			</article>

			<?php endwhile; // end of the loop. ?>
			<?php wp_reset_query(); // resets the altered query back to the original ?>
		
		</section>
	</div>
</div>

<?php get_footer(); ?>