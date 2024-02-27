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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '8cxLK)E&^o<~(Y*GuwQFyXoP  =_uSy^-{k5L#8R4NQd. (OUO|m9bGELrL$tv)O' );
define( 'SECURE_AUTH_KEY',   'wS>g7O0O-`SdL{Ir$[f#b.)`Bpl2RYCLjDGdAM!f`!H^x.?V<2TW9@0=iMd{1:bm' );
define( 'LOGGED_IN_KEY',     '^B4UdjF$~?m~=SzP0`Q @{U{A6ue&FS|]6d]*+cV`,~pZFXiJ|S!=LZ@xso(4Rvv' );
define( 'NONCE_KEY',         '86xRBmO@M!;slZ?T_0CGv15YP0Ew[;v ,_dj>%&k_{z,t:epjhJ*zV,-V(,VVkyD' );
define( 'AUTH_SALT',         '2B+Wj/Ceiq4|re/KA1<@8:mu/ikk59~i<*1;gz>vcA6nNW;)lsP<-^-kApV<hHuT' );
define( 'SECURE_AUTH_SALT',  'odx4>noX+aJs?/*RzDN+6ht^Jo-#_SQs= *Yk%ZZf(+0uNtuvQ}VQ~~(M;:nLsH8' );
define( 'LOGGED_IN_SALT',    '>mL6d1Z,BCjfNi>Z18whr40&AgRQx$J?%m2?FBa}ir>=%7zCinlu=7m/92juip1p' );
define( 'NONCE_SALT',        'oBv[T%2dT]/Ye)(k7#Y6qR(smVPZp.,{g-*a|@yay/;LtNE#1}fmJ%qLCDk:)S-0' );
define( 'WP_CACHE_KEY_SALT', 'pN#j9rR0B5/g .!p6;=}xVJ=#mQmQ1(9`A7$eM}r,Sw{,;1TI1I9dug8yVy^3Obo' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
