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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_brief8' );

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
define( 'AUTH_KEY',         'uHV1.%NKm=S<-2F9BS5Za7e6umfIvevzn7^ML9D^vrTTf&9pU/`!$NT `Yjk.vj)' );
define( 'SECURE_AUTH_KEY',  'Lsx%U5aR,aivc=qc:(.UuG1}w 32`;b1&Xm_k>[<jkZ<~:^G[dN3[)[5ePb Ho|A' );
define( 'LOGGED_IN_KEY',    '(Wz:8Ik0AR[;g#R5$<BKtzG-<9N&Da7QX +bM`g:R<CKYs*1^>%Q5;/(MhTBmKgZ' );
define( 'NONCE_KEY',        'q8(pB~oFfe9Q@b`l@r%!(O>Gm4j#UhbRRIAhh<dYZVRS4}$9K2MV=)l.vc5SX8a4' );
define( 'AUTH_SALT',        'iNG~JHGo#+wrl4zbh7OF.&wW0RRb>F{%GC=Ix)LU950oWZ[8i7t)9]ec[EJ0{.G-' );
define( 'SECURE_AUTH_SALT', '@U*V]i<KM5*L+Gvy0Pu-R<7xD(w@*tSvG OW5SEa/;T%Xh4?SqG.P~8`}Vll_MsL' );
define( 'LOGGED_IN_SALT',   'BaAOi<Re)1q+Y&~C#jHL{lOr^eOBRkV8U%SOpdo?|Z#IAgFgD:H+fD9+Bwq]OJ`S' );
define( 'NONCE_SALT',       '<m4pZ|FVd PFa<HmFLPq=IMo&Rue8HAm&$ NURCx!0h!bke91++Nr?Cls!K{>K6U' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
