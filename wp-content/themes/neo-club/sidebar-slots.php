<aside class="sidebar">
	<?php
	global $post;
	$posts = get_posts( [
		'numberposts' => 12,
		'post_type'   => 'post',
		'orderby'     => 'rand',
		'exclude'     => array( get_the_ID() ),
	] );
	if ( $posts ) : ?>
		<div class="widget-slots">
			<div class="widget-title">Игровые автоматы</div>
			<ul class="widget-content">
				<?php foreach ( $posts as $post ) : ?>
					<?php
					setup_postdata( $post );
					$thumb     = get_post( get_post_thumbnail_id() );
					$image_alt = get_post_meta( $thumb->ID, '_wp_attachment_image_alt', true );
					$input     = [ "побед вчера", "выигрышей" ];
					$descr     = $input[ mt_rand( 0, count( $input ) - 1 ) ];
					?>
					<li class="widget-slot">
						<a href="<?php the_permalink(); ?>" class="widget-slot-img">
							<img src="<?= kama_thumb_src( 'w=60 &h=60' ); ?>" title="<?= $thumb->post_title; ?>" alt="<?= $thumb->post_title; ?>">
						</a>
						<div class="widget-slot-text">
							<a href="<?php the_permalink(); ?>" class="widget-slot-title"><?php the_title(); ?></a>
							<div class="widget-slot-descr"><?= rand( 60, 85 ) . '% ' . $descr; ?></div>
						</div>
						<a href="<?php the_permalink(); ?>" class="widget-slot-more btn-matrix-cube"><i class="fas fa-chevron-right"></i></a>
					</li>
				<?php endforeach; ?>
				<?php wp_reset_postdata() ?>
			</ul>
		</div>
	<?php endif; ?>

	<?php
	$news_posts = get_posts( [
		'numberposts' => 6,
		'post_type'   => 'news'
	] );
	if ( $news_posts ) : ?>
		<div class="widget-news">
			<div class="widget-title">Новости</div>
			<ul class="widget-content">
				<?php foreach ( $news_posts as $post ) : ?>
					<?php setup_postdata( $post ); ?>
					<li class="widget-news-item">
						<div class="widget-news-date"><?php echo get_the_date( 'd F Y' ); ?></div>
						<div class="widget-news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
					</li>
				<?php endforeach; ?>
				<?php wp_reset_postdata() ?>
				<li class="widget-news-item">
					<div class="btn-wrap"><a href="/news/" class="btn btn-matrix-bordered">Все новости</a></div>
				</li>
			</ul>
		</div>
	<?php endif; ?>
</aside>
