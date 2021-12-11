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

				<h1 class="page-title"><?= ( get_field( 'slots_title', 'options' ) ) ? get_field( 'slots_title', 'options' ) : 'Игровые автоматы'; ?></h1>

				<div class="post-content">
					<?php the_field( 'slots_descr', 'options' ); ?>
				</div>

				<div class="row slots-loop">

					<?php if ( have_posts() ) :
						while ( have_posts() ) :
							the_post(); ?>
							<div class="item"><?php get_template_part( 'template-parts/loop-slots' ); ?></div>
						<?php endwhile;
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

<?php get_template_part( 'template-parts/section-content' ); ?>

<?php get_footer(); ?>
