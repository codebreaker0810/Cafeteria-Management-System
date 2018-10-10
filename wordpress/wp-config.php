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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '1q8V>Q<-/j~L+@x 2_P[E~@Q4IJ8s1Y(sRr]KKQ( V!TM8S%w*{sD2hN3+z+kfNC');
define('SECURE_AUTH_KEY',  '?7;nSw@O^Kwj/xybPf$L!.w.&Oh<?i~E%;msp^wPm@GiOo;r(FHBrjn3caZa`<_!');
define('LOGGED_IN_KEY',    'sL$7e1i:?KMPhsp%M%zg]L62-*-^w:X6Y=,&lL4BvFn~ot^?(8q&%e7W@}0O[9*o');
define('NONCE_KEY',        'Xvj* yEd:?S8eKjSrV#[qqWIo,/tmSiqx=yN h=iWhZFY&G2?BQ]8b$5E%t5[UMw');
define('AUTH_SALT',        '4t11p}:Cl;_S~,9]jLGS[`!hGFs9pjdm.VmFiZKp%~i4W,KYtV-P f`Jy(lMmkR6');
define('SECURE_AUTH_SALT', 'w[mi0=yrXI(m$Xfm:uF6;r!1[&xevZ_<8K`qho}A[{sltXLgrbPjsvn)E]]dyR3;');
define('LOGGED_IN_SALT',   'n3g*A&^l&W3SgtXUy[P#R6:wH`DYkgG03BqMo5K@`t7^[(JS,Z;A-I2DOR@Q`gX`');
define('NONCE_SALT',       'nltLttp P;M_e]_gCY%eOjzKW0]YMM@=hi)@d,1koc<BE<rWoa8qwzy*OkU2pUk|');

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
