<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~9O L4j52ZF)dGo/6Q6^z()Bh71?P>O0co9i1sA*Gm|mfnLyx.#c|r?)k2VY_*n|' );
define( 'SECURE_AUTH_KEY',  '|d]%{Oh.zFP{t/^R7zJfMov2!(@dN+N(HdMlXdC3zQEmVk_.]>Um8?*8lMf:Eby3' );
define( 'LOGGED_IN_KEY',    'sn:RB}>SR0g.A)hTx,!&r;JVua`PZ7{ktB.M7({.;_Vpgka?9 B2:B^9kw0awF?t' );
define( 'NONCE_KEY',        'Xy{@` 0%a-dsTkbw-;>kG .uEICu%jq}u7OzJ ={s6O:v=M1g~/?1:(<$(RaR)^7' );
define( 'AUTH_SALT',        '[Nk[-Da[4W{E)9Bax#[ujnR&gR-!nP8h{PF*/MMOFoOe1#i]d&[6q4[%]79v#1eW' );
define( 'SECURE_AUTH_SALT', '-Lm>xtV)t`BqHCS`xM%C9emOYFhcp#4S2lW/J|O$c|]U~<leerNf^oOwr_[a1!%(' );
define( 'LOGGED_IN_SALT',   '=oZLw#3GlU~g}`y&X**Fzy!PKpf YcK1LaK|PAw8K..lD.Mej>v%g5+:[u7Rz?w8' );
define( 'NONCE_SALT',       'bIfHpR !NG`6st{G7`.LDt:; PZQ[:sK%7mOSY<{;Je/3=:cA!YoEy,4G^X!<]/b' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
