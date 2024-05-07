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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_wp_lip' );

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
define( 'AUTH_KEY',         'j&gIl@x@q1T)v^B@;a27(H0tILe.04oobWa[ArVn#*3zcA&|~6c,N_vP_NPt^$y+' );
define( 'SECURE_AUTH_KEY',  '!/cfU1.4LxM.jc,oaPQTe-@7p[QUK20?#SY/#A/BS$ED;PEc*bx5zYiQEALZ`?45' );
define( 'LOGGED_IN_KEY',    '=y(QXK]aP:r$GjY5Z6}(q7KRbM<Cr>b>YhPsU~9JdsmO.$V7/8}XLAr/`r|9NqB3' );
define( 'NONCE_KEY',        '6wz;NmL/Wc=c/<uMCZ2c.<gRy,)@]]~:Dx,= F`c^4InbO{1:z*Y!w6:W<Uob<Qz' );
define( 'AUTH_SALT',        '(##CcSW6844X3Rg-wb$k!dds7]Cl`>amX=;z{$L:u;&EK^]0w!?Yb:}SG_Fdn%X/' );
define( 'SECURE_AUTH_SALT', 'ML6su_NR_Vk{y[ 2{** wiJpj$k}kmm[0}e*`,Z8Hz~q7G8%vYXR:z>IW&2Gu*EL' );
define( 'LOGGED_IN_SALT',   'H,TsNbf43jH-M#Yi__)Og_xU|<|x `No/|9>fJ&w/Z(yzrL i]3ZjiDD`xn)s6wb' );
define( 'NONCE_SALT',       'h@~8K+,.7weQ&0pB+&fuVxej7Rz3+4HyFRz:]h5^-i,^68asfA&*xJZ|M`qMwWLz' );

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
