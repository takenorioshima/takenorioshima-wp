<li class="tile-article">
	<a href="<?php the_permalink(); ?>" class="tile-article-anchor text-decoration-none overflow-hidden rounded-3 shadow-sm bg-white m-4">
		<div class="tile-article-thumbnail">
			<?php the_post_thumbnail( 'larg', array( 'class' => 'img-fluid' ) ); ?>
		</div>
		<div class="title-article-description p-3">
			<div class="tile-article-category small fw-bold">
				<?php tk_the_category(); ?>
			</div>
			<h2 class="tile-article-title"><?php the_title(); ?></h2>
			<div class="tile-article-date small text-muted"><?php the_time(); ?></div>
		</div>
	</a>
</li>
