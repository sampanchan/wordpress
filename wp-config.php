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
define( 'DB_NAME', 'wp_intro_fall2021' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:8889' );

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
define( 'AUTH_KEY',         'uWgJA$J0tSS2S]NUPM=9:ei`~^% J7q^zCdHvE3Zu:Ra%NuY/tL|3dK~m~@,.lmM' );
define( 'SECURE_AUTH_KEY',  '5si[AL^cj>R^?Oe,[nr8[okH{9XilT.&-8TNaQ-XUN=!$u;6ij`:EQ>)k2:rnsck' );
define( 'LOGGED_IN_KEY',    '-=|=ziwB<vH2k}OI0c+w8$FCq{HZ$A&=0(UWWAc&@kqjcRA%gw0sEv|}tT|OsUr]' );
define( 'NONCE_KEY',        ',AU<T=4#k=1?Fgn]-jwR%Z4tzIU?y6MrX6=8}&F;xpd,my8bGgEuU/54jY?`HCoW' );
define( 'AUTH_SALT',        'y.RBsvKx0ITFc`73*wQva=d<m -s8TNfd$ts[O~mP}X<]v&rn$*=s&k8:bxx@rRu' );
define( 'SECURE_AUTH_SALT', '9zI+Vts.zq8luoGPoEjI_*Qa0C%s(]UP4g}lnS3CZR;W>h;Ww=yMx8nqhao=W]Xg' );
define( 'LOGGED_IN_SALT',   'FM_Ljv;</zKZED? 4+~<zi(]QoV>R);<fB69v~+]wR.$O.k;?#dG)t,5zGp5+E5%' );
define( 'NONCE_SALT',       'o?Zm{bvXGuPl.w_ChLni+%fQWdnm7v$=eY~(k9b8_|C#OQSfeF8W*EwES6s.Ts2l' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
