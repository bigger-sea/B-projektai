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
define('DB_NAME', 'c9');

/** MySQL database username */
define('DB_USER', 'bigger_sea');

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
define('AUTH_KEY',         'r&fldPz`n}M9sawu=up{8m9z6|75y,p_)H5Go:lx.2A|pe<iNQ8_cNpOrh)e}E!_');
define('SECURE_AUTH_KEY',  'H<J;-P8|FIx3zAPd9e#PB9|k0],B78}595tF|(Fyjv][Q39M)+s><+NM#7CLcl:K');
define('LOGGED_IN_KEY',    ',~RsV%x|y-1<I_gXHz_^}Hu={q X8+z5TqUCMo[R76ofld+dnS9#VgSr>s+7A!H>');
define('NONCE_KEY',        ';yQ1>R^DP;@uxwj.Xdx8>1OQC:zPlaJz@odTvS`%D+l0g>i8*K0d$+l)a,hhvJf:');
define('AUTH_SALT',        'T`(@a;Q])+r9~P`).O.fYmgH%Sh:QM[>,@6e)Y6uj)?01*Ud) iQ;]y;&[GL[P.B');
define('SECURE_AUTH_SALT', '`fZ|,h@MG`-F;DE2ux;*I BVHhN=C4/agK}0[zg;[OhqYER#*N#o/Nj;cy%OR+p*');
define('LOGGED_IN_SALT',   '=V-x8Z%yhkSu6PK8Nu0/V~p(#jP=*lxu^xjzGiV{L:#LegG[XLQ_#z)t{%VL&GL}');
define('NONCE_SALT',       'j!&d5/oQ@2!@z4TYJmG;)`,n<oZh;?Td<3m.Z5fJ1$(=$BL^L&Ota35qSydn2?-I');

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
