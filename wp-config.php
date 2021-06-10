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
define( 'DB_NAME', 'wordpresshazi2021' );

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
define( 'AUTH_KEY',         'dc@VcO !(?e^&(hdj;imIPIFa<19:X`r&.nn>x_A(O5EFRPMI{.!$u*kqc_Wv b>' );
define( 'SECURE_AUTH_KEY',  'kGz)AO@2,kEEi9m fo3mQy{{fBO|HMe!HOcm4u<%.=$NDbNS(c_P5`N3EeANJ*{5' );
define( 'LOGGED_IN_KEY',    '71% *F$*@VE*d{j|5VU$S+Z>+r[W_q{TbV+fw @3k;o7#lKtb_#hI:bt)#Byu_|Z' );
define( 'NONCE_KEY',        ':%eO54 )*n#<`Xv}Kbp[+Wm&gZc.V><0MkCaywAY{vO7 eSGRJJO4eX{aMIw,&{R' );
define( 'AUTH_SALT',        '6rw_z$LkfV[ux;y:}j#.go=ZlyQ4W%1<|McdyH{xbxNG3??3F9!PbW4~YqPeoZC@' );
define( 'SECURE_AUTH_SALT', '|>yDgodh?kiH*I6w=nM3fMGxQ3eMSklx:2/ObO~4&,=ug^J$5fI<-ei<+inm@3]j' );
define( 'LOGGED_IN_SALT',   '59FMhA7r?40Yd1o)`[<e**yJ|Ge:o%EtM,nf7v}D}%F)dYPfYn5Gr|VW6L+fq<i2' );
define( 'NONCE_SALT',       '//dM)1=xVQ&=Ll,l~uz%XR9n#gpZ xcHq?@M5S_}h1u $MM?TR5^]&8ib.y; $t~' );

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
