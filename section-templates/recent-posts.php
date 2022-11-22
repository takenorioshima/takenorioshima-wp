<div class="container-xl px-0 px-md-3">
	<h2 class="fs-3 m-4">最新の記事</h2>
	<ul role="list" class="tile-articles list-unstyled d-lg-flex flex-wrap">
		<?php
		$query = tk_get_recent_posts();
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				get_template_part( 'loop-templates/tile', 'article' );
			}
			wp_reset_postdata();
		}
		?>
	</ul>
</div>
