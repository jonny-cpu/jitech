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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jitech_db' );

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
define( 'AUTH_KEY',         '!Qq~| 7J6S}Gr7&?8nE2aB~]ffSX<~I}/3j[^:Vp:6BIhbUOpsNjE#ZS=~IPy%AZ' );
define( 'SECURE_AUTH_KEY',  '_Y-ym{<T(SzDu_lw((!%Ib_a~&Rr;nQBf{$DDW$.<s5zm_.&P97!QJB{r8W/n!C4' );
define( 'LOGGED_IN_KEY',    'DTvmAAy;b`lrwM(l7ajoPd[adN.G 9s[rahm4M#Qi@p7[&yKT1kr5e}rVa.Nv6;f' );
define( 'NONCE_KEY',        ',ZP,/IpGg/OJ4cq3(b~+3mjhBcYDU ^J[#iHVeIy1MS_&NB0xoYKz}n|*{JK8@FM' );
define( 'AUTH_SALT',        '5>]d}AK}|blxT`^exHD1ed^q/[pz}{kBcqi)GjZh.[%lwW?G>9v>]Fkv#E$xSd`s' );
define( 'SECURE_AUTH_SALT', '&gUGW NJMbXt8Ii0P <8p|*[4H9`Zjf}YNkBtu:<;HCF$dF+paOAEbC`dEi|pLT~' );
define( 'LOGGED_IN_SALT',   'J,T:yECG<dtLT>#*hLR!Sc.-2{XB/FlF*Q;4a#gQjjCwn~UHG3r m@RtpCGCUJOT' );
define( 'NONCE_SALT',       '~2zcRwjx^Fc8*@u[s`|RSFcI@f:% y3k{[EV!3y`gGCAfFz5l.6DM=/w;j;o3<2,' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
