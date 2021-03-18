<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'codem385_wp134' );

/** MySQL database username */
define( 'DB_USER', 'codem385_wp134' );

/** MySQL database password */
define( 'DB_PASSWORD', '03!-pS70f9' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'krvlanzbp2zsnvtqejub2kkcwbq3rhshxmwswazay8sp5lfxecdz1168hdroiu7p' );
define( 'SECURE_AUTH_KEY',  '1qgcy90phkqtavk1i39iw8yanubjzo0mqsujbnkvp0yndzkiqxsbdy8cbigffqgl' );
define( 'LOGGED_IN_KEY',    'phsov8uqvgyzmazjyekpzhwfbrnlpsjdzbqbhmppyf9ahb7uvyzqn3csvkfv7rht' );
define( 'NONCE_KEY',        'qgorffbvvxnux4odtaqaodsnnscuqmkkzxvhxhdwkpo11ctyj92rhj0u22chmyk5' );
define( 'AUTH_SALT',        'gvq2qxpit0tb1tniedffyxvwfx3az53kiyv5rkfvhpgtahbqk1kqibbrqkqosglz' );
define( 'SECURE_AUTH_SALT', 'z0ngxfl6xewimqfjdhm2gsrwtfdlje0zlemvlditlnhxc6ib7e1dxbw3ucnmvlmv' );
define( 'LOGGED_IN_SALT',   't0zh7gy257dv00viup53f251fia619ywqzol94jchbir9proxf0ap5msgp3rvud9' );
define( 'NONCE_SALT',       'dqqexq0a3q3pp4elh0g35acfjcqmxtyrr3xpkjhnaugauffj8aty7pyzwvu15mdc' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'novalab_wp3s_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
