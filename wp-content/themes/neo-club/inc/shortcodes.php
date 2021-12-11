<?php

add_shortcode( 'screen', 'add_screens' );
function add_screens() {
	$html = '';
	if ( have_rows( 'screens' ) ):
		$html .= '<div class="screens-box">';
		$html .= '<div class="screens-carousel swiper-container">';
		$html .= '<div class="swiper-wrapper">';
		while ( have_rows( 'screens' ) ): the_row();
			$thumb     = get_post( get_sub_field( 'image' ) );
			$image_alt = get_post_meta( get_sub_field( 'image' ), '_wp_attachment_image_alt', true );
			$link      = get_sub_field( 'image' );
			$html      .= '<div class="swiper-slide">';
			$html      .= '<a href="' . $link . '" class="cboxElement">';
			$html      .= '<img src="' . kama_thumb_src( "w=249 &h=162", $link ) . '" title="' . $thumb->post_title . '" alt="' . $image_alt . '" class="colorbox-99991"></a></div>';
		endwhile;
		$html .= '</div>';
		$html .= '<div class="screens-pagination"></div>';
		$html .= '</div>';
		$html .= '</div>';
	endif;

	return $html;
}
