<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bookmark' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'p5MtHyrHwkHf3p86fQUtnpa4vrbBEE0KhIvUbaPScKTC5cw2pq13U4u5IkBOZvZK' );
define( 'SECURE_AUTH_KEY',  'tXvZmf5VioWpJtEvN9AsKIe6C6P8MqAr0lQaWe1rCyVF6Kc3uFyF6V905osXmWyD' );
define( 'LOGGED_IN_KEY',    'n5T6GSyOAv7gofH4l4Kx1D8z6nIheWrAoc3oWTJJkXuoXBMGWyegu2LtmbSwuygb' );
define( 'NONCE_KEY',        'fN2RQadK9YirDN211xFqqJzN5aPkHKhO12vzTy73XyRh5drnspuaP0G6yJSZYkeZ' );
define( 'AUTH_SALT',        '85UcPRQvs6tQKxJMBlVGRUBxaSQNARDxK94bjNAg8VK5BJKaT2Tl1263TGwyl1nN' );
define( 'SECURE_AUTH_SALT', 'xqBJCyOPHlknX1p0Q5zeNXDP6U96bolAvu5zs2mzjmvycgX1g6jBF4b1nYIxnY7h' );
define( 'LOGGED_IN_SALT',   '58EyZQ019eLhfl32Uprgju2xHuyIBKIxVNU3bZUlwekktRFknxlK1y3oR1nGaQnh' );
define( 'NONCE_SALT',       '1A0ixxrUhEiWyxG1P3u6Jo4nsQ8QUKLUIpoc4bXGLJVwaoLcG2M5bKRnwF77S7Fs' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
