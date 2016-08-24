<?php

namespace n8finch\dev\structure\bar;

add_action( 'genesis_before', __NAMESPACE__ . '\customize_bar_page' );
/**
 * Customize the Front Page.
 * Do all work within is_front_page conditional
 */
function customize_bar_page() {
	if ( is_page('bar') ) {
		remove_all_actions( 'genesis_loop' );
		add_action( 'genesis_before_content_sidebar_wrap', __NAMESPACE__ . '\add_bar_page_contents' );
	}
}

function add_bar_page_contents() {

	//Get Data
	//Bar Intro Section
	$bar_introduction = get_field('bar_introduction');
	$bar_slider = get_field('bar_slider');
	$bar_wine_and_spirits_list_upload = get_field('bar_wine_and_spirits_list_upload');

	//Bar Menu Section
	$bar_appetizer_menu_items = get_field('bar_appetizer_menu_items');
	$bar_main_menu_items = get_field('bar_main_menu_items');
	$bar_sweet_and_sweet_menu_items = get_field('bar_sweet_and_sweet_menu_items');

	$bar_menu_icon_top = get_field('bar_menu_icon_top');
	$bar_menu_icon_bottom = get_field('bar_menu_icon_bottom');


	echo '<div class="bar-page-container">';
	echo '<div class="bar-page-menu-links">';
	echo '<a id="bar-intro" class="bar-page-menu-link" href="#">Intro</a>';
	echo '<a id="bar-menu" class="bar-page-menu-link" href="#">Menu</a>';
	echo '<a class="bar-page-menu-link" href="' . $bar_wine_and_spirits_list_upload . '" target="_blank">Wine List</a>';
	echo '</div>';// end bar-page-menu-links

	echo '<div class="bar-introduction-section">';
	echo '<div class="bar-intro">' . $bar_introduction . '</div>';
	echo '<div class="bar-slider">';
	masterslider($bar_slider);
	echo '</div> <!--end bar slider-->'; //end bar slider
	echo '</div>'; //end bar introduction section


	echo '<div id="bar-menu-items" class="choice-menu-items">';

	echo '<img class="eat-page-icons" src="' . $bar_menu_icon_top. '"/>';

	echo '<div class="appetizer-menu-items">';

	echo '<h3 class="choice-menu-items-headers">Appetizers</h3>';

	foreach ( $bar_appetizer_menu_items as $row ) {
		echo '<div class="appetizer-menu-item">' .
		     $row['appetizer_name_korean'] .
		     '<br/>' .
		     $row['appetizer_name_english'] .
		     '<br/>' .
		     $row['appetizer_description'] .
		     '<br/>' .
		     $row['appetizer_price'] .
		     '</div>';
	}

	echo '</div>';

	echo '<div class="main-menu-items">';

	echo '<h3 class="choice-menu-items-headers">Main</h3>';

	foreach ( $bar_main_menu_items as $row ) {
		echo '<div class="appetizer-menu-item">' .
		     $row['bar_dish_name_korean'] .
		     '<br/>' .
		     $row['bar_dish_name_english'] .
		     '<br/>' .
		     $row['bar_dish_description'] .
		     '<br/>' .
		     $row['bar_dish_price'] .
		     '</div>';
	}

	echo '</div> <!--end main-menu-items-->';

	echo '<div class="side-and-sweet-menu-items">';

	echo '<h3 class="choice-menu-items-headers">Side & Sweet</h3>';

	foreach ( $bar_sweet_and_sweet_menu_items as $row ) {
		echo '<div class="appetizer-menu-item">' .
		     $row['side_and_sweet_name_korean'] .
		     '<br/>' .
		     $row['side_and_sweet_name_english'] .
		     '<br/>' .
		     $row['side_and_sweet_description'] .
		     '<br/>' .
		     $row['side_and_sweet_price'] .
		     '</div>';
	}


	echo '</div>'; //TODO: missing div???

	echo '<h3>* indicates the dish is not available in this size.</h3>';

	echo '<img class="eat-page-icons" src="' . $bar_menu_icon_bottom. '"/>';

	echo '</div><!--//end bar-menu-items-->';

	echo '<div class="eat-page-icons" style="position: static; bottom: 0; right: 50%;"><a href="https://www.facebook.com/jungsikbar/" target="_blank"><span class="fa fa-facebook fa"></span></a> | 	<a class="twitter" href="https://twitter.com/JUNGSIKDANG" target="_blank"><span class="fa fa-twitter fa"></span></a></div>';

	echo '</div>'; //end bar-page-container


}


