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
define( 'DB_NAME', 'smilodent' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'h;j4zcJhHgIjo]D7~ DuFJp<ZYZA[ZyqPkLCQHtQ{2Qze[q&edL%sJ464d)m-712' );
define( 'SECURE_AUTH_KEY',  '83f(,PFE)l_RAmZZzPC0a.CscdX6bI$2=t?Ks;Obb~m]~6u_S1/Den`_Z5tEoVb:' );
define( 'LOGGED_IN_KEY',    '[fDIVAB{$l!~49&y2oc5/i=$,{CtIRtU,Rgg~wy>_@NWp%_8@pFmD(3IS~*zYagq' );
define( 'NONCE_KEY',        'OV8j`e[l:IS%{~GnQ<$GM.)qNO/$$a+!X`[vC4pfa.q4%3=lgNM*FJ5&nIHNCi4v' );
define( 'AUTH_SALT',        '~4@cU f#v BUeA{gQ_$A(^E~h6-F=nbB?KMG*x3swTgkf)xqZ4?WN%5~>:BkZREP' );
define( 'SECURE_AUTH_SALT', 'OU^o3HHCEp0InILO?Fj ZLuC&JSTq_KH/Me?m=mZl1,%Ystrp_O$W;u95$B72NR_' );
define( 'LOGGED_IN_SALT',   ':MsaQ#SVv_!X-zguU509Ls?;-:;E44}^:=syD5HNeG<97*AvMh~AS[_VwC>Fd_;p' );
define( 'NONCE_SALT',       'u?>_o#5R!)U8:MiBnc9<v<}7S;G]GA{QKj@Q=xKpq`UN:1~L-JKGM]NmY,tPcQo-' );

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
