<?php
/**
 * The main template file
 *
 * Use as ...
 * - archive.php
 * - author.php
 * - search.php
 *
 * @package takenorioshima-wp
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

define( 'HERO_UNIT', true );
get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="index-wrapper">

	<header id="hero-unit" class="index-header hero-unit mb-5">
		<div class="<?php echo esc_attr( $container ); ?> d-flex align-items-center justify-content-center h-100 px-0 px-md-3">
			<?php the_archive_title( '<h1>', '</h1>' ); ?>
		</div>
	</header>

	<div class="<?php echo esc_attr( $container ); ?> px-0 px-md-3" id="content" tabindex="-1">

		<main class="site-main" id="main">

			<ul role="list" class="tile-articles list-unstyled d-lg-flex flex-wrap">
				<?php
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post();
						get_template_part( 'loop-templates/tile', 'article' );
					}
				}
				?>
			</ul>

		</main>

		<?php
		// Display the pagination component.
		understrap_pagination();
		?>

	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
get_footer();
