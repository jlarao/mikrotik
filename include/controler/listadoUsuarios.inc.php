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
    //$host_mkt = $GLOBALS['host_mkt'];
    var_dump($host_mkt);
if($api->connect($host_mkt,'admin','PinoSuar')){
//if($api->connect('192.168.1.144','admin','PinoSuar')){       
    /********************************** extrae usuarios de hotspot users *********************************************/
    $api->write('/ip/hotspot/user/print');   
    $read = $api->read(false);
    $array = $api->parseResponse($read);        
   // print_r($array[0]);
    
    $api->disconnect();
    //print_r($array[1]);/
    for($i=0; $i<count($array); $i++){
       
        $listado .= "<tr>";
            $listado .= "<td>".$array[$i]["name"]. "</td>";
            $listado .= "<td>".$array[$i]["uptime"]. "</td>";
        
        if(isset($array[$i]["bytes-out"])){                        
            if($array[$i]["bytes-out"] > 1073741820){
                $m = isa_convert_bytes_to_specified($array[$i]["bytes-out"], 'G');
                $listado .= "<td>".$m. " GB</td>";
            }
            else{   
                $m = isa_convert_bytes_to_specified($array[$i]["bytes-out"], 'M');
                $listado .= "<td>".$m. " MB</td>";
            }
        }else{
            $listado .= "<td>".$array[$i]["bytes-out"]. "</td>";
        }
        if(isset($array[$i]["bytes-in"])){                        
            if($array[$i]["bytes-in"] > 1073741820){
                $m = isa_convert_bytes_to_specified($array[$i]["bytes-in"], 'G');
                $listado .= "<td>".$m. " GB</td>";
            }
            else{   
                $m = isa_convert_bytes_to_specified($array[$i]["bytes-in"], 'M');
                $listado .= "<td>".$m. " MB</td>";
            }
            
        }else{
            $listado .= "<td>".$array[$i]["bytes-in"]. "</td>";
        }
        if(isset($array[$i]["comment"]))
            $listado .= "<td>".$array[$i]["comment"]. "</td>";
        else
            $listado .= "<td></td>";
        // New</span>
        if($array[$i]["disabled"]=="false")
            $listado .= "<td><span class='badge badge-success'>activo</span></td>";
        else
            $listado .= "<td><span class='badge badge-danger''>desactivado</span> <a href='activarHost.php?id=".$array[$i][".id"] ."' class='btn btn-success'><i class='fa fa-eye'>".$array[$i][".id"] ."</i></a></td>";
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