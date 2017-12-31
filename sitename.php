<?php

// Description: Returns the Site Name under Settings > General
// Example Shortcodes
// [sitename]

function get_sitename() {
	return get_bloginfo('name');
}
add_shortcode('sitename', 'get_sitename');

?>