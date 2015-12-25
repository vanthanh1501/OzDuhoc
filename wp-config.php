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
define('DB_NAME', 'agl_Ozduhoc');

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
define('AUTH_KEY',         '.o{2gDG1sk)^VG$^G:1/ *C%g799s_NOGQi=g{avI-%!)d-[1R{U6Vkz5+JG<5X]');
define('SECURE_AUTH_KEY',  'A{mTOn[2_{6hq^O):{)7H~!A}p~.X:@9J+*Y.~:RpG9;(F]ArdL*izmKY3kqHV-f');
define('LOGGED_IN_KEY',    'Ex[G#2%V}LgLBe%It#h6,d@jia-=CJcclj>;%y4pt{%Jh|/DEcP(M6X)eurYYoQ6');
define('NONCE_KEY',        '8(MMi}sR?l>-]@7pTpkcGfF](6ZmYj/fi1<$>jJZQep@{:jiCDxv`p,le I{~76v');
define('AUTH_SALT',        'Ne1skTOmxLH[#tdPfx^7u6b50ebb3CG=7=l@o|!.DUn{)},>sD)0$b@}  UM(5Tr');
define('SECURE_AUTH_SALT', '77~|<+kFAY$G^595!b!K}Va+c{mNfF F-&iq|7+yEN]y cr~)cH3-GK^P%y=r2d>');
define('LOGGED_IN_SALT',   'a$JmucvN3@qAwT(`iP7v~0G]BcYus;uRN-BEhlMjuE$|JM1h5gQ:08Qf[*+j]-,c');
define('NONCE_SALT',       '#&)V&D2iV7NB:R1$YZ4PZz[7@8rzinu8j;uc!}QEKb:TRG`@RvGb^6{B$X!l9GEw');

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
