<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package chalemar
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row gutters'); ?>>
	<div class="col col-5">
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title block-title bt-dark">', '</h1>' ); ?>
		</header><!-- .entry-header -->
		<div class="entry-content">
			<?php
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'chalemar' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'chalemar' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	</div>
	
	<div class="col col-6 offset-1">
		<div class="quarto-gallery">
			<?php
				$images = get_post_meta(get_the_ID(), 'vdw_gallery_id', true);
				foreach ($images as $image) {
					echo wp_get_attachment_link($image, 'large');
				}
				
			?>
		</div>
		

	</div>

	

	<footer class="entry-footer">
		<?php chalemar_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	<?php wp_print_scripts('quarto-slide'); ?>
</article><!-- #post-<?php the_ID(); ?> -->
