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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kTelekom' );

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
define( 'AUTH_KEY',         'T.qJ]]n~V)T{5^yC-%`bXoczs5.c05d,jf$@=G3c#r4i?R!FW:&iJwoC5sue]EpH' );
define( 'SECURE_AUTH_KEY',  '|oDJkzINRgteHjhC^}=1y<35*_%p~|Fb>s~%5- [5/o5CTTVuay]+<MBr7sm:}b0' );
define( 'LOGGED_IN_KEY',    ':G(JieUfnAr=<.6ym;suPb[i#&OuReP]u(]f+Js|13v}WK5hRR`l]eT,^LaPIM/$' );
define( 'NONCE_KEY',        'vYFjC${cI[m+R}y}8K3&dALWLZT`r Zfe[uQne#r1lGV7X~34ttbL=_[,9P&(dJe' );
define( 'AUTH_SALT',        'It.D SEAtVqI-nQ0PfvD1nOK%I}EE>*|sTp_Djtn ?9CG@OeAjfE4+;PtAh%]Hkp' );
define( 'SECURE_AUTH_SALT', 'dMwooz(BmyD3gWWdB()ZE6^cauI2hD>NN@&Qe.H!_C[@=(j[_IBaHHm1FLVC!)gN' );
define( 'LOGGED_IN_SALT',   'jNu)Lie4bav+3GnwcjJa7X@m<?D*0/~p|l2,nV|$$+$Jscjh(1u7UK%k+@eyb9t(' );
define( 'NONCE_SALT',       ')|y6YYW39lU-::H=U.}01jU1}rn6rR)RK2~4*f_!7ZXPS,o/FH9pVCD5cT$W(uUv' );

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
