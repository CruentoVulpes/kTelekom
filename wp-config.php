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
define( 'DB_NAME', 'bidus' );

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
define( 'AUTH_KEY',         'A9ud1;W{,mUbgQ}+]!}OjuaQ59dEo[E<Nwo7hu;R>Cb{cnDnt+w={:7ybwmj*@C[' );
define( 'SECURE_AUTH_KEY',  'b7-Hr{1}Q1`Y;ZGR<P^BrqCfl[%xhIm(j=+lu]1b#4g{wX;yJMiEs,UWr}srz(K(' );
define( 'LOGGED_IN_KEY',    '}66^KIBCC(un>OSWkM(~W|j4g2?[m%9C-G.4&*ST[Vp7dS%Mx!=_mw1>Us[x9i;E' );
define( 'NONCE_KEY',        '*atE};~^SW^87t6G[5^S81DcOo +0dS(:[VhAu1zFyf%<>fu92G?QOF~.k|{Sr|x' );
define( 'AUTH_SALT',        'El^Ols35ys1R&j)$&BU!%TurN?CsT?EzBpK%94OrVpbQbNMj(b%ra^6(HBh=6#`O' );
define( 'SECURE_AUTH_SALT', 'fOaS5D=A02Vgig(M2Q%qTu]O {TzMG`vvNw)ukoWUw0*oMCOsH66Y.(s2jl+6VEE' );
define( 'LOGGED_IN_SALT',   'C-v5E0W~pYA,+=pt!VtZTG*.tgdA6qaM`Lp*hU?RHeRG{9xZYc2v-peH(!:7W^X?' );
define( 'NONCE_SALT',       'UGu$kgRmj)XFTCg) Uix-#TEg$N+tV+G?2{fPu{V^oU?-30<JIbF;ze>G,4Kt]DH' );

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
