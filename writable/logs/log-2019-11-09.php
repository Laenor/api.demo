<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-11-09 16:57:06 --> Call to a member function model() on null
#0 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(847): App\Controllers\Home->index()
#1 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-11-09 17:39:25 --> Class 'App\Controllers\CodeIgniter\Controller' not found
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
CRITICAL - 2019-11-09 17:39:33 --> Class 'App\Controllers\CodeIgniter\Controller' not found
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
CRITICAL - 2019-11-09 17:45:24 --> Cannot use object of type stdClass as array
#0 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(847): App\Controllers\Home->index()
#1 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-11-09 17:45:54 --> syntax error, unexpected ''titre_demande'' (T_CONSTANT_ENCAPSED_STRING), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$'
#0 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('/code/app/Contr...')
#1 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(801): class_exists('\\App\\Controller...', true)
#5 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#6 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-11-09 17:47:13 --> Class 'App\Controllers\CodeIgniter\Controller' not found
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
CRITICAL - 2019-11-09 17:58:25 --> Cannot use object of type App\Entities\Demande as array
#0 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(847): App\Controllers\Home->index()
#1 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-11-09 18:03:46 --> Undefined constant 'App\Controllers\‘App\Entities\Demande’'
#0 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(847): App\Controllers\Home->index()
#1 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-11-09 18:04:07 --> Use of undefined constant ‘Demande’ - assumed '‘Demande’' (this will throw an Error in a future version of PHP)
#0 /code/app/Controllers/Home.php(12): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Use of undefine...', '/code/app/Contr...', 12, Array)
#1 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(847): App\Controllers\Home->index()
#2 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#3 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-11-09 18:07:12 --> Too few arguments to function CodeIgniter\Model::classToArray(), 0 passed in /code/app/Controllers/Home.php on line 14 and at least 1 expected
#0 /code/app/Controllers/Home.php(14): CodeIgniter\Model::classToArray()
#1 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(847): App\Controllers\Home->index()
#2 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#3 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-11-09 18:07:48 --> syntax error, unexpected '->' (T_OBJECT_OPERATOR)
#0 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('/code/app/Contr...')
#1 /code/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(801): class_exists('\\App\\Controller...', true)
#5 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#6 /code/vendor/codeigniter4/framework/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /code/public/index.php(44): CodeIgniter\CodeIgniter->run()
#8 {main}
