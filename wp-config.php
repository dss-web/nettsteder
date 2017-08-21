<?php

require dirname( __FILE__ ) . '/../local-config.php';

$table_prefix = 'wp_';

// Custom Content Directory
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'https://' . $_SERVER['HTTP_HOST'] . '/content' );

// Custom uploads directory
define( 'UPLOADS', 'media' );

// Disable the Plugin and Theme Editor
define( 'DISALLOW_FILE_EDIT', true );
// Disable Plugin and Theme Update and Installation
define( 'DISALLOW_FILE_MODS', true );
// Disable All Automatic Updates
define( 'AUTOMATIC_UPDATER_DISABLED', true );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
}

require_once ABSPATH . 'wp-settings.php';

