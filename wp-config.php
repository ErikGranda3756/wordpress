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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '?x{Pme`te>vue(0rUe6Q|?wT%&$4[.|&jMdcO;;dK%shGNNhc}AfXF_/*gmB[8u*' );
define( 'SECURE_AUTH_KEY',  '+fg-fmk`hg_yi+#p&(2~TY +F/S;ct-J3}R#/rarT5hTZkq4.(3el5^<U%gY$>mv' );
define( 'LOGGED_IN_KEY',    'k@yEzeQ|lNPWGJ WZo.~^u+nw?}G=X(PXOY5o1QI{Y# WI`vc2V9u3!XAfhv;Z[`' );
define( 'NONCE_KEY',        '4#E= km|*!FHs/5bp!mz@9t)#l:LSEL_y$er%DNn^MxJCpsalB+/{b5:F0IzgCfg' );
define( 'AUTH_SALT',        'q1`yYjXf-78@yL^64|),JcRy1|#VB^CtH[YHS,2x<<Xaz/]8P+(t`bXW>H9.T|8Y' );
define( 'SECURE_AUTH_SALT', 'u-cvF9n |w(4%EbLXqphhq=[OSW*4}lHUjJhe;OHLv y:>rHYr.9euj*7z&_z~n1' );
define( 'LOGGED_IN_SALT',   'mv6,U2y@*945z/:/nSt|<oC@v,a$$2/F3e7B9pOOp8;()4Dbb$$>cTX84Gm0Vtbf' );
define( 'NONCE_SALT',       '!Rkt*eF|V2YJ=+kO[>$LwgBJOP__B=/AaGdn=VZ ZUDoxiw[PJo=KX2G$@aHL5ad' );

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
