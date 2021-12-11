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

				<h1 class="page-title"><?= ( get_field( 'news_title', 'options' ) ) ? get_field( 'slots_title', 'options' ) : 'Новости'; ?></h1>

				<div class="news">

					<?php if ( have_posts() ) :
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/loop-news' );
						endwhile;
					else :
						get_template_part( 'template-parts/loop-none' );
					endif; ?>

				</div>

				<?php if ( function_exists( 'pagination' ) ) {
					pagination();
				} ?>
			</main>

			<?php get_sidebar( 'casino' ); ?>

		</div>
	</div>
</div>

<?php get_template_part( 'template-parts/section-posts' ); ?>

<?php get_template_part( 'template-parts/rnd-slot' ); ?>

<?php get_footer(); ?>
