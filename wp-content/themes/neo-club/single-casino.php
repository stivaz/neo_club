<?php get_header(); ?>
<?php the_post(); ?>

<?php
$casino_thumb   = get_post( get_post_thumbnail_id() );
$casino_bg      = get_post( get_field( 'bg' ) );
$casino_rating  = get_field( 'rating' );
$casino_bonus   = get_field( 'bonus' );
$casino_slots   = get_field( 'slots' );
$casino_pays    = get_field( 'pays' );
$casino_soft    = get_field( 'soft' );
$casino_help    = get_field( 'help' );
$casino_deposit = get_field( 'deposit' );
$casino_link    = get_field( 'link' );
$casino_site    = get_field( 'site' );
?>

<div class="page-header">
	<div class="container">
		<?php get_template_part( 'template-parts/breadcrumbs' ); ?>
	</div>
</div>

<div class="content">
	<div class="container">
		<div class="row">

			<main class="main">

				<h1 class="page-title">Онлайн казино <?php the_title(); ?> - обзор и зеркало</h1>

				<div class="casino-single">
					<div class="casino-single-bg">
						<img src="<?= kama_thumb_src( 'w=870 &h=421', get_field( 'bg' ) ); ?>"
						     title="<?= $casino_bg->post_title; ?>"
						     alt="<?= get_post_meta( $casino_bg->ID, '_wp_attachment_image_alt', true ); ?>">

						<div class="casino-single-logo">
							<img src="<?= kama_thumb_src( 'w=200 &h=200 &crop=false', get_post_thumbnail_id() ); ?>"
							     title="<?= $casino_thumb->post_title; ?>"
							     alt="<?= get_post_meta( $casino_thumb->ID, '_wp_attachment_image_alt', true ); ?>">
						</div>
					</div>

					<div class="casino-single-title"><?php the_title(); ?></div>

					<div class="casino-single-options">
						<div class="casino-single-ratings">
							<?php foreach ( $casino_rating as $item ) : ?>
								<div class="casino-single-rating">
									<div class="casino-single-rating-text">
										<?= $item['icon']; ?> <span class="casino-single-rating-title"><?= $item['title']; ?></span> <?= $item['rate']; ?>
										<span class="casino-single-rating-max">/5</span>
									</div>
									<div class="casino-single-rating-bar">
										<div class="casino-single-rating-count" style="width: <?= $rate = $item['rate'] * 20; ?>%;"></div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>

						<div class="casino-single-features">
							<?php if ( $casino_help ) : ?>
								<div class="casino-single-feature">
									<div class="casino-single-feature-title"><img src="<?= THEME_IMG . 'i1.png'; ?>" alt="">Помощь:</div>
									<div class="casino-single-feature-descr"><?= $casino_help; ?></div>
								</div>
							<?php endif; ?>
							<?php if ( $casino_site ) : ?>
								<div class="casino-single-feature">
									<div class="casino-single-feature-title"><img src="<?= THEME_IMG . 'i2.png'; ?>" alt="">Сайт:</div>
									<div class="casino-single-feature-descr"><a href="<?= $casino_link; ?>" target="_blank"><?= $casino_site; ?></a></div>
								</div>
							<?php endif; ?>
							<?php if ( $casino_pays ) : ?>
								<div class="casino-single-feature">
									<div class="casino-single-feature-title"><img src="<?= THEME_IMG . 'i3.png'; ?>" alt="">Выплата:</div>
									<div class="casino-single-feature-descr"><?= $casino_pays; ?></div>
								</div>
							<?php endif; ?>
							<?php if ( $casino_deposit ) : ?>
								<div class="casino-single-feature">
									<div class="casino-single-feature-title"><img src="<?= THEME_IMG . 'i4.png'; ?>" alt="">Мин. депозит:</div>
									<div class="casino-single-feature-descr"><?= $casino_deposit; ?></div>
								</div>
							<?php endif; ?>
							<?php if ( $casino_soft ) : ?>
								<div class="casino-single-feature">
									<div class="casino-single-feature-title"><img src="<?= THEME_IMG . 'i5.png'; ?>" alt="">Софт:</div>
									<div class="casino-single-feature-descr"><?= $casino_soft; ?></div>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>

				<a href="<?= $casino_link; ?>" class="btn btn-green btn-big btn-fullwidth" target="_blank">Играть в казино</a>

				<div class="post-content">
					<?php the_content(); ?>
				<a href="<?= $casino_link; ?>" class="btn btn-green btn-big btn-fullwidth" target="_blank">Играть в казино</a>

					<?php comments_template(); ?>
				</div>
			</main>

			<?php get_sidebar( 'slots' ); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>

