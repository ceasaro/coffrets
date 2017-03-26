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
define('DB_NAME', 'coffrets');

/** MySQL database username */
define('DB_USER', 'cees');

/** MySQL database password */
define('DB_PASSWORD', 'welkom');

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
define('AUTH_KEY',         '5-r*g57g@)mJ-zNu7H#p!c^#E[b:Pzx:o5?2~&%*0%k`:9mcafdJ4qh{p^=Xi7XH');
define('SECURE_AUTH_KEY',  ';`1GCxKp3V-4ljlNZJs0]( 9q>B~v$FV$%!JfvYmfy~FZ_z/Nt0d>K?d4oJolojG');
define('LOGGED_IN_KEY',    's^0>Qz?wI7~0tF/<N?FLp_1b{s>a<K4&2PWv<U608i!zBu8l3SIw5[KX3t h,8H-');
define('NONCE_KEY',        '$t;>]M/(-{>N7oUO$g{&]^1~@lwdbd0kU_#<>8=1Gje5X.?R[oA82#z*96Tb&qxy');
define('AUTH_SALT',        ']NR_UraCjJA?<r0sCtCEa$PFw$*Jm](/^Y{^(&^;Ov^NuZFMv(Z:*x%Q;}f0%h!w');
define('SECURE_AUTH_SALT', '4s_OhHh6f8>g8@4_03iS*f{Wvph{<2.@!=U5a{*44+GA*TgdsRA,2V$cZ~8Tgp7b');
define('LOGGED_IN_SALT',   'y=~{=wEP*B_++ZRjw5bMwnaT5AEa{T@:0o)kIU5L#20*qYp`H*9@TFYy8Z%N:t44');
define('NONCE_SALT',       '-}{:cn6ys((p:-9jFuvzaw3[2S}jGCji$s<RDd:RvhL&%KYuBLw1s/UCrL&.i,XT');

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
