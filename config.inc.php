<?php
// site root path
define('__TYPECHO_ROOT_DIR__', dirname(__FILE__));

// plugin directory (relative path)
define('__TYPECHO_PLUGIN_DIR__', '/usr/plugins');

// theme directory (relative path)
define('__TYPECHO_THEME_DIR__', '/usr/themes');

// admin directory (relative path)
define('__TYPECHO_ADMIN_DIR__', '/admin/');

// register autoload
require_once __TYPECHO_ROOT_DIR__ . '/var/Typecho/Common.php';

// init
\Typecho\Common::init();

// config db
$db = new \Typecho\Db('Mysqli', 'typecho_');
$db->addServer(array (
  'host' => '43.200.121.77',
  'port' => 52793,
  'user' => 'tc',
  'password' => '6s33n7hhrk4rDyf8',
  'charset' => 'utf8mb4',
  'database' => 'tc',
  'engine' => 'InnoDB',
), \Typecho\Db::READ | \Typecho\Db::WRITE);
\Typecho\Db::set($db);
/**
 * 替换Gravatar头像为Cravatar头像
 *
 * Cravatar是Gravatar在中国的完美替代方案，你可以在https://cravatar.cn更新你的头像
 */
define('__TYPECHO_GRAVATAR_PREFIX__', 'https://cravatar.cn/avatar/');