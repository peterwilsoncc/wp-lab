<?php
if ( defined( 'WP_INSTALLING' ) && WP_INSTALLING ) {
	return;
}

$plugins = array(
	'wp-api/plugin.php',
	'patternlab-wp-core/patternlab-wp.php',
);

foreach ( $plugins as $plugin ) {
	require_once( dirname( __FILE__ ) . '/' . $plugin );
}
