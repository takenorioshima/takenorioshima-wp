<?php
/**
 * Custom admin.
 *
 * @package takenorioshima-wp
 */

/**
 * Add custom user meta
 *
 * @param array $profile Author info.
 * @return array
 */
function tk_set_user_meta( $profiles ) {
	$profiles = array(
		'tk_twitter_url'  => 'Twiter URL',
		'tk_facebook_url' => 'Facebook URL',
		'tk_github_url'   => 'GitHub URL',
	);
	return $profiles;
}
add_filter( 'user_contactmethods', 'tk_set_user_meta', 10, 1 );
