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
define('DB_NAME', 'shaoxing');

/** MySQL database username */
define('DB_USER', 'shaoxing');

/** MySQL database password */
define('DB_PASSWORD', 'ming0315v2');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '6:Mu<X[[tMw<Gez?0U|.`BJV{+1(zeMRVU_7YdTFVE3ftEqbEfw4*N![_O|@Dt^;');
define('SECURE_AUTH_KEY',  'V=cjV$4JXmTfK@1*Z83)nS*&?5?d|&Mvt)s/+Kd-#a?mlN2.iyA46Pz/Su +#8+9');
define('LOGGED_IN_KEY',    'Rwf@*@*.fa5ehv58wmHK!drv4g2aPr:Qji5`|(k-|;p%Fm:R5glx(=we3m*+?rZe');
define('NONCE_KEY',        'T#UIYvkUrMy!r*ZDqe$uDYK.IcUO<Hb&Rh+]7S|z]C!1DSvD-:XmFq*voE_r!/aE');
define('AUTH_SALT',        '51A9X2%Wj72f?~+AJwg[nI0%&YnO_2Qjz^F S*}y?!KXzv7mq4~-8)?s|6wTn>?3');
define('SECURE_AUTH_SALT', 'Xa&38?_bs?^5)S/;un6+`bY<=N1_@g5DQ[-kq3;@;vKw-u7k:RH+kb3mRXX}k62[');
define('LOGGED_IN_SALT',   'u#Ro{IO5WPHLYNTC7IHSL;|lD|82b.w[]y%$y+FIt}X;z7c;0&FY4S8!Tl7cD~(H');
define('NONCE_SALT',       '250(uqnw4`-YL+SH`|(q9|m8JMMdJN<`F9xhrJ$&JoPR(-Iq@B7k|EZ_o/WBb-Wi');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
