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
define('DB_NAME', 'ahcs');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'T+<b!56sNq]Nl@#uxc/zwD6qa[zgu&sPchV_lWso*{nXJ*`Fr0b#t`,>~!tW<nB5');
define('SECURE_AUTH_KEY',  'Ti3c_;`C5|dNan2TAxbgP!-xs{#;cENsiPSe#Dxe=bv]`2yfGTe4|rLFW}2UChxs');
define('LOGGED_IN_KEY',    '@]i604x&R^B]ne]O!)k%5>bN7D~?d}a1`{G<[@Q3b@N+[y<V4/*Dg:pc3K?[h`Ij');
define('NONCE_KEY',        'WNf9;<r6!hRdW8s0x q_D:ET-i Godc@g#-0=--t2z4lyjcEo5v._MXg$-2X;i89');
define('AUTH_SALT',        '*qZO~04f?rBD|PAgbt_Jzp>419JYS,Gqtz:?Qj,[nAt`ujWxk7fN.mrT%H9wglm}');
define('SECURE_AUTH_SALT', 'BkQH)_oyvSanT-y(CNb=mHfuj|!dk-_Tc- pu-rjq$+@xh;yd8szC!E5y3}o6b9F');
define('LOGGED_IN_SALT',   'Fob^-tj!uDV*w:l$3SA3&8z|{Bp)h/+t`-&.#BkCz LN<&&NN%~`<3j m<i6j}2b');
define('NONCE_SALT',       'Q7.p&2:!!?QRyZ(d?z7og^[u7_mJc1|[ccn|YJU0@)f3QL7],icZ,Heg9/X21Ep8');

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
