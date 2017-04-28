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
define('DB_NAME', 'vimmi');

/** MySQL database username */
define('DB_USER', 'vimmi');

/** MySQL database password */
define('DB_PASSWORD', 'vimmi');

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
define('AUTH_KEY',         '-3r8D`v$2?7ts9v=$wJ}]MpH%1!:YhcLU2c</Fzc-HD[7+(nny+)Gz]NO,T8fnhH');
define('SECURE_AUTH_KEY',  ' M[f{K66~f&]rA_&(kC+Zsu~ZY|(cH$aI7WUPhj499gK3k|8e-!ivaAkQi0>L Ik');
define('LOGGED_IN_KEY',    'dT7_R:t{T.|Q3H(._mp(.u)?F}~xJXU:_7JLlax.uR^ESK|aZVcv4!QTx+lY@mGK');
define('NONCE_KEY',        'kpDFVABcL#6svJ#*;pjI-l_g|zZ]:d%Z.Bw@)r[Mv  Ok:RS{luC#m:>BSTmh l+');
define('AUTH_SALT',        '8|dK-fbomU2U@$$5/4y9N)zh9N!)@I/:i&<~=(4qC/nJy) (G/O]phh^L/{q3wgE');
define('SECURE_AUTH_SALT', 'u4ZJaO:C]SB>Z/X(IGr*uC xkG5c.%@v%Kbrm18xQNrg2+_q|BS4|hm~(Od?p,Ss');
define('LOGGED_IN_SALT',   'h/G5F87(0dn5@}vy+o8Wr!MVa<Gmfa<r5xj^m_N?{6Lqsx:+bSqFsrXh(cik$/>Y');
define('NONCE_SALT',       '0k>1& &FANo3x!W |d+mGWtSlD*$Pp4V7T>qv-y5t]*n=yz8?%Hj?~6$(mHjSy.W');

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
define('DISALLOW_FILE_EDIT', true);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
