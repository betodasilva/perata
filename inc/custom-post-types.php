<?php 

function cptui_register_my_cpts() {

	/**
	 * Post Type: Quartos.
	 */

	$labels = array(
		"name" => __( "Quartos", "recantoalternativo" ),
		"singular_name" => __( "Quarto", "recantoalternativo" ),
	);

	$args = array(
		"label" => __( "Quartos", "recantoalternativo" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "quartos", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-admin-multisite",
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "quartos", $args );

	/**
	 * Post Type: Turismos.
	 */

	$labels = array(
		"name" => __( "Turismos", "recantoalternativo" ),
		"singular_name" => __( "Turismo", "recantoalternativo" ),
	);

	$args = array(
		"label" => __( "Turismos", "recantoalternativo" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "turismo_zo", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-location-alt",
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "turismo_zo", $args );

	/**
	 * Post Type: Depoimentos.
	 */

	$labels = array(
		"name" => __( "Depoimentos", "recantoalternativo" ),
		"singular_name" => __( "Depoimento", "recantoalternativo" ),
	);

	$args = array(
		"label" => __( "Depoimentos", "recantoalternativo" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "depoimentos", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-star-filled",
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "depoimentos", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

function cptui_register_my_cpts_quartos() {

	/**
	 * Post Type: Quartos.
	 */

	$labels = array(
		"name" => __( "Quartos", "recantoalternativo" ),
		"singular_name" => __( "Quarto", "recantoalternativo" ),
	);

	$args = array(
		"label" => __( "Quartos", "recantoalternativo" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "quartos", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-admin-multisite",
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "quartos", $args );
}

add_action( 'init', 'cptui_register_my_cpts_quartos' );

function cptui_register_my_cpts_turismo_zo() {

	/**
	 * Post Type: Turismos.
	 */

	$labels = array(
		"name" => __( "Turismos", "recantoalternativo" ),
		"singular_name" => __( "Turismo", "recantoalternativo" ),
	);

	$args = array(
		"label" => __( "Turismos", "recantoalternativo" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "turismo_zo", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-location-alt",
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "turismo_zo", $args );
}

add_action( 'init', 'cptui_register_my_cpts_turismo_zo' );
