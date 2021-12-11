<?php

/* ACF link helper */
function get_field_link( $link, $class = '', $default = 'Learn More', $echo = true ) {
	if ( empty( $link ) && ! is_array( $link ) ) {
		return false;
	}

	$link_title = ! empty( $link['title'] ) ? $link['title'] : $default;

	$output = "<a ";
	$output .= ! empty( $class ) ? "class='{$class}'" : null;
	$output .= "href='{$link['url']}'";
	$output .= ! empty( $link['target'] ) ? "target='_blank'" : null;
	$output .= ">{$link_title}</a>";

	// @codingStandardsIgnoreStart
	if ( $echo ) {
		echo $output;
	} else {
		return $output;
	}
	// @codingStandardsIgnoreEnd
}

function get_field_image_link( $icon, $link, $class = '', $default = 'Learn More', $echo = true ) {
	if ( empty( $icon ) && empty( $link ) && ! is_array( $link ) ) {
		return false;
	}

	$link_title = ! empty( $link['title'] ) ? $link['title'] : $default;

	$output = "<a ";
	$output .= "href='{$link['url']}'";
	$output .= ! empty( $class ) ? "class='{$class}'" : null;
	$output .= ! empty( $link['target'] ) ? "target='_blank'" : null;
	$output .= ">";
	$output .= "<img src='{$icon}' alt=''>";
	$output .= "<span>{$link_title}</span>";
	$output .= "</a>";

	// @codingStandardsIgnoreStart
	if ( $echo ) {
		echo $output;
	} else {
		return $output;
	}
	// @codingStandardsIgnoreEnd
}
