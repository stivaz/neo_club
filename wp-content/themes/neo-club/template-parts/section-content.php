<div class="section-content">
	<div class="container">
		<div class="row">
			<div class="item">
				<div class="post-content block-readmore" data-textmore="Читать полностью" data-texthide="Свернуть текст">
					<?php
					if ( is_home() ) :
						$menu = get_field( 'menu', 'options' );
						the_field( 'slots_content', 'options' );
					else :
						$menu = get_field( 'menu' );
						the_content();
					endif;
					?>
				</div>
			</div>

			<?php if ( $menu ) : ?>
				<div class="item content-menu">
					<ul>
						<?php foreach ( $menu as $m ) : ?>
							<li><?= get_field_image_link( $m['icon'], $m['link'] ); ?></li>
						<?php endforeach; ?>
					</ul>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
