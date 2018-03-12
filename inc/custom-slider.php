<?php

/* SLIDER */
function register_my_scripts() {
	wp_register_script( 'slick-slider', get_template_directory_uri() . '/dist/js/slick.js', array('jquery'), '1.0.1', true );
}
add_action('init', 'register_my_scripts');
 
function print_my_script() {
	global $add_my_script, $ss_atts;
	if ( $add_my_script ) {
		$speed = $ss_atts['slideshowspeed']*1000;
		wp_print_scripts('slick-slider');
		echo "<script type=\"text/javascript\">
jQuery(document).ready(function($) {
	$('head').prepend($('<link>').attr({
		rel: 'stylesheet',
		type: 'text/css',
		href: '" . get_template_directory_uri() . "/dist/css/slick.css'
	})).prepend($('<link>').attr({
		rel: 'stylesheet',
		type: 'text/css',
		href: '" . get_template_directory_uri() . "/dist/css/slick-theme.css'
	}));
	$('.slides').slick({
		autoplay: false,
		autoplaySpeed: 4000,
	});
});
</script>";
	} else {
		return;
	}
}

add_action('wp_footer', 'print_my_script', 99);

add_action( 'init', 'create_slider_posttype' );
function create_slider_posttype() {
    $args = array(
      'public' => false,
      'show_ui' => true,
      'menu_icon' => 'dashicons-images-alt',
      'capability_type' => 'page',
      'rewrite' => array( 'slider-loc', 'post_tag' ),
      'label'  => 'Slides',
      'supports' => array( 'title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes')
    );
    register_post_type( 'slider', $args );
}
 
add_action( 'init', 'create_slider_location_tax' );
function create_slider_location_tax() {
	register_taxonomy(
		'slider-loc',
		'slider',
		array(
			'label' => 'Slider location',
			'public' => false,
			'show_ui' => true,
			'show_admin_column' => true,
			'rewrite' => false
		)
	);
}

add_action('wp_insert_post', 'set_default_slidermeta');
 
function set_default_slidermeta($post_ID){
    add_post_meta($post_ID, 'slider-url', 'http://', true);
    return $post_ID;
}

add_shortcode( 'simpleslider', 'simple_slider_shortcode' );
 
function simple_slider_shortcode($atts = null) {
	global $add_my_script, $ss_atts;
	$add_my_script = true;
	$ss_atts = shortcode_atts(
		array(
			'location' => '',
			'limit' => -1,
			'ulid' => 'flexid',
			'animation' => 'slide',
			'slideshowspeed' => 5
		), $atts, 'simpleslider'
	);
	$args = array(
		'post_type' => 'slider',
		'posts_per_page' => $ss_atts['limit'],
		'orderby' => 'menu_order',
		'order' => 'ASC'
	);
	if ($ss_atts['location'] != '') {
		$args['tax_query'] = array(
			array( 'taxonomy' => 'slider-loc', 'field' => 'slug', 'terms' => $ss_atts['location'] )
		);
	}
	$the_query = new WP_Query( $args );
	$slides = array();
	if ( $the_query->have_posts() ) {
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			$imghtml = get_the_post_thumbnail(get_the_ID(), 'full');
			$url = get_post_meta(get_the_ID(), 'slider-url', true);
			$title = get_the_title();
			$content = get_the_content();
			if ($title != '' && $content != '') {
				$slides[] = '
				<li>
					<div class="slide-media">'.$imghtml.'</div>
					<div class="slide-content-container">
						<div class="slide-content">
							<h3 class="slide-title">'.get_the_title().'</h3>
							<p class="slide-text">'.get_the_content().'</p>
							<a href="'.$url.'" class="button">Saiba Mais</a>
						</div>
					</div>
				</li>';
			} else {
				$slides[] = '
				<li>
					<div class="slide-media">'.$imghtml.'</div>
				</li>';
			}
			
		}
	}
	wp_reset_query();
	return '
	<div class="slider-container" id="'.$ss_atts['ulid'].'">
		<ul class="slides">
			'.implode('', $slides).'
		</ul>
	</div>';
}

