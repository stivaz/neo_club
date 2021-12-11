<?php $slots = get_field( 'slots_rating', 'options' ); ?>
<?php if ( $slots ) : ?>
	<div class="top-slots">
		<div class="container">
			<div class="top-slots-nav">
				<div class="top-slots-prev btn-matrix-cube"><i class="fas fa-chevron-left"></i></div>
				<div class="top-slots-next btn-matrix-cube"><i class="fas fa-chevron-right"></i></div>
			</div>
			<div class="top-slots-wrap row">
				<div class="top-slots-link">
					<div class="top-slot">
						<div class="top-slot-img"><img src="<?= THEME_IMG . 'top.png' ?>" alt="Топ игровых автоматов" title="Топ игровых автоматов"></div>
						<div class="top-slot-title">Топ автоматы</div>
						<a href="/slots/" class="top-slot-btn btn btn-matrix-bordered">Смотреть все</a>
					</div>
				</div>

				<div class="top-slots-slider">
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<?php foreach ( $slots as $s ) :
								global $post;
								$post = $s['slot'];
								setup_postdata( $post ); ?>
								<div class="swiper-slide">
									<?php get_template_part( 'template-parts/loop' ); ?>
								</div>
							<?php
							endforeach;
							wp_reset_postdata();
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
