<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package recantoalternativo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="depoimento">
		<?php 
			$score = get_field( 'depoimento_nota' );
			$author = get_field( 'depoimento_pessoa' );
			$date = get_field( 'depoimento_data', false, false );
			$date = new DateTime($date);

		?>
		<div class="group">
			<div class="float-left">
				<span class="depoimento__nota"><?php echo $score; ?></span>
				<span class="depoimento__autor color-blue"><?php echo $author; ?></span>
			</div>
			<div class="float-right"><span class="depoimento__data"><?php echo $date->format('d-m-Y'); ?></span></div>
		</div>

		<h6 class="depoimento__titulo"><?php the_title();?></h6>
		<?php the_content(); ?>
	</div>  
</article><!-- #post-<?php the_ID(); ?> -->
