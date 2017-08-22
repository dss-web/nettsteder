<?php
/**
 * WordPress credential configuration and setup for this installation.
 *
 * This file should be renamed local-config.php and moved one level up in the directory tree,
 * AFTER you have gone over all credentials. You likely have to edit all of them.
 */

// Multisite main site hostname.
define( 'DOMAIN_CURRENT_SITE', 'nettsteder.regjeringen.no' );

// Database credentials.
define( 'DB_NAME', 'database_name_here' );
define( 'DB_USER', 'username_here' );
define( 'DB_PASSWORD', 'password_here' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// Salts for hashing. Get these from: https://api.wordpress.org/secret-key/1.1/salt
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

// Debug settings.
define( 'WP_DEBUG', true );
