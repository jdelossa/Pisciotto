<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'pisciotto_wordpress');

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
define('AUTH_KEY',         '={4?<R299Fh8Bs!)R(|ssEdEV|V{GwI|F5_$45l`2+G)*9n{Hg`@arBK<)5wm~51');
define('SECURE_AUTH_KEY',  '7<m-N|/Um4-pp+99,1 HN>!ds|yctOC$[=9+SYr8[3~jtDF,Ox!y)}~%Id)yvjM ');
define('LOGGED_IN_KEY',    '&sa /A+00^6ZDJ*..|37!|Qk=?<4# gnD}1Z~&4kAC--s(+Nzw]+Av a.OK~zt|!');
define('NONCE_KEY',        '=+cWn!2-sHC+sP|iJf(Kz uH0}Mn6!X;=@+-N7.wc=feWouhCfSvriX+Gy;F:Hn<');
define('AUTH_SALT',        'DiQLc49I<X>[{4$mk-^B@94MFH{tUdUM+^C1TMzZyTLCbt+TSW!v_Urq@+4G;@{|');
define('SECURE_AUTH_SALT', '=5BiAP&!t6yW{`2B!vK21&P(G<8bta!</*2s_FZHTx+&;&,8!zAsGs-d4Q^Q_UDm');
define('LOGGED_IN_SALT',   'Uf*!Zfq%-2NVj;<]yqBF]m&qM/.r?+x-ehfJ$X7BUR&*k:oY/3H|G#`4Y2q{=}k[');
define('NONCE_SALT',       'sfL `}MfbH-3iEjp&ax!#]w._.XF^u/*7e},aCUc_Kfe8*@4egQc+;%ZE[ l-;!)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
