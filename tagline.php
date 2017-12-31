<?php

// Description: Returns the Site Description under Settings > General
// Example Shortcodes
// [sitedescription]

function get_sitedescription() {
	return get_bloginfo('description');
}
add_shortcode('sitedescription', 'get_sitedescription');

?>