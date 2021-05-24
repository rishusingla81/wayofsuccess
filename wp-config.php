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
define( 'DB_NAME', 'wayofsuccess' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'l/pJSn7P`Q9/tz;7[<wjO?Vg7 Ht{!f1CpH|ysA?c$;75dnh1sYKxMR2?&:AS>q>' );
define( 'SECURE_AUTH_KEY',  '-8dFG*Xvc6~{sa1Dx$ti!I}*1#CQO{4,e7;{7^PlS!9__O,v_|cf2U>b;7):#k*!' );
define( 'LOGGED_IN_KEY',    'Cm,7=E|(gC%<c<@*X>zSzJo}!Mz1P7y/P@<CzvU?IUt.w212kn%oTIRE$CQx&d2n' );
define( 'NONCE_KEY',        '7{~#`(F/;+@M0%zTm2gcPmQlgcYwcRu+6um.O+~Nxtjp*p;-B _{PA;@3BAQtIXC' );
define( 'AUTH_SALT',        'N.]o0:!$LJ6ixqfUj/G7s=F3)K8(e;FQj8FpxIkUR0{gMMt$8jI9:9+I}t}a)gA^' );
define( 'SECURE_AUTH_SALT', 'G{)w/}&nR`OlMJk0&]R%4<Q3O0on3z37y|`zt_QBgvwdX@?I?lE,%8<{/f4qi5JE' );
define( 'LOGGED_IN_SALT',   '<aHEqHd>$lui5-obWv^4^B$bUnZkv5Rz[apYEUS%/,<|<AlM9lw?gAQ`in;<yhp1' );
define( 'NONCE_SALT',       'Zj RLkI,E3sv6%mISmJj(%_TBEB|3q_)Zy=M9-w6;S$}ci{TyW0T@Kiw.S7zw{UQ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ws_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
