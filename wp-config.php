<?php

require dirname( __FILE__ ) . '/../local-config.php';

$table_prefix = 'wp_';

// Custom Content Directory
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'https://' . DOMAIN_CURRENT_SITE . '/content' );

// Custom uploads directory
define( 'UPLOADS', 'media' );
// Disable the Plugin and Theme Editor
define( 'DISALLOW_FILE_EDIT', true );
// Disable Plugin and Theme Update and Installation
define( 'DISALLOW_FILE_MODS', true );
// Disable All Automatic Updates
define( 'AUTOMATIC_UPDATER_DISABLED', true );

// Multisite setup
define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
$base = '/';
// define( 'DOMAIN_CURRENT_SITE', 'nettsteder.regjeringen.no' ); // Must be set in ../local-config.php
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
}

require_once ABSPATH . 'wp-settings.php';
