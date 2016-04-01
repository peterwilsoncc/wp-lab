<?php
if ( defined( 'WP_INSTALLING' ) && WP_INSTALLING ) {
	return;
}

$plugins = array(
	'wp-api/plugin.php',
	'rapid-mustache/rapid-mustache.php',
	'patternlab-wp/patternlab-wp.php',
);

foreach ( $plugins as $plugin ) {
	require_once( dirname( __FILE__ ) . '/' . $plugin );
}
