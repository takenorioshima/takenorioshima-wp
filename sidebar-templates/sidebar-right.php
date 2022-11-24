<?php
/**
 * The right sidebar containing the main widget area
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	return;
}

// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php if ( 'both' === $sidebar_pos ) : ?>
	<div class="col-12 col-lg-2 widget-area" id="right-sidebar">
<?php else : ?>
	<div class="col-12 col-lg-3 widget-area" id="right-sidebar">
<?php endif; ?>

<div class="sidebar-profile p-3 mb-4">
	<div class="sidebar-profile-inner bg-white shadow rounded-3 p-3">
		<div class="row align-items-center">
			<div class="col-2 col-md-1 col-lg-3">
				<?php echo get_avatar( get_the_author_meta( 'ID' ), 128, '', '', array( 'class' => 'img-fluid rounded-pill shadow-sm' ) ); ?>
			</div>
			<div class="col-10 col-md-11 col-lg-9 lh-sm">
				<h3 class="fs-5 mb-0"><?php the_author_meta( 'display_name' ); ?></h3>
				<div class="fs-6 text-muted"><?php echo get_the_author_meta( 'first_name' ) . ' ' . get_the_author_meta( 'last_name' ); ?></div>
			</div>
			<div class="col-12 my-2">
				<p class="small mb-0"><?php the_author_meta( 'description' ); ?></p>
			</div>
			<?php tk_the_social_links(); ?>
		</div>
	</div>
</div>

<div class="sidebar-sticky d-none d-lg-block">
	<?php if ( is_single() ) : ?>
		<div class="sidebar-toc">
			<div class="sidebar-toc-title small text-muted fw-bold">目次</div>
			<div class="js-toc"></div>
		</div>
	<?php endif; ?>
	<?php dynamic_sidebar( 'right-sidebar' ); ?>
</div>

</div><!-- #right-sidebar -->
