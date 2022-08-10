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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'gW/5 CFxCNe]>}{aFlp@5X%/?xzaJu86}`NT7?+d/ /*^d$3_C0NYq74=8d7X.%t' );
define( 'SECURE_AUTH_KEY',  'H5`a/j~.u28j|+xGY,hy]7xoGzD(ykj,v}8#eY*&v|8?B-ZYb&]5O<(dH fSMNL9' );
define( 'LOGGED_IN_KEY',    '[YL{b&OV`<F8pvgXkhptS,BsI?[D}Uea()42Uv?[.vBd%8:_WXzzIOhFkbE!23?%' );
define( 'NONCE_KEY',        'eYYx$~K8 [iSQGSHC[I(7f6MBUdRjT3PL:&fgBlwLizNQtWI}:p:*HeH#TVTnJOX' );
define( 'AUTH_SALT',        '>$at>O{MxUkk.MoYgaWtN2U@`~+s*AIP|W}4OdI9Xa}/8$4bFn|z*+J|EDFQ87QO' );
define( 'SECURE_AUTH_SALT', 'PR;}u]6Z_96,Y11L5{:^LJmG8r1_O1I#|=oYc;)/,iu]=R*xcY_u@Ga/z2He%!pv' );
define( 'LOGGED_IN_SALT',   '4YE-r?:%m`oe>DezTv^>6w+|.;Z_gc1,bgm{Q2$Ve/TK_s{k`P{T!!|QR2MyagLv' );
define( 'NONCE_SALT',       '4)/j4tm64+T6oS{fyc1fL,$3ipOgbp@HHhL;>`**_Wcj@|}H@bpu}eJXJ+cV)-ds' );

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
