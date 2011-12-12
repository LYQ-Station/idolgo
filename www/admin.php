<?php
define('APP_ADMIN', true);
define('SITE_PATH', dirname($_SERVER['DOCUMENT_ROOT']));
define('ETC_PATH', SITE_PATH.'/etc');
define('APPS_PATH', SITE_PATH.'/appadmin');
define('LIB_PATH', SITE_PATH.'/library');
define('CACHE_PATH',SITE_PATH.'/cache');
define('COVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/cover');

error_reporting(E_ALL & ~E_NOTICE & ~E_USER_NOTICE);
header('content-type: text/html;charset=utf-8');
date_default_timezone_set('PRC');

//set lib include path
set_include_path(
    join(PATH_SEPARATOR, array(
        LIB_PATH,
        get_include_path()
    ))
);

//autoloader
require_once 'Zend/Loader/Autoloader.php';
Zend_Loader_Autoloader::getInstance()->setFallbackAutoloader(true);

//global config
$config = new Zend_Config_Ini(ETC_PATH.'/global.conf', 'admin');
Zend_Registry::set('config', $config);

//layout
Zend_Layout::startMvc(array(
    'layoutPath'    => SITE_PATH . '/layout',
    'layout'        => 'admin-layout',
    'viewSuffix'    => 'php'
));

//view & helper
$view = new Zend_View(array('encoding' => 'utf-8', 'helperPath' => LIB_PATH.'/view_helper'));
Zend_Controller_Action_HelperBroker::addPath(LIB_PATH.'/action_helpers');
Zend_Controller_Action_HelperBroker::addHelper(
	new Zend_Controller_Action_Helper_ViewRenderer(
		$view,
		array('viewSuffix' => 'php', 'neverController' => true)
	)
);

//controller front
$fc = Zend_Controller_Front::getInstance();
$fc->throwExceptions(true);

//load modules conf
$modules_conf = new Zend_Config_Ini(ETC_PATH.'/apps-admin.conf', 'applications');
$modules = array();
foreach ($modules_conf->toArray() as $m)
{
	$modules[$m['name']] = APPS_PATH.$m['dir'].'/controllers';
}
$fc->setControllerDirectory($modules);
Zend_Registry::set('modules', $modules_conf);

$fc->registerPlugin(new AuthPlugin());
$fc->dispatch();
