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
define( 'DB_NAME', 'mi-doc' );

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
define( 'AUTH_KEY',         'V3S^HSU12>h&5 q~=;!tRd0;]&MAQCqAN e[3!6(7#B9=U,KP5IcaK#jUWRK$w>x' );
define( 'SECURE_AUTH_KEY',  '}?]I]9W0_|}0]FU{;mP&[H93Y@*b{Bu#k&iUX@~_X<T.C<.}qOolB(0sYd&;e18Y' );
define( 'LOGGED_IN_KEY',    'q<540K9oBp|_|4<|O9IKlBD/lBz$F}^EfqGYHH%,Wr8`K4$iPjqzuMIkpIC9O-ir' );
define( 'NONCE_KEY',        'm!vn;IXI}Kl!i?)7=HdJ7!@32M5^>(n*lfeH4#]|C30#SWyAQaK54)_}$jJMnnN`' );
define( 'AUTH_SALT',        '=Zfba9P^LM(7&<>W^o]?[0A=_wu|?(t;R-`aL&+TM`cx1elq:bRWz<GrYBsK6N~S' );
define( 'SECURE_AUTH_SALT', 'e-9]OlU}<mOb)i6Va_5oyUrU4|MWzt3r4T,m6MmBGn=/$J~G`]W@.( Dt{,!d(WJ' );
define( 'LOGGED_IN_SALT',   '&z) u@u 0/$/j0C$Ab31tMp7Q_2#Nz=F;&%THD&Vi~}%KJ/)iB]9}>KTQR D=u$<' );
define( 'NONCE_SALT',       'Q:;yJ<wZ1FuD)F=D<HhG>z!yvs%ouqr7Vg~dmB>6:f#d&p7kn$|ycD&tj*4_Y@]m' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'MD';

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
