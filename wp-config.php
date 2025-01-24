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
define( 'DB_NAME', 'areadeprojetos09' );

/** Database username */
define( 'DB_USER', 'areadeprojetos09' );

/** Database password */
define( 'DB_PASSWORD', 'b1e7b1' );

/** Database hostname */
define( 'DB_HOST', 'mysql16-farm2.uni5.net' );

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
define( 'AUTH_KEY',         '2{{*NtVMY6>9W]6LQ{v8c+/&.qq5R kl.FBVVzWXul1#A;4v}dS2~J:9eH:y[rP!' );
define( 'SECURE_AUTH_KEY',  '%wVw9vtFz/.CH`nE9X#&/9-A;sN{X*Lv3/_p81[z`<fbt6Sxj }wyCzA)r^owKR&' );
define( 'LOGGED_IN_KEY',    '#9,Y&OpxLsrWlr6z)A8rr]fm7BBho{iYvhklSdy*`gBE#dzRu.h/pe~%KfK{b=x0' );
define( 'NONCE_KEY',        'j.9Dm(#7Ji<}g.{h{ik=ro:.qk1~1#|M5Oxm0&G+L1Q!Zgv{$u$UFbCA%[I`xy+@' );
define( 'AUTH_SALT',        ')?+N;zG5jFwHX=F`$^H&O}|gUGCEy3LZMR?`uZ7}rt`FCGt{zN`5`,LT13POvORY' );
define( 'SECURE_AUTH_SALT', 'G-LA@d4%&%u5Q&4hU._g^=TH!oo?ZV[dOLrXs;G7iT4e _I k0dxG?dFGg^/fxGX' );
define( 'LOGGED_IN_SALT',   'VzD#*Vx&Gja_M2E|j!Xig]`aVe<f(*%_K)!t,8~NDj _gP%j!?U ?8#r5/fGwD:&' );
define( 'NONCE_SALT',       'c]Y(RO#eT@5i++HC5 AaT9l+8Y5=n;eqQL04OOecE=9SPhjbL&y]z]J^LF-%Qrj-' );

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
