<?php 
function isa_convert_bytes_to_specified($bytes, $to, $decimal_places = 1) {
    $formulas = array(
        'K' => number_format($bytes / 1024, $decimal_places),
        'M' => number_format($bytes / 1048576, $decimal_places),
        'G' => number_format($bytes / 1073741824, $decimal_places)
    );
    return isset($formulas[$to]) ? $formulas[$to] : 0;
}



$listado="";
    require "routeros_api.class.php";
    $api = new RouterosAPI();
    $data = new StdClass();
    
//if($api->connect('192.168.0.1','admin','PinoSuar')){
if($api->connect($host_mkt,'admin','PinoSuar')){       
    /********************************** extrae usuarios de hotspot users *********************************************/
    $api->write('/ppp/secret/print');   
    $read = $api->read(false);
    $array = $api->parseResponse($read);        
    //print_r($array[1]);
    
    $api->disconnect();
    // die(var_dump($array));
    //echo count($array);
    for($i=0; $i<count($array); $i++){
        if($array[$i]['service'] !='pppoe')
            continue;
        // die(print_r($array[$i]));
    // Array ( [.id] => *A [name] => userone [service] => pppoe [caller-id] => [password] => 99040818 
    // [profile] => 25M [routes] => [ipv6-routes] => [limit-bytes-in] => 0 [limit-bytes-out] => 0 
    // [last-logged-out] => may/27/2025 13:38:40 [last-caller-id] => 5C:E9:31:31:93:CD 
    // [last-disconnect-reason] => peer-request [disabled] => false [comment] => Pruebas ) 1
        $listado .= "<tr>";
            $listado .= "<td>".$array[$i]["name"]. "</td>";
            $listado .= "<td>".$array[$i]["service"]. "</td>";
        // $listado .= "<td>".$array[$i]["caller-id"]. "</td>";
        
        // if(isset($array[$i]["bytes-out"])){                        
        //     if($array[$i]["bytes-out"] > 1073741820){
        //         $m = isa_convert_bytes_to_specified($array[$i]["bytes-out"], 'G');
        //         $listado .= "<td>".$m. " GB</td>";
        //     }
        //     else{   
        //         $m = isa_convert_bytes_to_specified($array[$i]["bytes-out"], 'M');
        //         $listado .= "<td>".$m. " MB</td>";
        //     }
        // }else{
        //     $listado .= "<td></td>";
        // }
        // if(isset($array[$i]["bytes-in"])){                        
        //     if($array[$i]["bytes-in"] > 1073741820){
        //         $m = isa_convert_bytes_to_specified($array[$i]["bytes-in"], 'G');
        //         $listado .= "<td>".$m. " GB</td>";
        //     }
        //     else{   
        //         $m = isa_convert_bytes_to_specified($array[$i]["bytes-in"], 'M');
        //         $listado .= "<td>".$m. " MB</td>";
        //     }
            
        // }else{
        //     $listado .= "<td></td>";
        // }
        if(isset($array[$i]["comment"]))
            $listado .= "<td>".$array[$i]["comment"]. "</td>";
        else
            $listado .= "<td></td>";
        if($array[$i]["disabled"]=="true"){
            $listado .= "<td><span class='badge badge-warning'>desactivado</span><a href='activarPPP.php?id=".$array[$i][".id"] ."' class='btn btn-danger'><i class='fa fa-eye'>".$array[$i][".id"] ."</i></a></td>";
        }
        else{
            $listado .= "<td></td>";
        }
        $listado .= "<tr>";
        /*
        
        ( [.id] => *0 
        [name] => default-trial 
        [uptime] => 0s 
        [bytes-in] => 0 
        [bytes-out] => 0 
        [packets-in] => 0 
        [packets-out] => 0 
        [default] => true 
        [dynamic] => false 
        [disabled] => false 
        [comment] => counters and limits for trial users )
        
        [.id] => *1 
[name] => admin 
[password] => PinoSuar 
[profile] => default 
[uptime] => 3h59m3s 
[bytes-in] => 27976940 
[bytes-out] => 711957133 
[packets-in] => 169092 
[packets-out] => 560845 
[dynamic] => false 
[disabled] => false 
            */
    }//for
    $data->estado =1;
}
else{
    $data->estado = 0;
    
}
    
?>