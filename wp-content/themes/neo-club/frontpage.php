<?php
/*
Template Name: Главная
*/
?>
<?php get_header(); ?>

<?php
$title = get_field( 'home_title' );
$descr = get_field( 'home_descr' );
?>
<?php if ( $title || $descr ) : ?>
	<div class="page-header frontpage-header">
		<div class="container">
			<?php if ( $title ) : ?>
				<h1 class="page-header-title"><?= $title; ?></div>
			<?php endif; ?>
			<?php if ( $descr ) : ?>
				<div class="page-header-descr"><?= $descr; ?></div>
			<?php endif; ?>
		</div>
	</div>
<?php endif; ?>

<div class="content">
	<div class="container">
		<div class="row">
			<main class="main">
				<?php
				$casino_top = get_field( 'casino_rating', 'options' );
				foreach ( $casino_top as $c ) :
					global $post;
					$post = $c['casino'];
					setup_postdata( $post );
					get_template_part( 'template-parts/loop-casino' );
				endforeach;
				wp_reset_postdata();
				?>
			</main>

			<?php get_sidebar('slots'); ?>
		</div>
	</div>
</div>

<?php get_template_part( 'template-parts/top-slot' ); ?>

<?php get_template_part( 'template-parts/rnd-slot' ); ?>

<?php get_template_part( 'template-parts/section-content' ); ?>

<?php get_footer(); ?>
