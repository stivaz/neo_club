<?php
$casino_link   = get_post_permalink();
$casino_thumb  = get_post( get_post_thumbnail_id() );
$casino_bg     = get_post( get_field( 'bg' ) );
$casino_rating = get_field( 'rating' );
$casino_bonus  = get_field( 'bonus' );
$casino_slots  = get_field( 'slots' );
$casino_site   = get_field( 'link' );
?>
<div class="casino-item">
	<a href="<?= $casino_link; ?>" class="casino-item-thumb">
		<img src="<?= kama_thumb_src( 'w=270 &h=97', get_field( 'bg' ) ); ?>"
		     title="<?= $casino_bg->post_title; ?>"
		     alt="<?= get_post_meta( $casino_bg->ID, '_wp_attachment_image_alt', true ); ?>"
		     class="casino-item-bg">
		<img src="<?= kama_thumb_src( 'w=60 &h=60 &crop=false', get_post_thumbnail_id() ); ?>"
		     title="<?= $casino_thumb->post_title; ?>"
		     alt="<?= get_post_meta( $casino_thumb->ID, '_wp_attachment_image_alt', true ); ?>"
		     class="casino-item-logo">
		<div class="casino-item-title"><?php the_title(); ?></div>
	</a>

	<div class="casino-item-cnt">
		<div class="casino-item-bonus">
			<div class="casino-item-bonus-title">На первый депозит:</div>
			<div class="casino-item-bonus-count"><i class="fas fa-gift"></i> <?= $casino_bonus; ?></div>
			<div class="casino-item-bonus-slots"><?= $casino_slots; ?> <span>спинов</span></div>
		</div>

		<div class="casino-item-ratings">
			<?php foreach ( $casino_rating as $item ) : ?>
				<div class="casino-item-rating">
					<div class="casino-item-rating-text">
						<?= $item['icon']; ?> <span class="casino-item-rating-title"><?= $item['title']; ?></span> <?= $item['rate']; ?>
						<span class="casino-item-rating-max">/5</span>
					</div>
					<div class="casino-item-rating-bar">
						<div class="casino-item-rating-count" style="width: <?= $rate = $item['rate'] * 20; ?>%;"></div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		<div class="casino-item-btns">
			<a href="<?= $casino_link; ?>" class="btn btn-white-bordered" title="Читать честный обзор">Обзор</a>
			<a href="<?= $casino_site; ?>" class="btn btn-green" title="Играть в казино на деньги" target="_blank">Играть</a>
		</div>
	</div>
</div>
