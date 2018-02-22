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
define('DB_NAME', 'gabe');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Poke8112');

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
define('AUTH_KEY',         'oOjTj9KX1vLdWofYj2z1TaYvTPb5IzehD2DZEq10hHx4ydCpGk0A0bt2QkHShESR');
define('SECURE_AUTH_KEY',  '54a9GRGQ1dAa0Ab4GkkHRD04FkRammhNLPfCcOG9ZPJznqQmHrcMu475nUIu7roq');
define('LOGGED_IN_KEY',    'EhWaI0hKza4aP0NhbJIm9TrRaGWS0Zyuz5VYlZiuQJGNqCtkdMsXVbPgKXWOBU8u');
define('NONCE_KEY',        'pYFRTZGDbj2XMUU3Z9wPaHssCLGoscTIJpdYP1tS1BXnPVazBVqkFuwZdvz0v2Al');
define('AUTH_SALT',        'UrjGdmFxFIrRqtLfqw8cCI3rShABM4uXwATZL18syw7vqnNzKFiOj7cEa2auOl3Z');
define('SECURE_AUTH_SALT', 'amdU4nDwk4CxcFITt3Ezlb9ILJtTPXc3ZcyXv7AuzMSyJSx2pypvf8ZPWVTiMiAy');
define('LOGGED_IN_SALT',   'Y8kUJ0yRmnth55uAiwxfOJ4EK6bgelja6D2xBSZJlgDs5pM2JgawKuOof5G69uQd');
define('NONCE_SALT',       '80QtAebdTrbB5ZnFFL4THFHxR4VTrMHt5IItOCvnJSGOE0up0YwmNbEGrzl37HTd');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
