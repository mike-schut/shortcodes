<?php

// Description: Returns the current date
// Example Shortcodes
// [date] = Monday, January 1, 2018

function get_current_date() {
	return date('l \, F j \, Y');
}
add_shortcode('date', 'get_current_date');


?>