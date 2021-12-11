<?php get_header(); ?>
<?php the_post(); ?>

<div class="page-header">
	<div class="container">
		<?php get_template_part( 'template-parts/breadcrumbs' ); ?>
	</div>
</div>

<div class="content section-slots-single">
	<div class="container">

		<div class="post">
			<div class="row">
				<div class="main">

					<div class="section-header">
						<h1 class="page-title">Автомат <?php the_title(); ?> на деньги в казино </h1>

						<div class="ratings">
							<!-- LikeBtn.com BEGIN -->
							<span class="likebtn-wrapper" data-theme="custom" data-btn_size="35" data-f_size="16" data-icon_size="15" data-icon_l_c="#36b067" data-icon_l_c_v="#36b067" data-icon_d_c="#eb5555" data-icon_d_c_v="#eb5555" data-label_c="#333333" data-label_c_v="#333333" data-counter_l_c="#333333" data-counter_d_c="#333333" data-bg_c="rgba(250,250,250,0)" data-bg_c_v="rgba(250,250,250,0)" data-label_fs="r" data-lang="ru" data-i18n_like="Да" data-identifier="item_1" data-show_dislike_label="true" data-counter_clickable="true" data-counter_zero_show="true" data-popup_disabled="true" data-share_enabled="false" data-tooltip_enabled="false" data-i18n_dislike="Нет" data-i18n_after_like="Да" data-i18n_after_dislike="Нет" data-i18n_like_tooltip="Нравится" data-i18n_dislike_tooltip="Не нравится"></span>
							<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
							<!-- LikeBtn.com END -->
						</div>
					</div>

					<div class="post-content">
						<?php the_field( 'seo_text' ); ?>
					</div>

					<div class="main-game-frame">
						<div class="main-game-frame-box">
							<iframe src="<?php the_field( 'iframe' ) ?>" width="100%" height="477"></iframe>

							<div class="game-frame-nav">
								<div class="game-frame-nav-wrap">
									<div class="game-frame-nav-fav"><?= get_favorites_button(get_the_ID()); ?></div>
								</div>

								<a href="#popup" class="game-frame-nav-feedback open-popup"><i class="fas fa-exclamation-triangle"></i></a>
								<div class="game-frame-nav-maximize btn-maximize"><i class="fas fa-compress"></i></div>
							</div>
						</div>

						<a href="/goto/money" class="btn btn-green btn-big btn-fullwidth" target="_blank">Играть на деньги</a>
					</div>

					<div class="post-content mb50"><?php the_content(); ?></div>

					<h2>Выбирайте лучшие казино из нашего рейтинга</h2>

					<?php
					$i = 0;
					$casino_top = get_field( 'casino_rating', 'options' );
					foreach ( $casino_top as $c ) :
						global $post;
						$post = $c['casino'];
						setup_postdata( $post );
						get_template_part( 'template-parts/loop-casino' );
						$i++;
						if ( $i == 4 ) break;
					endforeach;
					wp_reset_postdata();
					?>
				</div>

				<?php get_sidebar( 'slots' ); ?>
			</div>
		</div>

	</div>
</div>

<div id="popup" class="popup mfp-hide">
	<div class="popup-title">Произошла ошибка?</div>
	<div class="popup-descr">сообщите нам и мы постараемся все исправить</div>
	<?= do_shortcode('[contact-form-7 id="170" title="Контактная форма"]'); ?>
</div>

<?php get_template_part( 'template-parts/random-slot' ); ?>

<?php get_footer(); ?>
