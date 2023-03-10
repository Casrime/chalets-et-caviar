<?php

/*
 * Function to modify search template for header
 */
if ( ! function_exists( 'activello_header_search_filter' ) ) {
	function activello_header_search_filter( $form ) {
		$form = '<form action="' . esc_url( home_url( '/' ) ) . '" method="get"><input type="text" name="s" value="' . get_search_query() . '" placeholder="' . esc_attr_x( 'Rechercher', 'search placeholder', 'activello' ) . '"><button type="submit" class="header-search-icon" name="submit" id="searchsubmit" value="' . esc_attr_x( 'Rechercher', 'submit button', 'activello' ) . '"><i class="fa fa-search"></i></button></form>';
		return $form;
	}
}
