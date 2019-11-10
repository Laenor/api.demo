<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-11-08 12:59:50 --> Class '\CodeIgniter\Database\pdo\Connection' not found
#0 /code/vendor/codeigniter4/framework/system/Database/Config.php(115): CodeIgniter\Database\Database->load(Array, 'default')
#1 /code/vendor/codeigniter4/framework/system/Common.php(138): CodeIgniter\Database\Config::connect('default', true)
#2 /code/app/Controllers/Home.php(6): db_connect()
#3 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(847): App\Controllers\Home->index()
#4 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-11-08 13:00:09 --> Class '\CodeIgniter\Database\pdo\Connection' not found
#0 /code/vendor/codeigniter4/framework/system/Database/Config.php(115): CodeIgniter\Database\Database->load(Array, 'default')
#1 /code/vendor/codeigniter4/framework/system/Common.php(138): CodeIgniter\Database\Config::connect('default', true)
#2 /code/app/Controllers/Home.php(6): db_connect()
#3 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(847): App\Controllers\Home->index()
#4 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-11-08 13:00:10 --> Class '\CodeIgniter\Database\pdo\Connection' not found
#0 /code/vendor/codeigniter4/framework/system/Database/Config.php(115): CodeIgniter\Database\Database->load(Array, 'default')
#1 /code/vendor/codeigniter4/framework/system/Common.php(138): CodeIgniter\Database\Config::connect('default', true)
#2 /code/app/Controllers/Home.php(6): db_connect()
#3 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(847): App\Controllers\Home->index()
#4 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-11-08 13:00:39 --> Class '\CodeIgniter\Database\pdo\Connection' not found
#0 /code/vendor/codeigniter4/framework/system/Database/Config.php(115): CodeIgniter\Database\Database->load(Array, 'default')
#1 /code/vendor/codeigniter4/framework/system/Common.php(138): CodeIgniter\Database\Config::connect('default', true)
#2 /code/app/Controllers/Home.php(6): db_connect()
#3 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(847): App\Controllers\Home->index()
#4 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-11-08 13:07:09 --> Call to undefined function CodeIgniter\Database\MySQLi\mysqli_init()
#0 /code/vendor/codeigniter4/framework/system/Database/BaseConnection.php(377): CodeIgniter\Database\MySQLi\Connection->connect(false)
#1 /code/vendor/codeigniter4/framework/system/Database/BaseConnection.php(643): CodeIgniter\Database\BaseConnection->initialize()
#2 /code/app/Controllers/Home.php(19): CodeIgniter\Database\BaseConnection->query('SELECT * FROM d...')
#3 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(847): App\Controllers\Home->index()
#4 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-11-08 13:07:30 --> syntax error, unexpected end of file
#0 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('/code/app/Contr...')
#1 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(801): class_exists('\\App\\Controller...', true)
#5 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#6 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-11-08 13:07:36 --> syntax error, unexpected end of file
#0 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('/code/app/Contr...')
#1 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(801): class_exists('\\App\\Controller...', true)
#5 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#6 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-11-08 13:07:37 --> syntax error, unexpected end of file
#0 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('/code/app/Contr...')
#1 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(801): class_exists('\\App\\Controller...', true)
#5 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#6 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-11-08 13:07:56 --> Object of class CodeIgniter\Database\MySQLi\Connection could not be converted to string
#0 /code/app/Controllers/Home.php(7): CodeIgniter\Debug\Exceptions->errorHandler(4096, 'Object of class...', '/code/app/Contr...', 7, Array)
#1 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(847): App\Controllers\Home->index()
#2 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#3 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-11-08 13:07:56 --> Object of class CodeIgniter\Database\MySQLi\Connection could not be converted to string
#0 /code/app/Controllers/Home.php(7): CodeIgniter\Debug\Exceptions->errorHandler(4096, 'Object of class...', '/code/app/Contr...', 7, Array)
#1 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(847): App\Controllers\Home->index()
#2 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#3 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-11-08 13:08:07 --> Object of class CodeIgniter\Database\MySQLi\Connection could not be converted to string
#0 /code/app/Controllers/Home.php(7): CodeIgniter\Debug\Exceptions->errorHandler(4096, 'Object of class...', '/code/app/Contr...', 7, Array)
#1 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(847): App\Controllers\Home->index()
#2 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#3 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-11-08 13:08:34 --> Object of class CodeIgniter\Database\MySQLi\Connection could not be converted to string
#0 /code/app/Controllers/Home.php(7): CodeIgniter\Debug\Exceptions->errorHandler(4096, 'Object of class...', '/code/app/Contr...', 7, Array)
#1 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(847): App\Controllers\Home->index()
#2 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#3 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-11-08 13:08:58 --> Call to undefined function CodeIgniter\Database\MySQLi\mysqli_init()
#0 /code/vendor/codeigniter4/framework/system/Database/BaseConnection.php(377): CodeIgniter\Database\MySQLi\Connection->connect(false)
#1 /code/vendor/codeigniter4/framework/system/Database/BaseConnection.php(643): CodeIgniter\Database\BaseConnection->initialize()
#2 /code/app/Controllers/Home.php(19): CodeIgniter\Database\BaseConnection->query('SELECT * FROM d...')
#3 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(847): App\Controllers\Home->index()
#4 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-11-08 13:12:12 --> Class 'CI_Controller' not found
#0 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(365): require_once()
#1 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('/code/app/Contr...')
#2 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#3 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#4 [internal function]: spl_autoload_call('App\\Controllers...')
#5 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(801): class_exists('\\App\\Controller...', true)
#6 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#7 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-11-08 13:13:03 --> Class 'CI_Controller' not found
#0 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(365): require_once()
#1 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('/code/app/Contr...')
#2 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#3 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#4 [internal function]: spl_autoload_call('App\\Controllers...')
#5 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(801): class_exists('\\App\\Controller...', true)
#6 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#7 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-11-08 13:13:13 --> Class 'CI_Controller' not found
#0 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(365): require_once()
#1 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('/code/app/Contr...')
#2 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#3 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#4 [internal function]: spl_autoload_call('App\\Controllers...')
#5 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(801): class_exists('\\App\\Controller...', true)
#6 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#7 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-11-08 13:16:34 --> Class 'CI_Controller' not found
#0 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(365): require_once()
#1 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('/code/app/Contr...')
#2 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#3 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#4 [internal function]: spl_autoload_call('App\\Controllers...')
#5 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(801): class_exists('\\App\\Controller...', true)
#6 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#7 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-11-08 13:16:35 --> Class 'CI_Controller' not found
#0 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(365): require_once()
#1 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('/code/app/Contr...')
#2 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#3 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#4 [internal function]: spl_autoload_call('App\\Controllers...')
#5 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(801): class_exists('\\App\\Controller...', true)
#6 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#7 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-11-08 13:16:35 --> Class 'CI_Controller' not found
#0 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(365): require_once()
#1 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('/code/app/Contr...')
#2 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#3 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#4 [internal function]: spl_autoload_call('App\\Controllers...')
#5 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(801): class_exists('\\App\\Controller...', true)
#6 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#7 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-11-08 13:16:35 --> Class 'CI_Controller' not found
#0 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(365): require_once()
#1 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('/code/app/Contr...')
#2 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#3 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#4 [internal function]: spl_autoload_call('App\\Controllers...')
#5 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(801): class_exists('\\App\\Controller...', true)
#6 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#7 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-11-08 13:16:36 --> Class 'CI_Controller' not found
#0 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(365): require_once()
#1 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('/code/app/Contr...')
#2 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#3 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#4 [internal function]: spl_autoload_call('App\\Controllers...')
#5 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(801): class_exists('\\App\\Controller...', true)
#6 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#7 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-11-08 13:16:36 --> Class 'CI_Controller' not found
#0 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(365): require_once()
#1 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('/code/app/Contr...')
#2 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#3 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#4 [internal function]: spl_autoload_call('App\\Controllers...')
#5 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(801): class_exists('\\App\\Controller...', true)
#6 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#7 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-11-08 13:17:24 --> Class '\CodeIgniter\Database\pdo\Connection' not found
#0 /code/vendor/codeigniter4/framework/system/Database/Config.php(115): CodeIgniter\Database\Database->load(Array, 'default')
#1 /code/vendor/codeigniter4/framework/system/Common.php(138): CodeIgniter\Database\Config::connect('default', true)
#2 /code/app/Controllers/Home.php(6): db_connect()
#3 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(847): App\Controllers\Home->index()
#4 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-11-08 13:17:43 --> Call to a member function model() on null
#0 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(847): App\Controllers\Home->index()
#1 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-11-08 13:18:09 --> Class '\CodeIgniter\Database\pdo\Connection' not found
#0 /code/vendor/codeigniter4/framework/system/Database/Config.php(115): CodeIgniter\Database\Database->load(Array, 'default')
#1 /code/vendor/codeigniter4/framework/system/Common.php(138): CodeIgniter\Database\Config::connect('default', true)
#2 /code/app/Controllers/Home.php(6): db_connect()
#3 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(847): App\Controllers\Home->index()
#4 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-11-08 13:18:23 --> Class '\CodeIgniter\Database\msqli\Connection' not found
#0 /code/vendor/codeigniter4/framework/system/Database/Config.php(115): CodeIgniter\Database\Database->load(Array, 'default')
#1 /code/vendor/codeigniter4/framework/system/Common.php(138): CodeIgniter\Database\Config::connect('default', true)
#2 /code/app/Controllers/Home.php(6): db_connect()
#3 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(847): App\Controllers\Home->index()
#4 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-11-08 13:18:24 --> Class '\CodeIgniter\Database\msqli\Connection' not found
#0 /code/vendor/codeigniter4/framework/system/Database/Config.php(115): CodeIgniter\Database\Database->load(Array, 'default')
#1 /code/vendor/codeigniter4/framework/system/Common.php(138): CodeIgniter\Database\Config::connect('default', true)
#2 /code/app/Controllers/Home.php(6): db_connect()
#3 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(847): App\Controllers\Home->index()
#4 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-11-08 13:18:24 --> Class '\CodeIgniter\Database\msqli\Connection' not found
#0 /code/vendor/codeigniter4/framework/system/Database/Config.php(115): CodeIgniter\Database\Database->load(Array, 'default')
#1 /code/vendor/codeigniter4/framework/system/Common.php(138): CodeIgniter\Database\Config::connect('default', true)
#2 /code/app/Controllers/Home.php(6): db_connect()
#3 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(847): App\Controllers\Home->index()
#4 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-11-08 13:18:25 --> Class '\CodeIgniter\Database\msqli\Connection' not found
#0 /code/vendor/codeigniter4/framework/system/Database/Config.php(115): CodeIgniter\Database\Database->load(Array, 'default')
#1 /code/vendor/codeigniter4/framework/system/Common.php(138): CodeIgniter\Database\Config::connect('default', true)
#2 /code/app/Controllers/Home.php(6): db_connect()
#3 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(847): App\Controllers\Home->index()
#4 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-11-08 13:18:25 --> Class '\CodeIgniter\Database\msqli\Connection' not found
#0 /code/vendor/codeigniter4/framework/system/Database/Config.php(115): CodeIgniter\Database\Database->load(Array, 'default')
#1 /code/vendor/codeigniter4/framework/system/Common.php(138): CodeIgniter\Database\Config::connect('default', true)
#2 /code/app/Controllers/Home.php(6): db_connect()
#3 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(847): App\Controllers\Home->index()
#4 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-11-08 13:18:25 --> Class '\CodeIgniter\Database\msqli\Connection' not found
#0 /code/vendor/codeigniter4/framework/system/Database/Config.php(115): CodeIgniter\Database\Database->load(Array, 'default')
#1 /code/vendor/codeigniter4/framework/system/Common.php(138): CodeIgniter\Database\Config::connect('default', true)
#2 /code/app/Controllers/Home.php(6): db_connect()
#3 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(847): App\Controllers\Home->index()
#4 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-11-08 13:18:26 --> Class '\CodeIgniter\Database\msqli\Connection' not found
#0 /code/vendor/codeigniter4/framework/system/Database/Config.php(115): CodeIgniter\Database\Database->load(Array, 'default')
#1 /code/vendor/codeigniter4/framework/system/Common.php(138): CodeIgniter\Database\Config::connect('default', true)
#2 /code/app/Controllers/Home.php(6): db_connect()
#3 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(847): App\Controllers\Home->index()
#4 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-11-08 13:18:26 --> Class '\CodeIgniter\Database\msqli\Connection' not found
#0 /code/vendor/codeigniter4/framework/system/Database/Config.php(115): CodeIgniter\Database\Database->load(Array, 'default')
#1 /code/vendor/codeigniter4/framework/system/Common.php(138): CodeIgniter\Database\Config::connect('default', true)
#2 /code/app/Controllers/Home.php(6): db_connect()
#3 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(847): App\Controllers\Home->index()
#4 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-11-08 13:19:32 --> Call to undefined function CodeIgniter\Database\MySQLi\mysqli_init()
#0 /code/vendor/codeigniter4/framework/system/Database/BaseConnection.php(377): CodeIgniter\Database\MySQLi\Connection->connect(false)
#1 /code/vendor/codeigniter4/framework/system/Database/BaseConnection.php(643): CodeIgniter\Database\BaseConnection->initialize()
#2 /code/app/Controllers/Home.php(19): CodeIgniter\Database\BaseConnection->query('SELECT * FROM d...')
#3 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(847): App\Controllers\Home->index()
#4 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-11-08 13:24:52 --> Call to undefined function CodeIgniter\Database\MySQLi\mysqli_init()
#0 /code/vendor/codeigniter4/framework/system/Database/BaseConnection.php(377): CodeIgniter\Database\MySQLi\Connection->connect(false)
#1 /code/vendor/codeigniter4/framework/system/Database/BaseConnection.php(643): CodeIgniter\Database\BaseConnection->initialize()
#2 /code/app/Controllers/Home.php(19): CodeIgniter\Database\BaseConnection->query('SELECT * FROM d...')
#3 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(847): App\Controllers\Home->index()
#4 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#7 {main}
