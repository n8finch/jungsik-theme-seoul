<?php

namespace n8finch\dev\structure\press;

add_action( 'genesis_before', __NAMESPACE__ . '\customize_press_page' );
/**
 * Customize the Front Page.
 * Do all work within is_front_page conditional
 */
function customize_press_page() {
	if ( is_page( 'press' ) ) {
		remove_all_actions( 'genesis_loop' );
		add_action( 'genesis_before_content_sidebar_wrap', __NAMESPACE__ . '\add_bar_page_contents' );
	}
}

function add_bar_page_contents() {

	//Get the data
	$press_items = get_field( 'press_items' );

	echo '<div class="press-items">';

	foreach ( $press_items as $row ) {
		echo '<div class="press-item">' .
		     '<a href="'.$row['press_item_link'].'" target="_blank"><img class="press-item-pic" src="' . $row["press_item_image"] . '"/></a>' .
		     '<br/>' .
		     '<a href="'.$row['press_item_link'].'" target="_blank"><h3>' . $row['press_item_title'] . '</h3></a>' .
		     '<br/>' .
		     $row['press_item_content'] .
		     '<hr/>' .
		     '</div>';
	}

	echo '<div class="press-item"><a href="https://www.facebook.com/pages/%EC%A0%95%EC%8B%9D%EB%8B%B9-%EC%84%9C%EC%9A%B8-Jungsik-Seoul/812195042136021?hc_ref=SEARCH" target="_blank"><span class="fa fa-facebook fa"></span></a> | 	<a class="twitter" href="https://twitter.com/JUNGSIKDANG" target="_blank"><span class="fa fa-twitter fa"></span></a></div>';

	echo '</div>';
}


