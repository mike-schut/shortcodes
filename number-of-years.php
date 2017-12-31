<?php

// Description: Returns the number of years between 2 different years
// Example Shortcodes
// [years startYear="1995"] = 23
// [years startYear="1995" endYear="2001"] = 6

function calculate_number_of_years($atts) {
	$atts = shortcode_atts(
		array(
			'startYear' => '',
			'endYear'  => '',
		), $atts
	);
	if(is_int($atts['startYear'])){
		if(is_int($atts['endYear'])){
			return $atts['startYear'] - $atts['endYear'];
		}
		return $atts['startYear'] - date('Y');
	}
	return '[Please enter a valid start year]';
}
add_shortcode('years', 'calculate_number_of_years');

?>