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

/**
 * Output logo svg.
 *
 * @return void
 */
function tk_the_logo_svg() {
	$xml = <<< EOL
<?xml version = '1.0' encoding = 'utf-8'; ?>
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 580 323" style="enable-background:new 0 0 580 323;" xml:space="preserve">
<style type="text/css">.st0{fill:#29ABE2;} .st1{fill:#FF5A6A;}</style>
  <g>
    <rect x="14.73" y="38.08" transform="matrix(0.9986 -0.0523 0.0523 0.9986 -3.2317 7.7369)" class="st0" width="262.77" height="55"/>
    <polygon class="st1" points="180.34,36.24 138.23,302.81 82.26,305.75 124.37,39.18"/>
  </g>
  <g>
    <path class="logo-o" d="M432.47,68.97c45.82,0,83.6,35.9,86,81.73c1.21,23-6.62,45.1-22.03,62.22c-15.41,17.12-36.57,27.21-59.58,28.42 c-1.54,0.08-3.1,0.12-4.63,0.12c-45.83,0-83.6-35.9-86.01-81.73c-1.21-23,6.62-45.1,22.03-62.22 c15.41-17.12,36.57-27.21,59.58-28.42c1.54-0.08,3.1-0.12,4.58-0.12h0.03H432.47 M432.47,18.97c-2.4,0-4.82,0.06-7.25,0.19 C350.08,23.1,292.36,87.21,296.3,162.35c3.81,72.71,63.96,129.11,135.94,129.11c2.4,0,4.82-0.06,7.25-0.19 c75.14-3.94,132.86-68.04,128.92-143.18C564.6,75.37,504.44,18.97,432.47,18.97L432.47,18.97z"/>
  </g>
</svg>
EOL;
	echo $xml;
}


/**
 * Output social links
 *
 * @return string $html
 */
function tk_the_social_links() {
	$links = array(
		'twitter_url'  => get_the_author_meta( 'tk_twitter_url' ),
		'facebook_url' => get_the_author_meta( 'tk_facebook_url' ),
		'github_url'   => get_the_author_meta( 'tk_github_url' ),
	);

	if ( ! count( $links ) ) {
		return;
	}

	$html  = '<div class="col-12 mb-3"><div class="d-flex justify-content-around">';
	$html .= $links['twitter_url'] ? '<a href="' . $links['twitter_url'] . '" tagert="_blank" class="text-body"><i class="bi-twitter fs-3"></i></a>' : '';
	$html .= $links['facebook_url'] ? '<a href="' . $links['facebook_url'] . '" tagert="_blank" class="text-body"><i class="bi-facebook fs-3"></i></a>' : '';
	$html .= $links['github_url'] ? '<a href="' . $links['github_url'] . '" tagert="_blank" class="text-body"><i class="bi-github fs-3"></i></a>' : '';
	$html .= '</div></div>';
	echo wp_kses_post( $html );
}
