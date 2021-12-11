<aside class="sidebar">
	<?php
	$i          = 1;
	$casino_top = get_field( 'casino_rating', 'options' );
	?>

	<?php if ( $casino_top ) : ?>
		<div class="widget-casino">
			<div class="widget-title">Рейтинг казино</div>
			<ul class="widget-content">
				<?php foreach ( $casino_top as $casino ) : ?>
					<?php
					global $post;
					$post = $casino['casino'];
					setup_postdata( $post );
					$casino_link   = get_post_permalink();
					$casino_bg     = get_post( get_field( 'bg' ) );
					$casino_thumb  = get_post( get_post_thumbnail_id() );
					$casino_site   = get_field( 'link' );
					?>
					<div class="widget-casino-item">
						<div class="widget-casino-item-label widget-casino-item-label-<?= $i; ?>"><?= $i; ?></div>

						<div class="widget-casino-item-bg">
							<img src="<?= kama_thumb_src( 'w=250 &h=100', get_field( 'bg' ) ); ?>"
							     title="<?= $casino_bg->post_title; ?>"
							     alt="<?= get_post_meta( $casino_bg->ID, '_wp_attachment_image_alt', true ); ?>">
						</div>
						<div class="widget-casino-item-logo">
							<img src="<?= kama_thumb_src( 'w=50 &h=50 &crop=false', get_post_thumbnail_id() ); ?>"
							     title="<?= $casino_thumb->post_title; ?>"
							     alt="<?= get_post_meta( $casino_thumb->ID, '_wp_attachment_image_alt', true ); ?>">
						</div>

						<a href="<?= $casino_link; ?>" class="widget-casino-item-title"><?php the_title(); ?></a>

						<div class="widget-casino-item-btns">
							<a href="<?= $casino_link; ?>" class="btn btn-bordered" title="Обзор казино на деньги">Обзор</a>
							<a href="<?= $casino_site; ?>" class="btn btn-green" title="Играть в казино онлайн" target="_blank">Играть</a>
						</div>
					</div>
					<?php $i ++;
					if ( $i > 10 ) {
						break;
					} ?>
				<?php endforeach; ?>
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
