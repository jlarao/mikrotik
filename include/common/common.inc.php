<?php
	//session_start();
	date_default_timezone_set('America/Mexico_City');

	if(!file_exists(BASE_INCLUDE . "conf/constantes.php"))	{
		die("El constantes no existe");
	}
    
	require_once(BASE_INCLUDE . "conf/constantes.php");
	require_once(CLASS_COMUN);
	require_once(CLASS_SESSION);	
	//require_once(LIB_CONEXION);
	

	$pedazos=explode("/", $_SERVER['PHP_SELF']);
	$__FILE_NAME__=str_replace(array("/",".php"),"",$pedazos[count($pedazos)-1]);
	if(is_file(BASE_INCLUDE . "controler/" . $__FILE_NAME__ . ".inc.php"))
	{
		require_once(BASE_INCLUDE . "controler/" . $__FILE_NAME__ . ".inc.php");

	}



	if(!isset($_JAVASCRIPT_CSS))
		$_JAVASCRIPT_CSS="";

	if(isset($xajax))
		$_JAVASCRIPT_CSS.=$xajax->getJavascript("js/lib/");

	$_JAVASCRIPT_CSS.='<script type="text/javascript" src="' . URL_JAVASCRIPT . '../lib/common.js"></script>';
//echo "css: ".$_JAVASCRIPT_CSS;
	if(isset($_JAVASCRIPT_OUT))
		$_JAVASCRIPT_CSS.='<script type="text/javascript">' . $_JAVASCRIPT_OUT . '</script>';

//echo "out ".$_JAVASCRIPT_OUT;		
	if(is_file(FOLDER_JS . $__FILE_NAME__ . ".js"))
		$_JAVASCRIPT_CSS.='<script type="text/javascript" src="' . URL_JAVASCRIPT . $__FILE_NAME__ . '.js"></script>';
	
	
	
