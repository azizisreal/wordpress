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
define( 'DB_NAME', 'testwp_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '[jEmA&spVr[fl6cy{D?7pvUn1^qCZeYQDT_&1Z>UjU1ksi^8z4]6BYkG+=d=pm!;' );
define( 'SECURE_AUTH_KEY',  'F%RYZ9k t)yPYt9p_#^pN-uSPj=TGTG#Z$[~!3Wq ~r*%-:00?^9nq|!c.X%6I&E' );
define( 'LOGGED_IN_KEY',    '1Di[U&JziV0$F%mp*{A*1smF@OyWtQK`.C/6oElxW/]N#O/u)gkpR%(q.NbiG7ln' );
define( 'NONCE_KEY',        '?=Ss5aM%0+Y<3-UCfR_+LH3gd,go72C{Og/X1a_pZ}iw(3Q4ds<^-S1|TdlIBG#)' );
define( 'AUTH_SALT',        'l 1%fhNzB.G6}^ne4^8&o>$#0=F,~mVC7eryrO@g>~~*~aC,{dY4C1+%w,`:El?C' );
define( 'SECURE_AUTH_SALT', '$X2kF)3>AgB{7cO=$KH)T7-!-Zmb!l&yph[,$?ujdi85A/rvZh,El`wh6N2gNqri' );
define( 'LOGGED_IN_SALT',   'KafHE?%ar$q#/Xl|P03m&zB+plvu#,H2mW%_8P&d4Nwoshv<@`2C!?,vCrt91]FD' );
define( 'NONCE_SALT',       'S+ 4d^h<~9<__KR& #h<wEr--3->_thGAc.jg|6I-^*L?WqBg59{UI+{iA{J#G$f' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
