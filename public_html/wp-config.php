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
define('DB_NAME', '151987-wordpress-dt27155');

/** MySQL database username */
define('DB_USER', '151987_dt27155');

/** MySQL database password */
define('DB_PASSWORD', 'ov7132DK');

/** MySQL hostname */
define('DB_HOST', 'wordpress-dt27155-151987.mysql.binero.se');

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
define('AUTH_KEY',         'siWroYLZgWx1lKDTpVtBxmraFUa2AIFMSVqIPbHdYooxxjkVGS8Xu9ZnkCssRCD0');
define('SECURE_AUTH_KEY',  'CYsWq602suUbFs5OnDOIVca34qd1Sf2KWvC9X9X8GoU73T46MSNqDE7rBnDJ2OPM');
define('LOGGED_IN_KEY',    'm0M36XUFZwuSFfQptRKefsmF7ykJNei6GmbJFnDZxjqpCbvsJKjuKffu28V0eF3t');
define('NONCE_KEY',        'QfoJfISpusFG6xyojTrAuCPeMAfEawVltXFR8SUiKgrNmHTmzGvKEbyCdx6fjmVV');
define('AUTH_SALT',        'HAnQUuNCZCp3zumBoWYae5Dza3TfkIQxQu3ImZ5dFY7Td3eDK3UqtijmKOBPRC3Q');
define('SECURE_AUTH_SALT', 'bFf4xpBlA7tsbXEU7Tpt1EcG2xY8METpsIIxv1D6i0PDJ3CxgDZyshLv0tCyEYOp');
define('LOGGED_IN_SALT',   'H4DvfBE9Rvge2IU0x0QY2KeDMZfCiDvcnlYyyTZ09dErhjifPSYX3Gfwihq9N3HF');
define('NONCE_SALT',       '4bJPGmrEYn4ueDT35x9IRhETWbtDK0RsnvXFDz5MTuvTcXEwB11bRqWYaJOQ02GN');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
define('WPLANG', 'sv_SE');

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
