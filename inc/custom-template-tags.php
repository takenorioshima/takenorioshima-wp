<?php
/**
 * Custom template tags.
 *
 * @package takenorioshima-wp
 */

/**
 * Output anchorless category name(s).
 *
 * @return void
 */
function tk_the_category() {
	$categories = get_the_category();
	foreach ( $categories as $c ) {
		$category_names[] = $c->cat_name;
	}
	echo implode( ', ', $category_names );
}

/**
 * Output background image.
 *
 * @return void
 */
function tk_the_background_thumbnail() {
	$thumbnail_url = get_the_post_thumbnail_url( \null, 'full' );
	$style         = 'background-image: url(' . $thumbnail_url . ');';
	$style        .= 'background-position: 50% 50%;';
	$style        .= 'background-repeat: no-repeat;';
	$style        .= 'background-size: cover;';
	echo wp_kses_post( $style );
}

