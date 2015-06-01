<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'gfigazuk_io1j1');

/** MySQL database username */
define('DB_USER', 'gfigazuk_io1j1');

/** MySQL database password */
define('DB_PASSWORD', 'V#(]XoZ6LQ25~[2');

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
define('AUTH_KEY',         'Ff0NNTxkf8pZeQjZ0HYvzmbV5CxRj76FlvuoitC6Iv7xtR0IE3lebcl75acu1gjx');
define('SECURE_AUTH_KEY',  '0iA8LaUxd09sC6XsBFzQ51U0kyvSGsPkSx0ClJpo0sHPh81N3pjYLEuDW0Gkgr83');
define('LOGGED_IN_KEY',    '0Gk7ooKeM248o1tb6Rf0FiWmCbruqigJNNRd1j6gqKdOFV88JaIhwZ66LW3KxkMu');
define('NONCE_KEY',        'ttdFyPsiEx4MruDspyfY0u2Vq6nhwbl9QT7aXRqFtPtQNVGcNqhLjClGMMoJqnBK');
define('AUTH_SALT',        'EkX1UtkWpSsHXBZ8kbkIPgaddttg9PwY15TiGRVBUB4BlD1OLwQ0LsFV6m09TMoS');
define('SECURE_AUTH_SALT', 'PZ1HR1ZvwE8FbwTr5FfGgww0mcSfNm0TxImaLIgNPBmZnLXfyScq7pjiOwAdtiXA');
define('LOGGED_IN_SALT',   'jCo5ve1jwDfRe0RIrUZmPBIkpJNuymjElhfMQHc2hVPxBxG8agk3AsBXkdd7BlhC');
define('NONCE_SALT',       'yw7JFaGJaIjgCtdFp6BIbTmdwIsHXHO9oEQROiP5Pj3PGPDmmHK7iFQ9eym17xxM');

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
$table_prefix  = 'tkwp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* Hosting company modifications */
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'DISALLOW_FILE_EDIT', true );
define( 'WP_POST_REVISIONS', 3 );
define( 'AUTOSAVE_INTERVAL', 300 );
define( 'SEED_CSP_API_KEY', 'aae89dc2-6bad-41b5-a61f-ffc758242af8' );

// 2020 settings
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '');
define('WP_HOME',    'http://' . $_SERVER['HTTP_HOST'] . '');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
