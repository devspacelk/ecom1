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
define( 'DB_NAME', 'ecom1' );

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
define( 'AUTH_KEY',         '[OI*5JD@q-Zvh=Tjf<t*p-Hd?J$#~g#/lYbJzFKdL%0|el+l2JId6DASwP<,T.`d' );
define( 'SECURE_AUTH_KEY',  'kH-dwWWdBVpa*s/S~(Ad`| l_Kv;`!~<AIQ^S7TmM$U+jK7cl69r+b75b-nB|HrI' );
define( 'LOGGED_IN_KEY',    '!/}8~^=?@*&**#{ %PAOC>g9itZjz@pC81c>d&fSezR`(u.x*v!9IN;x+6$+H!.i' );
define( 'NONCE_KEY',        'JuZ:V|rv-q6M[jVD12Dmp+t88+_*0lOtJjyv-u@Me-=.+-0c1#>YJn^H65EEA^)8' );
define( 'AUTH_SALT',        'TI)SQ&&#m)0s:eDF96VHt`smVC-e>L$+{Za*-*]#>4MVznv[*z;pSp?qh#B~E[M)' );
define( 'SECURE_AUTH_SALT', 'br]kIm?GkSzi)*DQ=iA6(hji:UfR1A~:r3OU[gTM<j,W^|;m(TdJ?mS}EFj2`JgX' );
define( 'LOGGED_IN_SALT',   '(C)-Noo,4u 4fH}`r@^Dm!#?D4~)xO~VvWH6{WSD$1zM_zpGI?$rnXbRZm{uCVgv' );
define( 'NONCE_SALT',       'a7EH2nuOAl Cutcd{9w:(wb.Pz54i5UPi4OBE0n)L$r{ EOpDK}I*elvu4k|kJt&' );

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
