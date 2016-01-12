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
define('DB_NAME', 'handcraf_handcraftingpixels');

/** MySQL database username */
define('DB_USER', 'handcraf_carl');

/** MySQL database password */
define('DB_PASSWORD', 'Vsao)K)I2Jh@P*veM&');

/** MySQL hostname */
define('DB_HOST', 'elysium.krystal.co.uk');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
 define('AUTH_KEY',         'PP$rlCX}BEIgNlJP+_,Xd@PF6MPt&{|-gAOAot{8Yzv8*K)mHtU3OR_zBiqtM$>J');
 define('SECURE_AUTH_KEY',  ':_CeJ[Y0|`Nkj/fA+xj#R*x?20s+UWI&]59y)onwyP+}!P;b}|AIk9MoWZO}4j>k');
 define('LOGGED_IN_KEY',    'tZc|V;|XS4O7<}Zk858|Xi|,oF/nh?-Q7W{-x]eMx*[z JggLXl[`G_1M|kX]xl-');
 define('NONCE_KEY',        'A?m<k4D XxtChMN?*/V&%|>|S}MpiXE-KsG!8Q7-bz6b0ybb,|5c4B??EahhhI._');
 define('AUTH_SALT',        '>cxuaDC?7?~P_6_PV/m??sz6.;Ii2vOpvO&t&=!D<V.gxceQ`y}pYXi(5n`}:mfE');
 define('SECURE_AUTH_SALT', 'o`%>uT~U;@5{#KF[Bz<P+d#_BSOc+n1/--33v=mX9gN$Ux;zGppC%5S<0AO1j4q+');
 define('LOGGED_IN_SALT',   '|s[e=}{8cFc%R.-(t8spsh.]~@EwPa{m_z:DV.yQKrGiEjCFTc}}GV)||d,EO<%[');
 define('NONCE_SALT',       '=dStIdKw9dFeIlZb;9cT-89*SN=Mtc_G~S~}k$*ke!sC^Wx|H;|)gL 9dm7CG+.&');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
