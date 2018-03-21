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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'levitube');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'n1sg)YSV$~-OuS#Obo@oDUj^@MsR;kkDbXhD1NP|j1j^7Yda..[e(<,K)4LH`SJy');
define('SECURE_AUTH_KEY',  'v`p#sD||taBuZZ7m]/vS#-{^**;7pe,?oQfZ=Rl!=E;/;s~Ym)#tF3T 4%xu]$Wc');
define('LOGGED_IN_KEY',    'C|]Q*#):7IF{$+Jyf6RUJ5.~!060iq0mWh/#|4g,x zt}vQRD)G+Kv(RHGdh$?PH');
define('NONCE_KEY',        '!7hGJqjvA+m |y<<+M:sE|`7/fLm$w .4$wk;93<H If4ls+iy4CKL%eytOFD/Q#');
define('AUTH_SALT',        'L?~(6UJC=pn!oM~siF:9;2LdlMGMk{H^AF1|NkbJ]-Ia>z9P1jFcGo)4OSiofv@u');
define('SECURE_AUTH_SALT', ',gXpTFLOG0Giy26%8YDw9?OQzfe>jcuE:4Ns-me<5n !P{tYVGs.F= /IOW<85w;');
define('LOGGED_IN_SALT',   'r*(jZwtm,0T,|>Ozw3X <Ts4AD1R#  5HpH[?r<^%oB>HkV#BR{@i:6O_6JKi?1`');
define('NONCE_SALT',       '543<({rb!%0M8YkPifwYm`1H1ao7)RKku)[xo,yv*cW.9xj!F-nL7&@fLF<R[t#Q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
