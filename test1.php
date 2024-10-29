<?php
    require "routeros_api.class.php";
    $api = new RouterosAPI();
    $data = new StdClass();

if($api->connect('192.168.0.1','admin','PinoSuar')){
//if($api->connect('192.168.1.144','admin','PinoSuar')){       
    /********************************** extrae usuarios de hotspot users *********************************************/
    $api->write('/ip/hotspot/user/print');
    //$api->write('?=',false);
    $read = $api->read(false);
    $array = $api->parseResponse($read);    
    //print_r($array);
    /**********************************habilitar deshabilitar hotspot *********************************************/
    /**/
    //$api->write('/ip/hotspot/user/print');
    //$api->write('/ip/hotspot/user/enable',false);    
    //$api->write("=.id=".$array[1][".id"],true);    
    //$read = $api->read(false);
    //$array = $api->parseResponse($read);    
    //print_r($response);
    /************************************************************************************/
    
    
    /********************************** buscar mac en host *********************************************/
    //print_r($array[6]);
    //echo "mac:".$array[6]["mac-address"];
    $api->write('/ip/hotspot/host/print',false);
    $api->write('?mac-address=64:D1:54:9F:58:2B');
    $read = $api->read(false);
    $array = $api->parseResponse($read);    
   echo "<br>" ;
    print_r($array);
    echo "<br>" ;
    /****************                        remover del host                        **********************************/
    $api->write('/ip/hotspot/host/remove',false);
    $api->write('=.id=*1');
    $read = $api->read(false);
    $array = $api->parseResponse($read);    
   echo "<br>" ;
    print_r($array);
    
    $api->disconnect();
    
    
    //echo count($array);
    /*      para host
   
    echo "<br>";
    print_r($array[1]["mac-address"]);
    echo ",";
    print_r($array[1]["address"]);
    echo ",";
    print_r($array[1]["to-address"]);
    echo ",";
    print_r($array[1]["server"]);
    echo ",";
    print_r($array[1]["uptime"]);
    echo ",";
    print_r($array[1]["idle-time"]);
    echo ",";
    print_r($array[1]["keepalive-timeout"]);
    echo ",";
    print_r($array[1]["host-dead-time"]);
    echo ",";
    print_r($array[1]["bytes-in"]);
    echo ",";
    print_r($array[1]["bytes-out"]);
    echo ",";
    print_r($array[1]["packets-in"]);
    echo ",";
    print_r($array[1]["packets-out"]);
    echo ",";
    print_r($array[1]["found-by"]);
    echo ",";
    print_r($array[1]["dynamic"]);
    echo ",";
    print_r($array[1]["authorized"]);
    echo ",";
    print_r($array[1]["bypassed"]);
    echo ",";
    print_r($array[1]["comment"]);
    
    */

    $data->estado =1;
}
else{
    $data->estado = 0;
    
}
    echo json_encode($data);
?>