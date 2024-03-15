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
define( 'DB_NAME', 'launcher' );

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
define( 'AUTH_KEY',         '6PB$WY@LDr.ejS;C83K`^M~Ey[F?Y<Z~8yae_D%IThf3ucpTurR[n4wLF].=P$jK' );
define( 'SECURE_AUTH_KEY',  'CVPt7w%)rXGW$*Qgp^,A @N`pcNw[NF.Yb}M`Op1;QSC]!Fjyk7^(~Jc m^oTpmP' );
define( 'LOGGED_IN_KEY',    'y{v|51yQj[5o@$ i|W[9,,<Q y_wmX7tv3qjAXfByU~>Sk?3vC%0(z%[^_GQW]Vw' );
define( 'NONCE_KEY',        '(a##v)&-KDqNFFK& *a8mbT`WW||vJPa3ce)1PHd3CS+kv{E;hv00Pw+`8,e(H;0' );
define( 'AUTH_SALT',        '8=8XTUPT3,DG98K`^(i$_Ad&eD=mv <Y-Gs]b2Ooq6ocjz}kY4>9w:)hidA)J |F' );
define( 'SECURE_AUTH_SALT', 'k2*)A;UiEO: e{$mK=i0{215s59x*-DH[>Hyk!Xzx!Ncv!O:+]l.3n:{46k;lIx^' );
define( 'LOGGED_IN_SALT',   'yCIuopx_p4;Cqj ?6ghUpA9AgD/r2Db6K%~+oST:im[ih5Y,1O({+I<o!1`0gwE*' );
define( 'NONCE_SALT',       '?pP?i8*m@_iF5e-yuieI*bDs@-i92s/?[3qZ=3Li/zGC^[5vVtg?d}+PZ8W_i{G{' );

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
