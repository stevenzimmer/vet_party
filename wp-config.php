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
define('DB_NAME', 'vet_party');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ':eQ<,}uO_u|3<>k/8-T0esLAH2UJ4z:rot9Yr(G^=^}01e,Bh?Xy~aLNz`T&3{{n');
define('SECURE_AUTH_KEY',  ';I7|Wu&NTGpGrtpoK#/BW]PC,ABJ0-X:Fl4l{W+c2XqhM1,];2k~^S2|!LMPYs`r');
define('LOGGED_IN_KEY',    ']arR.+vn*_:HP(eaU}&kpJ6C_nb:%d<wf#?IC^F1ff7sI`nipvMP%]Fx%EtFd-7-');
define('NONCE_KEY',        'X2zi,Q3A|HeLJT+$fQH@?~r {ur~+;qFU;@$%BKkym[^F`n30ux#l^ybS,9ld#QV');
define('AUTH_SALT',        '#3RPM9quTpjFj>Lfs.0.5pTZ2^0&1+GC^QJLL~{6_/16xDL]&wN<)I<`US=k@+ie');
define('SECURE_AUTH_SALT', 'fU)M0!wi_UN(l}V)R0o2`@A^7tR}eJEJUB-Z;z;gwV{im3Hy8<^0(Yd?sqZ*),R(');
define('LOGGED_IN_SALT',   'gA*T2JmWj2C>g|2W2ofxw@5bp4S7.LwY3,g$$S`,PHNRZ+a[^y).p&?L?`xOPE~3');
define('NONCE_SALT',       '{TrNZjHsugbVU$%/TSw;[xcnnkNRZ]&BZ5/ap{sj1sU@G{zudFGdYdJ/,$L;qR/(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vet_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
