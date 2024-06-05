<?php
file_put_contents('/var/www/wp-content/debug.txt', "wp-config.php loaded\n", FILE_APPEND);

define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );
define( 'DB_NAME', getenv('DB_NAME') );
define( 'DB_USER', getenv('DB_USER') );
define( 'DB_PASSWORD', getenv('DB_PASS') );
define( 'DB_HOST',  getenv('DB_HOST') );
$debug_file = '/var/www/wp-content/debug.txt';
file_put_contents($debug_file, "DB_NAME: " . getenv('DB_NAME') . "\n", FILE_APPEND);
file_put_contents($debug_file, "DB_USER: " . getenv('DB_USER') . "\n", FILE_APPEND);
file_put_contents($debug_file, "DB_PASSWORD: " . getenv('DB_PASS') . "\n", FILE_APPEND);
file_put_contents($debug_file, "DB_HOST: " . getenv('DB_HOST') . "\n", FILE_APPEND);
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );
define('FS_METHOD','direct');
$table_prefix = 'wp_';
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
define( 'WP_REDIS_HOST', 'redis' );
define( 'WP_REDIS_PORT', 6379 );
define( 'WP_REDIS_TIMEOUT', 1 );
define( 'WP_REDIS_READ_TIMEOUT', 1 );
define( 'WP_REDIS_DATABASE', 0 );
require_once ABSPATH . 'wp-settings.php';