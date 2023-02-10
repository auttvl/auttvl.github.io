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
define( 'DB_NAME', 'mywbsace_auttvl1' );

/** MySQL database username */
define( 'DB_USER', 'mywbsace_auttvl1' );

/** MySQL database password */
define( 'DB_PASSWORD', '5nZai%2=!p3A' );

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
define( 'AUTH_KEY',         '#e.npZ]xRx>P-4nw5%h</)Q;jyEf/6ph;3;p+c=5/s^G<^KL). mO3&zM,L1bYZ~' );
define( 'SECURE_AUTH_KEY',  ')ZtpWr]%&l/o8DD`8!97we~Ci<V#eML0GFRvx?d)Gdih^l*;`4ZckG+SV~pf7ejm' );
define( 'LOGGED_IN_KEY',    'Ky |];adv@}wcRCfg1MZZc&;WG?=V<NOF9![R)ab$IYM)Y;@!HG`Yts+3j!DlJrr' );
define( 'NONCE_KEY',        'x108cNqW|Tzu*%TcMba:Vd1OBR-!z>N/nx@6r:4CBmu4iXqKQt~zw7Ds[*+,do!_' );
define( 'AUTH_SALT',        'bVkf$v[b[]bTGg3ouHazQlS0M$9_`a/9yQGR6&Z@k +|dR`tm<hMb*6|z^1| D-8' );
define( 'SECURE_AUTH_SALT', '^x3Sf]}T{@lwO|T!fjk138v3Z=20^[RtDjbJ]axeoAkIyV1[KQwpu9%f/jdf}B4#' );
define( 'LOGGED_IN_SALT',   'FyGY?c,jb.yny$dby=S aHo8mi?^mn{p5DT}aLr~x;!pX8?x=G)N=;/8LWaFF ^<' );
define( 'NONCE_SALT',       '@J_w^AP^-jC35IK4~@CqwxTZz4bSgRA{$t}qKo_4$<j&r=pYGm2zDTFFC`wQfGGP' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'auttvl_';

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
//define( 'WP_DEBUG', false );

ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define( 'WP_DEBUG', false );
define('WP_DEBUG_DISPLAY', false);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
