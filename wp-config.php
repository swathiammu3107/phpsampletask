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
define( 'DB_NAME', 'phpformdb' );

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
define( 'AUTH_KEY',         'SEAfut|z0ElCQT@;xloPA~-i<CLau*kNNz$k($Q[+)>Ph;fldC<Yck.h$?|q3X P' );
define( 'SECURE_AUTH_KEY',  'y},,K8]t=,i.6:W(d&T7$4pvK?zsUX3]JND*!HxFf2kA{OA,$WUEpriHu,[~#;ib' );
define( 'LOGGED_IN_KEY',    'ZP$O/FKS$uNP}Fs>RAN?GN^4$2o&Y`YUD qHQiN%Bq+DxvEL=7rkMj}`#<niQoQ<' );
define( 'NONCE_KEY',        '[IAm;(]~GwyK+R7]jBAGCf5t[3s!s sj(y_aGM_.8C7g^ZP4K|z92=+8Z qanRE8' );
define( 'AUTH_SALT',        '6zbY3`K>#N0e@rw bK>C5:.X&LFCw)!X3MVoz+crbau,>,9U=DDkJ@Icc6xwQ`9n' );
define( 'SECURE_AUTH_SALT', '6U0pQGU0Bbdh_F$ pSKi*N*BAaw{h]?3Y.p$J~=T8T$~avNSa/9kYUh*eZ#ezDet' );
define( 'LOGGED_IN_SALT',   'zKdbjc$@90qfK7tCk%sr{MNu+Z >Q$s[yLsI8L:Z!kmKmNMU,lcDxH!Xh*2^9[(U' );
define( 'NONCE_SALT',       '<PNunf}Dk;losRs.}3Rtkpj.B%4/l6mkKi+-8S}jQjD*.H;s;) !~tvd>y|_!5Ds' );

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
