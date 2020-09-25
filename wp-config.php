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
define( 'DB_NAME', 'bmsoftware' );

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
define( 'AUTH_KEY',         '<.8<vq&y=I/%n. Qo;MM*s~~QQd~21:al)U+$^`p2|,ckxpdQ)z&m}ACne*1*evp' );
define( 'SECURE_AUTH_KEY',  'ukwEDJx47Xq4rR[q-.Nv$;lT^yCG!8ABzKH</c^W7W)+A]7@I@)#&jDQEuoxQJXe' );
define( 'LOGGED_IN_KEY',    'NS{TtgTsk.xz>+(v+i|p7A,+A7?Wj+]ncn2i_zTNaT,c+O8n]5E2b/PUEd#xi.%5' );
define( 'NONCE_KEY',        '4g;O]by`v,!$|oY3D{GQzDZ1I8~C2TdO:?r<WO,5(ud3#qisMq&.pI@%e=KWl}l-' );
define( 'AUTH_SALT',        'cTy>*E:yxo=p(Arj0$)bgAT!`<iY!#T~DM&poIO=mn>:7$]&}rJ[wI|E^fo_a2K9' );
define( 'SECURE_AUTH_SALT', '}8CV#$)^=tDTW#%IeqT0/ b=33z F/)I>$*#R*b$w7(tFCGlQPBUT 2m4yqZmRd6' );
define( 'LOGGED_IN_SALT',   '-a4Xe%Mib jhHRn3YgGyF*MP_3i>NQT(0kX%q1_0NH~KAI,GD9?ZX}TIbmg/x_,A' );
define( 'NONCE_SALT',       '{XrSC|b2tG{zu>PvREj8qNX>Y|*v~I%E=omwX+@jJuj4El}(R1gdA%OH<<OcIyHZ' );

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
