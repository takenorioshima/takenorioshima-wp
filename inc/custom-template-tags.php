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

