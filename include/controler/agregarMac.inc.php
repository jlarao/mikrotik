<?php 
//$_JAVASCRIPT_OUT .="hola out";
    

if($_POST){
    //var_dump($_POST);
    //break;
    require "routeros_api.class.php";
    $api = new RouterosAPI();
    $data = new StdClass();
    
    if($api->connect($host_mkt,'admin','PinoSuar')){       
        
        $ARRAY = $api->comm("/ip/hotspot/user/add", array(
      "name"=> strtoupper($_POST['mac']),
      "mac-address" => strtoupper($_POST['mac']),
            "disabled" => "false",
            "profile" => "default",
            "comment" => $_POST['name']
   ));
	//data = "{"!trap":[{"message":"failure: already have user with this name for this server"}]}"
        //data = ""*1DB""
       if(is_array($ARRAY)){
           //var_dump($ARRAY['!trap'][0]['message']);
           die(json_encode(array(false,$ARRAY['!trap'][0]['message'])));
       }else{
           //echo $ARRAY;
           die(json_encode(array(true,$ARRAY)));
       }
   
        
        /*Array ( 
[.id] => *1 
[name] => 4C:5E:0C:A7:3B:25 
[mac-address] => 4C:5E:0C:A7:3B:25 
[profile] => default 
[uptime] => 0s 
[bytes-in] => 0 
[bytes-out] => 0 
[packets-in] => 0 
[packets-out] => 0 
[dynamic] => false 
[disabled] => false 
[comment] => Mikrotik_Hotspot )*/
    }
    else{
        $mensaje .= '<div class="alert alert-danger" role="alert">conexion fallida</div>'; 
    }
    

}else{
    $mensaje='<div class="alert alert-primary" role="alert">Favor de llenar todos los campos</div>';
}
?>


