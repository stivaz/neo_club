<?php
$thumb     = get_post( get_post_thumbnail_id() );
$image_alt = get_post_meta( $thumb->ID, '_wp_attachment_image_alt', true );
?>
<div class="slot-item">
	<div class="slot-item-icon">
		<div class="slot-item-fav"><?= get_favorites_button(get_the_ID()); ?></div>

		<img src="<?= kama_thumb_src( "w=290 &h=186", get_post_thumbnail_id() ); ?>" title="<?php echo $thumb->post_title; ?>" alt="<?php echo $image_alt; ?>">

		<div class="slot-item-btns">
			<a href="<?php the_permalink(); ?>" class="btn btn-bordered" title="Играть в <?php the_title(); ?> онлайн">Бесплатно</a>
			<a href="<?php echo get_field('game_link_default', 'options'); ?>" class="btn btn-green" title="Играть на реальные деньги">На деньги</a>
		</div>
	</div>
	<div class="slot-item-title"><?php the_title(); ?></div>
</div>
