<?php
/*

    Template Name: Faculty Template

 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package STLCC
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<p>JACOPO WAS HERE?</p>

			<?php
			$args = array('post_type' => 'faculty', 'post_per_page' => 50 );
			$loop = new WP_Query($args);
			
			while ( $loop->have_posts() ) : $loop->the_post();

				get_template_part( 'content', 'archive' );


			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
