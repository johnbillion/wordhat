<?php
define( 'DB_NAME', 'wordpress_app' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', getenv( 'WP_TESTS_DB_PASS' ) ?: '' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

define( 'AUTH_KEY',         ']8F+n|vUt>&{b2cf*grT(`2IpA~_yR5mep8|?-gV/M4+Im+K% wT+?a&Dw=#5pls' );
define( 'SECURE_AUTH_KEY',  '^3-]Kj2kxf/=Y #ic4BH<CBC-NW*UEv4i(x2>ej= ![l]trjl+lE>q$/Zay&f&W8' );
define( 'LOGGED_IN_KEY',    'K#eb-SXhdy~$aeUC|`j_xVu$Isgr,& .fN%R$O-b@pD]hV4OyPS4fW~}I]ZYcD`9' );
define( 'NONCE_KEY',        'L5kYt*-erSKgNa&f]j-[{*QXth`<HH ~bR)Xs7Uv1(4;p<M/82#7.T^x`t|QcTqb' );
define( 'AUTH_SALT',        '{:Wjp)V<+%=Lfs!0(g[fNeT;!LC--f2o++C52o-?yh_6F6W0y2, =zzA &b+3o/?' );
define( 'SECURE_AUTH_SALT', 'PCm}cmG2Wz%~2BOqMY cAjLjVL|}+d+SABj2DzO#|vVzxC}[VD0+zZ>CFOp`&h.s' );
define( 'LOGGED_IN_SALT',   'J/pMfKl M>E(b+dy.`x5-71H-|}lA~L#7-)xW5^nfGSAw7Wp8C#F,{DbI5$l({)o' );
define( 'NONCE_SALT',       'hdE/|#~b^,#ymdG2/N^L`4Ju5L|cA+^Qcsn*B2X3z`$B6-<$AsIsIE8l1;]Jz:]<' );

$table_prefix = 'wp';

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

require_once ABSPATH . 'wp-settings.php';
