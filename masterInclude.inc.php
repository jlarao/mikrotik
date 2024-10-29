<?php

	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT);
	ini_set("display_errors", "1");
	//DEFINE("BASE_INCLUDE","/var/www/include/");
	DEFINE("BASE_INCLUDE",$_SERVER['DOCUMENT_ROOT'] . "/mikrotik/include/");
//	echo BASE_INCLUDE;
	//$__incluirPerfil=true;
	#$GLOBALS['host_mkt'];
	session_start();
	if(isset($_SESSION['host_mkt'])){
		//var_dump($_SESSION);
		$host_mkt = $_SESSION['host_mkt'];
		echo 'host mi '. $host_mkt;
	}else{
		//redirect 
		header("location: cambiarRouter.php");	
	}
	
	require_once(BASE_INCLUDE . "common/common.inc.php");
//require_once(BASE_INCLUDE . "controler/listadoHosts.inc.php");

