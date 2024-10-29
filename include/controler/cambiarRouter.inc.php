<?php 

if( isset($_POST['router'] )){
    session_start();
    $host_mkt = $_POST['router'];
    //$_SESSION['host_mkt'] = $host_mkt;
    //echo 'cambiar host  '. $host_mkt;
    //echo $host_mkt;
    //$GLOBALS['host_mkt'] = $host_mkt;
    var_dump($_SESSION);

    if(isset($_SESSION['host_mkt'])){
		//var_dump($_SESSION);
        $_SESSION['host_mkt'] = $host_mkt;
//		$host_mkt = $_SESSION['host_mkt'];
		echo 'host cr '. $host_mkt;
	}else{
		 
         $_SESSION['host_mkt'] = $host_mkt;
        echo 'host ss cr '. $host_mkt;
		// echo 'session start ';
        // var_dump($_SESSION);
	}
}