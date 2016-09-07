<?php

echo '<div id="dinner-tasting-menu-items" class="tasting-menu-items">';

echo '<img class="eat-page-icons" src="' . $dinner_tasting_menu_icon_top . '"/>';

echo '<p>' . $dinner_tasting_menu_title . '</p>';

foreach ( $dinner_tasting_menu_selections as $row ) {
	echo '<div class="tasting-menu-item">' .
	     '<span class="menu-item-header">' . $row['dinner_tasting_item_name_korean'] . '</span>' .
	     '<br/>' .
	     '<span class="menu-item-header">' .  $row['dinner_tasting_item_name_english'] . '</span>' .
	     '<br/>' .
	     $row['dinner_tasting_item_description'] .
	     '</div>';
}

echo '<p class="tasting-menu-price">'.$dinner_tasting_menu_price.'</p>';
echo '<p class="wine-pairing-price">'.$dinner_wine_pairing_price.'</p>';

echo '<img class="eat-page-icons" src="' . $dinner_tasting_menu_icon_middle . '"/>';

echo '<p>' . $dinner_tasting_menu_title_signature . '</p>';

foreach ( $dinner_tasting_menu_selections_signature as $row ) {
	echo '<div class="tasting-menu-item">' .
	     '<span class="menu-item-header">' . $row['dinner_tasting_item_name_korean_signature'] . '</span>' .
	     '<br/>' .
	     '<span class="menu-item-header">' . $row['dinner_tasting_item_name_english_signature'] . '</span>' .
	     '<br/>' .
	     $row['dinner_tasting_item_description_signature'] .
	     '</div>';
}

echo '<p class="tasting-menu-price">'.$dinner_tasting_menu_price_signature.'</p>';
echo '<p class="wine-pairing-price">'.$dinner_wine_pairing_price_signature.'</p>';

echo '<img class="eat-page-icons" src="' . $dinner_tasting_menu_icon_bottom . '"/>';



echo '</div>'; // end tasting-menu-items
