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
define( 'DB_NAME', 'contactotest' );

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
define( 'AUTH_KEY',         '0VZ1MsOeL|:PDGQ?^Y=NZ)^3sJ/!lbS7A`FW~71<hVky#PUL>|`d+cme% -+8%vd' );
define( 'SECURE_AUTH_KEY',  'S4#.Ts|.zp<fHIIc1Qkw,|9DT(vlAYUqbr=`*QJ/Fp.!`n3uG=`4Mpz~nMYQW;|f' );
define( 'LOGGED_IN_KEY',    'p2yJ4A^bHP1eD2_-s&g2A;1!K6:3F?4:sG@b%DuTbwy(OuLF/o5Ez&9z056 F2e$' );
define( 'NONCE_KEY',        'wyJ9r(bv~*4zL(%0U{le)`SW_K]sz?~3/s9o]DjJi_G [KFOt< a0}UI0?t`QX%<' );
define( 'AUTH_SALT',        'X/Ab]g;Sf,ow!.m]N!)D^m.c>i6I4El<0p#%Mr2G@:avb.-$}4v|T8Q:!yTlH1VW' );
define( 'SECURE_AUTH_SALT', 'gT!7$%; 1GAxgRcSM1;Pyw`pa22fPw4B(;GjGA~0H/Vi^Nan:7}?c.E!W9|BY1lA' );
define( 'LOGGED_IN_SALT',   ' eJ.WyR|_!9[ $,4(gSRw|>2thy)A2+O-B2,VX<?=O@R&TvW^XdtAA$S|r>NHQH5' );
define( 'NONCE_SALT',       ';<G;/;{V|TawE=e]b+95J^#*|(#?P|w4u6X,3[:V;+w9}nqbjjjTJQ4yN<^GAa/4' );

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
