<?php

echo '<div class="tasting-menu-items">';

echo '<img class="eat-page-icons" src="' . $lunch_tasting_menu_icon_top . '"/>';

echo '<p>' . $lunch_tasting_menu_title . '</p>';

	foreach ( $lunch_tasting_menu_selections as $row ) {
		echo '<div class="tasting-menu-item">' .
		     $row['lunch_tasting_item_name_korean'] .
		     '<br/>' .
		     $row['lunch_tasting_item_name_english'] .
		     '<br/>' .
		     $row['lunch_tasting_item_description'] .
		     '</div>';
	}

echo '<p class="tasting-menu-price">'.$lunch_tasting_menu_price.'</p>';
echo '<p class="wine-pairing-price">'.$lunch_wine_pairing_price.'</p>';

echo '<img class="eat-page-icons" src="' . $lunch_tasting_menu_icon_middle . '"/>';

echo '<p>' . $lunch_tasting_menu_title_signature . '</p>';

foreach ( $lunch_tasting_menu_selections_signature as $row ) {
	echo '<div class="tasting-menu-item">' .
	     $row['lunch_tasting_item_name_korean_signature'] .
	     '<br/>' .
	     $row['lunch_tasting_item_name_english_signature'] .
	     '<br/>' .
	     $row['lunch_tasting_item_description_signature'] .
	     '</div>';
}

echo '<p class="tasting-menu-price">'.$lunch_tasting_menu_price_signature.'</p>';
echo '<p class="wine-pairing-price">'.$lunch_wine_pairing_price_signature.'</p>';

echo '<img class="eat-page-icons" src="' . $lunch_tasting_menu_icon_bottom . '"/>';



echo '</div>'; // end tasting-menu-items
