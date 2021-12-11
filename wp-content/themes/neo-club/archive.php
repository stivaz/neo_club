<?php get_header(); ?>
<?php the_post(); ?>

<div class="page-header">
	<div class="container">
		<?php get_template_part( 'template-parts/breadcrumbs' ); ?>
	</div>
</div>

<div class="content">
	<div class="container">
		<div class="main">
			<h1 class="page-title"><?php single_term_title(); ?></h1>

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
		</div>
	</div>
</div>

<?php get_template_part( 'template-parts/section-content' ); ?>

<?php get_footer(); ?>
