<?php

// Description: Returns the current year
// Example Shortcodes
// [year] = 2018

function get_current_year() {
	return date('Y');
}
add_shortcode('year', 'get_current_year');

?>