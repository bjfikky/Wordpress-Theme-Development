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
define('DB_NAME', 'bootstrap2wordpress');

/** MySQL database username */
define('DB_USER', 'bjfikky');

/** MySQL database password */
define('DB_PASSWORD', 'fikky007');

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
define('AUTH_KEY',         'c) ygFONU<hxrIQy HVhYfoFA8+w{qZ5(&+v??&yDKI03+;sBbZ!IrW-+ENB^A^+');
define('SECURE_AUTH_KEY',  '|9:J2y[6YrIJ;0x|0E{9)!ArO^Akf3R#WK~%Od{6m^~M}~7U?akD$hJ*=!wFt>9h');
define('LOGGED_IN_KEY',    'hUm4$;uNl&6M}F-MB^5o2bYI^(QTvvPl;epc@w2Wsw?+ghGwsbDDDw[41MKX/|5z');
define('NONCE_KEY',        'KpFlJ?Ed^OCAolE2(lu_tiJXVqm]|/[=6y/#ciw^Fp{{1ONl|w7!]sOg]L-|(Fm%');
define('AUTH_SALT',        'Jh$|w=M?<?+AgJ/Lp2wiGIg6ZO;/sAll_OTN=F->lbqa/<3n)So9.ws_4Z|0 nc|');
define('SECURE_AUTH_SALT', 'ES13t#6&#QLV}@wg;*<y7n>lr-:3GsdyNR8.]OPm)-cMc(,&R{R;k&f)Xy6glsGi');
define('LOGGED_IN_SALT',   '6c;.Tg+7}a-BE4Xcv,-)R+aGs|wI^N@R-3`PyIcY*~tvPY[HJXSn[{#XaNXhxfRd');
define('NONCE_SALT',       'px|O!,tsPrhUC]]^+:_${6g^GW`j7y[8SY<4H ~n@L-NsF@dF6pt`XN=WHeV@ZNU');

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
