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
define('DB_NAME', 'bmjFinal');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '~$J8*@F|rA`4yKwZZ4ARCT;X+.jDh{m_{gK3kPXxAWW9SVojZ~xDp]z^.=GcO[.-');
define('SECURE_AUTH_KEY',  '(Vw3$9xFO7BPfD*2q7mp>gX{O(Os|%Hc~JsnSkp}MW%_AZuJGk<SO>_)MD}~&7$)');
define('LOGGED_IN_KEY',    '~OAw&86P@K(<Am]u|Fp{}Z#CNugu9N0[QF~Qi>,{=L9#.~T#{EAKd#YB)HwA^rz=');
define('NONCE_KEY',        'H#W.~X]CCA?bFXjq4Dyr.WvCU|u1m/gcQx+WQwhgI%*zJL}&z|?} c@+iAGQ4M G');
define('AUTH_SALT',        '2#T7dSrb[euG>+6iYV~z)M)G^?!X`Hg~8(uXUg[sx@{$ j6dgQMKt*d>c3nlc)@r');
define('SECURE_AUTH_SALT', '@`k{51r(|Ct6qn&*yL6A>C_e8>ITEzT2P1f`H-Uw,0o+iGu2%!wjqN%Ff{_,E/H$');
define('LOGGED_IN_SALT',   'z*o&B$&bKo|EFKh8//:f>.ta=P[4D3XIU7lj!kgOrbK_w3*MDib*#hF`1S)D[a| ');
define('NONCE_SALT',       '!y]f_i2M~e/?3##C{ucTitQRU@h?~XEr3.[`OqQ,^,hUv9c;qea`5G5$-`/,g,nA');

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
