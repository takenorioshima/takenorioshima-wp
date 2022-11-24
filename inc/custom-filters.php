<?php
/**
 * Custom filter, actiion and hooks.
 *
 * @package takenorioshima-wp
 */

/**
 * Add icon to archive title.
 *
 * @param  mixed $title Original title.
 * @return string $title Replaced title.
 */
function tk_replace_archive_title( $title ) {
	if ( is_category() ) {
		$icon_class = 'bi-folder';
		$title      = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$icon_class = 'bi-tag-fill';
		$title      = single_tag_title( '', false );
	} elseif ( is_search() ) {
		$icon_class = 'bi-search';
		$title      = get_search_query();
	}
	$icon_html = '<i class="' . $icon_class . '"></i> ';
	return $icon_html . $title;
}
add_filter( 'get_the_archive_title', 'tk_replace_archive_title' );
