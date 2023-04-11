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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbproyecto' );

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
define( 'AUTH_KEY',         'ED+E|c(9(Pfy(kFh[X?xSroSn{i27AME^jty1g@7|p_&Cs+%iC-;:wg8`P#),}!!' );
define( 'SECURE_AUTH_KEY',  'IhxqfeL_iWog.JBz^cwMDj^7-JX]L{:{0>OG)$2WwS7@.MW`.5hIG#z0~Xd5Rq{6' );
define( 'LOGGED_IN_KEY',    'MUS|LTPj!F-bEdrGWe2}y-m9.+X3I_XdzMZa1xR[lhw(~DXtj`90/$RdMx?ogTW/' );
define( 'NONCE_KEY',        '<1pZ:G (TxUN<b!mJma=l5P2XrG$Y}zF%5|F-JC(]uZ?v?=jkvp+(#}Fh]5Zc8V_' );
define( 'AUTH_SALT',        '(4}MV@z&>Tm,9bv(=Y>x43mA!7Dfe4LfO$v2P>H^6|Bk{>(,Y0A`jKg`C4oMwJZK' );
define( 'SECURE_AUTH_SALT', 'WHI8`cu~8WI~A{:3(Z2J)Xa1Zjr_!Lg2m8C*FgRND3O6<#)D9-V:zZNgKPOgW]F6' );
define( 'LOGGED_IN_SALT',   '.ojg?B%<-k(sVU^g,Wy 4`({8J4lu*Lcs8~1]P?}qX?TX=-?>& s-!4s31yqCa.f' );
define( 'NONCE_SALT',       'jFe4ze6S52ld`kuCDN*nxWW~H<jz0bP -|%p{GMb0or_JV#nnQYoq5.sZE LYxCK' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
