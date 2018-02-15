<?php

$_SERVER['HTTPS'] = "on";

define ('WPLANG', 'ja');

define('DB_NAME', $_SERVER['HVC_CORP_DB_NAME']);
define('DB_USER', $_SERVER['HVC_CORP_DB_USERNAME']);
define('DB_PASSWORD', $_SERVER['HVC_CORP_DB_PASSWORD']);
define('DB_HOST', $_SERVER['HVC_CORP_DB_HOST']);
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define( 'AWS_ACCESS_KEY_ID', 'AKIAIWH4PPVDEL4XLKRA' );
define( 'AWS_SECRET_ACCESS_KEY', '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' );

define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'https://' . $_SERVER['SERVER_NAME'] . '/content' );

define('WP_DEFAULT_THEME', 'child-theme');

define('AUTH_KEY',         '>sQD>xP:Ie`n1N?j^+i!ux(WU%|Wm&I;pj]z|s$m%f<Z$5?dW`]*BO$m,l9rYI*#');
define('SECURE_AUTH_KEY',  '$bI_K0hB&}o+xC+4:Dg2v{omPhp/,IZCJJK8;3?^koQl8(*.g,L`fau 7zeD7Xds');
define('LOGGED_IN_KEY',    'apr$?0y f/,bPs>c3u4+UIH0clq|4-~cF~qlD:zM(5sBhB+U%_V`I0Y>*YFpM|&<');
define('NONCE_KEY',        'NW!rgC=&J;V cn5W*R=`f,)#.d`pZ)qqw|jY/K}xFGp P+qD4:H!#-^e5SX_= ]@');
define('AUTH_SALT',        '@bwh)r^H%{+#+D]+Q H9hi#HYXwDmJIf=h|jxu!}B1WcDN+re|k+jvIR+*w*9Wbq');
define('SECURE_AUTH_SALT', '@RSJ|f7RT5=aOGh7)r-u/h_y-$%Z^(wI]M0f56E5sI-@:Y8S}h,xWtx-Vn:TZf6~');
define('LOGGED_IN_SALT',   '[ajZ+lFTUm$(&J$a8-}h.vx-s0#oo.@w5yt0T{^tprrg8oG/SzE67-wH9c_Vv,B@');
define('NONCE_SALT',       'up+o)(_E<hJK#3*g9vJZn])P[2AfA0v|94O5BNVBmu<eT+Qgd,].Kq+(1NuRS*/i');

$table_prefix  = 'wp_';

define('WP_DEBUG', $_SERVER['HVC_CORP_DEBUG']);

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/wp/');

require_once(ABSPATH . 'wp-settings.php');
