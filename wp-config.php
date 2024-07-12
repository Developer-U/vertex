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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/var/www/vhosts/u1641176.plsk.regruhosting.ru/httpdocs/vertexhotel.ru/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'u1641176_vertex' );

/** MySQL database username */
define( 'DB_USER', 'u1641_vertex' );

/** MySQL database password */
define( 'DB_PASSWORD', 'K#3sAN_1Dd0' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_HOME', 'https://vertexhotel.ru/' );
define( 'WP_SITEURL', 'https://vertexhotel.ru/' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2j]IGk|Y&cs6].Rt{P8u0J[rxDPy9oVS2pIJse@#?J3u:fYB1l7K@esDFa^K)@6U' );
define( 'SECURE_AUTH_KEY',  'PN(OD W&~}IbB?Id(GL&q:;YP+`&-nPIc2W,Rox>>O=3uO%Sbn(k_*`.h`p/h~3 ' );
define( 'LOGGED_IN_KEY',    'F@&-|-xrn~^b_l{ VLOTOB@aZ^5;)5`=Ivs-IxSMUi{rA<JlL#SY(&a]9syuuA-S' );
define( 'NONCE_KEY',        '; 1>ikMbNfA/$,@LWv8gAI@ev<`5u|]:?D|5{NeT7}x, l:_.%q:T+2F*r~Y#dXl' );
define( 'AUTH_SALT',        ';`}2a,nwC(M(Uvbjs#p7k&neEy#.tZLEp^27R%v^A^dg%s4M4=iGoOJHLw,fAwP~' );
define( 'SECURE_AUTH_SALT', 'uxw!4:&gklY#XQzC$TD5&$`wr#mpjBy :d/sPHR@hWs>V!9,YK@Z<9eyz/1{WjgI' );
define( 'LOGGED_IN_SALT',   'pOgQY-8Q&<&[9B+$o}iDrXA6e8X$T&XF<y,4x!u[av ?<S/Y(8|dDu,@3sR@@F!*' );
define( 'NONCE_SALT',       '`MQQ`B=G`PAe,?kB$aMZ{`:W#-pPq.3=x+!/YJ($pQ),,GT*$vqd`_[7as58Q|6%' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 define( 'WP_DEBUG_LOG', true );
 define( 'WP_DEBUG_DISPLAY', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
