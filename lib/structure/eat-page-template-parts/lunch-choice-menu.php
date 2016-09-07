<?php
echo '<div id="lunch-choice-menu-items" class="choice-menu-items">';

echo '<img class="eat-page-icons" src="' . $lunch_choice_menu_icon_top . '"/>';

echo '<div class="appetizer-menu-items">';

echo '<h3 class="choice-menu-items-headers">Appetizers</h3>';

foreach ( $lunch_appetizer_menu_items as $row ) {
	echo '<div class="appetizer-menu-item">' .
	     '<span class="menu-item-header">' . $row['lunch_appetizer_name_korean'] . '</span>' .
	     '<br/>' .
	     '<span class="menu-item-header">' . $row['lunch_appetizer_name_english'] . '</span>' .
	     '<br/>' .
	     $row['lunch_appetizer_description'] .
	     '<br/>' .
	     $row['lunch_appetizer_price'] .
	     '</div>';
}

echo '</div>';

echo '<div class="rice-noodle-menu-items">';

echo '<h3 class="choice-menu-items-headers">Rice</h3>';

foreach ( $lunch_rice_menu_items as $row ) {
	echo '<div class="appetizer-menu-item">' .
	     '<span class="menu-item-header">' . $row['lunch_rice_name_korean'] . '</span>' .
	     '<br/>' .
	     '<span class="menu-item-header">' . $row['lunch_rice_name_english'] . '</span>' .
	     '<br/>' .
	     $row['lunch_rice_description'] .
	     '<br/>' .
	     $row['lunch_rice_price'] .
	     '</div>';
}
echo '</div>';

echo '<div class="seafood-menu-items">';

echo '<h3 class="choice-menu-items-headers">Seafood</h3>';

foreach ( $lunch_sea_menu_items as $row ) {
	echo '<div class="appetizer-menu-item">' .
	     '<span class="menu-item-header">' . $row['lunch_sea_name_korean'] . '</span>' .
	     '<br/>' .
	     '<span class="menu-item-header">' . $row['lunch_sea_name_english'] . '</span>' .
	     '<br/>' .
	     $row['lunch_sea_description'] .
	     '<br/>' .
	     $row['lunch_sea_price'] .
	     '</div>';
}

echo '</div>';

echo '<div class="land-menu-items">';

echo '<h3 class="choice-menu-items-headers">Land</h3>';

foreach ( $lunch_land_menu_items as $row ) {
	echo '<div class="appetizer-menu-item">' .
	     '<span class="menu-item-header">' . $row['lunch_land_name_korean'] . '</span>' .
	     '<br/>' .
	     '<span class="menu-item-header">' . $row['lunch_land_name_english'] . '</span>' .
	     '<br/>' .
	     $row['lunch_land_description'] .
	     '<br/>' .
	     $row['lunch_land_price'] .
	     '</div>';
}

echo '</div>';

echo '<div class="sweet-menu-items">';

echo '<h3 class="choice-menu-items-headers">Sweet</h3>';

foreach ( $lunch_sweet_menu_items as $row ) {
	echo '<div class="appetizer-menu-item">' .
	     '<span class="menu-item-header">' . $row['lunch_sweet_name_korean'] . '</span>' .
	     '<br/>' .
	     '<span class="menu-item-header">' . $row['lunch_sweet_name_english'] . '</span>' .
	     '<br/>' .
	     $row['lunch_sweet_description'] .
	     '<br/>' .
	     $row['lunch_sweet_price'] .
	     '</div>';
}

echo '</div>';

echo '<div style="clear: both;">';
echo '<p class="tasting-menu-price clear">'.$lunch_choice_group_course_option_1.'</p>';
echo '<p class="wine-pairing-price clear">'.$lunch_choice_group_course_option_2.'</p>';
echo '<p class="wine-pairing-price clear">'.$lunch_group_notice.'</p>';

echo '</div>';

echo '</div>'; //end lunch-choice-menu-items

