<?php

namespace n8finch\dev\structure\eat;

add_action( 'genesis_before', __NAMESPACE__ . '\customize_eat_page' );
/**
 * Customize the Front Page.
 * Do all work within is_front_page conditional
 */
function customize_eat_page() {
	if ( is_page( 'eat' ) ) {
		remove_all_actions( 'genesis_loop' );
		add_action( 'genesis_before_content_sidebar_wrap', __NAMESPACE__ . '\add_bar_page_contents' );
	}
}

function add_bar_page_contents() {

	global $wp_query;

	$post_ID = $wp_query->queried_object->ID;
	//Get the non-repeater field data

	//Lunch Choice Menu Items
	$lunch_appetizer_menu_items         = get_field( 'lunch_appetizer_menu_items' );
	$lunch_rice_menu_items              = get_field( 'lunch_rice_menu_items' );
	$lunch_sea_menu_items               = get_field( 'lunch_sea_menu_items' );
	$lunch_land_menu_items              = get_field( 'lunch_land_menu_items' );
	$lunch_sweet_menu_items             = get_field( 'lunch_sweet_menu_items' );
	$lunch_choice_menu_icon_top         = get_field( 'lunch_choice_menu_icon_top' );
	$lunch_choice_menu_icon_middle      = get_field( 'lunch_choice_menu_icon_middle' );
	$lunch_choice_menu_icon_bottom      = get_field( 'lunch_choice_menu_icon_bottom' );
	$lunch_choice_group_course_option_1 = get_field( 'lunch_choice_group_course_option_1' );
	$lunch_choice_group_course_option_2 = get_field( 'lunch_choice_group_course_option_2' );

	//Lunch Tasting Menu Items
	$lunch_tasting_menu_title                = get_field( 'lunch_tasting_menu_title' );
	$lunch_tasting_menu_selections           = get_field( 'lunch_tasting_menu_selections' );
	$lunch_tasting_menu_price                = get_field( 'lunch_tasting_menu_price' );
	$lunch_wine_pairing_price                = get_field( 'lunch_wine_pairing_price' );
	$lunch_tasting_menu_title_signature      = get_field( 'lunch_tasting_menu_title_signature' );
	$lunch_tasting_menu_selections_signature = get_field( 'lunch_tasting_menu_selections_signature' );
	$lunch_tasting_menu_price_signature      = get_field( 'lunch_tasting_menu_price_signature' );
	$lunch_wine_pairing_price_signature      = get_field( 'lunch_wine_pairing_price_signature' );
	$lunch_tasting_menu_icon_top             = get_field( 'lunch_tasting_menu_icon_top' );
	$lunch_tasting_menu_icon_middle          = get_field( 'lunch_tasting_menu_icon_middle' );
	$lunch_tasting_menu_icon_bottom          = get_field( 'lunch _tasting_menu_icon_bottom' );

	//Dinner Choice Menu Items
	$dinner_appetizer_menu_items         = get_field( 'dinner_appetizer_menu_items' );
	$dinner_rice_menu_items              = get_field( 'dinner_rice_menu_items' );
	$dinner_sea_menu_items               = get_field( 'dinner_sea_menu_items' );
	$dinner_land_menu_items              = get_field( 'dinner_land_menu_items' );
	$dinner_sweet_menu_items             = get_field( 'dinner_sweet_menu_items' );
	$dinner_choice_menu_icon_top         = get_field( 'dinner_choice_menu_icon_top' );
	$dinner_choice_menu_icon_middle      = get_field( 'dinner_choice_menu_icon_middle' );
	$dinner_choice_menu_icon_bottom      = get_field( 'dinner_choice_menu_icon_bottom' );
	$dinner_choice_group_course_option_1 = get_field( 'dinner_choice_group_course_option_1' );
	$dinner_choice_group_course_option_2 = get_field( 'dinner_choice_group_course_option_2' );

	//Dinner Tasting Menu Items
	$dinner_tasting_menu_title                = get_field( 'dinner_tasting_menu_title' );
	$dinner_tasting_menu_selections           = get_field( 'dinner_tasting_menu_selections' );
	$dinner_tasting_menu_price                = get_field( 'dinner_tasting_menu_price' );
	$dinner_wine_pairing_price                = get_field( 'dinner_wine_pairing_price' );
	$dinner_tasting_menu_title_signature      = get_field( 'dinner_tasting_menu_title_signature' );
	$dinner_tasting_menu_selections_signature = get_field( 'dinner_tasting_menu_selections_signature' );
	$dinner_tasting_menu_price_signature      = get_field( 'dinner_tasting_menu_price_signature' );
	$dinner_wine_pairing_price_signature      = get_field( 'dinner_wine_pairing_price_signature' );
	$dinner_tasting_menu_icon_top             = get_field( 'dinner_tasting_menu_icon_top' );
	$dinner_tasting_menu_icon_middle          = get_field( 'dinner_tasting_menu_icon_middle' );
	$dinner_tasting_menu_icon_bottom          = get_field( 'dinner_tasting_menu_icon_bottom' );

	//Wine List
	$dinner_wine_list_seoul = get_field( 'dinner_wine_list_seoul' );


	//Eat page Menu Links
	echo '<div class="eat-page-menu-links">';
	echo '<a id="lunch-choice-menu-link" class="eat-page-menu-link" href="#">Choice Lunch</a>';
	echo '<a id="lunch-tasting-menu-link" class="eat-page-menu-link" href="#">Tasting Lunch</a>';
	echo '<a id="dinner-choice-menu-link" class="eat-page-menu-link" href="#">Choice Dinner</a>';
	echo '<a id="dinner-tasting-menu-link" class="eat-page-menu-link" href="#">Tasting Dinner</a>';
	echo '<a class="eat-page-menu-link" href="' . $dinner_wine_list_seoul . '" target="_blank">Wine List</a>';
	echo '</div>';


	echo '<div class="eat-page-menu-items">';

	/**
	 * Insert Lunch Choice Menu Template Part
	 */
	require __DIR__ . '/eat-page-template-parts/lunch-choice-menu.php';

	echo '<img class="eat-page-icons" src="' . $lunch_choice_menu_icon_middle . '"/>';

	/**
	 * Insert Lunch Choice Menu Group Template Part
	 */
	require __DIR__ . '/eat-page-template-parts/lunch-choice-menu-group.php';

	echo '</div>'; // end choice-menu-items


	/**
	 * Insert Lunch Tasting Menu Group Template Part
	 */
	require __DIR__ . '/eat-page-template-parts/lunch-tasting-menu.php';



	/**
	 * Insert Dinner Choice Menu Template Part
	 */
	require __DIR__ . '/eat-page-template-parts/dinner-choice-menu.php';

	echo '<img class="eat-page-icons" src="' . $lunch_choice_menu_icon_middle . '"/>';

	/**
	 * Insert Dinner Choice Menu Group Template Part
	 */
	require __DIR__ . '/eat-page-template-parts/dinner-choice-menu-group.php';

	echo '</div>'; // end choice-menu-items

	/**
	 * Insert Dinner Tasting Menu Group Template Part
	 */
	require __DIR__ . '/eat-page-template-parts/dinner-tasting-menu.php';



	echo '<a href="http://www.facebook.com/sharer.php?u=' . get_permalink( $post_ID ) . '" target="_blank"><span class="fa fa-facebook fa"></span></a> | 	<a class="twitter" href="https://twitter.com/intent/tweet?url=' . get_permalink( $post_ID ) . '%2F&text=Check%20this%20out:%20&via=jungsikdang" target="_blank"><span class="fa fa-twitter fa"></span></a>';
	echo '</div>'; // end eat-page-menu-items

}


