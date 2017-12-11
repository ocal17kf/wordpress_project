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
define('DB_NAME', 'wp_chilithai');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         's2`9mA8/eToQH+y#TE>!:;M@UEJ/K>9p)I#WU/6&boPt#F~]kC$|:?(v_k^! PWu');
define('SECURE_AUTH_KEY',  'b%8M_+QZ  :L~pi|_#DG{!1~(2[?u+P34Eug>VVZ/uZo&N6P>Ai@Ax#U/b_]Q7m4');
define('LOGGED_IN_KEY',    'J2zo`&{D/c##j23$99uA/Ueap#P@]-m5#:rNp{;! 6[~M+Wr_XQa7-9aURf!HT+j');
define('NONCE_KEY',        'qd|:v9@6)~oWQ>M6vozt!GX*H./gw5B{[`L%#d;HOWOz,dMf6d-c OK0x@Y<d*ra');
define('AUTH_SALT',        '`T0fm?9Fr9u%&aGtSvQ0v4`j%0u)0Qqy+NfGy^nT,| *4T_. Fan~n<v6_%^nxaS');
define('SECURE_AUTH_SALT', '7l;u7n#M(t{m&9&q4Z$_5nTi*NJ`|7=,^X1b57ia<s.arO@o/fU4*[>A<SS@FKs|');
define('LOGGED_IN_SALT',   '1>Vbovy#MfP-q,)yCN?}kqfGu,oPh+evOu//NdwrJ_jCw.pK]6dA/OT.[F2iW*-t');
define('NONCE_SALT',       '&a<J{}6z((1[:k}CknAK@pz{XRoY8aZaT`g7+|r<KRd;EuxaL+YU+Om1JPK^)9z?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_chilithai';

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
