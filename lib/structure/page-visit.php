<?php

namespace n8finch\dev\structure\visit;

add_action( 'genesis_before', __NAMESPACE__ . '\customize_visit_page' );
/**
 * Customize the Front Page.
 * Do all work within is_front_page conditional
 */
function customize_visit_page() {
	if ( is_page( 'visit' ) ) {
		remove_all_actions( 'genesis_loop' );
		add_action( 'genesis_before_content_sidebar_wrap', __NAMESPACE__ . '\add_bar_page_contents' );
	}
}

function add_bar_page_contents() {

	$visit_subtitle            = get_field( 'visit_subtitle' );
	$visit_page_content        = get_field( 'visit_page_content' );
	$visit_page_bottom_content = get_field( 'visit_page_bottom_content' );
	$main_map_picture          = get_field( 'main_map_picture' );
	$map_background_picture    = get_field( 'map_background_picture' );

	echo '<div class="visit-page-container" style="background-image: url(' . $map_background_picture . ');">';

	echo '<div class="visit-page-subtitle"><h3>' . $visit_subtitle . '</h3></div>';

	echo '<div class="visit-page-content">' . $visit_page_content . '</div>';

	echo '<div class="visit-page-map-main-pic"><img src="' . $main_map_picture . '"/></div>';

	echo '<div class="visit-page-bottom-content">' . $visit_page_bottom_content . '</div>';

	echo '<a href="https://www.facebook.com/pages/%EC%A0%95%EC%8B%9D%EB%8B%B9-%EC%84%9C%EC%9A%B8-Jungsik-Seoul/812195042136021?hc_ref=SEARCH" target="_blank"><span class="fa fa-facebook fa"></span></a> | 	<a class="twitter" href="https://twitter.com/JUNGSIKDANG" target="_blank"><span class="fa fa-twitter fa"></span></a>';

	echo '</div>';// end visit-page-container

}


