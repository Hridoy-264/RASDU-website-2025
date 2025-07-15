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
define( 'DB_NAME', 'IEEERASDU' );

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
define( 'AUTH_KEY',         'YuXtVW7q0WG1M@FkoD+*ws6;99 <biB[EtTimf=j=|=k4P)iUwDOa7#EZ|72-G/~' );
define( 'SECURE_AUTH_KEY',  'p`OP. fhX&mY/<bXT)@zJT&rzaV2Z^8mxQD)%6SUq8we7hZyr!q9/fg37./7F[I]' );
define( 'LOGGED_IN_KEY',    '$q#-u`Yi{w*:B=:X):;nla>x4&Tzm5z#sz^17V41zxU~OGw %%I64?ozh=}yxa %' );
define( 'NONCE_KEY',        'y03m]kYq`s8Er ^{2jw$_l nASc/!qwU&DMzli]nR~S6n!?&<+w#JmlCVBjIMDwe' );
define( 'AUTH_SALT',        'ONo7vo=Zl MGU[bj0;+PwC]G#n0npvE8ZbZ4L#x@4:y{,w-1Bkd~,/V{@Re;7xZl' );
define( 'SECURE_AUTH_SALT', '1gYXZa]ko5?#7<X:x&%IUccL%P%|Kl`2=nq#0aI*xyLU&<pCW~_;s>V!F2hnE?Iw' );
define( 'LOGGED_IN_SALT',   '!,]yYrYW9T.$[FnAc%/u,^$qZwFL8}([1{?#[q|3+McmcjbcfED.h0u[&}`23kXd' );
define( 'NONCE_SALT',       'q{IGN?Is9fBTPrRG$@2{iG*voA@M:se}ULMkWxYRYb-Z3RJW8xSbaydeeD[<}(/~' );

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
