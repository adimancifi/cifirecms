<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$f_application = 'l-app';
$f_content     = 'l-content';
$f_system      = 'l-system';

$ds = DIRECTORY_SEPARATOR;
define('ENVIRONMENT', 'production');
define('BASEPATH', dirname(dirname(dirname(__DIR__))));
define('APPPATH', BASEPATH . "/$f_application/");
define('LIBPATH', BASEPATH . "/$f_system/libraries/Session/");
define('CONTENTPATH', BASEPATH . "/$f_content/");

require_once LIBPATH . 'Session_driver.php';
require_once LIBPATH . "drivers/Session_files_driver.php";
require_once BASEPATH . "/$f_system/core/Common.php";

$config = get_config();

if (empty($config['sess_save_path'])) 
{
    $config['sess_save_path'] = rtrim(ini_get('session.save_path'), '/\\');
}

$config = array(
    'cookie_lifetime' => $config['sess_expiration'],
    'cookie_name'     => $config['sess_cookie_name'],
    'cookie_path'     => $config['cookie_path'],
    'cookie_domain'   => $config['cookie_domain'],
    'cookie_secure'   => $config['cookie_secure'],
    'expiration'      => $config['sess_expiration'],
    'match_ip'        => $config['sess_match_ip'],
    'save_path'       => $config['sess_save_path'],
    '_sid_regexp'     => '[0-9a-v]{32}',
);

$class = new CI_Session_files_driver($config);

if (is_php('5.4')) 
{
    session_set_save_handler($class, TRUE);
} 
else 
{
    session_set_save_handler(
        array($class, 'open'),
        array($class, 'close'),
        array($class, 'read'),
        array($class, 'write'),
        array($class, 'destroy'),
        array($class, 'gc')
    );
    register_shutdown_function('session_write_close');
}

session_name($config['cookie_name']);