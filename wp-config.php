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
define( 'DB_NAME', 'fahim_fahim' );

/** Database username */
define( 'DB_USER', 'fahim_fahim' );

/** Database password */
define( 'DB_PASSWORD', 'Fahim1234@%?' );

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
define( 'AUTH_KEY',         'ucV*7PCzc@Pr]sz.ddVy?a VLIu7_/qn(awn97ALM)JA3qanj) LI*3`1.7L-va:' );
define( 'SECURE_AUTH_KEY',  'q-^Z1]#y*c~pm3l=PcgE.,<6Q#I~F7{J41LKu}QK6t2+`~wl79j]No<uQ/tDDWZM' );
define( 'LOGGED_IN_KEY',    '.|bM!,vH35yW,(A86e3$]`Sm59q0SK/QSWPse3QS5%y`q-)rpv8iu&SbL-fVOGqX' );
define( 'NONCE_KEY',        'vY<7ag1uyI#<Ze{aHJ&fF$NCmL)Ozoa}7>:88Xgq]ru~#!$%M*UE!N,u=uqf^}<h' );
define( 'AUTH_SALT',        'ErSxa.#<qM?>F7WShF^3($&J5c7@vQNN;YR}`iD4jeZ3W[5Zq$JSQ(u&A>AAf@y.' );
define( 'SECURE_AUTH_SALT', 'rrIiRu0oCxP(>i<w DY;pVcw1&!yr~6dr-xhPbvDw>yaj5][~A%?o)Z!I?05.5ij' );
define( 'LOGGED_IN_SALT',   ',QwMlwImQom>.]dgLu9C]h~n}9&O{IL4@3aN4f_*`Q%obLrBg(]}Y:FMILR&gj`8' );
define( 'NONCE_SALT',       'mAq3VXayKl;k*88Wc%C[{go`P;(s/7,dBWcASkfA1{KU@h=OIPMbd@ypugxjRTKF' );

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
