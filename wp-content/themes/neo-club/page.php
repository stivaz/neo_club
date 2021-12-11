<?php get_header(); ?>
<?php the_post(); ?>

<div class="page-header">
	<div class="container">
		<?php get_template_part( 'template-parts/breadcrumbs' ); ?>
	</div>
</div>

<div class="content">
	<div class="container">
		<div class="row">
			<div class="main">
			<h1 class="page-title"><?php the_title(); ?></h1>

			<div class="post-content"><?php the_content(); ?></div>
		</div>

			<?php get_sidebar( 'casino' ); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
