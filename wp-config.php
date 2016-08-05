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
define('DB_NAME', 'u920100201_ysuby');

/** MySQL database username */
define('DB_USER', 'u920100201_urezu');

/** MySQL database password */
define('DB_PASSWORD', 'atujeQyRer');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'mKOMjppl1MMmnGQt01e0RQIMFpchDA9akHwIJyFYOLBOw9bINo136vkD3mc66ouQ');
define('SECURE_AUTH_KEY',  'koRUwy48jkTVJLplE7v8kwRRhgBtfRa4Kyflj3i3Qq6ydarm5NFcQH6knwO3iV2a');
define('LOGGED_IN_KEY',    'f9guXtwfgGhK11Rk2QOKDgvRI2GIhnPYgjI0yb1N1shvFvY8adNTGavZmCqxcGu3');
define('NONCE_KEY',        'x0lszCGPYcOf3R4moXzff0jxnJWtcBzSp2Z5NTxoG1MpOs0OsnmlMboxQtvWuKEB');
define('AUTH_SALT',        'fsSh9ar3LwQHkf1rpATgRlrnzkdXFhB3vV3vIW2eRpgamMIWr44JHh4bT0nsis7Q');
define('SECURE_AUTH_SALT', 'zjLsLvL71B7X5uiiynfoMbQkykC8r1HGdisWTP9Nif7nleUsakwDFVRbZbMAxwu8');
define('LOGGED_IN_SALT',   'xM1wmd84Zh70zIoJkATcspKIP8PEOrsrWlTpgNJqKgB7Bt0cVKWDYUPAl615jHNl');
define('NONCE_SALT',       'olMrNeP3qaLbR49eVgvHhTDE7XthdqX8V5ltHDEX08B9H8fhJAAb7gDhh3eVRuuB');

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
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'lf0q_';

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
