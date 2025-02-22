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
define( 'DB_NAME', 'wparchitect' );

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
define( 'AUTH_KEY',         '+%|qiv;6.opNG3J1*]~#LKQ**Mlp<I[o}10mz*t<?)*tit|(kdyL9hu)W3z#._Q ' );
define( 'SECURE_AUTH_KEY',  'V6N;+c~BE<*?d;D[==%yga6vS=V4Ls^x!b)yFF|!]0?a2Vr{:wZ1#Z:w33d;NWd/' );
define( 'LOGGED_IN_KEY',    'bR$3Vh .n&U@.],7|@/o..0}G^*nznX<wkc6/yZ&i#7tf@An(j|5q={]vQ;SOvT6' );
define( 'NONCE_KEY',        '+2ya$+G)-H<kdpOSaP@F*`94|`X}r]7(PYn<Zfweef@vcJ/jqT-1SlnSwi[D748Y' );
define( 'AUTH_SALT',        'S797m9_x =82&0z.|)af7eaBUQuje,51WT.^9bj}jTZdZ,R..Yn<Rc#Oe;+xK,1w' );
define( 'SECURE_AUTH_SALT', 'wDNn|RUm+089aP2+Nmw%%6Axx}xh8T|r%L1s|H<iLkd0%Q-;<ZkLK!w5}k*eX9g}' );
define( 'LOGGED_IN_SALT',   '@K&3?i;Z`Aw`twV;R->JQ=kD3(s-3;@GUEz7<[N8YtF0m1{sX_!OAg-l!mCX?9^h' );
define( 'NONCE_SALT',       '8MO[7_+`bS*V5ft.0U>-:D=^PA@@dwh5>&]$smO_j6yjnm|JRCA=^DsJ8,2oKw$P' );

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
