<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package STLCC
 */

echo "jacopo was here maybe";
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php stlcc_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->
	
	<div class="entry-content">
		<?php
			if( has_post_thumbnail() ):
			?>
			
			<div class="thumbnail-image">
				<div class="thumbnail"><?php the_post_thumbnail('medium'); ?></div>
			</div>

			<?php endif; 
				the_excerpt();
				
			/*the_content( sprintf(
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'stlcc' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );*/

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'stlcc' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php stlcc_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
