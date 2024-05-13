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
define( 'AUTH_KEY',         'ojBh7Hs.=O>3(s35gFNw>RvH%!VD|9{#Ec(0gP3SQuA0m(gA:3@&#l!>TEd9,x71' );
define( 'SECURE_AUTH_KEY',  '52]]mac])/koXi[SJna7HjyjaxxGtb7!1<ZcM5tmj=.ND?s+ELt2.pTJ7/yf HtW' );
define( 'LOGGED_IN_KEY',    'TdVHo6)y[x)z/pk<]h1[gdly!vYq3`#*:s6z1mM*B{e/bs-!LcOk6O_TEDGE2Pr$' );
define( 'NONCE_KEY',        'j18p3wUBhH4.qsSyJh?MQ_k&P]n.e~;Op&GJMCE+ZqR5>X3+LxXo;CO2&Ce~a*@9' );
define( 'AUTH_SALT',        'V?$1ZPv)c_jQVUMf3(Z+5Y,+=|+X]L}&8pgL1sFX!?cb}-};!B|76/|>5zaf4wH{' );
define( 'SECURE_AUTH_SALT', 'O9`#t)*Z@>F)g}3{b4XtAh+Fslw/`BxSGE368[14:UCs^o$3E/5};Mbv Mz>A}#_' );
define( 'LOGGED_IN_SALT',   'Ynh{j~|?[C !~!Of_ ALR$w;Mx6c77# w5/HSB!2JpXQlL)7&@I&f9}nh&o%_lR`' );
define( 'NONCE_SALT',       'G/P|mQfs4u. kr~`yOD5=MLh,cpsSxIz)w5([k/|~)y{m=$=donf-Xm(wIsLe` M' );

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
