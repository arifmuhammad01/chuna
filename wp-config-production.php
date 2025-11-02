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
define( 'DB_NAME', 'arifdev_chuna' );

/** Database username */
define( 'DB_USER', 'arifdev_chuna' );

/** Database password */
define( 'DB_PASSWORD', 'F3X!}tWHQ?OG' );

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
define( 'AUTH_KEY',         ' [wU3veCa vz5q^ur!ogO&3{G~yi!5_<?.TBw^~Wdt+5p)R7yoF@8Pg~TM{zso|N' );
define( 'SECURE_AUTH_KEY',  'U f9eYdh$}]a:0(DZO0G1V2cQL15tH/TG=S:X?msa=Z%H!L|$;YckIiX/W0,bPuS' );
define( 'LOGGED_IN_KEY',    'iUPgZ|!,~ZK!|$)N}e53&[?_DJcfR.,h~F:v![K|Yyry{dNs9MeJ8ZfnW9!|3&l&' );
define( 'NONCE_KEY',        '1F L|%O hM8`8&@5!RWl:0/Sy8mOP_5Un*Tv6bID=nIHy1B1`jvF`8N4+dsZ`Nx<' );
define( 'AUTH_SALT',        '6_uKKa[ohD8#MVG:TSIkH.IEMS@dAVOC$Vi|-EObH<WjQGY%M!^,!;yl&Dn}B3qs' );
define( 'SECURE_AUTH_SALT', 'krsGTe[qr:j|Z y.?A77i^7y`QfXi^3JM!CN[;.rmSt+!r&E&<06q@n=-CBCcoRG' );
define( 'LOGGED_IN_SALT',   'skkpViL>XL^>w{@+ca=_5{ w96NxwZNk4@Iv>JtgoYB]4!{y7,q7LR^S~m$7GL9Y' );
define( 'NONCE_SALT',       'J?U}OYnXFx0|&.g|y.>Kfe^! |zjRvoK_^f p3AE8k|I.,h!oJ2LTs0=N2!9Y4jK' );

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
