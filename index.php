<?php
define("APP_PATH",dirname(__FILE__));
define("SP_PATH",dirname(__FILE__).'/SpeedPHP');
$spConfig = array(
'dispatcher_error' => "import(APP_PATH.'/404.html');exit();",
"db"=>array(
	'host'=>'127.0.0.1',
	'login'=>'root',
	'password'=>'',
	'database'=>'spblog',),
"view"=>array(
	'enabled'=>TRUE,
	'config'=>array(
	'template_dir'=>APP_PATH.'/tpl',
	'compile_dir'=>APP_PATH.'/tmp',
	'cache_dir'=>APP_PATH.'/tmp',
	'left_delimiter'=>'<{',
	'right_delimiter'=>'}>',),),
	
'launch' => array( 
		 'router_prefilter' => array( 
			array('spAcl','mincheck') // 开启有限的权限控制
		 )
	 ),
);

require(SP_PATH."/SpeedPHP.php");

spRun();
?>