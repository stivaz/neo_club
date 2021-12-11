<?php get_header(); ?>

<div class="page-header">
	<div class="container">
		<?php get_template_part( 'template-parts/breadcrumbs' ); ?>
	</div>
</div>

<div class="content">
	<div class="container">
		<div class="row">
			<main class="main">

				<h1 class="page-title"><?php printf( 'Поиск по строке: %s', get_search_query() ); ?></h1>

				<div class="row search-row">
					<?php
					$cpts = [ 'casino', 'post', 'news' ];
					if ( have_posts() ) :
						foreach ( $cpts as $cpt ) :
							while ( have_posts() ) : the_post();
								if ( $cpt == get_post_type() ) : ?>
									<div class="item item-<?= $cpt; ?>">
										<?php get_template_part( 'template-parts/loop', $cpt ); ?>
									</div>
								<?php endif;
							endwhile;
							rewind_posts();
						endforeach;
					else : ?>
						<div class="item">
							<?php get_template_part( 'template-parts/loop', 'none' );; ?>
						</div>
						<?php
					endif;
					?>
				</div>
			</main>

			<?php get_sidebar( 'slots' ); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>


