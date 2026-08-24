<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ak_store' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '=~KXX.: nU$=}D:R=sIpG,g34VZo$^{L?;]o?keK~d>0pe4-J/W7reQ=PA1ZtGRf' );
define( 'SECURE_AUTH_KEY',  'p~M=ft9]2SaT:L/bnZ+=)Uz-!gFb6H/uvN_9tpn,%BxUj;q:Ln.2Ivc[Ftf/<Eul' );
define( 'LOGGED_IN_KEY',    ']AO&H~X~{r@Qnv/Z4f<RjnCj1<e^$0<zsWHuvff%(T{+1NI[7 x!`Dj.^Io[a-RH' );
define( 'NONCE_KEY',        'wRZPMfTYS3Hm*/VMm`c2[ArB-fY)[4IIQm@mDI[4y2w3>hj_N}hZ!7ajN<cHx.-@' );
define( 'AUTH_SALT',        'aZUq?/5]jfGd|2EV|UvbeX:g4+e-5Zs3.r&gk--l6clI5iCtA*EvK3ri6CvC@}QZ' );
define( 'SECURE_AUTH_SALT', 'ov!mp8$kL/q~/G|0HR&C48}]f1S]O?c!zo@Cy,rS!Ic|++<LY<ozgLao4+}t[?<8' );
define( 'LOGGED_IN_SALT',   '.z>_*0mv=2Y&+bI{;Am@RZ]rR1q-t,8>3.6cD JJv2dH,?7yF@hf.#GI;>;4cV-l' );
define( 'NONCE_SALT',       '^S7Jy}yX9H#Ad~9l`[ST.q5#)Vm2bcR_zAU|7<+j &M$ P3QhIv)vB:%@byr<7A.' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
