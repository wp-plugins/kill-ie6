<?php
/*
Plugin Name: Kill ie6
Plugin URI: http://kill-ie6.pirateboy.net
Description: Adds a warning at the top of each page visible to users that are still using Internet Explorer 6.
Version: 1.0
Author: Jonk
Author URI: http://jonk.pirateboy.net
*/
$killie6Global_Path = get_option('siteurl')."/wp-content/plugins/kill-ie6/";

function killie6_js() {
	global $killie6Global_Path;
	echo "
<script language=\"JavaScript\" src=\"".$killie6Global_Path."kill-ie6.js\" type=\"text/javascript\"></script>
";
}

add_action('wp_head', 'killie6_js');
?>
