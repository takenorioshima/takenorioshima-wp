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

<div class="sidebar-profile">
	<div class="row align-items-center">
		<div class="col-12 col-md-3 pe-md-0">
			<img src="//dummyimage.com/256x256.png" class="img-fluid rounded-pill">
		</div>
		<div class="col-12 col-md-9">
			<h3 class="fs-4 mb-0">大島 武宜</h3>
			<div class="fs-6">Takenori Oshima</div>
		</div>
		<div class="col-12 my-3">
			<p class="small mb-0">ギタリスト・歌うたい・コンポーザ・プログラマ・デザイナー。ソフトウェアとハードウェアの狭間を際限なく行き来する自由工作員として奔走する傍ら、Senkawos／タとエ／大島武宜と働く機械などで演奏活動を行なっている。好きな猛禽類はフクロウ。</p>
		</div>
		<div class="col-12 mb-3">
			<div class="d-flex justify-content-around">
				<i class="bi-twitter fs-3"></i>
				<i class="bi-facebook fs-3"></i>
				<i class="bi-github fs-3"></i>
			</div>
		</div>
	</div>
</div>

<div class="sidebar-sticky">
	<div class="sidebar-toc js-toc"></div>
	<?php dynamic_sidebar( 'right-sidebar' ); ?>
</div>

</div><!-- #right-sidebar -->
