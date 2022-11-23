<?php
/**
 * The template for displaying all single posts
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">

	<header class="single-header d-flex align-items-center mb-5" style="<?php tk_the_background_thumbnail(); ?>">
		<div class="<?php echo esc_attr( $container ); ?> px-md-4">
			<?php the_title( '<h1 class="fs-1 text-white">', '</h1>' ); ?>
			<div class="entry-meta text-white">
				<i class="bi-clock"></i> <?php echo date( 'M d, Y', time() ); ?>
			</div>
		</div>
	</header>

	<div class="<?php echo esc_attr( $container ); ?> px-md-4" id="content" tabindex="-1">

		<div class="row">

			<?php
			// Do the left sidebar check and open div#primary.
			get_template_part( 'global-templates/left-sidebar-check' );
			?>

			<main class="site-main" id="main">

				<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'single' );
					understrap_post_nav();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						// comments_template();
					}
				}
				?>

			</main>

			<?php
			// Do the right sidebar check and close div#primary.
			get_template_part( 'global-templates/right-sidebar-check' );
			?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
get_footer();
