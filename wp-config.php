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
define('DB_NAME', 'new_media');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         't,48DI)?PH8kgUh|&Q(_CJZ}0hTnl!w1xTy&Y0|0ZpoSMbFq2O_:uH~27@ %lxT#');
define('SECURE_AUTH_KEY',  'SMKk+EK0<v!CI&jdmW1<.qOccF4DjQK<ezp6p(G#iA]uEHndrL/Gb 3|iujAswa3');
define('LOGGED_IN_KEY',    'OyZ%SmxH)&/1}K75MsvNtHthUm$}aH60=i$IKg-,ZL!r`nr}nMvb+y@E?qLG31Uy');
define('NONCE_KEY',        'Z~h68;3rThQ/fr}}2!!ZFR]BE4dXre!~?Fg!Pwb`:n_ZX?qZBD|^7 hV>Z,ds6Z_');
define('AUTH_SALT',        'Ct!KDQ,_VX(b;Bk/S[OnwT(r5{fPkX]Mo&9q-qGnG}4Qex+f*P+QU|XE/{M !fV%');
define('SECURE_AUTH_SALT', '!b*{Su(;Y#plv(TcMe|OIj=d-b5gsW0~&o`08)$t;*d:;$QtAp,nc.C7P9Fq<X[t');
define('LOGGED_IN_SALT',   'l6JFN7;WM-J0)@+o(T?U^yt](LSZ}#XU&n<yD[z41/n^L9poMJbiGxMD^PuLqQ<>');
define('NONCE_SALT',       '%7SRt7+>},f`vy*3NkDW,+ZH5G&]hc0`8-sYBFkN.>eR[gwh[3=]n*Fb6+6NJIDU');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
