<?php

/* ACF Options page */
if ( function_exists( 'acf_add_options_page' ) ) {
	$option_page = acf_add_options_page( array(
		'page_title' => 'Настройки сайта',
		'menu_title' => 'Настройки сайта',
		'menu_slug'  => 'theme-general-settings',
		'capability' => 'edit_posts',
		'redirect'   => false
	) );
}

/* Функция вывода пагинации */
function pagination() {

	global $wp_query;
	$big = 999999999;

	if ( $wp_query->max_num_pages > 1 ) :
		?>
		<div class="pagination">
			<?php echo paginate_links( array(
				'base'               => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ), // что заменяем в формате ниже
				'format'             => '?paged=%#%', // формат, %#% будет заменено
				'current'            => max( 1, get_query_var( 'paged' ) ), // текущая страница, 1, если $_GET['page'] не определено
				'type'               => 'list', // ссылки в ul
				'prev_text'          => '<span>Предыдущая</span>', // текст назад
				'next_text'          => '<span>Следующая</span>', // текст вперед
				'total'              => $wp_query->max_num_pages, // общие кол-во страниц в пагинации
				'show_all'           => false, // не показывать ссылки на все страницы, иначе end_size и mid_size будут проигнорированны
				'end_size'           => 2, //  сколько страниц показать в начале и конце списка (12 ... 4 ... 89)
				'mid_size'           => 2, // сколько страниц показать вокруг текущей страницы (... 123 5 678 ...).
				'add_args'           => false, // массив GET параметров для добавления в ссылку страницы
				'add_fragment'       => '', // строка для добавления в конец ссылки на страницу
				'before_page_number' => '', // строка перед цифрой
				'after_page_number'  => '' // строка после цифры
			) ); ?>
		</div>
	<?php
	endif;
}

/* Кнопка в текстовом редакторе */
//add_action( 'init', 'rndm_button' );
//function rndm_button() {
//	if ( current_user_can( 'edit_posts' ) && current_user_can( 'edit_pages' ) ) {
//		add_filter( 'mce_external_plugins', 'rndm_plugin' );
//		add_filter( 'mce_buttons_2', 'rndm_register_button' );
//	}
//}
//
//function rndm_plugin( $plugin_array ) {
//	$plugin_array['rndm'] = get_bloginfo( 'template_url' ) . '/assets/js/newbuttons.js';
//
//	return $plugin_array;
//}
//
//function rndm_register_button( $buttons ) {
//	array_push( $buttons, "screen" );
//
//	return $buttons;
//}

if ( 0 ) {
	add_action( 'wp_ajax_scf_get_favorites', 'scf_get_favorites_callback' );
	add_action( 'wp_ajax_nopriv_scf_get_favorites', 'scf_get_favorites_callback' );

	function scf_get_favorites_callback() {
		$post_ids = $_POST['posts'];

		global $post;

		if ( $post_ids ) {

			$posts = get_posts( [ 'numberposts' => - 1, 'post_type' => 'post', 'post__in' => $post_ids ] );
			foreach ( $posts as $post ):
				setup_postdata( $post ); ?>
				<div class="item">
					<?php
					$thumb     = get_post( get_post_thumbnail_id() );
					$image_alt = get_post_meta( $thumb->ID, '_wp_attachment_image_alt', true );
					?>
					<div class="slot-item">
						<div class="slot-item-icon">
							<div class="slot-item-fav scf_remove_fav_btn" data-id="<?php the_ID(); ?>" title="Удалить из избранного"><i class="fas fa-star"></i></div>

							<img src="<?= kama_thumb_src( "w=290 &h=186", get_post_thumbnail_id() ); ?>" title="<?php echo $thumb->post_title; ?>" alt="<?php echo $image_alt; ?>">

							<div class="slot-item-btns">
								<a href="<?php the_permalink(); ?>" class="btn btn-bordered">Бесплатно</a>
								<a href="<?php echo get_field( 'game_link_default', 'options' ); ?>" class="btn btn-green">На деньги</a>
							</div>
						</div>
						<div class="slot-item-title"><?php the_title(); ?></div>
					</div>
				</div>
			<?php endforeach;
		} else {
			echo "<div class='item'><div class='no-fav'>В вашем избранном пока пусто</div></div>";
		}

		wp_die();
	}
}
