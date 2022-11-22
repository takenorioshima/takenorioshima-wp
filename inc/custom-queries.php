<?php
/**
 * Custom queries.
 *
 * @package takenorioshima-wp
 */

/**
 * Return recent posts.
 *
 * @param int $numberposts number of posts.
 * @return object $query WP_Query object.
 */
function tk_get_recent_posts( $numberposts = 6 ) {
	$arg   = array(
		'numberposts' => $numberposts,
	);
	$query = new WP_Query( $arg );
	return $query;
}
