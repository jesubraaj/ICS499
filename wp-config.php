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
define('DB_NAME', 'ics499project');

/** MySQL database username */
define('DB_USER', 'ics499project');

/** MySQL database password */
define('DB_PASSWORD', 'haKecHurA5aC!');

/** MySQL hostname */
define('DB_HOST', 'ics499project.db.12222361.hostedresource.com');

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
define('AUTH_KEY',         '+MH|EJoYjAF5xj:|lL{RTrGeKcxd<jvp-7q44E;]g::*+VB^i}_`s]$FY<>Idkb3');
define('SECURE_AUTH_KEY',  'V~TF+?c]+2z2h-6!XhBZw$6 !MW|OY/k93+uMO,LXJaX8+ O7m^&vE5l2Q[R7|G`');
define('LOGGED_IN_KEY',    'm%#fhUX^JeI^!{(6/{5yY^B7Dvys8Kef OfMhtWc:K-Q9>gaV%0;tO$KaS^3r1;t');
define('NONCE_KEY',        '=H+dK?TC8Dbhtd@tAy{r.Fv<kbI#l?|g&`!(XGG.sm9qI_S)[2O$V(=P0?uU #^=');
define('AUTH_SALT',        '(#5wt@LhcQHtL^+GN%]5I6Nx-lA&w5?<|uq<.~}a&P4KM5hP$[rPw*Z$3UHL},*k');
define('SECURE_AUTH_SALT', 'Symh*SPd!uR5$c+WLj^Zv.7|IqWB&K<PNq!JaOWGdw$v#@ld;|Y>VK2Zu.[^j%ig');
define('LOGGED_IN_SALT',   'q})^!Ph<+`Ux3kDa)DG&#v-ja=7<(THV.<])F$=@l#OY~X)I|?@ g@K#S@{/Ggd<');
define('NONCE_SALT',       'Hp4Q,ly$_4-rTr-;CP1#~A-U2;g<+Am?$JB4XZ@l8YfR|IqX,M8D}-ia?^;?$Q-B');

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
