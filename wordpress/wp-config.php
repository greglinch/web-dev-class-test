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
define('DB_NAME', 'webdevclasstest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '/|6(45 o^QVO_7R-8cJwSAN3;H]-e?691`<2[_zJ/;sGd.CJC~%IkMb^OOqM*l|e');
define('SECURE_AUTH_KEY',  ' l,wMe$(4M!0?>+`iTt?vq]PmYY)[,vEg5_m1KI|seo*ul2p+O.+iq)>Ymj.m=d|');
define('LOGGED_IN_KEY',    'Y3L b{ *YJ0_uacd[vax={>)^Q=9,E#Q$iChbNyv NMf3uYkjIn[56F*3S7 bu !');
define('NONCE_KEY',        'o-,+DxS|&5MaC6^*&7JA09tI3hUEKU}nKi{r7m1g.{M%-U|+M:JABhP?|=veyI J');
define('AUTH_SALT',        'jJ~4q@f6f-po5QGG)jW0%6Gk_~vFB/ FIPp,*@J%4xAb.A(wCG|V+v?NnA34|i)k');
define('SECURE_AUTH_SALT', 'zd+ yqx<!O0Xpy5:4q?W^yl&Zn;.jk27~*|<q]&o|bM&XW dHke)-}->OI[4fQ{L');
define('LOGGED_IN_SALT',   'p|F_[Jf$+ENFkiQ3cMT,+1e}|o-Dresbo{|lxOWUNpPi.O,Dr+jV~KZ98&3@%%].');
define('NONCE_SALT',       'E{jC _V?~NGfjj-:=jH=?My.r?m`u+,fTzryWTx6(&A8;cXWVYjo@|M.[w,rhF7a');

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
