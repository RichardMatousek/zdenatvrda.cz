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
define('DB_NAME', 'zt');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'trueapps');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '!E#9FvP:rM$t cbA^rr, 97rI8.IrjbOjyX<@hiplgMM7fsVNbgzriI(X),ob7cP');
define('SECURE_AUTH_KEY',  '{99/IgDEevO.FEUW~nZow)t|97du=2o.JI?^yWSe~t>UnccJGDr>`6407]FPWjTh');
define('LOGGED_IN_KEY',    'izCc:R`Qo1Ef10RDTrB;HF.[N]MFnjCXZrm,:1Jfk&Y,fTP%1(Ch,}WC?dJ<C#J=');
define('NONCE_KEY',        '/:!t OY-AeQSL,fu+I1DKuc=Khq,n0@%L.jgpe4-HPTN:rU]ij*cX:;{r04sn#g{');
define('AUTH_SALT',        'g3E@PTQSJWR)Tgo~)`9<lbG.~$HlRZ8&%KM!;}[BxYzLlufF[;(5xNFq2hqjh~@}');
define('SECURE_AUTH_SALT', '^J[B^xb}8jo-[V)F&gV27PFr]dIQfPp6Vb/62`jao|%.|_$!?Fwdomr<ffeg*`Pd');
define('LOGGED_IN_SALT',   '%Ge7jHNK3SMxs<MK#25LLuV>JZMsI;e0 *^qQ7t@g84rY^I^:n)KHSZ[|6NT2Ujc');
define('NONCE_SALT',       '26G+RF7U!zdImE&?@i1sz:9s,?tQCA6Bo2;6+0uok?92!$M~7/3RI4,P8B,R$!)5');

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
