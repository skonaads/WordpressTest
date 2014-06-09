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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'qvsEeU0S7zXhhrN8r8K$!/0tF]/(&!.G&LJr`CucDRVRifAXT}ftf5-hl>k[Ap[ ');
define('SECURE_AUTH_KEY',  ';`FU1%mTFEI9-Q$-)GY6R2{u6IX+FOOTlfS^ dEP^,9MBHKZtyL>5*;yWt1X&~sE');
define('LOGGED_IN_KEY',    'wk2L?<.MPp|pw#YmfP1g@YH`fA@w|8Quig(3uCHlh<uh:XCQbNw( n9ir|)CqH_y');
define('NONCE_KEY',        ']^-t4)oOQ+NEk|+K!uN`T|2+A~{.wdNa=PqB44i_|NYO+BY{T^[{kDznZ=`-Mtd0');
define('AUTH_SALT',        'ae[}w{*Y1P38G[j_v48--- U@x<yNns1fX(M6Jn)7C8ejIOB+CVNr-+d[mlVkJ+u');
define('SECURE_AUTH_SALT', '-lb`(uo!JO(rKIhx^JcL--(+2a-WJv~T##u?a5C1mwB4!L$qL.qtN(4n t{:HjO=');
define('LOGGED_IN_SALT',   'JzR}i*2e[l/:H@%3EKSf0Q,o-<>cku>(JV4%FceaaRD1jj4r$A!lU%P_%#st+lqY');
define('NONCE_SALT',       'n#OTIu;Hh*8T)DT=A~)0<%EHEq)wLJ E.^?M7tF3Ho`/LeO3B@KHGxz0CHl2mGD9');

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
