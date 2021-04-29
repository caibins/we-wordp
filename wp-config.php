<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define( 'DB_NAME', 'wordpress' );

/** MySQL数据库用户名 */
define( 'DB_USER', 'root' );

/** MySQL数据库密码 */
define( 'DB_PASSWORD', 'JBviyfbG' );

/** MySQL主机 */
define( 'DB_HOST', 'localhost' );

/** 创建数据表时默认的文字编码 */
define( 'DB_CHARSET', 'utf8mb4' );

/** 数据库整理类型。如不确定请勿更改 */
define( 'DB_COLLATE', '' );

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'crz>_<DxLs13N%VH)Wo`;8LWTyI:Bu8R-i2 3S`&k3}wC$L_;$I&}Sd &;$p{oT@' );
define( 'SECURE_AUTH_KEY',  '`r4eHJ!:^]IJn6t/1^gp2F}o,SMdC9q7DjQ$FM6LB<1eJhlWdLZGxgdU}!AO47Z4' );
define( 'LOGGED_IN_KEY',    ')9/0vAM}1vg,PWT~s`.{g*yK#5bUx/Lqz8prkh9U65n=pACi4^tHhUR@@7z8NgGg' );
define( 'NONCE_KEY',        ':^BGS!l=!IwXx]Ox#9g7n|Jh~XE2eq]9v-I+O:+EGf4)o@^,^Xkod8Peona[[a3u' );
define( 'AUTH_SALT',        '!$[( $)#G=#lh: F(4jjwg_!suATLL<kiA9X?BE2pf-]~E $8V!Z1,n>_J`;>jmT' );
define( 'SECURE_AUTH_SALT', 'Oh=!~;6AWrE>ktzH|SwaZo;@D=bR$Cy}|8i[0aYUrPeR>%<WmbTISX-g;b^15|Hu' );
define( 'LOGGED_IN_SALT',   'KJVocs+{#BL.X(8eHMI?1~lVnr@#<FG}18m2p(sk/8Rm@aLwrVC^@`Lo&sU^O]+9' );
define( 'NONCE_SALT',       'S)HarpKuVpi5ctU?|f9?#tod1{oSGT==8X@@!,mz.m8@W^k99H25ZpVxPh!g|@Vg' );

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问文档。
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** 设置WordPress变量和包含文件。 */
require_once( ABSPATH . 'wp-settings.php' );
