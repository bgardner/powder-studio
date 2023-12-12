<?php
/**
 * Functions for the Powder Studio WordPress theme.
 *
 * @package Powder Studio
 * @author  Brian Gardner
 * @license GNU General Public License v2 or later
 * @link    https://briangardner.com/
 */

if ( ! function_exists( 'powder_studio_setup' ) ) {

	/**
	 * Initialize theme defaults and registers support for WordPress features.
	 */
	function powder_studio_setup() {

		// Enqueue editor style sheet.
		add_editor_style( get_template_directory_uri() . '/style.css' );

		// Disable core block inline styles.
		add_filter( 'should_load_separate_core_block_assets', '__return_false' );

		// Remove core block patterns support.
		remove_theme_support( 'core-block-patterns' );

	}
}
add_action( 'after_setup_theme', 'powder_studio_setup' );

/**
 * Enqueue theme style sheet.
 */
function powder_studio_enqueue_style_sheet() {

	wp_enqueue_style( 'powder-studio', get_template_directory_uri() . '/style.css', array(), wp_get_theme( 'powder-studio' )->get( 'Version' ) );

}
add_action( 'wp_enqueue_scripts', 'powder_studio_enqueue_style_sheet' );

/**
 * Enqueue theme header javascript.
 */
function powder_studio_enqueue_header_javascript() {

	wp_enqueue_script( 'powder-studio', get_template_directory_uri() . '/assets/js/header.js', array('jquery'), '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'powder_studio_enqueue_header_javascript' );

/**
 * Register block styles.
 */
function powder_studio_register_block_styles() {

	$block_styles = array(
		'core/columns' => array(
			'column-reverse' => __( 'Reverse', 'powder-studio' ),
		),
		'core/cover' => array(
			'gradient' => __( 'Gradient', 'powder-studio' )
		),
		'core/group' => array(
			'shadow-light' => __( 'Shadow (Light)', 'powder-studio' ),
			'shadow-solid' => __( 'Shadow (Solid)', 'powder-studio' ),
		),
		'core/image' => array(
			'shadow-light' => __( 'Shadow (Light)', 'powder-studio' ),
			'shadow-solid' => __( 'Shadow (Solid)', 'powder-studio' ),
		),
		'core/list' => array(
			'no-style' => __( 'No Style', 'powder-studio' ),
		),
		'core/social-links' => array(
			'outline' => __( 'Outline', 'powder-studio' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}

}
add_action( 'init', 'powder_studio_register_block_styles' );

/**
 * Register block pattern categories.
 */
function powder_studio_register_pattern_categories() {

	register_block_pattern_category(
		'powder-studio-content',
		array(
			'label'       => __( 'Content', 'powder-studio' ),
			'description' => __( 'A collection of content patterns designed for Powder.', 'powder-studio' ),
		)
	);
	register_block_pattern_category(
		'powder-studio-hero',
		array(
			'label'       => __( 'Hero', 'powder-studio' ),
			'description' => __( 'A collection of hero patterns designed for Powder.', 'powder-studio' ),
		)
	);
	register_block_pattern_category(
		'powder-studio-page',
		array(
			'label'       => __( 'Pages', 'powder-studio' ),
			'description' => __( 'A collection of page patterns designed for Powder.', 'powder-studio' ),
		)
	);
	register_block_pattern_category(
		'powder-studio-pricing',
		array(
			'label'       => __( 'Pricing', 'powder-studio' ),
			'description' => __( 'A collection of pricing patterns designed for Powder.', 'powder-studio' ),
		)
	);
	register_block_pattern_category(
		'powder-studio-template',
		array(
			'label'       => __( 'Templates', 'powder-studio' ),
			'description' => __( 'A collection of template patterns designed for Powder.', 'powder-studio' ),
		)
	);

}
add_action( 'init', 'powder_studio_register_pattern_categories' );
