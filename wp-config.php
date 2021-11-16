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
define( 'DB_NAME', 'educafin' );

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
define( 'AUTH_KEY',         'uUr|V9fDoIiv|d9d939._TB[,$|tO-hE>`[vZ;*H8`W{`nu8&tXIM7G+BFciW8,X' );
define( 'SECURE_AUTH_KEY',  '.6q.:l`3$Yh<uJ^Q{Y|xWr/h,|kax)9adRHu{+ 6dV*>lZQ)=!FW(@()AW%vqC}#' );
define( 'LOGGED_IN_KEY',    'q,oT=H=#}j?5.gd .CY7El#b]r#G]maq1^zB+Cu<a#h!KD=(pQ@)A)Z2hmGb#A|O' );
define( 'NONCE_KEY',        '#iidPgg,zs&pC0vQE|CmJ+9rs6(8|bQ6NO|2vQo#? N{Ug{HpX|_lmH<MKzQ:sj<' );
define( 'AUTH_SALT',        'VVfeV&RSM#fY=925Fvb{)O3uoZa$/nI*HRLY;8FN%;?xDnRxp@^eu}u!gUt]$I:2' );
define( 'SECURE_AUTH_SALT', 'xLfR IQb{S_^!&2j!:c(79s&B}L.=j#i?AGxW!y.y7MxJ@@G8q?}>V%0A*=f.[Qo' );
define( 'LOGGED_IN_SALT',   'al>]S1HcCw.e:U9`VI2HS4q<t1{<>jv>|JCn@M(E.:oI?X!Z)Kd[,K]~(<qnPth^' );
define( 'NONCE_SALT',       'Bv;Ha|l`hB!J*3LzzF<DIZ0uNt!XT]))S5>-t-S9}2CWd4:GVwp`1A;+3Np*J,5{' );

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
