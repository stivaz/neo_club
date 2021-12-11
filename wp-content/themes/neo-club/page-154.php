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
			<main class="main">

				<h1 class="page-title"><?php the_title(); ?></h1>

				<div class="row slots-loop">
					<?php $post_ids = get_user_favorites( get_current_user_id() ) ?>
					<?php if ( $post_ids ) : ?>
						<?php foreach ( $post_ids as $post_id ) : ?>
							<?php
							global $post;
							$post = $post_id;
							setup_postdata( $post );
							?>
							<div class="item"><?php get_template_part( 'template-parts/loop-slots' ); ?></div>
						<?php endforeach; ?>
					<?php else : ?>
						<div class="item"><?php get_template_part( 'template-parts/loop-none' ); ?></div>
					<?php endif; ?>
				</div>

			</main>

			<?php get_sidebar( 'slots' ); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
