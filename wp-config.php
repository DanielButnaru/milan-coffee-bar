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
define( 'DB_NAME', 'milan_coffee_db' );

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
define( 'AUTH_KEY',         'zP.a9Xmfq.YTVgibZ4XsGg2o)>Bh4M(p1ML{!pK6y+eM:{2W~b|O+}tmB`bWX^(H' );
define( 'SECURE_AUTH_KEY',  'wL,bB<Y]9RH>W{MW8_OyrO^J%,31CbmV/3,J7+cR !)?unfUE0WY-RPlQR]@K](%' );
define( 'LOGGED_IN_KEY',    '.zKZ}Jx)yg{TO-C2{kN/jg p}T<Ii>-a~kOUF[7U68(;=Hm@./F0VE)gaTZ/9~5f' );
define( 'NONCE_KEY',        'be/rfvt!,H4;SRC_(Vl4s68Q/Xk>d)8x:Q|0_ki|^2j@Dvo]j[aov$m+SlwvR`.3' );
define( 'AUTH_SALT',        'RXhf#nFP 34Z[_wC G]6WG}>#&9 Ask{v5Tav-|qx+<dnA0Sn?=Y, AR0g(pi&PW' );
define( 'SECURE_AUTH_SALT', 'kfc LkLp30/Bv}r|D]k&:(C.%W=#>/tJY8]I6lIKkb@JtS-Gsj05{gzQ!Obz,bc7' );
define( 'LOGGED_IN_SALT',   '#h$I9+mvXpZ1N+=aQ/;7jRnC 9ka9a-BFWDB[e(>,+t xy%a(JnYKPsmS BQAk<j' );
define( 'NONCE_SALT',       'U:$3a}NyXFR:{hP}ai;I^>e6{{v|I@K04NsF#3%b %fl/f#d}me[z!r|&-k;HSs_' );

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
