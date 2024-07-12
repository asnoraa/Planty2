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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Planty' );

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
define( 'AUTH_KEY',         'XpSUPRzQM7uy4urHREKdE9WAdDIOvQFHgVE5chZal2HlwdyJ8aHDUOVEgo7W0NdZ' );
define( 'SECURE_AUTH_KEY',  'Xq3BK0ALHt5pPiwQlm8GjZdsr6NWB4vplb6anL27THQKsMWsdAjzeGuEZOg0d1o7' );
define( 'LOGGED_IN_KEY',    'Au7rSFuaYXX8mtOvqbRHdmq5ETw8gPkpuC54NXLAp6Khn0OJ4N0OCbMpL3ZS4yVF' );
define( 'NONCE_KEY',        'qmyMOJh4C3AZhcJxFRti0RKG2EHl72Puvsty1JPUWYiOdTORsYwnneTEgi30Ha0D' );
define( 'AUTH_SALT',        'mI2kVIByq6nFwzlrfKK1xYQRUPdiiPkKLJuBnkuAuWp4jUslFGQmSn5XvRXMpWyu' );
define( 'SECURE_AUTH_SALT', 'LwDV2qAd3Z6gidtHBKjh7bLRh3rXhGQSejzoH2365gkSEpeCW0Ut4WAAqUagpyKL' );
define( 'LOGGED_IN_SALT',   'oFygGmr6Jt779pHiwBsXouEgaA8bXqniNOAjrk8iJwzYfKbzNJf7NFW2UOxzam1x' );
define( 'NONCE_SALT',       'kAX5y4JkfxtP2MNawvqvsyzPo8CGEIeLhC8StZXQmVmvGfRT1DkitoaEZchuQhLu' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
