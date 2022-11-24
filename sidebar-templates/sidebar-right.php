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

<div class="sidebar-profile border-top border-bottom mb-4 pt-4">
	<div class="row align-items-center">
		<div class="col-2 col-md-1 col-lg-3 pe-md-0">
			<img src="//dummyimage.com/256x256.png" class="img-fluid rounded-pill">
		</div>
		<div class="col-10 col-md-11 col-lg-9">
			<h3 class="fs-4 mb-0">大島 武宜</h3>
			<div class="fs-6">Takenori Oshima</div>
		</div>
		<div class="col-12 my-3">
			<p class="small mb-0">ギタリスト・歌うたい・コンポーザ・プログラマ・デザイナー。ソフトウェアとハードウェアの狭間を際限なく行き来する自由工作員として奔走する傍ら、Senkawos／タとエ／大島武宜と働く機械などで演奏活動を行なっている。好きな猛禽類はフクロウ。</p>
		</div>
		<?php tk_the_social_links(); ?>
	</div>
</div>

<div class="sidebar-sticky d-none d-lg-block">
	<div class="sidebar-toc">
		<div class="sidebar-toc-title small text-muted fw-bold">目次</div>
		<div class="js-toc"></div>
	</div>
	<?php dynamic_sidebar( 'right-sidebar' ); ?>
</div>

</div><!-- #right-sidebar -->
