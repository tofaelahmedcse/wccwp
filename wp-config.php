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
define('DB_NAME', 'wcc');

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
define('AUTH_KEY',         'P(lso8sKC!WCF+QR@*p%1)crq^$33)5hV}C(.?6~K^j8$Tc67B!>=GusL7p9]7J}');
define('SECURE_AUTH_KEY',  'Ea+4LOb`#e&>.I}#SG9#v`/^x,_p9 J^rtOD1~}1u.U::FZ~<pL;0v&miBqz_~i#');
define('LOGGED_IN_KEY',    '_#j4JjV76@MmK4t4.`HW3o=7~*Ch T_RbcBG)XT-O]{^=9T[A7y{ih Qs:+$^suQ');
define('NONCE_KEY',        'OnwF%9SgP#Tw`W4t&}m()Ks)jV]#.hkc_d1v[F#<Rj[(f?V}96Q>bSAFieQC,3Jg');
define('AUTH_SALT',        '1/wP0|Dt>=2;=5(J<5F^ilEmn#O>_k`,bU)er7>Gd-maX~,5] ?micunUN5lWfy^');
define('SECURE_AUTH_SALT', 'sWC=$GN5Gv5{G<G9bcH}X*+$GMJFj0R}`#]rP:J*tiAXz#.*9(pBGjY:nl-94:lA');
define('LOGGED_IN_SALT',   'Eey4bz9M<qOO^V~B4=g<Xno23I1RPh#yaXa[?HnFja U{B@l0%,UD]S+GKTy9@9f');
define('NONCE_SALT',       '7_wL!S2!FYJyvDt1l%>_`V4$sGB9O~`VlnX<0Bhb |]bs){eL.il:5:=Y>{.E!g4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wcc_';

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
