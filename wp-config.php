<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/van_edu_vn/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'van_edu_vn');

/** MySQL database username */
define('DB_USER', 'van_edu_vn');

/** MySQL database password */
define('DB_PASSWORD', 'ubZbnfBnTm6CnFms');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '9.WQL)6>5u/$5-osT1c5f1-M12l]}Q#4$ETSfQ:fT)k^?7f-ND_E yIt~rz5P;xN');
define('SECURE_AUTH_KEY',  '~zn3SJwmO:CX=]-TQ9f7)!|8]`FiW79J|Vc9`+<=f-,yu(|oZf|Z*IIS!mk-F5+X');
define('LOGGED_IN_KEY',    'Cb:Vp|. *<$]snf.:GrF:+@M)CirY9-g0tmfHYe HbaMKVqU }O9c4&3(92l(Y^#');
define('NONCE_KEY',        '- URyj-+_1r$R@tzo$K`)<-G+Ull|yX*q[iu;+NwQpl ,K(_S^oUVg/jDt0!=6_[');
define('AUTH_SALT',        '_[>1~h7Eq)?YU#w{{d(*f<dC/xX0hm[KAgItOV)OwfAV[RHR{{67Lf[mcvF_%=)(');
define('SECURE_AUTH_SALT', 'duR@ Lk.3fBfwxk{?izCO7E4nFdtSC%L*!O~#%9J70pS>2xcVd}kD`uH9ehQa8-G');
define('LOGGED_IN_SALT',   'SSr>#^Uf|:J,!uUS/m,uH`p-|5TDGEI6I7@P<%&<%.>Q7kUO5fH$ FspKGdT4T-I');
define('NONCE_SALT',       '^-#Vf~?%%3`DIP02$L774E|YV,u<9n-Scz^rbfQ@S%ni4KxZP{zFrtcXs.$-@3s3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
